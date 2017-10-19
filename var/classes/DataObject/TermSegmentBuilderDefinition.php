<?php 

/** 
* Generated at: 2017-10-11T11:24:35+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (10)
* IP: 192.168.11.5


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

public $o_classId = 39;
public $o_className = "TermSegmentBuilderDefinition";
public $name;
public $terms;


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
* @return \Pimcore\Model\DataObject\Data\Block
*/
public function getTerms () {
	$preValue = $this->preGetValue("terms"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->terms;
	return $data;
}

/**
* Set terms - Terms
* @param \Pimcore\Model\DataObject\Data\Block $terms
* @return \Pimcore\Model\DataObject\TermSegmentBuilderDefinition
*/
public function setTerms ($terms) {
	$this->terms = $terms;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

