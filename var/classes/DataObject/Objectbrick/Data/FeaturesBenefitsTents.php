<?php 

/** 
* Generated at: 2018-06-07T15:45:47+02:00


Fields Summary: 
 - specs [multiselect]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class FeaturesBenefitsTents extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "featuresBenefitsTents";
public $specs;


/**
* Set specs - 
* @return array
*/
public function getSpecs () {
	$data = $this->specs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("specs")->isEmpty($data)) {
		return $this->getValueFromParent("specs");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set specs - 
* @param array $specs
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesBenefitsTents
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}

