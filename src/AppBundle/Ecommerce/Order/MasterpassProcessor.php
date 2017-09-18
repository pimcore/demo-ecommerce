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
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\IStatus;
use Pimcore\Bundle\EcommerceFrameworkBundle\PaymentManager\Payment\IPayment;

class MasterpassProcessor extends CommitOrderProcessor
{
    /**
     * save individually data
     *
     * @param AbstractOrder $order
     */
    protected function processOrder(AbstractOrder $order)
    {

        //nothing to do here
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

    /**
     * @param AbstractOrder $order
     * @param IStatus $paymentStatus
     * @param IPayment $paymentProvider
     */
    protected function applyAdditionalDataToOrder(AbstractOrder $order, IStatus $paymentStatus, IPayment $paymentProvider)
    {

        //check if payment type is MASTERPASS
        $data = $paymentStatus->getData();
        $paymentType = $data['qpay_paymentType'];

        if ($paymentType == 'MASTERPASS') {

            //APPLY SHIPPING INFORMATION
            $order->setCustomerEMail($data['qpay_response']['masterpassCardEmail']);
            $order->setCustomerFirstname($data['qpay_response']['masterpassCardFirstname']);
            $order->setCustomerLastname($data['qpay_response']['masterpassCardLastname']);
            $order->setCustomerStreet($data['qpay_response']['masterpassBillingAddressAddressLine1']);
            $order->setCustomerCity($data['qpay_response']['masterpassBillingAddressCity']);
            $order->setCustomerZip($data['qpay_response']['masterpassBillingAddressPostalCode']);
            $order->setCustomerCountry($data['qpay_response']['masterpassBillingAddressCountry']);

            $order->setDeliveryLastname($data['qpay_response']['masterpassShippingAddressRecipientName']);
            $order->setDeliveryStreet($data['qpay_response']['masterpassShippingAddressAddressLine1']);
            $order->setDeliveryCity($data['qpay_response']['masterpassShippingAddressCity']);
            $order->setDeliveryZip($data['qpay_response']['masterpassShippingAddressPostalCode']);
            $order->setDeliveryCountry($data['qpay_response']['masterpassShippingAddressCountry']);

//            [masterpassShippingAddressRecipientPhoneNumber] => AT+43-650382024
            $order->save();
        }
    }
}
