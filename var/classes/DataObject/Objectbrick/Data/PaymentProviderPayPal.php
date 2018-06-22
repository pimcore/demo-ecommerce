<?php 

/** 
* Generated at: 2018-06-22T10:42:45+02:00
* IP: 192.168.9.18


Fields Summary: 
 - configurationKey [input]
 - auth_token [input]
 - auth_PayerID [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderPayPal extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "PaymentProviderPayPal";
public $configurationKey;
public $auth_token;
public $auth_PayerID;


/**
* Set configurationKey - Configuration Key
* @return string
*/
public function getConfigurationKey () {
	$data = $this->configurationKey;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("configurationKey")->isEmpty($data)) {
		return $this->getValueFromParent("configurationKey");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set configurationKey - Configuration Key
* @param string $configurationKey
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal
*/
public function setConfigurationKey ($configurationKey) {
	$this->configurationKey = $configurationKey;
	return $this;
}

/**
* Set auth_token - Token
* @return string
*/
public function getAuth_token () {
	$data = $this->auth_token;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_token")->isEmpty($data)) {
		return $this->getValueFromParent("auth_token");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_token - Token
* @param string $auth_token
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal
*/
public function setAuth_token ($auth_token) {
	$this->auth_token = $auth_token;
	return $this;
}

/**
* Set auth_PayerID - PayerID
* @return string
*/
public function getAuth_PayerID () {
	$data = $this->auth_PayerID;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_PayerID")->isEmpty($data)) {
		return $this->getValueFromParent("auth_PayerID");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_PayerID - PayerID
* @param string $auth_PayerID
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal
*/
public function setAuth_PayerID ($auth_PayerID) {
	$this->auth_PayerID = $auth_PayerID;
	return $this;
}

}

