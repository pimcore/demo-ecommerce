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

use AppBundle\Ecommerce\Tool\RecentlyViewedProducts;
use AppBundle\Model\DefaultProduct;
use AppBundle\Model\ShopCategory;
use OutputDataConfigToolkitBundle\Service;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\FilterService\Helper;
use Pimcore\Bundle\EcommerceFrameworkBundle\IndexService\ProductList\IProductList;
use Pimcore\Http\RequestHelper;
use Pimcore\Model\DataObject\Product;
use Pimcore\Model\DataObject\ProductCategory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Zend\Paginator\Paginator;

class ShopController extends AbstractController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        parent::onKernelController($event);
        $this->view->category = ShopCategory::getById($event->getRequest()->get('category'));
    }

    /**
     * show product list
     */
    public function listAction(Request $request)
    {
        $params = array_merge($request->query->all(), $request->attributes->all());

        //check if layout should not be included
        $this->view->showLayout = true;
        if ($request->get('noLayout')) {
            $this->view->showLayout = false;
        }

        $params['parentCategoryIds'] = $params['category'];

        $category = ShopCategory::getById($params['category']);

        // load current filter
        if ($category) {
            $filterDefinition = $category->getFilterdefinition();

            $trackingManager = Factory::getInstance()->getTrackingManager();
            $trackingManager->trackCategoryPageView($category->getName(), null);
        }

        if ($request->get('filterdefinition') instanceof \Pimcore\Model\DataObject\FilterDefinition) {
            $filterDefinition = $request->get('filterdefinition');
        }

        if (empty($filterDefinition)) {
            $filterDefinition = \Pimcore\Config::getWebsiteConfig()->fallbackFilterdefinition;
        }
        $this->view->filterDefinitionObject = $filterDefinition;

        // create product list
        $products = Factory::getInstance()->getIndexService()->getProductListForCurrentTenant();
        $products->setVariantMode(IProductList::VARIANT_MODE_INCLUDE_PARENT_OBJECT);

        $this->view->products = $products;

        // create and init filter service
        $filterService = Factory::getInstance()->getFilterService();

        Helper::setupProductList($filterDefinition, $products, $params, $this->view, $filterService, true);
        $this->view->filterService = $filterService;

        // init pagination
        $paginator = new Paginator($products);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage($filterDefinition->getPageLimit());
        $paginator->setPageRange(5);
        $this->view->paginator = $paginator;

        $trackingManager = Factory::getInstance()->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product);
        }

        //breadcrumbs
        if ($category) {
            $parentCategories = $category->getParentCategoryList(null, $this->document);
            $parentCategories[] = $category;
            foreach ($parentCategories as $parentCategory) {
                $placeholder = $this->get('pimcore.templating.view_helper.placeholder');
                $placeholder('addBreadcrumb')->append([
                    'parentId' => 'category-' . $parentCategory->getParentId(),
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $parentCategory->getDetailUrl(['document' => $this->document]),
                    'label' => $parentCategory->getName()
                ]);
            }

            $headTitle = $this->get('pimcore.templating.view_helper.head_title');
            $headTitle($category->getName());
        }
    }

    /**
     * show product detail page
     */
    public function detailAction(Request $request, RequestHelper $requestHelper)
    {

        // load product
        /**
         * @var $product Product
         */
        $product = DefaultProduct::getById($request->get('product'));


        if (!$product || (!$product->isActive() && !$requestHelper->isFrontendRequestByAdmin($request))) {
            throw new NotFoundHttpException('die gewünschte Seite existiert nicht mehr');
        }
        $this->view->product = $product;

        $category = ProductCategory::getById($request->get('category'));

        // ...
        $this->view->specificationOutputChannel = Service::getOutputDataConfig($product, 'productdetail_specification');
        $this->view->hasSpec = false;
        foreach ($this->view->specificationOutputChannel as $x) {
            if ($x->getLabeledValue($product)) {
                $this->view->hasSpec = true;
                break;
            }
        }

        // recently viewed products
        $recently = new RecentlyViewedProducts(Factory::getInstance()->getEnvironment(), function ($id) {
            return DefaultProduct::getById($id);
        });

        $sizeVariants = $product->getSizeVariants();
        if (empty($sizeVariants)) {
            $linkProduct = $product;
        } else {
            $tmp = array_values($sizeVariants);
            $linkProduct = array_shift($tmp);
        }
        $this->view->recentlyViewed = $recently->addProduct($linkProduct)->getProducts(4);

        $filterdefinition = null;
        if ($category) {
            $filterdefinition = $category->getFilterdefinition();
        }
        if (empty($filterdefinition)) {
            $filterdefinition = \Pimcore\Config::getWebsiteConfig()->fallbackFilterdefinition;
        }
        $this->view->similarProducts = $this->getSimilarProducts($product, $filterdefinition);

        //breadcrumbs
        $category = $product->getFirstCategory();
        $placeholder = $this->get('pimcore.templating.view_helper.placeholder');
        if ($category) {
            $parentCategories = $category->getParentCategoryList(null, $this->document);
            $parentCategories[] = $category;
            foreach ($parentCategories as $index => $parentCategory) {
                $placeholder('addBreadcrumb')->append([
                    'parentId' => 'category-' . $parentCategory->getParentId(),
                    'id' => 'category-' . $parentCategory->getId(),
                    'url' => $parentCategory->getDetailUrl(['document' => $this->document]),
                    'label' => $parentCategory->getName()
                ]);
            }
        }

        $placeholder('addBreadcrumb')->append([
            'parentId' => $category ? 'category-' . $category->getParentId() : '',
            'id' => 'product-' . $product->getId(),
            'url' => $product->getDetailUrl(['document' => $this->document]),
            'label' => $product->getName()
        ]);

        $headTitle = $this->get('pimcore.templating.view_helper.head_title');
        $headTitle($product->getName());

        $trackingManager = Factory::getInstance()->getTrackingManager();
        $trackingManager->trackProductView($product);
    }

    private function getSimilarProducts(DefaultProduct $product, \Pimcore\Model\DataObject\FilterDefinition $filterDefinition = null)
    {
        if ($filterDefinition) {
            $productList = Factory::getInstance()->getIndexService()->getProductListForCurrentTenant();
            $productList->setVariantMode(IProductList::VARIANT_MODE_INCLUDE_PARENT_OBJECT);

            $similarityFields = $filterDefinition->getSimilarityFields();
            if ($similarityFields) {
                $statement = $productList->buildSimularityOrderBy($filterDefinition->getSimilarityFields(), $product->getId());
            }

            if (!empty($statement)) {
                $productList->setLimit(4);
                $productList->setOrder('ASC');
                $productList->addCondition('o_virtualProductId != ' . $product->internalGetBaseProduct()->getId(), 'o_id');
                if ($filterDefinition->getCrossSellingCategory()) {
                    $productList->setCategory($filterDefinition->getCrossSellingCategory());
                }
                $productList->setOrderKey($statement);

                return $productList->load();
            }
        }

        return [];
    }

    public function productCellAction(Request $request)
    {
        $paramsBag = [];
        if ($request->get('type') == 'object') {
            $product = \Pimcore\Model\DataObject\Product::getById($request->get('id'));

            $paramsBag['product'] = $product;
            $paramsBag['col'] = $request->get('editmode') ? 12 : 3;
            $paramsBag['language'] = $this->view->language;

            $trackingManager = Factory::getInstance()->getTrackingManager();
            $trackingManager->trackProductImpression($product);
        }

        return $this->render(':Shop/list:product.html.php', $paramsBag);
    }

    public function searchAction(Request $request)
    {
        $this->view->hideNav = true;

        $productList = Factory::getInstance()->getIndexService()->getProductListForCurrentTenant();
        $productList->setVariantMode(IProductList::VARIANT_MODE_INCLUDE_PARENT_OBJECT);
        if ($request->get('term')) {
            foreach (explode(' ', $request->get('term')) as $term) {
                $productList->addQueryCondition($term, 'search');
            }
        }

        $params = $request->query->all();
        if (empty($filterDefinition)) {
            $filterDefinition = \Pimcore\Config::getWebsiteConfig()->searchFilterdefinition;
        }
        $this->view->filterDefinitionObject = $filterDefinition;

        // create and init filter service
        $filterService = Factory::getInstance()->getFilterService();

        Helper::setupProductList($filterDefinition, $productList, $params, $this->view, $filterService, true);
        $this->view->filterService = $filterService;
        $this->view->products = $productList;

        // init pagination
        $paginator = new Paginator($productList);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage($filterDefinition->getPageLimit());
        $paginator->setPageRange(10);
        $this->view->paginator = $paginator;

        $trackingManager = Factory::getInstance()->getTrackingManager();
        foreach ($paginator as $product) {
            $trackingManager->trackProductImpression($product);
        }

        $translator = $this->get('translator');

        //breadcrumbs
        $placeholder = $this->get('pimcore.templating.view_helper.placeholder');
        $placeholder('addBreadcrumb')->append([
            'parentId' => $this->document->getId(),
            'id' => 'search-result',
            'label' => $translator->trans('shop.search-result', [$request->get('term')])
        ]);

        $headTitle = $this->get('pimcore.templating.view_helper.head_title');
        $headTitle($translator->trans('shop.search-result', [$request->get('term')]));
    }
}
