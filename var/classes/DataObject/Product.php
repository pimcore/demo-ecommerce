<?php

/**
* Generated at: 2017-07-13T17:04:26+02:00
* Inheritance: yes
* Variants: yes
* Changed by: admin (8)
* IP: 192.168.11.5


Fields Summary:
- localizedfields [localizedfields]
-- name [input]
-- seoname [input]
-- colorName [input]
-- price [numeric]
-- priceOld [numeric]
-- fromPrice [checkbox]
-- description [wysiwyg]
-- material [wysiwyg]
-- downloads [multihref]
-- videos [multihref]
-- rotation [href]
-- youtubeVideo [input]
- artno [input]
- ean [input]
- size [input]
- brand [href]
- gender [multiselect]
- categories [objects]
- features [objects]
- technologies [objects]
- attributes [objects]
- collection [objects]
- color [multiselect]
- materialComposition [objectsMetadata]
- secondaryMaterialComposition [objectsMetadata]
- imagesInheritance [select]
- images [fieldcollections]
- specificAttributes [objectbricks]
- relatedProducts [objects]
*/

namespace Pimcore\Model\DataObject;



/**
* @method \Pimcore\Model\DataObject\Product\Listing getByLocalizedfields ($field, $value, $locale = null, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByArtno ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByEan ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getBySize ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByBrand ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByGender ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByCategories ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByFeatures ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByTechnologies ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByAttributes ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByCollection ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByColor ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByMaterialComposition ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getBySecondaryMaterialComposition ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByImagesInheritance ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByImages ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getBySpecificAttributes ($value, $limit = 0)
* @method \Pimcore\Model\DataObject\Product\Listing getByRelatedProducts ($value, $limit = 0)
*/

class Product extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractProduct {

public $o_classId = 12;
public $o_className = "Product";
public $localizedfields;
public $artno;
public $ean;
public $size;
public $brand;
public $gender;
public $categories;
public $features;
public $technologies;
public $attributes;
public $collection;
public $color;
public $materialComposition;
public $secondaryMaterialComposition;
public $imagesInheritance;
public $images;
public $specificAttributes;
public $relatedProducts;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Product
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - Attributes
* @return \Pimcore\Model\DataObject\Localizedfield
*/
public function getLocalizedfields () {
	$preValue = $this->preGetValue("localizedfields");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("localizedfields")->isEmpty($data)) {
		return $this->getValueFromParent("localizedfields");
	}
	return $data;
}

/**
* Get name - Name
* @return string
*/
public function getName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	$preValue = $this->preGetValue("name");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get seoname - SEO Name
* @return string
*/
public function getSeoname ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("seoname", $language);
	$preValue = $this->preGetValue("seoname");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get colorName - Color Name
* @return string
*/
public function getColorName ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("colorName", $language);
	$preValue = $this->preGetValue("colorName");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get price - Regular Price
* @return string
*/
public function getPrice ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("price", $language);
	$preValue = $this->preGetValue("price");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get priceOld - Price (old)
* @return string
*/
public function getPriceOld ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("priceOld", $language);
	$preValue = $this->preGetValue("priceOld");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get fromPrice - Price is from
* @return boolean
*/
public function getFromPrice ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("fromPrice", $language);
	$preValue = $this->preGetValue("fromPrice");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get description - Description
* @return string
*/
public function getDescription ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("description", $language);
	$preValue = $this->preGetValue("description");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get material - Material
* @return string
*/
public function getMaterial ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("material", $language);
	$preValue = $this->preGetValue("material");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get downloads - Downloads (PDFs for Instructions etc)
* @return \Pimcore\Model\Asset[]
*/
public function getDownloads ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("downloads", $language);
	$preValue = $this->preGetValue("downloads");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get videos - Videos (f4v)
* @return \Pimcore\Model\Asset\video[]
*/
public function getVideos ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("videos", $language);
	$preValue = $this->preGetValue("videos");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get rotation - 360° Rotation
* @return \Pimcore\Model\Document\link | \Pimcore\Model\Asset
*/
public function getRotation ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("rotation", $language);
	$preValue = $this->preGetValue("rotation");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Get youtubeVideo - YouTube Video
* @return string
*/
public function getYoutubeVideo ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("youtubeVideo", $language);
	$preValue = $this->preGetValue("youtubeVideo");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	 return $data;
}

/**
* Set localizedfields - Attributes
* @param \Pimcore\Model\DataObject\Localizedfield $localizedfields
* @return \Pimcore\Model\DataObject\Product
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\DataObject\Product
*/
public function setName ($name, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language);
	return $this;
}

