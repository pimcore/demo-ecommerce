<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - field [indexFieldSelectionCombo]
 - direction [select]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class OrderByFields extends DataObject\Fieldcollection\Data\AbstractData  {

protected $type = "OrderByFields";
protected $field;
protected $direction;


/**
* Get field - Field
* @return string
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
* @param string $field
* @return \Pimcore\Model\DataObject\OrderByFields
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get direction - Direction
* @return string
*/
public function getDirection () {
	$data = $this->direction;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set direction - Direction
* @param string $direction
* @return \Pimcore\Model\DataObject\OrderByFields
*/
public function setDirection ($direction) {
	$this->direction = $direction;
	return $this;
}

}

