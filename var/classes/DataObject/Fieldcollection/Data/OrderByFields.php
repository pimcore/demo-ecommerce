<?php

/**
* Generated at: 2017-03-15T12:20:58+01:00
* IP: 192.168.11.5


Fields Summary:
 - field [indexFieldSelectionCombo]
 - direction [select]
*/

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class OrderByFields extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "OrderByFields";
public $field;
public $direction;


/**
* Get field - Field
* @return string
*/
public function getField () {
	$data = $this->field;
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