/**
* Set seoname - SEO Name
* @param string $seoname
* @return \Pimcore\Model\DataObject\Product
*/
public function setSeoname ($seoname, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("seoname", $seoname, $language);
	return $this;
}

/**
* Set colorName - Color Name
* @param string $colorName
* @return \Pimcore\Model\DataObject\Product
*/
public function setColorName ($colorName, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("colorName", $colorName, $language);
	return $this;
}

/**
* Set price - Regular Price
* @param string $price
* @return \Pimcore\Model\DataObject\Product
*/
public function setPrice ($price, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("price", $price, $language);
	return $this;
}

/**
* Set priceOld - Price (old)
* @param string $priceOld
* @return \Pimcore\Model\DataObject\Product
*/
public function setPriceOld ($priceOld, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("priceOld", $priceOld, $language);
	return $this;
}

/**
* Set fromPrice - Price is from
* @param boolean $fromPrice
* @return \Pimcore\Model\DataObject\Product
*/
public function setFromPrice ($fromPrice, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("fromPrice", $fromPrice, $language);
	return $this;
}

/**
* Set description - Description
* @param string $description
* @return \Pimcore\Model\DataObject\Product
*/
public function setDescription ($description, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("description", $description, $language);
	return $this;
}

/**
* Set material - Material
* @param string $material
* @return \Pimcore\Model\DataObject\Product
*/
public function setMaterial ($material, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("material", $material, $language);
	return $this;
}

/**
* Set downloads - Downloads (PDFs for Instructions etc)
* @param \Pimcore\Model\Asset[] $downloads
* @return \Pimcore\Model\DataObject\Product
*/
public function setDownloads ($downloads, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("downloads", $downloads, $language);
	return $this;
}

/**
* Set videos - Videos (f4v)
* @param \Pimcore\Model\Asset\video[] $videos
* @return \Pimcore\Model\DataObject\Product
*/
public function setVideos ($videos, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("videos", $videos, $language);
	return $this;
}

/**
* Set rotation - 360° Rotation
* @param \Pimcore\Model\Document\link | \Pimcore\Model\Asset $rotation
* @return \Pimcore\Model\DataObject\Product
*/
public function setRotation ($rotation, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("rotation", $rotation, $language);
	return $this;
}

/**
* Set youtubeVideo - YouTube Video
* @param string $youtubeVideo
* @return \Pimcore\Model\DataObject\Product
*/
public function setYoutubeVideo ($youtubeVideo, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("youtubeVideo", $youtubeVideo, $language);
	return $this;
}

/**
* Get artno - Article Number
* @return string
*/
public function getArtno () {
	$preValue = $this->preGetValue("artno");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->artno;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("artno")->isEmpty($data)) {
		return $this->getValueFromParent("artno");
	}
	return $data;
}

/**
* Set artno - Article Number
* @param string $artno
* @return \Pimcore\Model\DataObject\Product
*/
public function setArtno ($artno) {
	$this->artno = $artno;
	return $this;
}

/**
* Get ean - EAN-Code
* @return string
*/
public function getEan () {
	$preValue = $this->preGetValue("ean");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->ean;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("ean")->isEmpty($data)) {
		return $this->getValueFromParent("ean");
	}
	return $data;
}

/**
* Set ean - EAN-Code
* @param string $ean
* @return \Pimcore\Model\DataObject\Product
*/
public function setEan ($ean) {
	$this->ean = $ean;
	return $this;
}

/**
* Get size - Size
* @return string
*/
public function getSize () {
	$preValue = $this->preGetValue("size");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->size;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("size")->isEmpty($data)) {
		return $this->getValueFromParent("size");
	}
	return $data;
}

/**
* Set size - Size
* @param string $size
* @return \Pimcore\Model\DataObject\Product
*/
public function setSize ($size) {
	$this->size = $size;
	return $this;
}

/**
* Get brand - Brand
* @return \Pimcore\Model\DataObject\productBrand
*/
public function getBrand () {
	$preValue = $this->preGetValue("brand");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("brand")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("brand")->isEmpty($data)) {
		return $this->getValueFromParent("brand");
	}
	return $data;
}

/**
* Set brand - Brand
* @param \Pimcore\Model\DataObject\productBrand $brand
* @return \Pimcore\Model\DataObject\Product
*/
public function setBrand ($brand) {
	$this->brand = $this->getClass()->getFieldDefinition("brand")->preSetData($this, $brand);
	return $this;
}

