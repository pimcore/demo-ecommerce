<?php 

/** Generated at 2015-03-11T21:36:56+01:00 */

/**
* IP:          10.242.2.6
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

