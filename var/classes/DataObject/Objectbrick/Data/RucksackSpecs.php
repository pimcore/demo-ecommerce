<?php 

/** 
* Generated at: 2018-09-07T16:07:21+02:00


Fields Summary: 
 - volume [input]
 - weight [input]
 - load [input]
 - material [input]
 - expandTo [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class RucksackSpecs extends DataObject\Objectbrick\Data\AbstractData  {

protected $type = "rucksackSpecs";
protected $volume;
protected $weight;
protected $load;
protected $material;
protected $expandTo;


/**
* Get volume - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/volume.png"/> Volume
* @return string
*/
public function getVolume () {
	$data = $this->volume;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("volume")->isEmpty($data)) {
		return $this->getValueFromParent("volume");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set volume - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/volume.png"/> Volume
* @param string $volume
* @return \Pimcore\Model\DataObject\Objectbrick\Data\RucksackSpecs
*/
public function setVolume ($volume) {
	$this->volume = $volume;
	return $this;
}

/**
* Get weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/weight.png"/> Weight
* @return string
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/weight.png"/> Weight
* @param string $weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\RucksackSpecs
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Get load - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/load.png"/> Load
* @return string
*/
public function getLoad () {
	$data = $this->load;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("load")->isEmpty($data)) {
		return $this->getValueFromParent("load");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set load - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/load.png"/> Load
* @param string $load
* @return \Pimcore\Model\DataObject\Objectbrick\Data\RucksackSpecs
*/
public function setLoad ($load) {
	$this->load = $load;
	return $this;
}

/**
* Get material - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/material.png"/> Material
* @return string
*/
public function getMaterial () {
	$data = $this->material;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("material")->isEmpty($data)) {
		return $this->getValueFromParent("material");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set material - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/material.png"/> Material
* @param string $material
* @return \Pimcore\Model\DataObject\Objectbrick\Data\RucksackSpecs
*/
public function setMaterial ($material) {
	$this->material = $material;
	return $this;
}

/**
* Get expandTo - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/expand.png"/> Expand
* @return string
*/
public function getExpandTo () {
	$data = $this->expandTo;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("expandTo")->isEmpty($data)) {
		return $this->getValueFromParent("expandTo");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set expandTo - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/expand.png"/> Expand
* @param string $expandTo
* @return \Pimcore\Model\DataObject\Objectbrick\Data\RucksackSpecs
*/
public function setExpandTo ($expandTo) {
	$this->expandTo = $expandTo;
	return $this;
}

}

