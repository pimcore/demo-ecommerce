<?php

/** Generated at 2016-05-04T17:00:32+02:00 */

/**
* Inheritance: yes
* Variants   : no
* Changed by : demo (3)
* IP:          192.168.11.5
*/


namespace Pimcore\Model\DataObject;


/**
* @method static \Pimcore\Model\DataObject\ProductCategory\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0)
* @method static \Pimcore\Model\DataObject\ProductCategory\Listing getByFilterdefinition ($value, $limit = 0)
*/

class ProductCategory extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractCategory {

public $o_classId = 14;
public $o_className = "ProductCategory";
public $localizedfields;
public $filterdefinition;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - Basedata
* @return \Pimcore\Model\DataObject\Localizedfield
*/
public function getLocalizedfields () {
	$preValue = $this->preGetValue("localizedfields");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("localizedfields")->isEmpty($data)) {
		return $this->getValueFromParent("localizedfields");
	}
	return $data;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("image", $language);
	$preValue = $this->preGetValue("image");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get name - Name
* @return string
*/
public function getName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	$preValue = $this->preGetValue("name");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get seoname - SEO Name
* @return string
*/
public function getSeoname ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("seoname", $language);
	$preValue = $this->preGetValue("seoname");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get seotext - SEO Text (fallback)
* @return string
*/
public function getSeotext ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("seotext", $language);
	$preValue = $this->preGetValue("seotext");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get sortkey - Sort Key
* @return float
*/
public function getSortkey ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("sortkey", $language);
	$preValue = $this->preGetValue("sortkey");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Set localizedfields - Basedata
* @param \Pimcore\Model\DataObject\Localizedfield $localizedfields
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setImage ($image, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("image", $image, $language);
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Set seoname - SEO Name
* @param string $seoname
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setSeoname ($seoname, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("seoname", $seoname, $language);
	return $this;
}

/**
* Set seotext - SEO Text (fallback)
* @param string $seotext
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setSeotext ($seotext, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("seotext", $seotext, $language);
	return $this;
}

/**
* Set sortkey - Sort Key
* @param float $sortkey
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setSortkey ($sortkey, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("sortkey", $sortkey, $language);
	return $this;
}

/**
* Get filterdefinition - Filterdefinition
* @return \Pimcore\Model\DataObject\FilterDefinition
*/
public function getFilterdefinition () {
	$preValue = $this->preGetValue("filterdefinition");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("filterdefinition")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("filterdefinition")->isEmpty($data)) {
		return $this->getValueFromParent("filterdefinition");
	}
	return $data;
}

/**
* Set filterdefinition - Filterdefinition
* @param \Pimcore\Model\DataObject\FilterDefinition $filterdefinition
* @return \Pimcore\Model\DataObject\ProductCategory
*/
public function setFilterdefinition ($filterdefinition) {
	$this->filterdefinition = $this->getClass()->getFieldDefinition("filterdefinition")->preSetData($this, $filterdefinition);
	return $this;
}

protected static $_relationFields = array (
  'filterdefinition' =>
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

