<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - field [indexFieldSelectionCombo]
 - weight [numeric]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class SimilarityField extends DataObject\Fieldcollection\Data\AbstractData  {

protected $type = "SimilarityField";
protected $field;
protected $weight;


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
* @return \Pimcore\Model\DataObject\SimilarityField
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\SimilarityField
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

}

