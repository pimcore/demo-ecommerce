<?php 

namespace Pimcore\Model\DataObject\Product;

class SpecificAttributes extends \Pimcore\Model\DataObject\Objectbrick {



protected $brickGetters = array('apparel','approvals','featuresBenefitsBackpacks','featuresBenefitsMats','featuresBenefitsShoes','featuresBenefitsSleepingbags','featuresBenefitsTents','featuresHeadlamps','matsSpecs','outdoor','rucksackSpecs','shoe','shoeDetails','snowsport','specsSleepingbags','tentGroundsheet','tentSpecifications','weight');


public $apparel = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\apparel
*/
public function getApparel() { 
	if(!$this->apparel && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getApparel(); 
		}
	}
   return $this->apparel; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\apparel $apparel
* @return void
*/
public function setApparel ($apparel) {
	$this->apparel = $apparel;
	return $this;;
}

public $approvals = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\approvals
*/
public function getApprovals() { 
	if(!$this->approvals && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getApprovals(); 
		}
	}
   return $this->approvals; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\approvals $approvals
* @return void
*/
public function setApprovals ($approvals) {
	$this->approvals = $approvals;
	return $this;;
}

public $featuresBenefitsBackpacks = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsBackpacks
*/
public function getFeaturesBenefitsBackpacks() { 
	if(!$this->featuresBenefitsBackpacks && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getFeaturesBenefitsBackpacks(); 
		}
	}
   return $this->featuresBenefitsBackpacks; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsBackpacks $featuresBenefitsBackpacks
* @return void
*/
public function setFeaturesBenefitsBackpacks ($featuresBenefitsBackpacks) {
	$this->featuresBenefitsBackpacks = $featuresBenefitsBackpacks;
	return $this;;
}

public $featuresBenefitsMats = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsMats
*/
public function getFeaturesBenefitsMats() { 
	if(!$this->featuresBenefitsMats && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getFeaturesBenefitsMats(); 
		}
	}
   return $this->featuresBenefitsMats; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsMats $featuresBenefitsMats
* @return void
*/
public function setFeaturesBenefitsMats ($featuresBenefitsMats) {
	$this->featuresBenefitsMats = $featuresBenefitsMats;
	return $this;;
}

public $featuresBenefitsShoes = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsShoes
*/
public function getFeaturesBenefitsShoes() { 
	if(!$this->featuresBenefitsShoes && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getFeaturesBenefitsShoes(); 
		}
	}
   return $this->featuresBenefitsShoes; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsShoes $featuresBenefitsShoes
* @return void
*/
public function setFeaturesBenefitsShoes ($featuresBenefitsShoes) {
	$this->featuresBenefitsShoes = $featuresBenefitsShoes;
	return $this;;
}

public $featuresBenefitsSleepingbags = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsSleepingbags
*/
public function getFeaturesBenefitsSleepingbags() { 
	if(!$this->featuresBenefitsSleepingbags && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getFeaturesBenefitsSleepingbags(); 
		}
	}
   return $this->featuresBenefitsSleepingbags; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsSleepingbags $featuresBenefitsSleepingbags
* @return void
*/
public function setFeaturesBenefitsSleepingbags ($featuresBenefitsSleepingbags) {
	$this->featuresBenefitsSleepingbags = $featuresBenefitsSleepingbags;
	return $this;;
}

public $featuresBenefitsTents = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsTents
*/
public function getFeaturesBenefitsTents() { 
	if(!$this->featuresBenefitsTents && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getFeaturesBenefitsTents(); 
		}
	}
   return $this->featuresBenefitsTents; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\featuresBenefitsTents $featuresBenefitsTents
* @return void
*/
public function setFeaturesBenefitsTents ($featuresBenefitsTents) {
	$this->featuresBenefitsTents = $featuresBenefitsTents;
	return $this;;
}

public $featuresHeadlamps = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\featuresHeadlamps
*/
public function getFeaturesHeadlamps() { 
	if(!$this->featuresHeadlamps && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getFeaturesHeadlamps(); 
		}
	}
   return $this->featuresHeadlamps; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\featuresHeadlamps $featuresHeadlamps
* @return void
*/
public function setFeaturesHeadlamps ($featuresHeadlamps) {
	$this->featuresHeadlamps = $featuresHeadlamps;
	return $this;;
}

public $matsSpecs = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\matsSpecs
*/
public function getMatsSpecs() { 
	if(!$this->matsSpecs && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getMatsSpecs(); 
		}
	}
   return $this->matsSpecs; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\matsSpecs $matsSpecs
* @return void
*/
public function setMatsSpecs ($matsSpecs) {
	$this->matsSpecs = $matsSpecs;
	return $this;;
}

public $outdoor = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\outdoor
*/
public function getOutdoor() { 
	if(!$this->outdoor && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getOutdoor(); 
		}
	}
   return $this->outdoor; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\outdoor $outdoor
* @return void
*/
public function setOutdoor ($outdoor) {
	$this->outdoor = $outdoor;
	return $this;;
}

public $rucksackSpecs = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\rucksackSpecs
*/
public function getRucksackSpecs() { 
	if(!$this->rucksackSpecs && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getRucksackSpecs(); 
		}
	}
   return $this->rucksackSpecs; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\rucksackSpecs $rucksackSpecs
* @return void
*/
public function setRucksackSpecs ($rucksackSpecs) {
	$this->rucksackSpecs = $rucksackSpecs;
	return $this;;
}

public $shoe = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\shoe
*/
public function getShoe() { 
	if(!$this->shoe && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getShoe(); 
		}
	}
   return $this->shoe; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\shoe $shoe
* @return void
*/
public function setShoe ($shoe) {
	$this->shoe = $shoe;
	return $this;;
}

public $shoeDetails = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\shoeDetails
*/
public function getShoeDetails() { 
	if(!$this->shoeDetails && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getShoeDetails(); 
		}
	}
   return $this->shoeDetails; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\shoeDetails $shoeDetails
* @return void
*/
public function setShoeDetails ($shoeDetails) {
	$this->shoeDetails = $shoeDetails;
	return $this;;
}

public $snowsport = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\snowsport
*/
public function getSnowsport() { 
	if(!$this->snowsport && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getSnowsport(); 
		}
	}
   return $this->snowsport; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\snowsport $snowsport
* @return void
*/
public function setSnowsport ($snowsport) {
	$this->snowsport = $snowsport;
	return $this;;
}

public $specsSleepingbags = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\specsSleepingbags
*/
public function getSpecsSleepingbags() { 
	if(!$this->specsSleepingbags && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getSpecsSleepingbags(); 
		}
	}
   return $this->specsSleepingbags; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\specsSleepingbags $specsSleepingbags
* @return void
*/
public function setSpecsSleepingbags ($specsSleepingbags) {
	$this->specsSleepingbags = $specsSleepingbags;
	return $this;;
}

public $tentGroundsheet = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\tentGroundsheet
*/
public function getTentGroundsheet() { 
	if(!$this->tentGroundsheet && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getTentGroundsheet(); 
		}
	}
   return $this->tentGroundsheet; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\tentGroundsheet $tentGroundsheet
* @return void
*/
public function setTentGroundsheet ($tentGroundsheet) {
	$this->tentGroundsheet = $tentGroundsheet;
	return $this;;
}

public $tentSpecifications = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\tentSpecifications
*/
public function getTentSpecifications() { 
	if(!$this->tentSpecifications && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getTentSpecifications(); 
		}
	}
   return $this->tentSpecifications; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\tentSpecifications $tentSpecifications
* @return void
*/
public function setTentSpecifications ($tentSpecifications) {
	$this->tentSpecifications = $tentSpecifications;
	return $this;;
}

public $weight = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\weight
*/
public function getWeight() { 
	if(!$this->weight && \Pimcore\Model\DataObject\AbstractObject::doGetInheritedValues($this->getObject())) { 
		$brick = $this->getObject()->getValueFromParent("specificAttributes");
		if(!empty($brick)) {
			return $this->getObject()->getValueFromParent("specificAttributes")->getWeight(); 
		}
	}
   return $this->weight; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\weight $weight
* @return void
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;;
}

}

