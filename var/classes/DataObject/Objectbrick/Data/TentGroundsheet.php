<?php 

/** 
* Generated at: 2018-09-07T16:07:22+02:00


Fields Summary: 
 - groundSheet1 [image]
 - groundSheet2 [image]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class TentGroundsheet extends DataObject\Objectbrick\Data\AbstractData  {

protected $type = "tentGroundsheet";
protected $groundSheet1;
protected $groundSheet2;


/**
* Get groundSheet1 - Groundsheet 1
* @return \Pimcore\Model\Asset\Image
*/
public function getGroundSheet1 () {
	$data = $this->groundSheet1;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("groundSheet1")->isEmpty($data)) {
		return $this->getValueFromParent("groundSheet1");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set groundSheet1 - Groundsheet 1
* @param \Pimcore\Model\Asset\Image $groundSheet1
* @return \Pimcore\Model\DataObject\Objectbrick\Data\TentGroundsheet
*/
public function setGroundSheet1 ($groundSheet1) {
	$this->groundSheet1 = $groundSheet1;
	return $this;
}

/**
* Get groundSheet2 - Groundsheet 2
* @return \Pimcore\Model\Asset\Image
*/
public function getGroundSheet2 () {
	$data = $this->groundSheet2;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("groundSheet2")->isEmpty($data)) {
		return $this->getValueFromParent("groundSheet2");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set groundSheet2 - Groundsheet 2
* @param \Pimcore\Model\Asset\Image $groundSheet2
* @return \Pimcore\Model\DataObject\Objectbrick\Data\TentGroundsheet
*/
public function setGroundSheet2 ($groundSheet2) {
	$this->groundSheet2 = $groundSheet2;
	return $this;
}

}

