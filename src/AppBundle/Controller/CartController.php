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

use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICartItem;
use Pimcore\Bundle\EcommerceFrameworkBundle\Exception\VoucherServiceException;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Model\DataObject\Product;
use Symfony\Component\HttpFoundation\Request;

class CartController extends AbstractCartAware
{
    /**
     * show cart items
     */
    public function listAction(Request $request)
    {
        // init view
        $this->view->hideNav = true;

        $cart = $this->getCart();

        // sort by item count asc
        $cart->sortItems(function (ICartItem $a, ICartItem $b) {
            return $a->getCount() > $b->getCount();
        });

        $this->view->cart = $cart;

        if ($request->get('voucherError')) {
            $this->view->voucherError = $request->get('voucherError');
        }

        $translator = $this->get('translator');

        $placeholder = $this->get('pimcore.templating.view_helper.placeholder');
        $placeholder('addBreadcrumb')->append([
            'parentId' => $this->document->getId(),
            'id' => 'cart',
            'label' => $translator->trans('general.mycart')
        ]);

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackCartUpdate($cart);
        $trackingManager->trackCheckout($cart);
    }

    /**
     * add item to cart
     */
    public function addAction(Request $request)
    {
        // add item to cart
        if (($id = $request->get('item'))) {
            $product = Product::getById($id);

            /* @var \AppBundle\Model\DefaultProduct $product */
            $qty = (int) $request->get('qty', 1);
            if ($product) {
                $cart = $this->getCart();
                $cart->addItem($product, $qty);
                $cart->save();

                $trackingManager = Factory::getInstance()->getTrackingManager();
                $trackingManager->trackCartProductActionAdd($cart, $product, $qty);
            }

            $url = $this->generateUrl('cart', ['action' => 'list']);

            return $this->redirect($url);
        } else {
            throw new \Exception('no item given to add to cart');
        }
    }

    /**
     * remove item from cart
     */
    public function removeAction(Request $request)
    {
        // remove item from cart
        if (($id = $request->get('item'))) {
            $cart = $this->getCart();

            if ($item = $cart->getItem($id)) {
                $trackingManager = Factory::getInstance()->getTrackingManager();
                $trackingManager->trackCartProductActionRemove($cart, $item->getProduct(), $item->getCount());
            }

            $cart->removeItem($id);
            $cart->save();

            return $this->redirect($this->generateUrl('cart', ['action' => 'list']));
        } else {
            throw new \Exception('no item given to remove from cart');
        }
    }

    /**
     * update cart item
     */
    public function updateAction(Request $request)
    {
        if ($request->get('qty')) {
            $cart = $this->getCart();
            foreach ($request->get('qty') as $key => $qty) {
                $product = Product::getById($key);
                if ($product) {
                    if (intval($qty) <= 0) {
                        $trackingManager = Factory::getInstance()->getTrackingManager();
                        $trackingManager->trackCartProductActionRemove($cart, $product, $this->getCart()->getItem($key)->getCount());
                        $cart->removeItem($key);
                    } else {
                        $cart->updateItem($key, $product, intval($qty), true);
                    }
                    $cart->save();
                }
            }
        }

        return $this->redirect($this->generateUrl('cart', ['action' => 'list']));
    }

    /**
     * Adds a voucher token to cart, sets error messages and
     * redirects to list action.
     */
    public function addVoucherAction(Request $request)
    {
        $cart = $this->getCart();
        $voucherError = '';
        $translator = $this->get('translator');
        if ($token = strip_tags($request->get('voucherToken'))) {
            try {
                $success = $cart->addVoucherToken($token);
                if (!$success) {
                    $voucherError = $translator->trans('cart.msg-error-token-couldnt-be-applied');
                }
            } catch (VoucherServiceException $e) {
                $voucherError = $translator->trans('cart.msg-error.' . $e->getCode());
            }
        } else {
            $voucherError = $translator->trans('cart.msg-error-token-missing');
        }

        $params = ['action' => 'list'];
        if ($voucherError) {
            $params['voucherError'] = $voucherError;
            $params['voucherToken'] = $token;
        }

        return $this->redirect($this->generateUrl('cart', $params));
    }

    /**
     * Remove a voucher token from cart, sets error messages and
     * redirects to list action.
     */
    public function releaseVoucherAction(Request $request)
    {
        $cart = $this->getCart();
        $voucherError = '';

        $translator = $this->get('translator');
        if ($code = $request->get('voucherToken')) {
            try {
                $cart->removeVoucherToken($code);
            } catch (VoucherServiceException $e) {
                $voucherError = $translator->trans('cart.msg-error.' . $e->getCode());
            }
        } else {
            $voucherError = $translator->trans('cart.msg-error-token-missing');
        }

        return $this->redirect($this->generateUrl('cart', ['action' => 'list', 'voucherError' => $voucherError]));
    }

    public function startQuickCheckoutWithProductAction(Request $request)
    {
        $cart = $this->getCart('quickCheckout');

        // add item to cart
        if (($id = $request->get('item'))) {
            $product = Product::getById($id);

            /* @var \AppBundle\Model\DefaultProduct $product */
            $qty = (int) $request->get('qty', 1);
            if ($product) {
                $cart->addItem($product, $qty);
                $cart->save();
            }

            $trackingManager = Factory::getInstance()->getTrackingManager();
            $trackingManager->trackCartProductActionAdd($cart, $product, $qty);

            return $this->redirect($this->generateUrl('action', [
                'controller' => 'quickCheckout', 'action' => 'confirm', 'prefix' => substr($request->getLocale(), 0, 2), 'cartName' => 'quickCheckout'
            ]));
        } else {
            throw new \Exception('item not valid');
        }
    }
}
