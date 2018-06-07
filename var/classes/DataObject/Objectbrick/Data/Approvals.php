<?php 

/** 
* Generated at: 2018-06-07T15:45:46+02:00


Fields Summary: 
 - fifaApproved [checkbox]
 - fifaInspected [checkbox]
 - imsChecked [checkbox]
 - ihfApproved [checkbox]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class Approvals extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "approvals";
public $fifaApproved;
public $fifaInspected;
public $imsChecked;
public $ihfApproved;


/**
* Set fifaApproved - Product is FIFA approved?
* @return boolean
*/
public function getFifaApproved () {
	$data = $this->fifaApproved;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fifaApproved")->isEmpty($data)) {
		return $this->getValueFromParent("fifaApproved");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set fifaApproved - Product is FIFA approved?
* @param boolean $fifaApproved
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Approvals
*/
public function setFifaApproved ($fifaApproved) {
	$this->fifaApproved = $fifaApproved;
	return $this;
}

/**
* Set fifaInspected - Product is FIFA inspected?
* @return boolean
*/
public function getFifaInspected () {
	$data = $this->fifaInspected;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fifaInspected")->isEmpty($data)) {
		return $this->getValueFromParent("fifaInspected");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set fifaInspected - Product is FIFA inspected?
* @param boolean $fifaInspected
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Approvals
*/
public function setFifaInspected ($fifaInspected) {
	$this->fifaInspected = $fifaInspected;
	return $this;
}

/**
* Set imsChecked - Product is IMS approved?
* @return boolean
*/
public function getImsChecked () {
	$data = $this->imsChecked;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("imsChecked")->isEmpty($data)) {
		return $this->getValueFromParent("imsChecked");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set imsChecked - Product is IMS approved?
* @param boolean $imsChecked
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Approvals
*/
public function setImsChecked ($imsChecked) {
	$this->imsChecked = $imsChecked;
	return $this;
}

/**
* Set ihfApproved - Product is IHF appoved?
* @return boolean
*/
public function getIhfApproved () {
	$data = $this->ihfApproved;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ihfApproved")->isEmpty($data)) {
		return $this->getValueFromParent("ihfApproved");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set ihfApproved - Product is IHF appoved?
* @param boolean $ihfApproved
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Approvals
*/
public function setIhfApproved ($ihfApproved) {
	$this->ihfApproved = $ihfApproved;
	return $this;
}

}

