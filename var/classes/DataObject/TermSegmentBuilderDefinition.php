<?php 

/** 
* Generated at: 2018-09-07T16:07:17+02:00
* Inheritance: no
* Variants: no


Fields Summary: 
- name [input]
- terms [block]
-- term [input]
-- phrases [table]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\TermSegmentBuilderDefinition\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\TermSegmentBuilderDefinition\Listing getByTerms ($value, $limit = 0) 
*/

class TermSegmentBuilderDefinition extends \CustomerManagementFrameworkBundle\Model\AbstractTermSegmentBuilderDefinition {

protected $o_classId = "39";
protected $o_className = "TermSegmentBuilderDefinition";
protected $name;
protected $terms;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\TermSegmentBuilderDefinition
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\TermSegmentBuilderDefinition
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get terms - Terms
* @return \Pimcore\Model\DataObject\Data\BlockElement[][]
*/
public function getTerms () {
	$preValue = $this->preGetValue("terms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("terms")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set terms - Terms
* @param \Pimcore\Model\DataObject\Data\BlockElement[][] $terms
* @return \Pimcore\Model\DataObject\TermSegmentBuilderDefinition
*/
public function setTerms ($terms) {
	$this->terms = $this->getClass()->getFieldDefinition("terms")->preSetData($this, $terms);
	return $this;
}

protected static $_relationFields = array (
);

protected $lazyLoadedFields = array (
);

}

