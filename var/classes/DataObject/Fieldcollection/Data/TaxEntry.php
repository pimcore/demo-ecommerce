<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - localizedfields [localizedfields]
 - percent [numeric]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class TaxEntry extends DataObject\Fieldcollection\Data\AbstractData  {

protected $type = "TaxEntry";
protected $localizedfields;
protected $percent;


/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield
*/
public function getLocalizedfields () {
	$container = $this;
	$fd = $this->getDefinition()->getFieldDefinition("localizedfields");
	$data = $fd->preGetData($container);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Get name - Name
* @return string
*/
public function getName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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
* @return \Pimcore\Model\DataObject\FieldCollection\Data\TaxEntry
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
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
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

