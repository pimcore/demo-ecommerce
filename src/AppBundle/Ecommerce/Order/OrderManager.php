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

namespace AppBundle\Ecommerce\Order;

use Pimcore\Bundle\EcommerceFrameworkBundle\CartManager\ICart;
use Pimcore\Bundle\EcommerceFrameworkBundle\Exception\InvalidConfigException;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;

class OrderManager extends \Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\OrderManager
{
    /**
     * @param ICart $cart
     * @param AbstractOrder $order
     *
     * @return AbstractOrder
     *
     * @throws InvalidConfigException
     */
    protected function applyCustomCheckoutDataToOrder(ICart $cart, AbstractOrder $order)
    {
        $order = parent::applyCustomCheckoutDataToOrder($cart, $order);

        /* @var AbstractOrder $order*/

        $checkout = Factory::getInstance()->getCheckoutManager($cart);
        $deliveryAddress = $checkout->getCheckoutStep('deliveryaddress') ? $checkout->getCheckoutStep('deliveryaddress')->getData() : null;
        $confirm = $checkout->getCheckoutStep('confirm') ? $checkout->getCheckoutStep('confirm')->getData() : null;

        if ($deliveryAddress) {

            //inserting delivery and billing address from checkout step delivery

            $order->setCustomerFirstname($deliveryAddress->firstname);
            $order->setCustomerLastname($deliveryAddress->lastname);
            $order->setCustomerCompany($deliveryAddress->company);
            $order->setCustomerStreet($deliveryAddress->street);
            $order->setCustomerZip($deliveryAddress->zip);
            $order->setCustomerCity($deliveryAddress->city);
            $order->setCustomerCountry($deliveryAddress->countryCode);
            $order->setCustomerEmail($deliveryAddress->email);

            $order->setDeliveryFirstname($deliveryAddress->firstname);
            $order->setDeliveryLastname($deliveryAddress->lastname);
            $order->setDeliveryCompany($deliveryAddress->company);
            $order->setDeliveryStreet($deliveryAddress->street);
            $order->setDeliveryZip($deliveryAddress->zip);
            $order->setDeliveryCity($deliveryAddress->city);
            $order->setDeliveryCountry($deliveryAddress->countryCode);

            //updating customer object based on delivery address data
            $customer = $order->getCustomer();
            if($customer) {
                $params = ['email', 'firstname', 'lastname', 'street', 'zip', 'city', 'countryCode'];
                foreach($params as $param) {
                    $customer->{'set' . ucfirst($param)}($deliveryAddress->{$param});
                }
                $customer->save();
            }

        } elseif ($confirm) {

            //in quick checkout - only get email-adress from confirm step
            $order->setCustomerEmail($confirm);
        }

        return $order;
    }
}
