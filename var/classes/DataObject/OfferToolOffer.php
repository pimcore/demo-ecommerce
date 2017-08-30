<?php

/**
* Generated at: 2017-07-13T17:03:52+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (8)
* IP: 192.168.11.5


Fields Summary:
- offernumber [input]
- dateCreated [datetime]
- dateValidUntil [date]
- totalPriceBeforeDiscount [numeric]
- totalPrice [numeric]
- discountType [select]
- discount [numeric]
- cartId [input]
- items [objects]
- customItems [objects]
*/

namespace Pimcore\Model\DataObject;



/**
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByOffernumber ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByDateCreated ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByDateValidUntil ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByTotalPriceBeforeDiscount ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByTotalPrice ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByDiscountType ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByDiscount ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByCartId ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByItems ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolOffer\Listing getByCustomItems ($value, $limit = 0)
*/

class OfferToolOffer extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOffer {

public $o_classId = 30;
public $o_className = "OfferToolOffer";
public $offernumber;
public $dateCreated;
public $dateValidUntil;
public $totalPriceBeforeDiscount;
public $totalPrice;
public $discountType;
public $discount;
public $cartId;
public $items;
public $customItems;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get offernumber - Offernumber
* @return string
*/
public function getOffernumber () {
	$preValue = $this->preGetValue("offernumber");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->offernumber;
	return $data;
}

/**
* Set offernumber - Offernumber
* @param string $offernumber
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setOffernumber ($offernumber) {
	$this->offernumber = $offernumber;
	return $this;
}

/**
* Get dateCreated - CreationDate
* @return \Carbon\Carbon
*/
public function getDateCreated () {
	$preValue = $this->preGetValue("dateCreated");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->dateCreated;
	return $data;
}

/**
* Set dateCreated - CreationDate
* @param \Carbon\Carbon $dateCreated
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDateCreated ($dateCreated) {
	$this->dateCreated = $dateCreated;
	return $this;
}

/**
* Get dateValidUntil - Valid Until
* @return \Carbon\Carbon
*/
public function getDateValidUntil () {
	$preValue = $this->preGetValue("dateValidUntil");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->dateValidUntil;
	return $data;
}

/**
* Set dateValidUntil - Valid Until
* @param \Carbon\Carbon $dateValidUntil
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDateValidUntil ($dateValidUntil) {
	$this->dateValidUntil = $dateValidUntil;
	return $this;
}

/**
* Get totalPriceBeforeDiscount - Total Price Before Discount
* @return string
*/
public function getTotalPriceBeforeDiscount () {
	$preValue = $this->preGetValue("totalPriceBeforeDiscount");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->totalPriceBeforeDiscount;
	return $data;
}

/**
* Set totalPriceBeforeDiscount - Total Price Before Discount
* @param string $totalPriceBeforeDiscount
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setTotalPriceBeforeDiscount ($totalPriceBeforeDiscount) {
	$this->totalPriceBeforeDiscount = $totalPriceBeforeDiscount;
	return $this;
}

/**
* Get totalPrice - TotalPrice
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
* Set totalPrice - TotalPrice
* @param string $totalPrice
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setTotalPrice ($totalPrice) {
	$this->totalPrice = $totalPrice;
	return $this;
}

/**
* Get discountType - Discount Type
* @return string
*/
public function getDiscountType () {
	$preValue = $this->preGetValue("discountType");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->discountType;
	return $data;
}

/**
* Set discountType - Discount Type
* @param string $discountType
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDiscountType ($discountType) {
	$this->discountType = $discountType;
	return $this;
}

/**
* Get discount - Discount
* @return string
*/
public function getDiscount () {
	$preValue = $this->preGetValue("discount");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->discount;
	return $data;
}

/**
* Set discount - Discount
* @param string $discount
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setDiscount ($discount) {
	$this->discount = $discount;
	return $this;
}

/**
* Get cartId - Cart Id
* @return string
*/
public function getCartId () {
	$preValue = $this->preGetValue("cartId");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->cartId;
	return $data;
}

/**
* Set cartId - Cart Id
* @param string $cartId
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setCartId ($cartId) {
	$this->cartId = $cartId;
	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\DataObject\OfferToolOfferItem[]
*/
public function getItems () {
	$preValue = $this->preGetValue("items");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("items")->preGetData($this);
	return $data;
}

/**
* Set items - Items
* @param \Pimcore\Model\DataObject\OfferToolOfferItem[] $items
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setItems ($items) {
	$this->items = $this->getClass()->getFieldDefinition("items")->preSetData($this, $items);
	return $this;
}

/**
* Get customItems - Custom Items
* @return \Pimcore\Model\DataObject\OfferToolOfferItem[]
*/
public function getCustomItems () {
	$preValue = $this->preGetValue("customItems");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("customItems")->preGetData($this);
	return $data;
}

/**
* Set customItems - Custom Items
* @param \Pimcore\Model\DataObject\OfferToolOfferItem[] $customItems
* @return \Pimcore\Model\DataObject\OfferToolOffer
*/
public function setCustomItems ($customItems) {
	$this->customItems = $this->getClass()->getFieldDefinition("customItems")->preSetData($this, $customItems);
	return $this;
}

protected static $_relationFields = array (
  'items' =>
  array (
    'type' => 'objects',
  ),
  'customItems' =>
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = array (
);

}

