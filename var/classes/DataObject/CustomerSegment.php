<?php 

/** 
* Generated at: 2018-07-16T21:14:18+02:00
* Inheritance: no
* Variants: no
* IP: 10.242.2.5


Fields Summary: 
- name [input]
- group [href]
- reference [input]
- calculated [checkbox]
- useAsTargetGroup [checkbox]
- targetGroup [targetGroup]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\CustomerSegment\Listing getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegment\Listing getByGroup ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegment\Listing getByReference ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegment\Listing getByCalculated ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegment\Listing getByUseAsTargetGroup ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\CustomerSegment\Listing getByTargetGroup ($value, $limit = 0) 
*/

class CustomerSegment extends \CustomerManagementFrameworkBundle\Model\AbstractCustomerSegment {

public $o_classId = "37";
public $o_className = "CustomerSegment";
public $name;
public $group;
public $reference;
public $calculated;
public $useAsTargetGroup;
public $targetGroup;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Segment name
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
* Set name - Segment name
* @param string $name
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get group - Group
* @return \Pimcore\Model\DataObject\AbstractObject
*/
public function getGroup () {
	$preValue = $this->preGetValue("group"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("group")->preGetData($this);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set group - Group
* @param \Pimcore\Model\DataObject\AbstractObject $group
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public function setGroup ($group) {
	$this->group = $this->getClass()->getFieldDefinition("group")->preSetData($this, $group);
	return $this;
}

/**
* Get reference - Reference
* @return string
*/
public function getReference () {
	$preValue = $this->preGetValue("reference"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->reference;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set reference - Reference
* @param string $reference
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public function setReference ($reference) {
	$this->reference = $reference;
	return $this;
}

/**
* Get calculated - calculated
* @return boolean
*/
public function getCalculated () {
	$preValue = $this->preGetValue("calculated"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->calculated;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set calculated - calculated
* @param boolean $calculated
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public function setCalculated ($calculated) {
	$this->calculated = $calculated;
	return $this;
}

/**
* Get useAsTargetGroup - Use As Target Group
* @return boolean
*/
public function getUseAsTargetGroup () {
	$preValue = $this->preGetValue("useAsTargetGroup"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->useAsTargetGroup;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set useAsTargetGroup - Use As Target Group
* @param boolean $useAsTargetGroup
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public function setUseAsTargetGroup ($useAsTargetGroup) {
	$this->useAsTargetGroup = $useAsTargetGroup;
	return $this;
}

/**
* Get targetGroup - Linked TargetGroup
* @return string
*/
public function getTargetGroup () {
	$preValue = $this->preGetValue("targetGroup"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->targetGroup;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	return $data;
}

/**
* Set targetGroup - Linked TargetGroup
* @param string $targetGroup
* @return \Pimcore\Model\DataObject\CustomerSegment
*/
public function setTargetGroup ($targetGroup) {
	$this->targetGroup = $targetGroup;
	return $this;
}

protected static $_relationFields = array (
  'group' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'group',
);

}

