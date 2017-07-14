<?php 

/** 
* Generated at: 2017-06-23T13:19:43+02:00
* IP: 192.168.11.87


Fields Summary: 
 - groundSheet1 [image]
 - groundSheet2 [image]
*/ 

namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class TentGroundsheet extends Object\Objectbrick\Data\AbstractData  {

public $type = "tentGroundsheet";
public $groundSheet1;
public $groundSheet2;


/**
* Set groundSheet1 - Groundsheet 1
* @return \Pimcore\Model\Asset\Image
*/
public function getGroundSheet1 () {
	$data = $this->groundSheet1;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("groundSheet1")->isEmpty($data)) {
		return $this->getValueFromParent("groundSheet1");
	}
	 return $data;
}

/**
* Set groundSheet1 - Groundsheet 1
* @param \Pimcore\Model\Asset\Image $groundSheet1
* @return \Pimcore\Model\Object\TentGroundsheet
*/
public function setGroundSheet1 ($groundSheet1) {
	$this->groundSheet1 = $groundSheet1;
	return $this;
}

/**
* Set groundSheet2 - Groundsheet 2
* @return \Pimcore\Model\Asset\Image
*/
public function getGroundSheet2 () {
	$data = $this->groundSheet2;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("groundSheet2")->isEmpty($data)) {
		return $this->getValueFromParent("groundSheet2");
	}
	 return $data;
}

/**
* Set groundSheet2 - Groundsheet 2
* @param \Pimcore\Model\Asset\Image $groundSheet2
* @return \Pimcore\Model\Object\TentGroundsheet
*/
public function setGroundSheet2 ($groundSheet2) {
	$this->groundSheet2 = $groundSheet2;
	return $this;
}

}

