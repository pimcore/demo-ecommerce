<?php 

/** 
* Generated at: 2018-06-07T15:45:44+02:00
* Inheritance: no
* Variants: no


Fields Summary: 
- name [input]
- tokenSettings [fieldcollections]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherSeries\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherSeries\Listing getByTokenSettings ($value, $limit = 0) 
*/

class OnlineShopVoucherSeries extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractVoucherSeries {

public $o_classId = 33;
public $o_className = "OnlineShopVoucherSeries";
public $name;
public $tokenSettings;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getTokenSettings () {
	$preValue = $this->preGetValue("tokenSettings"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("tokenSettings")->preGetData($this);
	 return $data;
}

/**
* Set tokenSettings - Token Settings
* @param \Pimcore\Model\DataObject\Fieldcollection $tokenSettings
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public function setTokenSettings ($tokenSettings) {
	$this->tokenSettings = $this->getClass()->getFieldDefinition("tokenSettings")->preSetData($this, $tokenSettings);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

