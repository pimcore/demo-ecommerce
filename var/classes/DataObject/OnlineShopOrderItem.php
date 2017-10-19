<?php 

/** 
* Generated at: 2017-10-19T11:20:03+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (10)
* IP: 192.168.11.5


Fields Summary: 
- orderState [select]
- product [href]
- productNumber [input]
- productName [input]
- amount [numeric]
- totalNetPrice [numeric]
- totalPrice [numeric]
- taxInfo [table]
- pricingRules [fieldcollections]
- comment [textarea]
- subItems [objects]
- customized [objectbricks]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByOrderState ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByProduct ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByProductNumber ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByProductName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByAmount ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByTotalNetPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByTotalPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByTaxInfo ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByPricingRules ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByComment ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getBySubItems ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopOrderItem\Listing getByCustomized ($value, $limit = 0) 
*/

class OnlineShopOrderItem extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrderItem {

public $o_classId = 8;
public $o_className = "OnlineShopOrderItem";
public $orderState;
public $product;
public $productNumber;
public $productName;
public $amount;
public $totalNetPrice;
public $totalPrice;
public $taxInfo;
public $pricingRules;
public $comment;
public $subItems;
public $customized;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get orderState - Order Item State
* @return string
*/
public function getOrderState () {
	$preValue = $this->preGetValue("orderState"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderState;
	return $data;
}

/**
* Set orderState - Order Item State
* @param string $orderState
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setOrderState ($orderState) {
	$this->orderState = $orderState;
	return $this;
}

/**
* Get product - Product
* @return \Pimcore\Model\DataObject\AbstractObject
*/
public function getProduct () {
	$preValue = $this->preGetValue("product"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("product")->preGetData($this);
	return $data;
}

/**
* Set product - Product
* @param \Pimcore\Model\DataObject\AbstractObject $product
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setProduct ($product) {
	$this->product = $this->getClass()->getFieldDefinition("product")->preSetData($this, $product);
	return $this;
}

/**
* Get productNumber - Product Number
* @return string
*/
public function getProductNumber () {
	$preValue = $this->preGetValue("productNumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->productNumber;
	return $data;
}

/**
* Set productNumber - Product Number
* @param string $productNumber
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setProductNumber ($productNumber) {
	$this->productNumber = $productNumber;
	return $this;
}

/**
* Get productName - Product Name
* @return string
*/
public function getProductName () {
	$preValue = $this->preGetValue("productName"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->productName;
	return $data;
}

/**
* Set productName - Product Name
* @param string $productName
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setProductName ($productName) {
	$this->productName = $productName;
	return $this;
}

/**
* Get amount - Amount
* @return float
*/
public function getAmount () {
	$preValue = $this->preGetValue("amount"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->amount;
	return $data;
}

/**
* Set amount - Amount
* @param float $amount
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

/**
* Get totalNetPrice - NetPrice
* @return string
*/
public function getTotalNetPrice () {
	$preValue = $this->preGetValue("totalNetPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalNetPrice;
	return $data;
}

/**
* Set totalNetPrice - NetPrice
* @param string $totalNetPrice
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setTotalNetPrice ($totalNetPrice) {
	$this->totalNetPrice = $totalNetPrice;
	return $this;
}

/**
* Get totalPrice - Price
* @return string
*/
public function getTotalPrice () {
	$preValue = $this->preGetValue("totalPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalPrice;
	return $data;
}

/**
* Set totalPrice - Price
* @param string $totalPrice
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setTotalPrice ($totalPrice) {
	$this->totalPrice = $totalPrice;
	return $this;
}

/**
* Get taxInfo - Tax Information
* @return array
*/
public function getTaxInfo () {
	$preValue = $this->preGetValue("taxInfo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->taxInfo;
	return $data;
}

/**
* Set taxInfo - Tax Information
* @param array $taxInfo
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setTaxInfo ($taxInfo) {
	$this->taxInfo = $taxInfo;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getPricingRules () {
	$preValue = $this->preGetValue("pricingRules"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("pricingRules")->preGetData($this);
	 return $data;
}

/**
* Set pricingRules - Pricing Rules
* @param \Pimcore\Model\DataObject\Fieldcollection $pricingRules
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setPricingRules ($pricingRules) {
	$this->pricingRules = $this->getClass()->getFieldDefinition("pricingRules")->preSetData($this, $pricingRules);
	return $this;
}

/**
* Get comment - Comment
* @return string
*/
public function getComment () {
	$preValue = $this->preGetValue("comment"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->comment;
	return $data;
}

/**
* Set comment - Comment
* @param string $comment
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setComment ($comment) {
	$this->comment = $comment;
	return $this;
}

/**
* Get subItems - Subitems
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem[]
*/
public function getSubItems () {
	$preValue = $this->preGetValue("subItems"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("subItems")->preGetData($this);
	return $data;
}

/**
* Set subItems - Subitems
* @param \Pimcore\Model\DataObject\OnlineShopOrderItem[] $subItems
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setSubItems ($subItems) {
	$this->subItems = $this->getClass()->getFieldDefinition("subItems")->preSetData($this, $subItems);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Objectbrick
*/
public function getCustomized () {
	$data = $this->customized;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\OnlineShopOrderItem\\Customized")) { 
			$data = new \Pimcore\Model\DataObject\OnlineShopOrderItem\Customized($this, "customized");
			$this->customized = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("customized"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set customized - Customized
* @param \Pimcore\Model\DataObject\Objectbrick $customized
* @return \Pimcore\Model\DataObject\OnlineShopOrderItem
*/
public function setCustomized ($customized) {
	$this->customized = $this->getClass()->getFieldDefinition("customized")->preSetData($this, $customized);
	return $this;
}

protected static $_relationFields = array (
  'product' => 
  array (
    'type' => 'href',
  ),
  'subItems' => 
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = array (
  0 => 'pricingRules',
);

}

