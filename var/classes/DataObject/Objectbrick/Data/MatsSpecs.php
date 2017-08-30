<?php

/**
* Generated at: 2017-06-23T13:19:42+02:00
* IP: 192.168.11.87


Fields Summary:
 - length [numeric]
 - width [numeric]
 - height [numeric]
 - materialTop [input]
 - materialBottom [input]
 - weight [numeric]
 - isCFCfree [checkbox]
 - has3partWaveShape [checkbox]
 - structure [multiselect]
*/

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class MatsSpecs extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "matsSpecs";
public $length;
public $width;
public $height;
public $materialTop;
public $materialBottom;
public $weight;
public $isCFCfree;
public $has3partWaveShape;
public $structure;


/**
* Set length - Length
* @return float
*/
public function getLength () {
	$data = $this->length;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("length")->isEmpty($data)) {
		return $this->getValueFromParent("length");
	}
	 return $data;
}

/**
* Set length - Length
* @param float $length
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setLength ($length) {
	$this->length = $length;
	return $this;
}

/**
* Set width - Width
* @return float
*/
public function getWidth () {
	$data = $this->width;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("width")->isEmpty($data)) {
		return $this->getValueFromParent("width");
	}
	 return $data;
}

/**
* Set width - Width
* @param float $width
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setWidth ($width) {
	$this->width = $width;
	return $this;
}

/**
* Set height - Height
* @return float
*/
public function getHeight () {
	$data = $this->height;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("height")->isEmpty($data)) {
		return $this->getValueFromParent("height");
	}
	 return $data;
}

/**
* Set height - Height
* @param float $height
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setHeight ($height) {
	$this->height = $height;
	return $this;
}

/**
* Set materialTop - Material Top
* @return string
*/
public function getMaterialTop () {
	$data = $this->materialTop;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("materialTop")->isEmpty($data)) {
		return $this->getValueFromParent("materialTop");
	}
	 return $data;
}

/**
* Set materialTop - Material Top
* @param string $materialTop
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setMaterialTop ($materialTop) {
	$this->materialTop = $materialTop;
	return $this;
}

/**
* Set materialBottom - Material Bottom
* @return string
*/
public function getMaterialBottom () {
	$data = $this->materialBottom;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("materialBottom")->isEmpty($data)) {
		return $this->getValueFromParent("materialBottom");
	}
	 return $data;
}

/**
* Set materialBottom - Material Bottom
* @param string $materialBottom
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setMaterialBottom ($materialBottom) {
	$this->materialBottom = $materialBottom;
	return $this;
}

/**
* Set weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Set isCFCfree - Fully bonded CFC-free?
* @return boolean
*/
public function getIsCFCfree () {
	$data = $this->isCFCfree;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("isCFCfree")->isEmpty($data)) {
		return $this->getValueFromParent("isCFCfree");
	}
	 return $data;
}

/**
* Set isCFCfree - Fully bonded CFC-free?
* @param boolean $isCFCfree
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setIsCFCfree ($isCFCfree) {
	$this->isCFCfree = $isCFCfree;
	return $this;
}

/**
* Set has3partWaveShape - Got 3part Wave Shape?
* @return boolean
*/
public function getHas3partWaveShape () {
	$data = $this->has3partWaveShape;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("has3partWaveShape")->isEmpty($data)) {
		return $this->getValueFromParent("has3partWaveShape");
	}
	 return $data;
}

/**
* Set has3partWaveShape - Got 3part Wave Shape?
* @param boolean $has3partWaveShape
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setHas3partWaveShape ($has3partWaveShape) {
	$this->has3partWaveShape = $has3partWaveShape;
	return $this;
}

/**
* Set structure - Structure
* @return array
*/
public function getStructure () {
	$data = $this->structure;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("structure")->isEmpty($data)) {
		return $this->getValueFromParent("structure");
	}
	 return $data;
}

/**
* Set structure - Structure
* @param array $structure
* @return \Pimcore\Model\DataObject\MatsSpecs
*/
public function setStructure ($structure) {
	$this->structure = $structure;
	return $this;
}

}

