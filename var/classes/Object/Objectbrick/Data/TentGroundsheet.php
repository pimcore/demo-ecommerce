<?php 

/** Generated at 2015-03-11T21:36:37+01:00 */

/**
* IP:          10.242.2.6
*/


namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class TentGroundsheet extends Object\Objectbrick\Data\AbstractData  {

public $type = "tentGroundsheet";
public $groundSheet1;
public $groundSheet2;


/**
* Set groundSheet1 - Groundsheet 1
* @return Asset_Image
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
* @param Asset_Image $groundSheet1
* @return \Pimcore\Model\Object\TentGroundsheet
*/
public function setGroundSheet1 ($groundSheet1) {
	$this->groundSheet1 = $groundSheet1;
	return $this;
}

/**
* Set groundSheet2 - Groundsheet 2
* @return Asset_Image
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
* @param Asset_Image $groundSheet2
* @return \Pimcore\Model\Object\TentGroundsheet
*/
public function setGroundSheet2 ($groundSheet2) {
	$this->groundSheet2 = $groundSheet2;
	return $this;
}

}

