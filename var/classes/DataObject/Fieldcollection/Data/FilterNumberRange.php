<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - rangeFrom [numeric]
 - rangeTo [numeric]
 - preSelectFrom [numeric]
 - preSelectTo [numeric]
 - scriptPath [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterNumberRange extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType  {

protected $type = "FilterNumberRange";
protected $label;
protected $field;
protected $rangeFrom;
protected $rangeTo;
protected $preSelectFrom;
protected $preSelectTo;
protected $scriptPath;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection
*/
public function getField () {
	$data = $this->field;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set field - Field
* @param \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection $field
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get rangeFrom - Range From
* @return float
*/
public function getRangeFrom () {
	$data = $this->rangeFrom;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set rangeFrom - Range From
* @param float $rangeFrom
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setRangeFrom ($rangeFrom) {
	$this->rangeFrom = $rangeFrom;
	return $this;
}

/**
* Get rangeTo - Range To
* @return float
*/
public function getRangeTo () {
	$data = $this->rangeTo;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set rangeTo - Range To
* @param float $rangeTo
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setRangeTo ($rangeTo) {
	$this->rangeTo = $rangeTo;
	return $this;
}

/**
* Get preSelectFrom - Pre Select From
* @return float
*/
public function getPreSelectFrom () {
	$data = $this->preSelectFrom;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set preSelectFrom - Pre Select From
* @param float $preSelectFrom
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setPreSelectFrom ($preSelectFrom) {
	$this->preSelectFrom = $preSelectFrom;
	return $this;
}

/**
* Get preSelectTo - Pre Select To
* @return float
*/
public function getPreSelectTo () {
	$data = $this->preSelectTo;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set preSelectTo - Pre Select To
* @param float $preSelectTo
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setPreSelectTo ($preSelectTo) {
	$this->preSelectTo = $preSelectTo;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\DataObject\FilterNumberRange
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

}

