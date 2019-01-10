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

use AppBundle\Form\DeliveryAddressFormType;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\OrderManager;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\Datatrans;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\QPay;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class CheckoutController extends AbstractCartAware
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
        /** @var callable $placeholder */
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

        $cart = $this->getCart();
        $this->view->cart = $cart;

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        //check, if currently active payment is available
        if ($checkoutManager->hasActivePayment()) {
            $url = $this->generateUrl('action', [
                'controller' => 'payment',
                'action' => 'payment',
                'prefix' => substr($event->getRequest()->getLocale(), 0, 2)
            ]);

            $event->setController(function () use ($url) {
                return new RedirectResponse($url);
            });
        }
    }

    /**
     * select or add a delivery address
     */
    public function deliveryAction(Request $request)
    {
        // init
        $cart = $this->getCart();
        $this->view->currentStep = 'delivery';

        //if cart empty, redirect to cart list
        if (count($cart->getItems()) == 0) {
            return $this->redirect($this->generateUrl('cart', ['action' => 'list']));
        }

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        $deliveryAddress = $checkoutManager->getCheckoutStep('deliveryaddress');

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($deliveryAddress, $this->getCart(), 1);

        $this->view->deliveryAddress = $deliveryAddress->getData();
        $deliveryAddressDataArray = $this->fillDeliveryAddressFromCustomer($deliveryAddress->getData());

        $form = $this->createForm(DeliveryAddressFormType::class, $deliveryAddressDataArray, []);
        $form->handleRequest($request);

        $this->view->form  = $form->createView();


        // check errors
        $this->view->errors = $form->getErrors();

        // update delivery address
        if ($request->getMethod() == 'POST') {
            $address = new \stdClass();

            $formData = $form->getData();
            foreach($formData as $key => $value) {
                $address->{$key} = $value;
            }

            // save address if we have no errors
            if (count($this->view->errors) === 0) {
                // commit step
                $checkoutManager->commitStep($deliveryAddress, $address);

                // goto next step
                return $this->redirect($this->generateUrl('checkout', ['action' => 'confirm']));
            }
        }
    }

    /**
     * @param $deliveryAddress
     * @return array|null
     */
    private function fillDeliveryAddressFromCustomer($deliveryAddress) {
        $user = $this->getUser();

        $deliveryAddress = (array) $deliveryAddress;

        if($user) {
            if($deliveryAddress === null) {
                $deliveryAddress = [];
            }

            $params = ['email', 'firstname', 'lastname', 'street', 'zip', 'city', 'countryCode'];
            foreach($params as $param) {
                if(empty($deliveryAddress[$param])) {
                    $deliveryAddress[$param] = $user->{'get' . ucfirst($param)}();
                }
            }
        }

        return $deliveryAddress;
    }

    /**
     * confirm terms
     */
    public function confirmAction(Request $request)
    {
        // init
        $cart = $this->getCart();
        $user = $this->getUser();

        $this->view->currentStep = 'confirm';
        $this->view->showSummary = true;

        // check errors
        $this->view->errors = [];
        if ($request->get('error') != '') {
            $this->view->errors = explode(',', $request->get('error'));
        }

        //if cart empty, redirect to cart list
        if (count($cart->getItems()) == 0) {
            if($request->get('error') != '') {
                $this->addFlash('danger', $request->get('error'));
            }
            return $this->redirect($this->generateUrl('cart', ['action' => 'list']));
        }
        $language = substr($request->getLocale(), 0, 2);

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        //needed for sidebar
        $deliveryAddress = $checkoutManager->getCheckoutStep('deliveryaddress');
        $this->view->deliveryAddress = $deliveryAddress->getData();

        $payment = $checkoutManager->getPayment();

        $confirmStep = $checkoutManager->getCheckoutStep('confirm');

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($confirmStep, $this->getCart(), 2);

        // go to payment or submit recurring payment
        if ($request->getMethod() == 'POST') {
            if (!$request->get('agb-accepted')) {
                $this->view->errors[] = 'terms';
            } else {
                $checkoutManager->commitStep($confirmStep, true);

                if($sourceOrderId = $request->get("recurring-payment")){

                    /* Recurring Payment */
                    if ($user && $sourceOrderId) {
                        $sourceOrderList = \Pimcore\Model\DataObject\OnlineShopOrder::getList();
                        $sourceOrderList->addConditionParam("o_id = ?", $sourceOrderId);
                        $sourceOrderList->addConditionParam("customer__id = ?", $user->getId());
                        $sourceOrderList->setLimit(1);
                        $sourceOrder = $sourceOrderList->current();

                        try {
                            $targetOrder = $checkoutManager->startAndCommitRecurringOrderPayment($sourceOrder, $user->getId());
                            $session = $this->get("session");
                            $session->set("last_order_id", $targetOrder->getId());
                            return $this->redirect($this->generateUrl('checkout', ['action' => 'completed', 'language' => $language]));
                        } catch (\Exception $exception) {
                            // TODO: show warning
                        }

                    }
                }

                if ($payment) {
                    return $this->redirect($this->generateUrl('action', ['controller' => 'payment', 'action' => 'payment', 'prefix' => substr($request->getLocale(), 0, 2)]));
                } else {
                    $order = $checkoutManager->commitOrder();
                }
            }
        }

        $factory = \Pimcore\Bundle\EcommerceFrameworkBundle\Factory::getInstance();
        $checkoutManager = $factory->getCheckoutManager($cart);
        $paymentProvider = $checkoutManager->getPayment();

        /* recurring payment data load */
        if ($paymentProvider instanceof QPay) {
            $paymentMethods = ["SEPA-DD", "CCARD"];
        } elseif ($paymentProvider instanceof Datatrans) {
            $paymentMethods = ["VIS", "ECA", "AMX", "DIN", "JCB"];
        }

        if ($paymentProvider->isRecurringPaymentEnabled() && $user) {
            $sourceOrders = [];

            foreach ($paymentMethods as $paymentMethod) {
                /* @var OrderManager $orderManager */
                $orderManager = $factory->getOrderManager();
                if ($sourceOrder = $orderManager->getRecurringPaymentSourceOrder($user->getId(), $paymentProvider, $paymentMethod)) {
                    $sourceOrders[$paymentMethod] = $sourceOrder;
                }
            }
            $this->view->sourceOrders = $sourceOrders;
        }

        $this->view->paymentMethods = $paymentMethods;
        /* recurring payment end */
    }

    public function pendingAction()
    {
    }

    /**
     * order completed
     */
    public function completedAction(Request $request)
    {
        // init
        $session = $this->get("session");
        $orderId = $session->get("last_order_id");

        $order = \Pimcore\Model\DataObject\OnlineShopOrder::getById($orderId);
        $this->view->order = $order;

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutComplete($order);
    }
}
