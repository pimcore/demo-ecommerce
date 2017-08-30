<?php

/** Generated at 2016-04-07T20:00:52+02:00 */

/**
* IP:          10.242.2.6
*/


namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterCategory extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\CategoryFilterDefinitionType  {

public $type = "FilterCategory";
public $label;
public $preSelect;
public $rootCategory;
public $includeParentCategories;
public $scriptPath;
public $availableCategories;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\DataObject\FilterCategory
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get preSelect - Pre Select
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function getPreSelect () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("preSelect");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Set preSelect - Pre Select
* @param \Pimcore\Model\DataObject\ProductCategory $preSelect
* @return \Pimcore\Model\DataObject\FilterCategory
*/
public function setPreSelect ($preSelect) {
	$this->preSelect = $this->getDefinition()->getFieldDefinition("preSelect")->preSetData($this, $preSelect);
	return $this;
}

/**
* Get rootCategory - Root Category
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function getRootCategory () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("rootCategory");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Set rootCategory - Root Category
* @param \Pimcore\Model\DataObject\ProductCategory $rootCategory
* @return \Pimcore\Model\DataObject\FilterCategory
*/
public function setRootCategory ($rootCategory) {
	$this->rootCategory = $this->getDefinition()->getFieldDefinition("rootCategory")->preSetData($this, $rootCategory);
	return $this;
}

/**
* Get includeParentCategories - Include SubCategories
* @return boolean
*/
public function getIncludeParentCategories () {
	$data = $this->includeParentCategories;
	 return $data;
}

/**
* Set includeParentCategories - Include SubCategories
* @param boolean $includeParentCategories
* @return \Pimcore\Model\DataObject\FilterCategory
*/
public function setIncludeParentCategories ($includeParentCategories) {
	$this->includeParentCategories = $includeParentCategories;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\DataObject\FilterCategory
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

/**
* Get availableCategories - Available Categories
* @return \Pimcore\Model\DataObject\ProductCategory[]
*/
public function getAvailableCategories () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("availableCategories");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Set availableCategories - Available Categories
* @param \Pimcore\Model\DataObject\ProductCategory[] $availableCategories
* @return \Pimcore\Model\DataObject\FilterCategory
*/
public function setAvailableCategories ($availableCategories) {
	$this->availableCategories = $this->getDefinition()->getFieldDefinition("availableCategories")->preSetData($this, $availableCategories);
	return $this;
}

}

