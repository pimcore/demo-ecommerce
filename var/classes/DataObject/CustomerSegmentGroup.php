<?php 

/** 
* Generated at: 2017-10-11T11:24:35+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (10)
* IP: 192.168.11.5


Fields Summary: 
- name [input]
- reference [input]
- calculated [checkbox]
- showAsFilter [checkbox]
- exportNewsletterProvider [checkbox]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByReference ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByCalculated ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByShowAsFilter ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByExportNewsletterProvider ($value, $limit = 0) 
*/

class CustomerSegmentGroup extends Concrete {

public $o_classId = 36;
public $o_className = "CustomerSegmentGroup";
public $name;
public $reference;
public $calculated;
public $showAsFilter;
public $exportNewsletterProvider;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Segment group name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	return $data;
}

/**
* Set name - Segment group name
* @param string $name
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get reference - Reference
* @return string
*/
public function getReference () {
	$preValue = $this->preGetValue("reference"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->reference;
	return $data;
}

/**
* Set reference - Reference
* @param string $reference
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public function setReference ($reference) {
	$this->reference = $reference;
	return $this;
}

/**
* Get calculated - calculated
* @return boolean
*/
public function getCalculated () {
	$preValue = $this->preGetValue("calculated"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->calculated;
	return $data;
}

/**
* Set calculated - calculated
* @param boolean $calculated
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public function setCalculated ($calculated) {
	$this->calculated = $calculated;
	return $this;
}

/**
* Get showAsFilter - Show as Filter
* @return boolean
*/
public function getShowAsFilter () {
	$preValue = $this->preGetValue("showAsFilter"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->showAsFilter;
	return $data;
}

/**
* Set showAsFilter - Show as Filter
* @param boolean $showAsFilter
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public function setShowAsFilter ($showAsFilter) {
	$this->showAsFilter = $showAsFilter;
	return $this;
}

/**
* Get exportNewsletterProvider - Export to newsletter provider
* @return boolean
*/
public function getExportNewsletterProvider () {
	$preValue = $this->preGetValue("exportNewsletterProvider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->exportNewsletterProvider;
	return $data;
}

/**
* Set exportNewsletterProvider - Export to newsletter provider
* @param boolean $exportNewsletterProvider
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public function setExportNewsletterProvider ($exportNewsletterProvider) {
	$this->exportNewsletterProvider = $exportNewsletterProvider;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

