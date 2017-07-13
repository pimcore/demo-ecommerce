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
use Pimcore\Bundle\EcommerceFrameworkBundle\Tracking\ProductAction;
use Pimcore\Bundle\EcommerceFrameworkBundle\Tracking\ProductImpression;
use Pimcore\Bundle\EcommerceFrameworkBundle\Tracking\TrackingItemBuilder as BaseTrackingItemBuilder;
use Pimcore\Http\RequestHelper;

class TrackingItemBuilder extends BaseTrackingItemBuilder
{
    /**
     * @var RequestHelper
     */
    private $requestHelper;

    /**
     * @var int
     */
    private $impressionPosition = 0;

    public function __construct(RequestHelper $requestHelper)
    {
        $this->requestHelper = $requestHelper;
    }

    public function buildProductViewItem(IProduct $product): ProductAction
    {
        $item = parent::buildProductViewItem($product);
        $item->setId($product->getOSProductNumber());

        return $item;
    }

    public function buildProductImpressionItem(IProduct $product): ProductImpression
    {
        $this->impressionPosition++;

        $item = parent::buildProductImpressionItem($product);
        $item->setId($product->getOSProductNumber());
        $item->setList($this->getImpressionListName());
        $item->setPosition($this->impressionPosition);

        return $item;
    }

    /**
     * Get Product Impression list name.
     * i.e.: shop - list, shop - search
     *
     * @return string
     */
    private function getImpressionListName(): string
    {
        $request = $this->requestHelper->getCurrentRequest();

        $controller = $request->attributes->get('_controller');
        $controller = explode(':', $controller);

        return $controller[1] . ' - ' . $controller[2];
    }
}
