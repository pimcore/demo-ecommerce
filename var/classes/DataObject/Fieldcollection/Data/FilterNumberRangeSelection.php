<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - ranges [structuredTable]
 - preSelectFrom [numeric]
 - preSelectTo [numeric]
 - scriptPath [input]
 - unit [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterNumberRangeSelection extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType  {

protected $type = "FilterNumberRangeSelection";
protected $label;
protected $field;
protected $ranges;
protected $preSelectFrom;
protected $preSelectTo;
protected $scriptPath;
protected $unit;


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
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
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
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get ranges - Ranges
* @return \Pimcore\Model\DataObject\Data\StructuredTable
*/
public function getRanges () {
	$data = $this->ranges;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set ranges - Ranges
* @param \Pimcore\Model\DataObject\Data\StructuredTable $ranges
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
*/
public function setRanges ($ranges) {
	$this->ranges = $ranges;
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
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
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
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
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
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get unit - Unit
* @return string
*/
public function getUnit () {
	$data = $this->unit;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set unit - Unit
* @param string $unit
* @return \Pimcore\Model\DataObject\FilterNumberRangeSelection
*/
public function setUnit ($unit) {
	$this->unit = $unit;
	return $this;
}

}

