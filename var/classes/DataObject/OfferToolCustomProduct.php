<?php

/**
* Generated at: 2017-07-13T17:03:36+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (8)
* IP: 192.168.11.5


Fields Summary:
- OSproductNumber [input]
- OSName [input]
- productGroup [select]
- price [numeric]
*/

namespace Pimcore\Model\DataObject;



/**
* @method \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByOSproductNumber ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByOSName ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByProductGroup ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\OfferToolCustomProduct\Listing getByPrice ($value, $limit = 0)
*/

class OfferToolCustomProduct extends \Pimcore\Bundle\EcommerceFrameworkBundle\OfferTool\AbstractOfferToolProduct {

public $o_classId = 32;
public $o_className = "OfferToolCustomProduct";
public $OSproductNumber;
public $OSName;
public $productGroup;
public $price;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get OSproductNumber - Product Number
* @return string
*/
public function getOSproductNumber () {
	$preValue = $this->preGetValue("OSproductNumber");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->OSproductNumber;
	return $data;
}

/**
* Set OSproductNumber - Product Number
* @param string $OSproductNumber
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setOSproductNumber ($OSproductNumber) {
	$this->OSproductNumber = $OSproductNumber;
	return $this;
}

/**
* Get OSName - Product Name
* @return string
*/
public function getOSName () {
	$preValue = $this->preGetValue("OSName");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->OSName;
	return $data;
}

/**
* Set OSName - Product Name
* @param string $OSName
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setOSName ($OSName) {
	$this->OSName = $OSName;
	return $this;
}

/**
* Get productGroup - Product Group
* @return string
*/
public function getProductGroup () {
	$preValue = $this->preGetValue("productGroup");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->productGroup;
	return $data;
}

/**
* Set productGroup - Product Group
* @param string $productGroup
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setProductGroup ($productGroup) {
	$this->productGroup = $productGroup;
	return $this;
}

/**
* Get price - Price
* @return string
*/
public function getPrice () {
	$preValue = $this->preGetValue("price");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->price;
	return $data;
}

/**
* Set price - Price
* @param string $price
* @return \Pimcore\Model\DataObject\OfferToolCustomProduct
*/
public function setPrice ($price) {
	$this->price = $price;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

