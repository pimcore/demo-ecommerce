<?php 

/** Generated at 2015-03-11T21:36:27+01:00 */

/**
* IP:          10.242.2.6
*/


namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class SpecsSleepingbags extends Object\Objectbrick\Data\AbstractData  {

public $type = "specsSleepingbags";
public $weight;
public $length;
public $width;
public $bodySize;
public $fabricShell;
public $fabricLining;
public $filling;
public $protection;
public $packingSize;
public $temperatureComfort;
public $temperatureLimit;
public $temperatureExtreme;


/**
* Set weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Set length - Length
* @return float
*/
public function getLength () {
	$data = $this->length;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("length")->isEmpty($data)) {
		return $this->getValueFromParent("length");
	}
	 return $data;
}

/**
* Set length - Length
* @param float $length
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setLength ($length) {
	$this->length = $length;
	return $this;
}

/**
* Set width - Width
* @return float
*/
public function getWidth () {
	$data = $this->width;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("width")->isEmpty($data)) {
		return $this->getValueFromParent("width");
	}
	 return $data;
}

/**
* Set width - Width
* @param float $width
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setWidth ($width) {
	$this->width = $width;
	return $this;
}

/**
* Set bodySize - Max Body Size
* @return float
*/
public function getBodySize () {
	$data = $this->bodySize;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("bodySize")->isEmpty($data)) {
		return $this->getValueFromParent("bodySize");
	}
	 return $data;
}

/**
* Set bodySize - Max Body Size
* @param float $bodySize
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setBodySize ($bodySize) {
	$this->bodySize = $bodySize;
	return $this;
}

/**
* Set fabricShell - Shell fabric
* @return string
*/
public function getFabricShell () {
	$data = $this->fabricShell;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fabricShell")->isEmpty($data)) {
		return $this->getValueFromParent("fabricShell");
	}
	 return $data;
}

/**
* Set fabricShell - Shell fabric
* @param string $fabricShell
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setFabricShell ($fabricShell) {
	$this->fabricShell = $fabricShell;
	return $this;
}

/**
* Set fabricLining - Lining fabric
* @return string
*/
public function getFabricLining () {
	$data = $this->fabricLining;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fabricLining")->isEmpty($data)) {
		return $this->getValueFromParent("fabricLining");
	}
	 return $data;
}

/**
* Set fabricLining - Lining fabric
* @param string $fabricLining
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setFabricLining ($fabricLining) {
	$this->fabricLining = $fabricLining;
	return $this;
}

/**
* Set filling - Filling
* @return string
*/
public function getFilling () {
	$data = $this->filling;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("filling")->isEmpty($data)) {
		return $this->getValueFromParent("filling");
	}
	 return $data;
}

/**
* Set filling - Filling
* @param string $filling
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setFilling ($filling) {
	$this->filling = $filling;
	return $this;
}

/**
* Set protection - Protection (Layers)
* @return string
*/
public function getProtection () {
	$data = $this->protection;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("protection")->isEmpty($data)) {
		return $this->getValueFromParent("protection");
	}
	 return $data;
}

/**
* Set protection - Protection (Layers)
* @param string $protection
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setProtection ($protection) {
	$this->protection = $protection;
	return $this;
}

/**
* Set packingSize - Packing Size
* @return string
*/
public function getPackingSize () {
	$data = $this->packingSize;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("packingSize")->isEmpty($data)) {
		return $this->getValueFromParent("packingSize");
	}
	 return $data;
}

/**
* Set packingSize - Packing Size
* @param string $packingSize
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setPackingSize ($packingSize) {
	$this->packingSize = $packingSize;
	return $this;
}

/**
* Set temperatureComfort - Comfort Temp
* @return float
*/
public function getTemperatureComfort () {
	$data = $this->temperatureComfort;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("temperatureComfort")->isEmpty($data)) {
		return $this->getValueFromParent("temperatureComfort");
	}
	 return $data;
}

/**
* Set temperatureComfort - Comfort Temp
* @param float $temperatureComfort
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setTemperatureComfort ($temperatureComfort) {
	$this->temperatureComfort = $temperatureComfort;
	return $this;
}

/**
* Set temperatureLimit - Limit Temp
* @return float
*/
public function getTemperatureLimit () {
	$data = $this->temperatureLimit;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("temperatureLimit")->isEmpty($data)) {
		return $this->getValueFromParent("temperatureLimit");
	}
	 return $data;
}

/**
* Set temperatureLimit - Limit Temp
* @param float $temperatureLimit
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setTemperatureLimit ($temperatureLimit) {
	$this->temperatureLimit = $temperatureLimit;
	return $this;
}

/**
* Set temperatureExtreme - Extreme Temp
* @return float
*/
public function getTemperatureExtreme () {
	$data = $this->temperatureExtreme;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("temperatureExtreme")->isEmpty($data)) {
		return $this->getValueFromParent("temperatureExtreme");
	}
	 return $data;
}

/**
* Set temperatureExtreme - Extreme Temp
* @param float $temperatureExtreme
* @return \Pimcore\Model\Object\SpecsSleepingbags
*/
public function setTemperatureExtreme ($temperatureExtreme) {
	$this->temperatureExtreme = $temperatureExtreme;
	return $this;
}

}

