<?php 

/** 
* Generated at: 2018-06-07T15:45:49+02:00


Fields Summary: 
 - footTypes [multiselect]
 - gaitTypes [multiselect]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class Shoe extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "shoe";
public $footTypes;
public $gaitTypes;


/**
* Set footTypes - Foot Type
* @return array
*/
public function getFootTypes () {
	$data = $this->footTypes;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("footTypes")->isEmpty($data)) {
		return $this->getValueFromParent("footTypes");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set footTypes - Foot Type
* @param array $footTypes
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Shoe
*/
public function setFootTypes ($footTypes) {
	$this->footTypes = $footTypes;
	return $this;
}

/**
* Set gaitTypes - Gait Types
* @return array
*/
public function getGaitTypes () {
	$data = $this->gaitTypes;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("gaitTypes")->isEmpty($data)) {
		return $this->getValueFromParent("gaitTypes");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set gaitTypes - Gait Types
* @param array $gaitTypes
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Shoe
*/
public function setGaitTypes ($gaitTypes) {
	$this->gaitTypes = $gaitTypes;
	return $this;
}

}

