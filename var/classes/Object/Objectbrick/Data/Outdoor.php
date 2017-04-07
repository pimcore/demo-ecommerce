<?php 

/** Generated at 2016-04-14T10:55:09+02:00 */

/**
* IP:          192.168.11.5
*/


namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class Outdoor extends Object\Objectbrick\Data\AbstractData  {

public $type = "outdoor";
public $specs;


/**
* Set specs - 
* @return array
*/
public function getSpecs () {
	$data = $this->specs;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("specs")->isEmpty($data)) {
		return $this->getValueFromParent("specs");
	}
	 return $data;
}

/**
* Set specs - 
* @param array $specs
* @return \Pimcore\Model\Object\Outdoor
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}

