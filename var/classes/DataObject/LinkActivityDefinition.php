<?php 

/** 
* Generated at: 2017-10-11T11:24:36+02:00
* Inheritance: yes
* Variants: no
* Changed by: admin (10)
* IP: 192.168.11.5


Fields Summary: 
- code [input]
- attributeType [input]
- label [input]
- link [link]
- active [select]
- utm_source [input]
- utm_medium [input]
- utm_campaign [input]
- utm_term [input]
- utm_content [input]
- attributes [block]
-- attribute [input]
-- attributeValue [input]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByCode ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByAttributeType ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByLabel ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByLink ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByActive ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_source ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_medium ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_campaign ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_term ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByUtm_content ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\LinkActivityDefinition\Listing getByAttributes ($value, $limit = 0) 
*/

class LinkActivityDefinition extends Concrete {

public $o_classId = 40;
public $o_className = "LinkActivityDefinition";
public $code;
public $attributeType;
public $label;
public $link;
public $active;
public $utm_source;
public $utm_medium;
public $utm_campaign;
public $utm_term;
public $utm_content;
public $attributes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get code - code (cmfa)
* @return string
*/
public function getCode () {
	$preValue = $this->preGetValue("code"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->code;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("code")->isEmpty($data)) {
		return $this->getValueFromParent("code");
	}
	return $data;
}

/**
* Set code - code (cmfa)
* @param string $code
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setCode ($code) {
	$this->code = $code;
	return $this;
}

/**
* Get attributeType - type
* @return string
*/
public function getAttributeType () {
	$preValue = $this->preGetValue("attributeType"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->attributeType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("attributeType")->isEmpty($data)) {
		return $this->getValueFromParent("attributeType");
	}
	return $data;
}

/**
* Set attributeType - type
* @param string $attributeType
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setAttributeType ($attributeType) {
	$this->attributeType = $attributeType;
	return $this;
}

/**
* Get label - label
* @return string
*/
public function getLabel () {
	$preValue = $this->preGetValue("label"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->label;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("label")->isEmpty($data)) {
		return $this->getValueFromParent("label");
	}
	return $data;
}

/**
* Set label - label
* @param string $label
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get link - Landing page link
* @return \Pimcore\Model\DataObject\Data\Link
*/
public function getLink () {
	$preValue = $this->preGetValue("link"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->link;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("link")->isEmpty($data)) {
		return $this->getValueFromParent("link");
	}
	return $data;
}

/**
* Set link - Landing page link
* @param \Pimcore\Model\DataObject\Data\Link $link
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setLink ($link) {
	$this->link = $link;
	return $this;
}

/**
* Get active - active
* @return string
*/
public function getActive () {
	$preValue = $this->preGetValue("active"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->active;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("active")->isEmpty($data)) {
		return $this->getValueFromParent("active");
	}
	return $data;
}

/**
* Set active - active
* @param string $active
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setActive ($active) {
	$this->active = $active;
	return $this;
}

/**
* Get utm_source - Campaign Source (utm_source)
* @return string
*/
public function getUtm_source () {
	$preValue = $this->preGetValue("utm_source"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_source;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_source")->isEmpty($data)) {
		return $this->getValueFromParent("utm_source");
	}
	return $data;
}

/**
* Set utm_source - Campaign Source (utm_source)
* @param string $utm_source
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_source ($utm_source) {
	$this->utm_source = $utm_source;
	return $this;
}

/**
* Get utm_medium - Campaign Medium (utm_medium)
* @return string
*/
public function getUtm_medium () {
	$preValue = $this->preGetValue("utm_medium"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_medium;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_medium")->isEmpty($data)) {
		return $this->getValueFromParent("utm_medium");
	}
	return $data;
}

/**
* Set utm_medium - Campaign Medium (utm_medium)
* @param string $utm_medium
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_medium ($utm_medium) {
	$this->utm_medium = $utm_medium;
	return $this;
}

/**
* Get utm_campaign - Campaign Name (utm_campaign)
* @return string
*/
public function getUtm_campaign () {
	$preValue = $this->preGetValue("utm_campaign"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_campaign;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_campaign")->isEmpty($data)) {
		return $this->getValueFromParent("utm_campaign");
	}
	return $data;
}

/**
* Set utm_campaign - Campaign Name (utm_campaign)
* @param string $utm_campaign
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_campaign ($utm_campaign) {
	$this->utm_campaign = $utm_campaign;
	return $this;
}

/**
* Get utm_term - Campaign Term (utm_term)
* @return string
*/
public function getUtm_term () {
	$preValue = $this->preGetValue("utm_term"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_term;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_term")->isEmpty($data)) {
		return $this->getValueFromParent("utm_term");
	}
	return $data;
}

/**
* Set utm_term - Campaign Term (utm_term)
* @param string $utm_term
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_term ($utm_term) {
	$this->utm_term = $utm_term;
	return $this;
}

/**
* Get utm_content - Campaign Content (utm_content)
* @return string
*/
public function getUtm_content () {
	$preValue = $this->preGetValue("utm_content"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->utm_content;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("utm_content")->isEmpty($data)) {
		return $this->getValueFromParent("utm_content");
	}
	return $data;
}

/**
* Set utm_content - Campaign Content (utm_content)
* @param string $utm_content
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setUtm_content ($utm_content) {
	$this->utm_content = $utm_content;
	return $this;
}

/**
* Get attributes - Additional attributes
* @return \Pimcore\Model\DataObject\Data\Block
*/
public function getAttributes () {
	$preValue = $this->preGetValue("attributes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->attributes;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("attributes")->isEmpty($data)) {
		return $this->getValueFromParent("attributes");
	}
	return $data;
}

/**
* Set attributes - Additional attributes
* @param \Pimcore\Model\DataObject\Data\Block $attributes
* @return \Pimcore\Model\DataObject\LinkActivityDefinition
*/
public function setAttributes ($attributes) {
	$this->attributes = $attributes;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

