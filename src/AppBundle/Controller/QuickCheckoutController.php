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
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\QPay;
use Pimcore\Model\DataObject\OnlineShopOrder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class QuickCheckoutController extends AbstractCartAware
{
    /**
     * @var string
     */
    protected $cartName = null;

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

        //setting current checkout tenant to masterpass and saving currently set entry to reset later on
        $environment = Factory::getInstance()->getEnvironment();
        $environment->setCurrentCheckoutTenant('masterpass', false);

        $this->view->cart = $this->getCart('cart', $event->getRequest());
    }

    protected function getCart($cartName = 'cart', Request $request = null)
    {
        if ($request && $request->get('cartName') == 'quickCheckout') {
            $this->view->cartName = 'quickCheckout';
            $this->cartName = 'quickCheckout';

            return parent::getCart('quickCheckout');
        } else {
            return parent::getCart($cartName);
        }
    }

    /**
     * confirm terms
     */
    public function confirmAction(Request $request)
    {
        //check, if currently active payment is available
        $checkoutManager = Factory::getInstance()->getCheckoutManager($this->view->cart);

        $language = substr($request->getLocale(), 0, 2);
        if ($checkoutManager->hasActivePayment()) {
            return $this->redirect($this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'payment', 'prefix' => $language, 'cartName' => $this->cartName]));
        }

        // init
        $cart = $this->getCart('cart', $request);
        $this->view->currentStep = 'confirm';
        $this->view->showSummary = true;

        //if cart empty, redirect to cart list
        if (count($cart->getItems()) == 0) {
            return $this->redirect($this->generateUrl('cart', ['action' => 'list']));
        }

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        $payment = $checkoutManager->getPayment();

        // check errors
        $this->view->errors = [];
        if ($request->get('error') != '') {
            $this->view->errors = explode(',', $request->get('error'));
        }

        $confirmStep = $checkoutManager->getCheckoutStep('confirm');

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($confirmStep, $cart, 2);

        // go to payment
        if ($request->getMethod() == 'POST') {
            if ($request->get('agb-accepted')) {
                $checkoutManager->commitStep($confirmStep, []);

                if ($payment) {
                    return $this->redirect($this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'payment', 'prefix' => $language, 'cartName' => $this->cartName]));
                } else {
                    $order = $checkoutManager->commitOrder();
                }
            } else {
                $this->view->errors[] = 'terms';
            }
        }
    }

    public function paymentAction(Request $request)
    {
        $this->view->currentStep = 'payment';

        $cart = $this->getCart('cart', $request);

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);
        $paymentStep = $checkoutManager->getCheckoutStep('confirm');

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($paymentStep, $cart, 3, 'payment');
    }

    public function paymentFrameAction(Request $request)
    {
        $language = substr($request->getLocale(), 0, 2);

        // init
        $cart = $this->getCart('cart', $request);
        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        if ($checkoutManager->isCommitted()) {
            throw new \Exception('Cart already committed');
        }

        $paymentInformation = $checkoutManager->startOrderPayment();
        $payment = $checkoutManager->getPayment();

        // payment config
        if ($payment instanceof QPay) {
            // qpay masterpass
            $url = $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'payment-status', 'prefix' => $language, 'cartName' => $this->cartName]) . '&mode=';
            $config = [
                'language' => $language,
                'successURL' => $url . 'success',
                'cancelURL' => $url . 'cancel',
                'failureURL' => $url . 'failure',
                'serviceURL' => $url . 'service',
                'confirmURL' => $request->getSchemeAndHttpHost() . $this->generateUrl('action', ['controller' => 'handle-payment', 'action' => 'server-side-q-pay', 'prefix' => $language, 'checkouttenant' => 'masterpass', 'elementsclientauth' => 'disabled']),
                'confirmMail' => 'christian.fasching@pimcore.com',
                'orderDescription' => 'My Order at pimcore.org with MASTERPASS',
                'imageURL' => 'https://www.pimcore.org/static/css/skins/default/logo.png',
                'orderIdent' => $paymentInformation->getInternalPaymentId()
            ];

            $payment->setPaymentType('MASTERPASS');
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
        $language = substr($request->getLocale(), 0, 2);

        $paramsBag = [];

        // init
        $cart = $this->getCart('cart', $request);
        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        if ($request->get('mode') == 'cancel') {
            try {
                $checkoutManager->cancelStartedOrderPayment();
            } catch (\Exception $e) {
                //it seems that payment already canceled due to server side call.
            }
            $paramsBag['goto'] = $this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'confirm', 'prefix' => $language, 'cartName' => $this->cartName, 'error' => strip_tags($request->get('mode'))]);
        } else {
            $params = array_merge($request->query->all(), $request->request->all());

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

                    $paramsBag['goto'] = $this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'completed', 'prefix' => $language]);
                } else {
                    $paramsBag['goto'] = $this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'confirm', 'prefix' => $language, 'error' => strip_tags($request->get('mode')), 'cartName' => $this->cartName]);
                }
            } catch (\Exception $e) {
                $paramsBag['goto'] = $this->generateUrl('action', ['controller' => 'quickCheckout', 'action' => 'confirm', 'prefix' => $language, 'error' => $e->getMessage(), 'cartName' => $this->cartName]);
            }
        }

        return $this->render(':Payment:paymentStatus.html.php', $paramsBag);
    }

    /**
     * order completed
     */
    public function completedAction(Request $request)
    {
        // init
        $session = $this->get("session");
        $orderId = $session->get("last_order_id");
        $order = OnlineShopOrder::getById($orderId);
        $this->view->order = $order;

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutComplete($order);
    }
}
