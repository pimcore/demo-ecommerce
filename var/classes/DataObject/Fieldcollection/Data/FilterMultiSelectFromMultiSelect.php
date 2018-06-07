<?php 

/** 
* Generated at: 2018-06-07T15:45:51+02:00


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - scriptPath [input]
 - UseAndCondition [checkbox]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterMultiSelectFromMultiSelect extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType  {

public $type = "FilterMultiSelectFromMultiSelect";
public $label;
public $field;
public $scriptPath;
public $UseAndCondition;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\DataObject\FilterMultiSelectFromMultiSelect
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection
*/
public function getField () {
	$data = $this->field;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set field - Field
* @param \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection $field
* @return \Pimcore\Model\DataObject\FilterMultiSelectFromMultiSelect
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\DataObject\FilterMultiSelectFromMultiSelect
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get UseAndCondition - Use And Condition
* @return boolean
*/
public function getUseAndCondition () {
	$data = $this->UseAndCondition;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set UseAndCondition - Use And Condition
* @param boolean $UseAndCondition
* @return \Pimcore\Model\DataObject\FilterMultiSelectFromMultiSelect
*/
public function setUseAndCondition ($UseAndCondition) {
	$this->UseAndCondition = $UseAndCondition;
	return $this;
}

}

