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

namespace AppBundle\Ecommerce\Tool;

use Pimcore\Bundle\EcommerceFrameworkBundle\IEnvironment;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractProduct;

/**
 * class to handle recently viewed products
 */
class RecentlyViewedProducts
{
    /**
     * @var int
     */
    protected $maxCount = 10;

    /**
     * @var string
     */
    protected $namespace = 'RECENTLY_VIEWED_PRODUCTS';

    /**
     * @var IEnvironment
     */
    protected $env;

    /**
     * @var callable
     */
    protected $loadProduct;

    /**
     * @param IEnvironment $env
     * @param callable                          $loadProduct
     */
    public function __construct(IEnvironment $env, \closure $loadProduct)
    {
        $this->env = $env;
        $this->loadProduct = $loadProduct;
    }

    /**
     * @param int $maxCount
     *
     * @return RecentlyViewedProducts
     */
    public function setMaxCount($maxCount)
    {
        $this->maxCount = (int)$maxCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * @param string $namespace
     *
     * @return RecentlyViewedProducts
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @return array
     */
    protected function getList()
    {
        $recentlyViewed = $this->env->getCustomItem($this->getNamespace());
        if (!$recentlyViewed) {
            $recentlyViewed = [];
        }

        return $recentlyViewed;
    }

    /**
     * @param int[] $list
     *
     * @return RecentlyViewedProducts
     */
    protected function saveList(array $list)
    {
        $this->env->setCustomItem($this->getNamespace(), $list);
        $this->env->save();

        return $this;
    }

    /**
     * @param AbstractProduct $product
     *
     * @return RecentlyViewedProducts
     */
    public function addProduct(AbstractProduct $product)
    {
        // load
        $list = $this->getList();

        // exists?
        if (($pos = array_search($product->getId(), $list)) > 0) {
            unset($list[$pos]);
        }

        // add
        if (!in_array($product->getId(), $list)) {
            array_unshift($list, $product->getId());
        }

        // limit?
        if (count($list) > $this->getMaxCount()) {
            array_pop($list);
        }

        // save
        $this->saveList($list);

        return $this;
    }

    /**
     * @param int $count
     *
     * @return AbstractProduct[]
     */
    public function getProducts($count)
    {
        // init
        $loader = $this->loadProduct;
        $products = [];

        // load products
        $list = array_slice($this->getList(), 1, $count);
        foreach ($list as $id) {
            $products[] = $loader($id);
        }

        return $products;
    }
}
