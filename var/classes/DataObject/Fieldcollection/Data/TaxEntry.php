<?php

/**
* Generated at: 2017-01-03T14:02:15+01:00
* IP: 192.168.11.5


Fields Summary:
 - localizedfields [localizedfields]
 - percent [numeric]
*/

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class TaxEntry extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "TaxEntry";
public $localizedfields;
public $percent;


/**
* Get localizedfields -
* @return \Pimcore\Model\DataObject\Localizedfield
*/
public function getLocalizedfields () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("localizedfields");
	$data = $fd->preGetData($container);
	 return $data;
}

/**
* Get name - Name
* @return string
*/
public function getName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	 return $data;
}

/**
* Set localizedfields -
* @param \Pimcore\Model\DataObject\Localizedfield $localizedfields
* @return \Pimcore\Model\DataObject\TaxEntry
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\TaxEntry
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Get percent - Tax Rate in Percent
* @return float
*/
public function getPercent () {
	$data = $this->percent;
	 return $data;
}

/**
* Set percent - Tax Rate in Percent
* @param float $percent
* @return \Pimcore\Model\DataObject\TaxEntry
*/
public function setPercent ($percent) {
	$this->percent = $percent;
	return $this;
}

}

