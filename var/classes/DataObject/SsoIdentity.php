<?php 

/** 
* Generated at: 2017-10-11T20:10:16+02:00
* Inheritance: no
* Variants: no
* Changed by: admin (10)
* IP: 10.242.2.2


Fields Summary: 
- provider [input]
- identifier [input]
- profileData [textarea]
- credentials [objectbricks]
*/ 

namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\SsoIdentity\Listing getByProvider ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\SsoIdentity\Listing getByIdentifier ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\SsoIdentity\Listing getByProfileData ($value, $limit = 0) 
* @method static \Pimcore\Model\DataObject\SsoIdentity\Listing getByCredentials ($value, $limit = 0) 
*/

class SsoIdentity extends \CustomerManagementFrameworkBundle\Model\AbstractSsoIdentity {

public $o_classId = 38;
public $o_className = "SsoIdentity";
public $provider;
public $identifier;
public $profileData;
public $credentials;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\SsoIdentity
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get provider - Provider
* @return string
*/
public function getProvider () {
	$preValue = $this->preGetValue("provider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->provider;
	return $data;
}

/**
* Set provider - Provider
* @param string $provider
* @return \Pimcore\Model\DataObject\SsoIdentity
*/
public function setProvider ($provider) {
	$this->provider = $provider;
	return $this;
}

/**
* Get identifier - Identifier
* @return string
*/
public function getIdentifier () {
	$preValue = $this->preGetValue("identifier"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->identifier;
	return $data;
}

/**
* Set identifier - Identifier
* @param string $identifier
* @return \Pimcore\Model\DataObject\SsoIdentity
*/
public function setIdentifier ($identifier) {
	$this->identifier = $identifier;
	return $this;
}

/**
* Get profileData - Profile Data
* @return string
*/
public function getProfileData () {
	$preValue = $this->preGetValue("profileData"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->profileData;
	return $data;
}

/**
* Set profileData - Profile Data
* @param string $profileData
* @return \Pimcore\Model\DataObject\SsoIdentity
*/
public function setProfileData ($profileData) {
	$this->profileData = $profileData;
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Objectbrick
*/
public function getCredentials () {
	$data = $this->credentials;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\SsoIdentity\\Credentials")) { 
			$data = new \Pimcore\Model\DataObject\SsoIdentity\Credentials($this, "credentials");
			$this->credentials = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("credentials"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set credentials - Credentials
* @param \Pimcore\Model\DataObject\Objectbrick $credentials
* @return \Pimcore\Model\DataObject\SsoIdentity
*/
public function setCredentials ($credentials) {
	$this->credentials = $this->getClass()->getFieldDefinition("credentials")->preSetData($this, $credentials);
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = array (
);

}

