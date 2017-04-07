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

use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\CommitOrderProcessor;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;

class Processor extends CommitOrderProcessor
{
    /**
     * save individually data
     * @param AbstractOrder $order
     */
    protected function processOrder(AbstractOrder $order)
    {

        //nothing to do here

    }

    protected function sendConfirmationMail(AbstractOrder $order) {
        $params = array();
        $params["order"] = $order;
        $params["ordernumber"] = $order->getOrdernumber();

        $email = $order->getCustomerEmail();

        $mail = new \Pimcore\Mail(array("document" => $this->confirmationMail, "params" => $params));
        $mail->addTo($email);
        $mail->send();
    }
}