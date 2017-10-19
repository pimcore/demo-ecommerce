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

use AppBundle\Model\CustomerManagementFramework\Activity\OrderActivity;
use CustomerManagementFrameworkBundle\ActivityManager\ActivityManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\CheckoutManager\CommitOrderProcessor;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;

class Processor extends CommitOrderProcessor
{

    /**
     * @var ActivityManagerInterface
     */
    protected $activityManager;

    /**
     * save individually data
     *
     * @param AbstractOrder $order
     */
    protected function processOrder(AbstractOrder $order)
    {

        if($this->activityManager && $order->getCustomer()) {
            $this->activityManager->trackActivity(new OrderActivity($order->getCustomer(), $order));
        }

    }

    protected function sendConfirmationMail(AbstractOrder $order)
    {
        $params = [];
        $params['order'] = $order;
        $params['ordernumber'] = $order->getOrdernumber();

        $email = $order->getCustomerEmail();

        $mail = new \Pimcore\Mail(['document' => $this->confirmationMail, 'params' => $params]);
        $mail->addTo($email);
        $mail->send();
    }


    public function setActivityManager(ActivityManagerInterface $activityManager) {
        $this->activityManager = $activityManager;
    }
}
