<?php 

/** 
* Generated at: 2018-09-07T16:07:21+02:00


Fields Summary: 
 - configurationKey [input]
 - auth_paymentType [input]
 - auth_orderNumber [input]
 - auth_paymentState [input]
 - auth_amount [input]
 - auth_currency [input]
 - auth_gatewyReferenceNumber [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderWirecardSeamless extends DataObject\Objectbrick\Data\AbstractData  {

protected $type = "PaymentProviderWirecardSeamless";
protected $configurationKey;
protected $auth_paymentType;
protected $auth_orderNumber;
protected $auth_paymentState;
protected $auth_amount;
protected $auth_currency;
protected $auth_gatewyReferenceNumber;


/**
* Get configurationKey - Configuration Key
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setConfigurationKey ($configurationKey) {
	$this->configurationKey = $configurationKey;
	return $this;
}

/**
* Get auth_paymentType - Payment Type
* @return string
*/
public function getAuth_paymentType () {
	$data = $this->auth_paymentType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentType")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentType");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_paymentType - Payment Type
* @param string $auth_paymentType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setAuth_paymentType ($auth_paymentType) {
	$this->auth_paymentType = $auth_paymentType;
	return $this;
}

/**
* Get auth_orderNumber - OrderNumber
* @return string
*/
public function getAuth_orderNumber () {
	$data = $this->auth_orderNumber;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_orderNumber")->isEmpty($data)) {
		return $this->getValueFromParent("auth_orderNumber");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_orderNumber - OrderNumber
* @param string $auth_orderNumber
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setAuth_orderNumber ($auth_orderNumber) {
	$this->auth_orderNumber = $auth_orderNumber;
	return $this;
}

/**
* Get auth_paymentState - Payment State
* @return string
*/
public function getAuth_paymentState () {
	$data = $this->auth_paymentState;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentState")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentState");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_paymentState - Payment State
* @param string $auth_paymentState
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setAuth_paymentState ($auth_paymentState) {
	$this->auth_paymentState = $auth_paymentState;
	return $this;
}

/**
* Get auth_amount - Amount
* @return string
*/
public function getAuth_amount () {
	$data = $this->auth_amount;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_amount")->isEmpty($data)) {
		return $this->getValueFromParent("auth_amount");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_amount - Amount
* @param string $auth_amount
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setAuth_amount ($auth_amount) {
	$this->auth_amount = $auth_amount;
	return $this;
}

/**
* Get auth_currency - Currency
* @return string
*/
public function getAuth_currency () {
	$data = $this->auth_currency;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_currency")->isEmpty($data)) {
		return $this->getValueFromParent("auth_currency");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_currency - Currency
* @param string $auth_currency
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setAuth_currency ($auth_currency) {
	$this->auth_currency = $auth_currency;
	return $this;
}

/**
* Get auth_gatewyReferenceNumber - Gateway Reference Number
* @return string
*/
public function getAuth_gatewyReferenceNumber () {
	$data = $this->auth_gatewyReferenceNumber;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_gatewyReferenceNumber")->isEmpty($data)) {
		return $this->getValueFromParent("auth_gatewyReferenceNumber");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_gatewyReferenceNumber - Gateway Reference Number
* @param string $auth_gatewyReferenceNumber
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function setAuth_gatewyReferenceNumber ($auth_gatewyReferenceNumber) {
	$this->auth_gatewyReferenceNumber = $auth_gatewyReferenceNumber;
	return $this;
}

}

