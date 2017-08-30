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
use Pimcore\Model\DataObject\AbstractObject;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    public function portalAction()
    {
        $this->view->isPortal = true;
    }

    public function defaultAction()
    {
    }

    public function landingPageAction()
    {
    }

    public function redirectAction()
    {
        return $this->redirect('/en');
    }

    public function tenantSwitchesAction(Request $request)
    {
        $environment = Factory::getInstance()->getEnvironment();

        if ($request->get('change-checkout-tenant')) {
            $checkoutTenant = $request->get('change-checkout-tenant');
            $checkoutTenant = $checkoutTenant == 'default' ? '' : $checkoutTenant;
            $environment->setCurrentCheckoutTenant(strip_tags($checkoutTenant));
            $environment->save();
        }

        if ($request->get('change-assortment-tenant')) {
            $assortmentTenant = $request->get('change-assortment-tenant');
            $assortmentTenant = $assortmentTenant == 'default' ? '' : $assortmentTenant;
            $environment->setCurrentAssortmentTenant(strip_tags($assortmentTenant));
            $environment->save();
        }

        $this->view->checkoutTenants = ['default', 'noShipping', 'expensiveShipping', 'paypal', 'datatrans', 'seamless', 'otherFolder'];
        $this->view->currentCheckoutTenant = $environment->getCurrentCheckoutTenant() ? $environment->getCurrentCheckoutTenant() : 'default';

        $this->view->assortmentTenants = ['default', 'OptimizedMysql'];
        $this->view->currentAssortmentTenant = $environment->getCurrentAssortmentTenant() ? $environment->getCurrentAssortmentTenant() : 'default';
    }

    /**
     * @Route("/en/test")
     */
    public function testController()
    {
        $translator = $this->get('translator');

        $params['order'] = $order = AbstractObject::getById(12172);
        $params['ordernumber'] = $order->getOrdernumber();

        $email = $order->getCustomerEmail();

        $mail = new \Pimcore\Mail(['document' => '/en/emails/order-confirmation', 'params' => $params]);
        $mail->addTo($email);
        $mail->send();

        die('done');
    }
}
