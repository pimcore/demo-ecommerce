<?php 

/** 
* Generated at: 2017-06-23T13:19:42+02:00
* IP: 192.168.11.87


Fields Summary: 
 - styles [multihref]
 - fittings [multiselect]
 - zips [select]
*/ 

namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class Apparel extends Object\Objectbrick\Data\AbstractData  {

public $type = "apparel";
public $styles;
public $fittings;
public $zips;


/**
* Set styles - Styles
* @return \Pimcore\Model\Object\productTechnology[]
*/
public function getStyles () {
	$data = $this->getDefinition()->getFieldDefinition("styles")->preGetData($this);
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("styles")->isEmpty($data)) {
		return $this->getValueFromParent("styles");
	}
	 return $data;
}

/**
* Set styles - Styles
* @param \Pimcore\Model\Object\productTechnology[] $styles
* @return \Pimcore\Model\Object\Apparel
*/
public function setStyles ($styles) {
	$this->styles = $this->getDefinition()->getFieldDefinition("styles")->preSetData($this, $styles);
	return $this;
}

/**
* Set fittings - Fittings
* @return array
*/
public function getFittings () {
	$data = $this->fittings;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fittings")->isEmpty($data)) {
		return $this->getValueFromParent("fittings");
	}
	 return $data;
}

/**
* Set fittings - Fittings
* @param array $fittings
* @return \Pimcore\Model\Object\Apparel
*/
public function setFittings ($fittings) {
	$this->fittings = $fittings;
	return $this;
}

/**
* Set zips - Zips
* @return string
*/
public function getZips () {
	$data = $this->zips;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("zips")->isEmpty($data)) {
		return $this->getValueFromParent("zips");
	}
	 return $data;
}

/**
* Set zips - Zips
* @param string $zips
* @return \Pimcore\Model\Object\Apparel
*/
public function setZips ($zips) {
	$this->zips = $zips;
	return $this;
}

}

