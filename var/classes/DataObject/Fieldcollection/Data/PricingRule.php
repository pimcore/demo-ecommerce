<?php 

/** 
* Generated at: 2018-06-07T15:45:51+02:00


Fields Summary: 
 - ruleId [numeric]
 - name [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class PricingRule extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "PricingRule";
public $ruleId;
public $name;


/**
* Get ruleId - Rule Id
* @return float
*/
public function getRuleId () {
	$data = $this->ruleId;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set ruleId - Rule Id
* @param float $ruleId
* @return \Pimcore\Model\DataObject\PricingRule
*/
public function setRuleId ($ruleId) {
	$this->ruleId = $ruleId;
	return $this;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\PricingRule
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

}

