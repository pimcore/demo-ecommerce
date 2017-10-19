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
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\Datatrans;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\PayPal;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\QPay;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\WirecardSeamless;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class PaymentController extends AbstractCartAware
{
    /**
     * @inheritDoc
     */
    public function onKernelController(FilterControllerEvent $event)
    {
        parent::onKernelController($event);

        //navigation and breadcrumbs
        $this->view->hideNav = true;

        $translator = $this->get('translator');
        $placeholder = $this->get('pimcore.templating.view_helper.placeholder');

        /** @var callable $placeholder */
        $placeholder('addBreadcrumb')->append([
            'parentId' => $this->document->getId(),
            'id' => 'cart',
            'label' => $translator->trans('general.mycart'),
            'url' => $this->generateUrl('cart', ['action' => 'list'])
        ]);

        $placeholder('addBreadcrumb')->append([
            'parentId' => 'cart',
            'id' => 'checkout',
            'label' => $translator->trans('general.checkout')
        ]);

        $cart = $this->getCart();
        $this->view->cart = $cart;
    }

    /**
     * payment page with iframe
     */
    public function paymentAction()
    {
        $this->view->currentStep = 'payment';

        $checkoutManager = Factory::getInstance()->getCheckoutManager($this->getCart());
        $paymentStep = $checkoutManager->getCheckoutStep('confirm');

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($paymentStep, $this->getCart(), 3, 'payment');

        //needed for sidebar
        $checkoutManager = Factory::getInstance()->getCheckoutManager($this->getCart());
        $deliveryAddress = $checkoutManager->getCheckoutStep('deliveryaddress');
        $this->view->deliveryAddress = $deliveryAddress->getData();
    }

    /**
     * payment iframe
     */
    public function paymentFrameAction(Request $request)
    {
        // init
        $cart = $this->getCart();
        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        if ($checkoutManager->isCommitted()) {
            throw new \Exception('Cart already committed');
        }

        $paymentInformation = $checkoutManager->startOrderPayment();
        $payment = $checkoutManager->getPayment();

        $language = substr($request->getLocale(), 0, 2);

        // payment config
        if ($payment instanceof WirecardSeamless) {
            // wirecard seamless
            $config = [
                'view' => $this->view,
                'orderIdent' => $paymentInformation->getInternalPaymentId()
            ];
        } elseif ($payment instanceof QPay) {
            // wirecard
            $url = $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'payment', 'action' => 'payment-status', 'prefix' => $language]) . '?mode=';

            $config = [
                'language' => $language,
                'successURL' => $url . 'success',
                'cancelURL' => $url . 'cancel',
                'failureURL' => $url . 'failure',
                'serviceURL' => $url . 'service',
                'confirmURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'handle-payment', 'action' => 'server-side-q-pay', 'prefix' => $language, 'elementsclientauth' => 'disabled']),
                'confirmMail' => 'christian.fasching@pimcore.com',
                'orderDescription' => 'My Order at pimcore.org',
                'imageURL' => 'https://www.pimcore.org/static/css/skins/default/logo.png',
                'orderIdent' => $paymentInformation->getInternalPaymentId()
            ];
        } elseif ($payment instanceof PayPal) {
            // paypal
            $returnUrl = $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'payment', 'action' => 'payment-status', 'mode' => 'success', 'prefix' => $language]);
            $cancelUrl = $request->getSchemeAndHttpHost() . $this->generateUrl('checkout', ['action' => 'payment', 'error' => 'cancel', 'language' => $language]) . '?mode=';

            $config = [
                'ReturnURL' => $returnUrl,
                'CancelURL' => $cancelUrl . 'payment?error=cancel',
                'OrderDescription' => 'My Order at pimcore.org',
                'cpp-header-image' => '111b25',
                'cpp-header-border-color' => '111b25',
                'cpp-payflow-color' => 'f5f5f5',
                'cpp-cart-border-color' => 'f5f5f5',
                'cpp-logo-image' => $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/static/images/logo_paypal.png',
                'InvoiceID' => $paymentInformation->getInternalPaymentId()
            ];
        } elseif ($payment instanceof Datatrans) {
            // datatrans
            $url = $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'payment', 'action' => 'payment-status', 'prefix' => $language]) . '?mode=';
            $config = [
                // checkout config
                'language' => $language,
                'refno' => $paymentInformation->getInternalPaymentId(),
                'useAlias' => true,
                'reqtype' => 'CAA', // payment direkt ausführen

                // system
                'successUrl' => $url . 'success',
                'errorUrl' => $url . 'error',
                'cancelUrl' => $url . 'cancel'
            ];
        } else {
            throw new \Exception('Unknown Payment configured.');
        }

        // init payment
        $this->view->payment = $payment->initPayment($cart->getPriceCalculator()->getGrandTotal(), $config);
    }

    /**
     * got response from payment provider
     */
    public function paymentStatusAction(Request $request)
    {
        // init
        $cart = $this->getCart();
        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        $language = substr($request->getLocale(), 0, 2);

        if ($request->get('mode') == 'cancel') {
            try {
                $checkoutManager->cancelStartedOrderPayment();
            } catch (\Exception $e) {
                //it seems that payment already canceled due to server side call.
            }

            $this->view->goto = $this->generateUrl('checkout', ['action' => 'confirm', 'language' => $language, 'error' => strip_tags($request->get('mode'))]);

            return;
        }
        if ($request->get('mode') == 'pending') {
            $this->view->goto = $this->generateUrl('checkout', ['action' => 'pending', 'language' => $language]);

            return;
        }

        $params = array_merge($request->query->all(), $request->request->all());

        // add additional data for paypal
        $payment = $checkoutManager->getPayment();
        if ($payment instanceof PayPal) {
            $price = $cart->getPriceCalculator()->getGrandTotal();
            $params['amount'] = $price->getAmount()->asString();
            $params['currency'] = $price->getCurrency()->getShortName();
        }

        try {
            $order = $checkoutManager->handlePaymentResponseAndCommitOrderPayment($params);

            // optional to clear payment
            // if this call is necessary depends on payment provider and configuration.
            // its possible to execute this later (e.g. when shipment is done)
//            $payment = $checkoutManager->getPayment();
//            $paymentStatus = $payment->executeDebit();
//            $orderAgent = Factory::getInstance()->getOrderManager()->createOrderAgent($order);
//            $orderAgent->updatePayment($paymentStatus);

            if ($order && $order->getOrderState() == $order::ORDER_STATE_COMMITTED) {

                $session = $this->get("session");
                $session->set("last_order_id", $order->getId());

                $this->view->goto = $this->generateUrl('checkout', ['action' => 'completed', 'language' => $language]);
            } else {
                $this->view->goto = $this->generateUrl('checkout', ['action' => 'confirm', 'language' => $language, 'error' => strip_tags($request->get('mode'))]);
            }
        } catch (\Exception $e) {
            $this->view->goto = $this->generateUrl('checkout', ['action' => 'confirm', 'language' => $language, 'error' => $e->getMessage()]);

            return;
        }
    }
}
