<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace AppBundle\Controller;

use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless;
use Pimcore\Logger;
use Pimcore\Tool;
use Symfony\Component\HttpFoundation\Request;

class PaymentSeamlessController extends AbstractCartAware
{
    /**
     * commits payment with payment type PREPAYMENT
     */
    public function prepaymentAction()
    {
        $checkoutManager = Factory::getInstance()->getCheckoutManager($this->getCart());

        $paymentInfo = $checkoutManager->startOrderPayment();

        $checkoutManager->handlePaymentResponseAndCommitOrderPayment(['orderIdent' => $paymentInfo->getInternalPaymentId(), 'paymentType' => 'PREPAYMENT']);

        return $this->redirect($this->generateUrl('action', [
            'prefix' => $this->view->language,
            'action' => 'completed',
            'controller' => 'checkout',
            'id' => $paymentInfo->getObject()->getId()]));
    }

    /**
     * Server side endpoint for confirming payment
     */
    public function confirmPaymentServerSideAction(Request $request)
    {
        Logger::debug('##url (wirecard payment confirmed): '.$_SERVER['REQUEST_URI'] . '&'. http_build_query($_POST));

        $params = array_merge($request->query->all(), $request->request->all());

        $commitOrderProcessor = Factory::getInstance()->getCommitOrderProcessor();
        $paymentProvider = Factory::getInstance()->getPaymentManager()->getProvider('seamless');

        if ($committedOrder = $commitOrderProcessor->committedOrderWithSamePaymentExists($params, $paymentProvider)) {
            Logger::info('Order with same payment is already committed, doing nothing. OrderId is ' . $committedOrder->getId());
        } else {
            $order = $commitOrderProcessor->handlePaymentResponseAndCommitOrderPayment($params, $paymentProvider);
            Logger::info('Finished server side call. OrderId is ' . $order->getId());
        }

        return new Request("ok\n");
    }

    /**
     * builds config array of redirect urls for wirecard seamless
     *
     * @throws \Exception
     */
    public function getWirecardRedirectUrlAction(Request $request)
    {
        $cart = $this->getCart();
        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        $language = substr($request->getLocale(), 0, 2);

        if ($checkoutManager->isCommitted()) {
            throw new \Exception('Cart already committed');
        }

        $payment = $checkoutManager->getPayment();
        $paymentInformation = $checkoutManager->startOrderPayment();
        $orderNumber = '';

        if ($order = $paymentInformation->getObject()) {
            /* @var $order \Pimcore\Model\DataObject\OnlineShopOrder */
            $orderNumber = $order->getOrdernumber();
        }

        if ($paymentType = $request->get('paymentType')) {
            $config = [
                'successURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['action' => 'complete', 'id' => base64_encode($paymentInformation->getObject()->getId()),
                    'state' => WirecardSeamless::PAYMENT_RETURN_STATE_SUCCESS, 'prefix' => $language]),
                'failureURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['action' => 'complete', 'id' => base64_encode($paymentInformation->getObject()->getId()),
                        'state' => WirecardSeamless::PAYMENT_RETURN_STATE_FAILURE, 'prefix' => $language]),
                'cancelURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['action' => 'complete', 'id' => base64_encode($paymentInformation->getObject()->getId()),
                        'state' => WirecardSeamless::PAYMENT_RETURN_STATE_CANCEL, 'prefix' => $language]),
                'serviceURL' => Tool::getHostUrl(),
                'pendingURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['action' => 'complete', 'id' => base64_encode($paymentInformation->getObject()->getId()),
                        'state' => WirecardSeamless::PAYMENT_RETURN_STATE_PENDING, 'prefix' => $language]),
                'confirmURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['action' => 'confirm-payment-server-side', 'elementsclientauth' => 'disabled']),
                'paymentInfo' => $paymentInformation,
                'paymentType' => $request->get('paymentType'),
                'cart' => $this->getCart(),
                'birthday' => $request->get('birth'),
                'orderDescription' => $orderNumber,
                'orderReference' => $orderNumber];

            return $this->json(['url' => $payment->getInitPaymentRedirectUrl($config)]);
        } else {
            return $this->json(['error' => 'invalid payment type']);
        }
    }

    /**
     * payment complete handling - handles following things
     *  - payment successfully > redirects to checkout complete page
     *  - payment error > prints out all the error messages and adds button for retrying the payment
     *  - waiting for server side payment confirmation request - reloads after 2 sec
     */
    public function completeAction(Request $request)
    {
        $order = \Pimcore\Model\DataObject\OnlineShopOrder::getById(base64_decode($request->get('id')));
        $this->view->order = $order;
    }

    /**
     * checking action for payment via invoice
     */
    public function validateInvoicePaymentAction(Request $request)
    {
        $translator = $this->get('translator');

        $date = new \DateTime($request->get('birthDay'));

        //TODO calculate age correctly
        $age = rand(5, 60);

        if ($age >= 18) {
            $data = [
                'ok' => true
            ];
        } else {
            $data = [
                'errors' => [
                    $translator->trans('payment.wirecard-seamless.invoice.age-error')
                ]
            ];
        }

        return $this->json($data);
    }
}
