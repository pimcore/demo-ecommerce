<?php 

/** 
* Generated at: 2017-07-17T15:06:00+02:00
* IP: 192.168.11.5


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - ranges [structuredTable]
 - preSelectFrom [numeric]
 - preSelectTo [numeric]
 - scriptPath [input]
 - unit [input]
*/ 

namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class FilterNumberRangeSelection extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType  {

public $type = "FilterNumberRangeSelection";
public $label;
public $field;
public $ranges;
public $preSelectFrom;
public $preSelectTo;
public $scriptPath;
public $unit;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
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
	 return $data;
}

/**
* Set field - Field
* @param \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection $field
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get ranges - Ranges
* @return \Pimcore\Model\Object\Data\StructuredTable
*/
public function getRanges () {
	$data = $this->ranges;
	 return $data;
}

/**
* Set ranges - Ranges
* @param \Pimcore\Model\Object\Data\StructuredTable $ranges
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
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
	 return $data;
}

/**
* Set preSelectFrom - Pre Select From
* @param float $preSelectFrom
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
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
	 return $data;
}

/**
* Set preSelectTo - Pre Select To
* @param float $preSelectTo
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
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
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
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
	 return $data;
}

/**
* Set unit - Unit
* @param string $unit
* @return \Pimcore\Model\Object\FilterNumberRangeSelection
*/
public function setUnit ($unit) {
	$this->unit = $unit;
	return $this;
}

}

