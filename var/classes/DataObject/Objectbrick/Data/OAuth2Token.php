<?php 

/** 
* Generated at: 2017-10-11T19:54:00+02:00
* IP: 10.242.2.2


Fields Summary: 
 - accessToken [textarea]
 - tokenType [input]
 - expiresAt [input]
 - refreshToken [textarea]
 - scope [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class OAuth2Token extends \CustomerManagementFrameworkBundle\Model\Objectbrick\AbstractOAuth2Token  {

public $type = "OAuth2Token";
public $accessToken;
public $tokenType;
public $expiresAt;
public $refreshToken;
public $scope;


/**
* Set accessToken - accessToken
* @return string
*/
public function getAccessToken () {
	$data = $this->accessToken;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("accessToken")->isEmpty($data)) {
		return $this->getValueFromParent("accessToken");
	}
	 return $data;
}

/**
* Set accessToken - accessToken
* @param string $accessToken
* @return \Pimcore\Model\DataObject\OAuth2Token
*/
public function setAccessToken ($accessToken) {
	$this->accessToken = $accessToken;
	return $this;
}

/**
* Set tokenType - tokenType
* @return string
*/
public function getTokenType () {
	$data = $this->tokenType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("tokenType")->isEmpty($data)) {
		return $this->getValueFromParent("tokenType");
	}
	 return $data;
}

/**
* Set tokenType - tokenType
* @param string $tokenType
* @return \Pimcore\Model\DataObject\OAuth2Token
*/
public function setTokenType ($tokenType) {
	$this->tokenType = $tokenType;
	return $this;
}

/**
* Set expiresAt - expiresAt
* @return string
*/
public function getExpiresAt () {
	$data = $this->expiresAt;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("expiresAt")->isEmpty($data)) {
		return $this->getValueFromParent("expiresAt");
	}
	 return $data;
}

/**
* Set expiresAt - expiresAt
* @param string $expiresAt
* @return \Pimcore\Model\DataObject\OAuth2Token
*/
public function setExpiresAt ($expiresAt) {
	$this->expiresAt = $expiresAt;
	return $this;
}

/**
* Set refreshToken - refreshToken
* @return string
*/
public function getRefreshToken () {
	$data = $this->refreshToken;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("refreshToken")->isEmpty($data)) {
		return $this->getValueFromParent("refreshToken");
	}
	 return $data;
}

/**
* Set refreshToken - refreshToken
* @param string $refreshToken
* @return \Pimcore\Model\DataObject\OAuth2Token
*/
public function setRefreshToken ($refreshToken) {
	$this->refreshToken = $refreshToken;
	return $this;
}

/**
* Set scope - scope
* @return string
*/
public function getScope () {
	$data = $this->scope;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("scope")->isEmpty($data)) {
		return $this->getValueFromParent("scope");
	}
	 return $data;
}

/**
* Set scope - scope
* @param string $scope
* @return \Pimcore\Model\DataObject\OAuth2Token
*/
public function setScope ($scope) {
	$this->scope = $scope;
	return $this;
}

}