/**
* Get gender - Gender
* @return array
*/
public function getGender () {
	$preValue = $this->preGetValue("gender");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->gender;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("gender")->isEmpty($data)) {
		return $this->getValueFromParent("gender");
	}
	return $data;
}

/**
* Set gender - Gender
* @param array $gender
* @return \Pimcore\Model\DataObject\Product
*/
public function setGender ($gender) {
	$this->gender = $gender;
	return $this;
}

/**
* Get categories - Categories
* @return \Pimcore\Model\DataObject\ProductCategory[]
*/
public function getCategories () {
	$preValue = $this->preGetValue("categories");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("categories")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("categories")->isEmpty($data)) {
		return $this->getValueFromParent("categories");
	}
	return $data;
}

/**
* Set categories - Categories
* @param \Pimcore\Model\DataObject\ProductCategory[] $categories
* @return \Pimcore\Model\DataObject\Product
*/
public function setCategories ($categories) {
	$this->categories = $this->getClass()->getFieldDefinition("categories")->preSetData($this, $categories);
	return $this;
}

/**
* Get features - Features
* @return \Pimcore\Model\DataObject\ProductAttribute[] | \Pimcore\Model\DataObject\ProductTechnology[]
*/
public function getFeatures () {
	$preValue = $this->preGetValue("features");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("features")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("features")->isEmpty($data)) {
		return $this->getValueFromParent("features");
	}
	return $data;
}

/**
* Set features - Features
* @param \Pimcore\Model\DataObject\ProductAttribute[] | \Pimcore\Model\DataObject\ProductTechnology[] $features
* @return \Pimcore\Model\DataObject\Product
*/
public function setFeatures ($features) {
	$this->features = $this->getClass()->getFieldDefinition("features")->preSetData($this, $features);
	return $this;
}

/**
* Get technologies - Technologies
* @return \Pimcore\Model\DataObject\ProductTechnology[] | \Pimcore\Model\DataObject\ProductAttribute[]
*/
public function getTechnologies () {
	$preValue = $this->preGetValue("technologies");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("technologies")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("technologies")->isEmpty($data)) {
		return $this->getValueFromParent("technologies");
	}
	return $data;
}

/**
* Set technologies - Technologies
* @param \Pimcore\Model\DataObject\ProductTechnology[] | \Pimcore\Model\DataObject\ProductAttribute[] $technologies
* @return \Pimcore\Model\DataObject\Product
*/
public function setTechnologies ($technologies) {
	$this->technologies = $this->getClass()->getFieldDefinition("technologies")->preSetData($this, $technologies);
	return $this;
}

/**
* Get attributes - Attributes
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getAttributes () {
	$preValue = $this->preGetValue("attributes");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("attributes")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("attributes")->isEmpty($data)) {
		return $this->getValueFromParent("attributes");
	}
	return $data;
}

/**
* Set attributes - Attributes
* @param \Pimcore\Model\DataObject\AbstractObject[] $attributes
* @return \Pimcore\Model\DataObject\Product
*/
public function setAttributes ($attributes) {
	$this->attributes = $this->getClass()->getFieldDefinition("attributes")->preSetData($this, $attributes);
	return $this;
}

/**
* Get collection - Collection
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getCollection () {
	$preValue = $this->preGetValue("collection");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("collection")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("collection")->isEmpty($data)) {
		return $this->getValueFromParent("collection");
	}
	return $data;
}

/**
* Set collection - Collection
* @param \Pimcore\Model\DataObject\AbstractObject[] $collection
* @return \Pimcore\Model\DataObject\Product
*/
public function setCollection ($collection) {
	$this->collection = $this->getClass()->getFieldDefinition("collection")->preSetData($this, $collection);
	return $this;
}

/**
* Get color - Color(s)
* @return array
*/
public function getColor () {
	$preValue = $this->preGetValue("color");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->color;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("color")->isEmpty($data)) {
		return $this->getValueFromParent("color");
	}
	return $data;
}

/**
* Set color - Color(s)
* @param array $color
* @return \Pimcore\Model\DataObject\Product
*/
public function setColor ($color) {
	$this->color = $color;
	return $this;
}

/**
* Get materialComposition - Material Composition
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getMaterialComposition () {
	$preValue = $this->preGetValue("materialComposition");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("materialComposition")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("materialComposition")->isEmpty($data)) {
		return $this->getValueFromParent("materialComposition");
	}
	return $data;
}

/**
* Set materialComposition - Material Composition
* @param \Pimcore\Model\DataObject\AbstractObject[] $materialComposition
* @return \Pimcore\Model\DataObject\Product
*/
public function setMaterialComposition ($materialComposition) {
	$this->materialComposition = $this->getClass()->getFieldDefinition("materialComposition")->preSetData($this, $materialComposition);
	return $this;
}

