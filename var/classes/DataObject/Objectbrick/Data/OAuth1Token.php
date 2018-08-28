<?php 

/** 
* Generated at: 2018-08-28T12:12:20+02:00


Fields Summary: 
 - token [textarea]
 - tokenSecret [textarea]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class OAuth1Token extends \CustomerManagementFrameworkBundle\Model\Objectbrick\AbstractOAuth1Token  {

public $type = "OAuth1Token";
public $token;
public $tokenSecret;


/**
* Get token - token
* @return string
*/
public function getToken () {
	$data = $this->token;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("token")->isEmpty($data)) {
		return $this->getValueFromParent("token");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set token - token
* @param string $token
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth1Token
*/
public function setToken ($token) {
	$this->token = $token;
	return $this;
}

/**
* Get tokenSecret - tokenSecret
* @return string
*/
public function getTokenSecret () {
	$data = $this->tokenSecret;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("tokenSecret")->isEmpty($data)) {
		return $this->getValueFromParent("tokenSecret");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set tokenSecret - tokenSecret
* @param string $tokenSecret
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth1Token
*/
public function setTokenSecret ($tokenSecret) {
	$this->tokenSecret = $tokenSecret;
	return $this;
}

}

