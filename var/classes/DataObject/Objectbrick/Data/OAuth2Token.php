<?php 

/** 
* Generated at: 2018-08-28T12:12:20+02:00


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
* Get accessToken - accessToken
* @return string
*/
public function getAccessToken () {
	$data = $this->accessToken;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("accessToken")->isEmpty($data)) {
		return $this->getValueFromParent("accessToken");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set accessToken - accessToken
* @param string $accessToken
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token
*/
public function setAccessToken ($accessToken) {
	$this->accessToken = $accessToken;
	return $this;
}

/**
* Get tokenType - tokenType
* @return string
*/
public function getTokenType () {
	$data = $this->tokenType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("tokenType")->isEmpty($data)) {
		return $this->getValueFromParent("tokenType");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set tokenType - tokenType
* @param string $tokenType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token
*/
public function setTokenType ($tokenType) {
	$this->tokenType = $tokenType;
	return $this;
}

/**
* Get expiresAt - expiresAt
* @return string
*/
public function getExpiresAt () {
	$data = $this->expiresAt;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("expiresAt")->isEmpty($data)) {
		return $this->getValueFromParent("expiresAt");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set expiresAt - expiresAt
* @param string $expiresAt
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token
*/
public function setExpiresAt ($expiresAt) {
	$this->expiresAt = $expiresAt;
	return $this;
}

/**
* Get refreshToken - refreshToken
* @return string
*/
public function getRefreshToken () {
	$data = $this->refreshToken;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("refreshToken")->isEmpty($data)) {
		return $this->getValueFromParent("refreshToken");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set refreshToken - refreshToken
* @param string $refreshToken
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token
*/
public function setRefreshToken ($refreshToken) {
	$this->refreshToken = $refreshToken;
	return $this;
}

/**
* Get scope - scope
* @return string
*/
public function getScope () {
	$data = $this->scope;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("scope")->isEmpty($data)) {
		return $this->getValueFromParent("scope");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set scope - scope
* @param string $scope
* @return \Pimcore\Model\DataObject\Objectbrick\Data\OAuth2Token
*/
public function setScope ($scope) {
	$this->scope = $scope;
	return $this;
}

}

