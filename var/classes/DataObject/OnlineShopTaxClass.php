<?php 

/** 
* Generated at: 2018-09-07T16:07:17+02:00
* Inheritance: no
* Variants: no


Fields Summary: 
- taxEntryCombinationType [select]
- taxEntries [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OnlineShopTaxClass\Listing getByTaxEntryCombinationType ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopTaxClass\Listing getByTaxEntries ($value, $limit = 0) 
*/

class OnlineShopTaxClass extends Concrete {

protected $o_classId = "35";
protected $o_className = "OnlineShopTaxClass";
protected $taxEntryCombinationType;
protected $taxEntries;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OnlineShopTaxClass
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get taxEntryCombinationType - Tax Entry Combination Type
* @return string
*/
public function getTaxEntryCombinationType () {
	$preValue = $this->preGetValue("taxEntryCombinationType"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->taxEntryCombinationType;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set taxEntryCombinationType - Tax Entry Combination Type
* @param string $taxEntryCombinationType
* @return \Pimcore\Model\DataObject\OnlineShopTaxClass
*/
public function setTaxEntryCombinationType ($taxEntryCombinationType) {
	$this->taxEntryCombinationType = $taxEntryCombinationType;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getTaxEntries () {
	$preValue = $this->preGetValue("taxEntries"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("taxEntries")->preGetData($this);
	 return $data;
}

/**
* Set taxEntries - Tax Entries
* @param \Pimcore\Model\DataObject\Fieldcollection $taxEntries
* @return \Pimcore\Model\DataObject\OnlineShopTaxClass
*/
public function setTaxEntries ($taxEntries) {
	$this->taxEntries = $this->getClass()->getFieldDefinition("taxEntries")->preSetData($this, $taxEntries);
	return $this;
}

protected static $_relationFields = array (
);

protected $lazyLoadedFields = array (
);

}

