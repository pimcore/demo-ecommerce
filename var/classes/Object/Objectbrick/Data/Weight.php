<?php 

/** 
* Generated at: 2017-06-23T13:19:43+02:00
* IP: 192.168.11.87


Fields Summary: 
 - weight [numeric]
*/ 

namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class Weight extends Object\Objectbrick\Data\AbstractData  {

public $type = "weight";
public $weight;


/**
* Set weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\Object\Weight
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

}

