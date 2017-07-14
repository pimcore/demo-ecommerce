<?php 

/** 
* Generated at: 2017-06-23T13:19:43+02:00
* IP: 192.168.11.87


Fields Summary: 
 - specs [multiselect]
*/ 

namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class ShoeDetails extends Object\Objectbrick\Data\AbstractData  {

public $type = "shoeDetails";
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
* @return \Pimcore\Model\Object\ShoeDetails
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}

