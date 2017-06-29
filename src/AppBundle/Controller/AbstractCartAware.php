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

use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICart;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Symfony\Component\HttpFoundation\Request;

abstract class AbstractCartAware extends AbstractController
{
    /**
     * @param string $cartName
     *
     * @return ICart
     */
    protected function getCart($cartName = 'cart', Request $request = null)
    {
        //use guest cart since there are no users in this demo
        $environment = Factory::getInstance()->getEnvironment();
        $environment->setUseGuestCart(true);
        $environment->save();

        // init
        $manager = Factory::getInstance()->getCartManager();
        $cart = null;

        $cart = $manager->getCartByName($cartName);

        // create new cart if not exists
        if (!$cart) {
            $cartId = $manager->createCart(['name' => $cartName]);
            $cart = $manager->getCart($cartId);
        }

        // done :-)
        return $cart;
    }
}
