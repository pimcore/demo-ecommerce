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

namespace AppBundle\Model\Product\TraitClasses;

use Pimcore\Bundle\EcommerceFrameworkBundle\AvailabilitySystem\IAvailability;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;

trait Checkoutable
{
    /**
     * @return mixed
     */
    public function getOSName()
    {
        return $this->getName();
    }

    /**
     * @param int $quantityScale
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\IPrice
     */
    public function getOSPrice($quantityScale = 1)
    {
        return $this->getOSPriceInfo($quantityScale)->getPrice();
    }

    /**
     * @return string
     */
    public function getPriceSystemName()
    {
        return 'default';
    }

    /**
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\IPriceSystem
     */
    public function getPriceSystemImplementation()
    {
        return Factory::getInstance()->getPriceSystem($this->getPriceSystemName());
    }

    /**
     * @param int $quantityScale
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\PriceSystem\IPriceInfo
     */
    public function getOSPriceInfo($quantityScale = 1)
    {
        return $this->getPriceSystemImplementation()->getPriceInfo($this, $quantityScale, null);
    }

    /**
     * @return int
     */
    public function getOSProductNumber()
    {
        return $this->getId();
    }

    /**
     * @return string
     */
    public function getAvailabilitySystemName()
    {
        return 'default';
    }

    /**
     * @param int $quantityScale
     *
     * @return bool
     */
    public function getOSIsBookable($quantityScale = 1)
    {
        $price = $this->getOSPrice($quantityScale);

        return !empty($price) && $this->isActive();
    }

    /**
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\AvailabilitySystem\IAvailabilitySystem
     */
    public function getAvailabilitySystemImplementation()
    {
        return Factory::getInstance()->getAvailabilitySystem($this->getAvailabilitySystemName());
    }

    /**
     * returns availability info based on given quantity
     *
     * @param int $quantity
     *
     * @return IAvailability
     */
    public function getOSAvailabilityInfo($quantity = null)
    {
        return $this->getAvailabilitySystemImplementation()->getAvailabilityInfo($this, $quantity);
    }

    /**
     * @param array      $params
     * @param string     $route
     * @param bool|true  $reset
     *
     * @return string
     */
    public function getDetailUrl(array $params = [], $route = 'shop-detail', $reset = true)
    {
        // add id
        if (!array_key_exists('product', $params)) {
            $params['product'] = $this->getId();
        }

        //add prefix / by default language/shop
        if (!array_key_exists('prefix', $params)) {
            if ($params['document']) {
                $params['prefix'] = substr($params['document']->getFullPath(), 1);
            } else {
                $language = \Pimcore::getContainer()->get('request_stack')->getCurrentRequest()->getLocale();
                $params['prefix'] = substr($language, 0, 2) . '/shop';
            }
        }

        // add name
        if (!array_key_exists('name', $params)) {
            // add category path
            $category = $this->getFirstCategory();
            if ($category) {
                $path = $category->getNavigationPath($params['rootCategory'], $params['document']);
                $params['name'] = $path;
            }

            // add name
            $name = \Pimcore\File::getValidFilename($this->getOSName());
            $params['name'] .= preg_replace('#-{2,}#', '-', $name);
        }

        unset($params['rootCategory']);
        unset($params['document']);

        // create url
        $urlHelper = \Pimcore::getContainer()->get('pimcore.templating.view_helper.pimcore_url');

        return $urlHelper($params, $route, $reset);
    }

    /**
     * @param string $thumbnail thumbnail name configured in the Pimcore admin
     *
     * @return string|null
     */
    public function getFirstImage($thumbnail)
    {
        $firstImageAsset = $this->getFirstImageAsset();
        if ($firstImageAsset) {
            return $firstImageAsset->getThumbnail($thumbnail);
        }

        return null;
    }

    /**
     * @param $view
     *
     * @return array
     */
    public function getHeroAttributes($view)
    {
        $heroAttributes = [];
        if ($this->getArtno()) {
            $heroAttributes[] = '<strong>' . $view->translate('shop.sku') . ':</strong> ' . $this->getArtno();
        }
        if ($this->getEan()) {
            $heroAttributes[] = '<strong>' . $view->translate('shop.ean') . ':</strong> ' . $this->getEan();
        }
        if ($this->getSize() && $this->getSize() != ' ') {
            $heroAttributes[] = '<strong>' . $view->translate('shop.size') . ':</strong> ' . $this->getSize();
        }
        if ($this->getColor()) {
            $colors = $this->getColor();
            $translatedColors = [];
            foreach ($colors as $c) {
                $translatedColors[] = $view->translate('optionvalue.' . $c);
            }
            $heroAttributes[] = '<strong>' . $view->translate('shop.color') . ':</strong> ' .  implode(', ', $translatedColors);
        }

        return $heroAttributes;
    }
}
