<?php 

/** 
* Generated at: 2018-06-07T15:45:45+02:00


Fields Summary: 
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

public $type = "PaymentProviderWirecardSeamless";
public $auth_paymentType;
public $auth_orderNumber;
public $auth_paymentState;
public $auth_amount;
public $auth_currency;
public $auth_gatewyReferenceNumber;


/**
* Set auth_paymentType - Payment Type
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
* Set auth_orderNumber - OrderNumber
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
* Set auth_paymentState - Payment State
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
* Set auth_amount - Amount
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
* Set auth_currency - Currency
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
* Set auth_gatewyReferenceNumber - Gateway Reference Number
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

