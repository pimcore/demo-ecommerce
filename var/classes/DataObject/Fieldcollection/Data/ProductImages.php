<?php 

/** 
* Generated at: 2018-06-07T15:45:52+02:00


Fields Summary: 
 - image [image]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class ProductImages extends DataObject\Fieldcollection\Data\AbstractData  {

public $type = "productImages";
public $image;


/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image
*/
public function getImage () {
	$data = $this->image;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image $image
* @return \Pimcore\Model\DataObject\ProductImages
*/
public function setImage ($image) {
	$this->image = $image;
	return $this;
}

}

