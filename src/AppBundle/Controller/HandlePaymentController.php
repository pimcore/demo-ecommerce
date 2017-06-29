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
use Pimcore\Logger;
use Symfony\Component\HttpFoundation\Request;

class HandlePaymentController extends AbstractController
{
    public function serverSideQPayAction(Request $request)
    {
        Logger::info('Starting server side call');

        $params = array_merge($request->query->all(), $request->request->all());

        $factory = Factory::getInstance();
        $environment = $factory->getEnvironment();

        //if checkout tenant is set via param, use that one for this request
        if ($params['checkouttenant']) {
            $environment->setCurrentCheckoutTenant($params['checkouttenant'], false);
        }

        $commitOrderProcessor = $factory->getCommitOrderProcessor();
        $paymentProvider = $factory->getPaymentManager()->getProvider('qpay');

        if ($committedOrder = $commitOrderProcessor->committedOrderWithSamePaymentExists($params, $paymentProvider)) {
            Logger::info('Order with same payment is already committed, doing nothing. OrderId is ' . $committedOrder->getId());
        } else {
            $order = $commitOrderProcessor->handlePaymentResponseAndCommitOrderPayment($params, $paymentProvider);
            Logger::info('Finished server side call. OrderId is ' . $order->getId());
        }

        exit('success');
    }
}
