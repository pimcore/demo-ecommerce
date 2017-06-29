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

namespace AppBundle\Ecommerce\Tracking;

use Pimcore\Bundle\EcommerceFrameworkBundle\Model\IProduct;
use Symfony\Component\HttpFoundation\Request;

class TrackingItemBuilder extends \Pimcore\Bundle\EcommerceFrameworkBundle\Tracking\TrackingItemBuilder
{
    /**
     * @var Request
     */
    protected $request;

    public function buildProductViewItem(IProduct $product)
    {
        $item = parent::buildProductViewItem($product);

        $item->setId($product->getOSProductNumber());

        return $item;
    }

    private static $impressionPosition = 0;

    public function buildProductImpressionItem(IProduct $product)
    {
        $item = parent::buildProductImpressionItem($product);

        $item->setId($product->getOSProductNumber());

        $item->setList($this->getImpressionListName());

        self::$impressionPosition++;
        $item->setPosition(self::$impressionPosition);

        return $item;
    }

    /**
     * Get Product Impression list name.
     * i.e.: shop - list, shop - search
     *
     * @return string
     */
    protected function getImpressionListName()
    {
        $request = $this->getCurrentRequest();
        $controller = $request->attributes->get('_controller');
        $controller = explode(':', $controller);

        return $controller[1] . ' - ' . $controller[2];
    }

    public function getCurrentRequest()
    {
        if (empty($this->request)) {
            $this->request = \Pimcore::getContainer()->get('request_stack')->getCurrentRequest();
        }

        return $this->request;
    }

    public function setCurrentRequest(Request $request)
    {
        $this->request = $request;
    }
}
