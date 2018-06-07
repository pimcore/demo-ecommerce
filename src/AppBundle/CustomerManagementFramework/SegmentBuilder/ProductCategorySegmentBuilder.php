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

namespace AppBundle\CustomerManagementFramework\SegmentBuilder;


use AppBundle\Model\DefaultProduct;
use AppBundle\Model\ShopCategory;
use CustomerManagementFrameworkBundle\Model\CustomerInterface;
use CustomerManagementFrameworkBundle\SegmentBuilder\AbstractSegmentBuilder;
use CustomerManagementFrameworkBundle\SegmentManager\SegmentManagerInterface;
use Pimcore\Bundle\EcommerceFrameworkBundle\Factory;
use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder;
use Pimcore\Bundle\EcommerceFrameworkBundle\OrderManager\Order\Listing\Filter\CustomerObject;
use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\OnlineShopOrderItem;

/**
 * Sample Segment Builder that adds segements to customer based on products he ordered
 */
class ProductCategorySegmentBuilder extends AbstractSegmentBuilder
{

    protected $segmentGroupName;

    public function __construct( $segmentGroupName = 'InterestCategories')
    {
        $this->segmentGroupName = $segmentGroupName;
    }


    /**
     * prepares data and configurations which could be reused for all buildSegment(CustomerInterface $customer) calls
     *
     * @param SegmentManagerInterface $segmentManager
     *
     * @return void
     */
    public function prepare(SegmentManagerInterface $segmentManager)
    {
        // nothing to do
    }

    /**
     * update calculated segment(s) for given customer
     *
     * @param CustomerInterface $customer
     * @param SegmentManagerInterface $segmentManager
     *
     * @return void
     */
    public function calculateSegments(CustomerInterface $customer, SegmentManagerInterface $segmentManager)
    {

        $inheritanceBackup = AbstractObject::getGetInheritedValues();
        AbstractObject::setGetInheritedValues(true);

        $orderManager = Factory::getInstance()->getOrderManager();

        // create new order list
        $list = $orderManager->createOrderList();

        // set list type
        $list->setListType($list::LIST_TYPE_ORDER_ITEM);

        // set order state
        $list->setOrderState(AbstractOrder::ORDER_STATE_COMMITTED);
        $list->addFilter( new CustomerObject($customer));

        $mainCategories = [];

        foreach($list as $orderItem) {

            /**
             * @var $orderItem OnlineShopOrderItem
             * @var $product DefaultProduct
             * @var $category ShopCategory
             */

            $product = $orderItem->getProduct();
            if($product) {
                $category = $product->getFirstCategory();

                $mainCategory = $this->getMainCategory($category);

                $mainCategories[$mainCategory->getName('en_GB')]++;
            }

        }


        foreach($mainCategories as $mainCategoryName => $count) {
            $segment = $segmentManager->createCalculatedSegment(
                $mainCategoryName,
                $this->segmentGroupName
            );

            $segmentManager->mergeSegments($customer, [$segment], [],  $this->getName(), null, $count );
        }

        AbstractObject::setGetInheritedValues($inheritanceBackup);
    }

    /**
     * @param ShopCategory $category
     * @return ShopCategory
     */
    protected function getMainCategory(ShopCategory $category) {
        $parentCategory = $category;
        while($parentCategory instanceof ShopCategory && $parentCategory->getParentId() != 11148) {
            $parentCategory = $parentCategory->getParent();
        }

        return $parentCategory;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ProductCategorySegmentBuilder';
    }

    /**
     * @return bool
     */
    public function executeOnCustomerSave()
    {
        return true;
    }
}