<?php 

/** Generated at 2016-08-24T11:47:40+02:00 */

/**
* IP:          192.168.11.5
*/


namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class PaymentProviderWirecardSeamless extends Object\Objectbrick\Data\AbstractData  {

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
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentType")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentType");
	}
	 return $data;
}

/**
* Set auth_paymentType - Payment Type
* @param string $auth_paymentType
* @return \Pimcore\Model\Object\PaymentProviderWirecardSeamless
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
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_orderNumber")->isEmpty($data)) {
		return $this->getValueFromParent("auth_orderNumber");
	}
	 return $data;
}

/**
* Set auth_orderNumber - OrderNumber
* @param string $auth_orderNumber
* @return \Pimcore\Model\Object\PaymentProviderWirecardSeamless
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
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentState")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentState");
	}
	 return $data;
}

/**
* Set auth_paymentState - Payment State
* @param string $auth_paymentState
* @return \Pimcore\Model\Object\PaymentProviderWirecardSeamless
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
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_amount")->isEmpty($data)) {
		return $this->getValueFromParent("auth_amount");
	}
	 return $data;
}

/**
* Set auth_amount - Amount
* @param string $auth_amount
* @return \Pimcore\Model\Object\PaymentProviderWirecardSeamless
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
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_currency")->isEmpty($data)) {
		return $this->getValueFromParent("auth_currency");
	}
	 return $data;
}

/**
* Set auth_currency - Currency
* @param string $auth_currency
* @return \Pimcore\Model\Object\PaymentProviderWirecardSeamless
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
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_gatewyReferenceNumber")->isEmpty($data)) {
		return $this->getValueFromParent("auth_gatewyReferenceNumber");
	}
	 return $data;
}

/**
* Set auth_gatewyReferenceNumber - Gateway Reference Number
* @param string $auth_gatewyReferenceNumber
* @return \Pimcore\Model\Object\PaymentProviderWirecardSeamless
*/
public function setAuth_gatewyReferenceNumber ($auth_gatewyReferenceNumber) {
	$this->auth_gatewyReferenceNumber = $auth_gatewyReferenceNumber;
	return $this;
}

}

