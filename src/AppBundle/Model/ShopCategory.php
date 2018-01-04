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

namespace AppBundle\Model;

use AppBundle\Tool\Text;
use Pimcore\Model\Document;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\ProductCategory;

class ShopCategory extends ProductCategory
{
    public static function getTopLevelCategories()
    {
        $root = AbstractObject::getById(11148); //Pimcore_Config::getWebsiteConfig()->shopCategoriesFolder;
        $categories = [];
        foreach ($root->getChildren() as $child) {
            if ($child instanceof self) {
                $categories[] = $child;
            }
        }

        return $categories;
    }

    /**
     * returns parent categories for this
     * stops at given root category or global root category in document if set
     * otherwise stops at topmost category of object tree
     *
     * @param ProductCategory|null $rootCategory
     * @param Document|null $document
     *
     * @return array
     */
    public function getParentCategoryList(ProductCategory $rootCategory = null, Document $document = null)
    {
        $stopCategory = $rootCategory;
        if (empty($stopCategory) && $document) {
            $stopCategory = $document->getProperty('globalRootCategory');
        }
        $parentCategories = [];

        $parentCategory = $this->getParent();
        while ($parentCategory && $parentCategory instanceof ProductCategory && $parentCategory->getPublished()) {
            $parentCategories[] = $parentCategory;

            if ($stopCategory && $parentCategory->getId() == $stopCategory->getId()) {

                //cancel when root category is reached
                $parentCategory = null;
            } else {
                $parentCategory = $parentCategory->getParent();
            }
        }

        return array_reverse($parentCategories);
    }

    public function getNavigationPath(ProductCategory $rootCategory = null, Document $document = null)
    {
        $categories = $this->getParentCategoryList($rootCategory, $document);
        $categories[] = $this;

        $path = '';

        foreach ($categories as $category) {
            $path .= Text::toUrl($category->getName()).'/';
        }

        $path = substr($path, 0, strlen($path) - 1);

        return $path;
    }

    /**
     * @param array $params
     * @param string $route
     * @param bool $reset
     *
     * @return string
     *
     * @throws \Exception
     */
    public function getDetailUrl(array $params = [], $route = 'shop-category-listing', $reset = true)
    {
        // add id
        if (!array_key_exists('category', $params)) {
            $params['category'] = $this->getId();
        }

        //add prefix / by default language/shop
        if (!array_key_exists('prefix', $params)) {
            if ($params['document']) {
                $params['prefix'] = substr($params['document']->getFullPath(), 1);
            } else {
                $request = \Pimcore::getContainer()->get('request');
                $params['prefix'] = $request->getLocale() . "/shop";
            }
        }

        // add name
        if (!array_key_exists('name', $params)) {
            $params['name'] = $this->getNavigationPath($params['rootCategory'], $params['document']);
        }

        unset($params['rootCategory']);
        unset($params['document']);

        // create url
        $urlHelper = \Pimcore::getContainer()->get('pimcore.templating.view_helper.pimcore_url');

        return $urlHelper($params, $route, $reset);
    }
}

