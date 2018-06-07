<?php 

/** 
* Generated at: 2018-06-07T15:45:51+02:00


Fields Summary: 
 - weight [numeric]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class Weight extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "weight";
public $weight;


/**
* Set weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Weight
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

}

