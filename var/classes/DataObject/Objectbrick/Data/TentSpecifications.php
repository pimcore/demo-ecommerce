<?php

/**
* Generated at: 2017-06-23T13:19:43+02:00
* IP: 192.168.11.87


Fields Summary:
 - outsideMaterial [input]
 - insideMaterial [input]
 - floorMaterial [input]
 - waterproofRain [input]
 - waterproofGround [input]
 - construction [input]
 - tentPegs [input]
 - weight [numeric]
 - isMainSeamTaped [checkbox]
*/

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class TentSpecifications extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "tentSpecifications";
public $outsideMaterial;
public $insideMaterial;
public $floorMaterial;
public $waterproofRain;
public $waterproofGround;
public $construction;
public $tentPegs;
public $weight;
public $isMainSeamTaped;


/**
* Set outsideMaterial - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/outer-material.jpg"/> Outside Material
* @return string
*/
public function getOutsideMaterial () {
	$data = $this->outsideMaterial;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("outsideMaterial")->isEmpty($data)) {
		return $this->getValueFromParent("outsideMaterial");
	}
	 return $data;
}

/**
* Set outsideMaterial - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/outer-material.jpg"/> Outside Material
* @param string $outsideMaterial
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setOutsideMaterial ($outsideMaterial) {
	$this->outsideMaterial = $outsideMaterial;
	return $this;
}

/**
* Set insideMaterial - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/inner-material.png"/> Inside Material
* @return string
*/
public function getInsideMaterial () {
	$data = $this->insideMaterial;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("insideMaterial")->isEmpty($data)) {
		return $this->getValueFromParent("insideMaterial");
	}
	 return $data;
}

/**
* Set insideMaterial - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/inner-material.png"/> Inside Material
* @param string $insideMaterial
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setInsideMaterial ($insideMaterial) {
	$this->insideMaterial = $insideMaterial;
	return $this;
}

/**
* Set floorMaterial - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/floor-material.jpg"/> Floor Material
* @return string
*/
public function getFloorMaterial () {
	$data = $this->floorMaterial;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("floorMaterial")->isEmpty($data)) {
		return $this->getValueFromParent("floorMaterial");
	}
	 return $data;
}

/**
* Set floorMaterial - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/floor-material.jpg"/> Floor Material
* @param string $floorMaterial
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setFloorMaterial ($floorMaterial) {
	$this->floorMaterial = $floorMaterial;
	return $this;
}

/**
* Set waterproofRain - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/waterproof.jpg"/> Waterproof Rain
* @return string
*/
public function getWaterproofRain () {
	$data = $this->waterproofRain;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("waterproofRain")->isEmpty($data)) {
		return $this->getValueFromParent("waterproofRain");
	}
	 return $data;
}

/**
* Set waterproofRain - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/waterproof.jpg"/> Waterproof Rain
* @param string $waterproofRain
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setWaterproofRain ($waterproofRain) {
	$this->waterproofRain = $waterproofRain;
	return $this;
}

/**
* Set waterproofGround - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/ground-water.jpg"/> Waterproof Ground
* @return string
*/
public function getWaterproofGround () {
	$data = $this->waterproofGround;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("waterproofGround")->isEmpty($data)) {
		return $this->getValueFromParent("waterproofGround");
	}
	 return $data;
}

/**
* Set waterproofGround - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/ground-water.jpg"/> Waterproof Ground
* @param string $waterproofGround
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setWaterproofGround ($waterproofGround) {
	$this->waterproofGround = $waterproofGround;
	return $this;
}

/**
* Set construction - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/construction.jpg"/> Construction
* @return string
*/
public function getConstruction () {
	$data = $this->construction;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("construction")->isEmpty($data)) {
		return $this->getValueFromParent("construction");
	}
	 return $data;
}

/**
* Set construction - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/construction.jpg"/> Construction
* @param string $construction
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setConstruction ($construction) {
	$this->construction = $construction;
	return $this;
}

/**
* Set tentPegs - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/tent-pegs.jpg"/> Ten Pegs
* @return string
*/
public function getTentPegs () {
	$data = $this->tentPegs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("tentPegs")->isEmpty($data)) {
		return $this->getValueFromParent("tentPegs");
	}
	 return $data;
}

/**
* Set tentPegs - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/tent-pegs.jpg"/> Ten Pegs
* @param string $tentPegs
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setTentPegs ($tentPegs) {
	$this->tentPegs = $tentPegs;
	return $this;
}

/**
* Set weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/weight.jpg"/> Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	 return $data;
}

/**
* Set weight - <img style="height:40px; float:left; margin:-10px 10px 0 0" src="/static/backend/img/bricks/tent-specs/weight.jpg"/> Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Set isMainSeamTaped - Is main seam taped?
* @return boolean
*/
public function getIsMainSeamTaped () {
	$data = $this->isMainSeamTaped;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("isMainSeamTaped")->isEmpty($data)) {
		return $this->getValueFromParent("isMainSeamTaped");
	}
	 return $data;
}

/**
* Set isMainSeamTaped - Is main seam taped?
* @param boolean $isMainSeamTaped
* @return \Pimcore\Model\DataObject\TentSpecifications
*/
public function setIsMainSeamTaped ($isMainSeamTaped) {
	$this->isMainSeamTaped = $isMainSeamTaped;
	return $this;
}

}

