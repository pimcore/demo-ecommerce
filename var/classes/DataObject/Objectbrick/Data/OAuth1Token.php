<?php 

/** 
* Generated at: 2017-10-11T20:10:16+02:00
* IP: 10.242.2.2


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
* Set token - token
* @return string
*/
public function getToken () {
	$data = $this->token;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("token")->isEmpty($data)) {
		return $this->getValueFromParent("token");
	}
	 return $data;
}

/**
* Set token - token
* @param string $token
* @return \Pimcore\Model\DataObject\OAuth1Token
*/
public function setToken ($token) {
	$this->token = $token;
	return $this;
}

/**
* Set tokenSecret - tokenSecret
* @return string
*/
public function getTokenSecret () {
	$data = $this->tokenSecret;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("tokenSecret")->isEmpty($data)) {
		return $this->getValueFromParent("tokenSecret");
	}
	 return $data;
}

/**
* Set tokenSecret - tokenSecret
* @param string $tokenSecret
* @return \Pimcore\Model\DataObject\OAuth1Token
*/
public function setTokenSecret ($tokenSecret) {
	$this->tokenSecret = $tokenSecret;
	return $this;
}

}

