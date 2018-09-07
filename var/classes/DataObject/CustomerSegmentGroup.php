<?php 

/** 
* Generated at: 2018-09-07T16:07:17+02:00
* Inheritance: no
* Variants: no


Fields Summary: 
- name [input]
- reference [input]
- calculated [checkbox]
- showAsFilter [checkbox]
- filterSortOrder [numeric]
- exportNewsletterProvider [checkbox]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByReference ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByCalculated ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByShowAsFilter ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByFilterSortOrder ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegmentGroup\Listing getByExportNewsletterProvider ($value, $limit = 0) 
*/

class CustomerSegmentGroup extends Concrete {

protected $o_classId = "36";
protected $o_className = "CustomerSegmentGroup";
protected $name;
protected $reference;
protected $calculated;
protected $showAsFilter;
protected $filterSortOrder;
protected $exportNewsletterProvider;


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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
* Get filterSortOrder - Filter sort order
* @return int
*/
public function getFilterSortOrder () {
	$preValue = $this->preGetValue("filterSortOrder"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->filterSortOrder;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set filterSortOrder - Filter sort order
* @param int $filterSortOrder
* @return \Pimcore\Model\DataObject\CustomerSegmentGroup
*/
public function setFilterSortOrder ($filterSortOrder) {
	$this->filterSortOrder = $filterSortOrder;
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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

protected $lazyLoadedFields = array (
);

}

