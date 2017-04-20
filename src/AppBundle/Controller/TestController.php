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


use Pimcore\Model\Object\AbstractObject;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractCartAware
{

    /**
     * @Route("/fashtest")
     */
    public function testAction() {

        $cart = $this->getCart(uniqid());

        $product = AbstractObject::getById(3427);

        echo "<pre>";


        echo("----- before add ------- \n");


        foreach($cart->getItems() as $item) {
            echo $item->getProduct()->getId() . ": " . $item->getCount() . " - " . $item->getPrice() . "\n";
        }

        echo("Gift Items: \n");
        foreach($cart->getGiftItems() as $item) {
            echo $item->getProduct()->getId() . ": " . $item->getCount() . " - " . $item->getPrice() . "\n";
        }

        echo "Modificators: \n";
        foreach($cart->getPriceCalculator()->getPriceModifications() as $name => $modificator) {
            echo $name . ": " . $modificator->getAmount() . "\n";
        }




        $cart->addItem($product, 0, $product->getId());
        $cart->updateItem($product->getId(), $product, 1);
        $cart->save();

        echo("\n\n----- after add ------- \n");


        foreach($cart->getItems() as $item) {
            echo $item->getProduct()->getId() . ": " . $item->getCount() . " - " . $item->getPrice() . "\n";
        }

        echo("Gift Items: \n");
        foreach($cart->getGiftItems() as $item) {
            echo $item->getProduct()->getId() . ": " . $item->getCount() . " - " . $item->getPrice() . "\n";
        }

        echo "Modificators: \n";
        foreach($cart->getPriceCalculator()->getPriceModifications() as $name => $modificator) {
            echo $name . ": " . $modificator->getAmount() . "\n";
        }



        echo "</pre>";





        die("done");
    }

}