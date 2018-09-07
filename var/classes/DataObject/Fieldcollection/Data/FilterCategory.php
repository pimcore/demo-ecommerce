<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - label [input]
 - preSelect [href]
 - rootCategory [href]
 - includeParentCategories [checkbox]
 - scriptPath [input]
 - availableCategories [objects]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterCategory extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\CategoryFilterDefinitionType  {

protected $type = "FilterCategory";
protected $label;
protected $preSelect;
protected $rootCategory;
protected $includeParentCategories;
protected $scriptPath;
protected $availableCategories;


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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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

