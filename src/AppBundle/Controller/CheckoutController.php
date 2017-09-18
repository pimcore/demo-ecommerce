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
        $this->view->deliveryAddress = $deliveryAddress;

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($deliveryAddress, $this->getCart(), 1);

        // check errors
        $this->view->errors = $request->get('error') ? explode(',', $request->get('error')) : [];

        // update delivery address
        if ($request->getMethod() == 'POST') {
            $address = new \stdClass();

            if (strlen($request->get('email')) <= 3) {
                $this->view->errors[] = 'email';
            } else {
                $address->email = strip_tags($request->get('email'));
            }

            if (strlen($request->get('firstname')) <= 2) {
                $this->view->errors[] = 'firstname';
            } else {
                $address->firstname = strip_tags($request->get('firstname'));
            }

            if (strlen($request->get('lastname')) <= 2) {
                $this->view->errors[] = 'lastname';
            } else {
                $address->lastname = strip_tags($request->get('lastname'));
            }

            if (strlen($request->get('address')) <= 2) {
                $this->view->errors[] = 'address';
            } else {
                $address->address = strip_tags($request->get('address'));
            }

            if (strlen($request->get('zip')) <= 2) {
                $this->view->errors[] = 'zip';
            } else {
                $address->zip = strip_tags($request->get('zip'));
            }

            if (strlen($request->get('city')) <= 2) {
                $this->view->errors[] = 'city';
            } else {
                $address->city = strip_tags($request->get('city'));
            }

            if (strlen($request->get('deliverycountry')) != 2) {
                $this->view->errors[] = 'country';
            } else {
                $address->country = strip_tags($request->get('deliverycountry'));
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
     * confirm terms
     */
    public function confirmAction(Request $request)
    {
        // init
        $cart = $this->getCart();
        $this->view->currentStep = 'confirm';
        $this->view->showSummary = true;

        //if cart empty, redirect to cart list
        if (count($cart->getItems()) == 0) {
            return $this->redirect($this->generateUrl('cart', ['action' => 'list']));
        }

        $checkoutManager = Factory::getInstance()->getCheckoutManager($cart);

        //needed for sidebar
        $deliveryAddress = $checkoutManager->getCheckoutStep('deliveryaddress');
        $this->view->deliveryAddress = $deliveryAddress;

        $payment = $checkoutManager->getPayment();

        // check errors
        $this->view->errors = [];
        if ($request->get('error') != '') {
            $this->view->errors = explode(',', $request->get('error'));
        }

        $confirmStep = $checkoutManager->getCheckoutStep('confirm');

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCheckoutStep($confirmStep, $this->getCart(), 2);

        // go to payment
        if ($request->getMethod() == 'POST') {
            if ($request->get('agb-accepted')) {
                $checkoutManager->commitStep($confirmStep, true);

                if ($payment) {
                    return $this->redirect($this->generateUrl('action', ['controller' => 'payment', 'action' => 'payment', 'prefix' => substr($request->getLocale(), 0, 2)]));
                } else {
                    $order = $checkoutManager->commitOrder();
                }
            } else {
                $this->view->errors[] = 'terms';
            }
        }
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
