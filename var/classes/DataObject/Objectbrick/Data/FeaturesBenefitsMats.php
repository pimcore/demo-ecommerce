<?php

/**
* Generated at: 2017-06-23T13:19:42+02:00
* IP: 192.168.11.87


Fields Summary:
 - specs [multiselect]
*/

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class FeaturesBenefitsMats extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "featuresBenefitsMats";
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
	 return $data;
}

/**
* Set specs -
* @param array $specs
* @return \Pimcore\Model\DataObject\FeaturesBenefitsMats
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}