/**
* Get secondaryMaterialComposition - Secondary Material Composition
* @return \Pimcore\Model\DataObject\AbstractObject[]
*/
public function getSecondaryMaterialComposition () {
	$preValue = $this->preGetValue("secondaryMaterialComposition");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("secondaryMaterialComposition")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("secondaryMaterialComposition")->isEmpty($data)) {
		return $this->getValueFromParent("secondaryMaterialComposition");
	}
	return $data;
}

/**
* Set secondaryMaterialComposition - Secondary Material Composition
* @param \Pimcore\Model\DataObject\AbstractObject[] $secondaryMaterialComposition
* @return \Pimcore\Model\DataObject\Product
*/
public function setSecondaryMaterialComposition ($secondaryMaterialComposition) {
	$this->secondaryMaterialComposition = $this->getClass()->getFieldDefinition("secondaryMaterialComposition")->preSetData($this, $secondaryMaterialComposition);
	return $this;
}

/**
* Get imagesInheritance - Inheritance
* @return string
*/
public function getImagesInheritance () {
	$preValue = $this->preGetValue("imagesInheritance");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->imagesInheritance;
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("imagesInheritance")->isEmpty($data)) {
		return $this->getValueFromParent("imagesInheritance");
	}
	return $data;
}

/**
* Set imagesInheritance - Inheritance
* @param string $imagesInheritance
* @return \Pimcore\Model\DataObject\Product
*/
public function setImagesInheritance ($imagesInheritance) {
	$this->imagesInheritance = $imagesInheritance;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection
*/
public function getImages () {
	$preValue = $this->preGetValue("images");
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("images")->preGetData($this);
	 return $data;
}

/**
* Set images - Images
* @param \Pimcore\Model\DataObject\Fieldcollection $images
* @return \Pimcore\Model\DataObject\Product
*/
public function setImages ($images) {
	$this->images = $this->getClass()->getFieldDefinition("images")->preSetData($this, $images);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Objectbrick
*/
public function getSpecificAttributes () {
	$data = $this->specificAttributes;
	if(!$data) {
		if(\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Product\\SpecificAttributes")) {
			$data = new \Pimcore\Model\DataObject\Product\SpecificAttributes($this, "specificAttributes");
			$this->specificAttributes = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("specificAttributes");
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set specificAttributes - Attributes
* @param \Pimcore\Model\DataObject\Objectbrick $specificAttributes
* @return \Pimcore\Model\DataObject\Product
*/
public function setSpecificAttributes ($specificAttributes) {
	$this->specificAttributes = $this->getClass()->getFieldDefinition("specificAttributes")->preSetData($this, $specificAttributes);
	return $this;
}

/**
* Get relatedProducts - Related Products
* @return \Pimcore\Model\DataObject\Product[]
*/
public function getRelatedProducts () {
	$preValue = $this->preGetValue("relatedProducts");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("relatedProducts")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues() && $this->getClass()->getFieldDefinition("relatedProducts")->isEmpty($data)) {
		return $this->getValueFromParent("relatedProducts");
	}
	return $data;
}

/**
* Set relatedProducts - Related Products
* @param \Pimcore\Model\DataObject\Product[] $relatedProducts
* @return \Pimcore\Model\DataObject\Product
*/
public function setRelatedProducts ($relatedProducts) {
	$this->relatedProducts = $this->getClass()->getFieldDefinition("relatedProducts")->preSetData($this, $relatedProducts);
	return $this;
}

protected static $_relationFields = array (
  'brand' =>
  array (
    'type' => 'href',
  ),
  'categories' =>
  array (
    'type' => 'objects',
  ),
  'features' =>
  array (
    'type' => 'objects',
  ),
  'technologies' =>
  array (
    'type' => 'objects',
  ),
  'attributes' =>
  array (
    'type' => 'objects',
  ),
  'collection' =>
  array (
    'type' => 'objects',
  ),
  'materialComposition' =>
  array (
    'type' => 'objectsMetadata',
  ),
  'secondaryMaterialComposition' =>
  array (
    'type' => 'objectsMetadata',
  ),
  'relatedProducts' =>
  array (
    'type' => 'objects',
  ),
);

public $lazyLoadedFields = array (
  0 => 'brand',
  1 => 'features',
  2 => 'technologies',
  3 => 'attributes',
  4 => 'collection',
  5 => 'materialComposition',
  6 => 'secondaryMaterialComposition',
  7 => 'relatedProducts',
);

}

