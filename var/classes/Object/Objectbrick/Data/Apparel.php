<?php 

/** Generated at 2015-03-11T21:34:17+01:00 */

/**
* IP:          10.242.2.6
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
* @return array
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
* @param array $styles
* @return \Pimcore\Model\Object\Apparel
*/
public function setStyles ($styles) {
	$this->styles = $this->getDefinition()->getFieldDefinition("styles")->preSetData($this, $styles);
	return $this;
}

/**
* Set fittings - Fittings
* @return string
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
* @param string $fittings
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

