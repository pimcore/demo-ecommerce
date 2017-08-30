<?php

/**
* Generated at: 2017-06-23T13:19:43+02:00
* IP: 192.168.11.87


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

public $type = "rucksackSpecs";
public $volume;
public $weight;
public $load;
public $material;
public $expandTo;


/**
* Set volume - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/volume.png"/> Volume
* @return string
*/
public function getVolume () {
	$data = $this->volume;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("volume")->isEmpty($data)) {
		return $this->getValueFromParent("volume");
	}
	 return $data;
}

/**
* Set volume - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/volume.png"/> Volume
* @param string $volume
* @return \Pimcore\Model\DataObject\RucksackSpecs
*/
public function setVolume ($volume) {
	$this->volume = $volume;
	return $this;
}

/**
* Set weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/weight.png"/> Weight
* @return string
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	 return $data;
}

/**
* Set weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/weight.png"/> Weight
* @param string $weight
* @return \Pimcore\Model\DataObject\RucksackSpecs
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Set load - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/load.png"/> Load
* @return string
*/
public function getLoad () {
	$data = $this->load;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("load")->isEmpty($data)) {
		return $this->getValueFromParent("load");
	}
	 return $data;
}

/**
* Set load - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/load.png"/> Load
* @param string $load
* @return \Pimcore\Model\DataObject\RucksackSpecs
*/
public function setLoad ($load) {
	$this->load = $load;
	return $this;
}

/**
* Set material - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/material.png"/> Material
* @return string
*/
public function getMaterial () {
	$data = $this->material;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("material")->isEmpty($data)) {
		return $this->getValueFromParent("material");
	}
	 return $data;
}

/**
* Set material - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/material.png"/> Material
* @param string $material
* @return \Pimcore\Model\DataObject\RucksackSpecs
*/
public function setMaterial ($material) {
	$this->material = $material;
	return $this;
}

/**
* Set expandTo - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/expand.png"/> Expand
* @return string
*/
public function getExpandTo () {
	$data = $this->expandTo;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("expandTo")->isEmpty($data)) {
		return $this->getValueFromParent("expandTo");
	}
	 return $data;
}

/**
* Set expandTo - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/rucksacks-specs/expand.png"/> Expand
* @param string $expandTo
* @return \Pimcore\Model\DataObject\RucksackSpecs
*/
public function setExpandTo ($expandTo) {
	$this->expandTo = $expandTo;
	return $this;
}

}

