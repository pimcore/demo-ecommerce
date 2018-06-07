<?php 

/** 
* Generated at: 2018-06-07T15:45:46+02:00


Fields Summary: 
 - styles [multihref]
 - fittings [multiselect]
 - zips [select]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class Apparel extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "apparel";
public $styles;
public $fittings;
public $zips;


/**
* Set styles - Styles
* @return \Pimcore\Model\DataObject\productTechnology[]
*/
public function getStyles () {
	$data = $this->getDefinition()->getFieldDefinition("styles")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("styles")->isEmpty($data)) {
		return $this->getValueFromParent("styles");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set styles - Styles
* @param \Pimcore\Model\DataObject\productTechnology[] $styles
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Apparel
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
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fittings")->isEmpty($data)) {
		return $this->getValueFromParent("fittings");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set fittings - Fittings
* @param array $fittings
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Apparel
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
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("zips")->isEmpty($data)) {
		return $this->getValueFromParent("zips");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set zips - Zips
* @param string $zips
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Apparel
*/
public function setZips ($zips) {
	$this->zips = $zips;
	return $this;
}

}

