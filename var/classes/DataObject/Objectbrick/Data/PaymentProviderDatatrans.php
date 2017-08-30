<?php

/**
* Generated at: 2017-06-23T13:19:41+02:00
* IP: 192.168.11.87


Fields Summary:
 - auth_aliasCC [input]
 - auth_expm [input]
 - auth_expy [input]
 - auth_reqtype [input]
 - auth_uppTransactionId [input]
 - auth_amount [input]
 - auth_currency [input]
 - auth_refno [input]
*/

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderDatatrans extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "PaymentProviderDatatrans";
public $auth_aliasCC;
public $auth_expm;
public $auth_expy;
public $auth_reqtype;
public $auth_uppTransactionId;
public $auth_amount;
public $auth_currency;
public $auth_refno;


/**
* Set auth_aliasCC - aliasCC
* @return string
*/
public function getAuth_aliasCC () {
	$data = $this->auth_aliasCC;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_aliasCC")->isEmpty($data)) {
		return $this->getValueFromParent("auth_aliasCC");
	}
	 return $data;
}

/**
* Set auth_aliasCC - aliasCC
* @param string $auth_aliasCC
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_aliasCC ($auth_aliasCC) {
	$this->auth_aliasCC = $auth_aliasCC;
	return $this;
}

/**
* Set auth_expm - expm
* @return string
*/
public function getAuth_expm () {
	$data = $this->auth_expm;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_expm")->isEmpty($data)) {
		return $this->getValueFromParent("auth_expm");
	}
	 return $data;
}

/**
* Set auth_expm - expm
* @param string $auth_expm
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_expm ($auth_expm) {
	$this->auth_expm = $auth_expm;
	return $this;
}

/**
* Set auth_expy - expy
* @return string
*/
public function getAuth_expy () {
	$data = $this->auth_expy;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_expy")->isEmpty($data)) {
		return $this->getValueFromParent("auth_expy");
	}
	 return $data;
}

/**
* Set auth_expy - expy
* @param string $auth_expy
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_expy ($auth_expy) {
	$this->auth_expy = $auth_expy;
	return $this;
}

/**
* Set auth_reqtype - reqtype
* @return string
*/
public function getAuth_reqtype () {
	$data = $this->auth_reqtype;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_reqtype")->isEmpty($data)) {
		return $this->getValueFromParent("auth_reqtype");
	}
	 return $data;
}

/**
* Set auth_reqtype - reqtype
* @param string $auth_reqtype
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_reqtype ($auth_reqtype) {
	$this->auth_reqtype = $auth_reqtype;
	return $this;
}

/**
* Set auth_uppTransactionId - uppTransactionId
* @return string
*/
public function getAuth_uppTransactionId () {
	$data = $this->auth_uppTransactionId;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_uppTransactionId")->isEmpty($data)) {
		return $this->getValueFromParent("auth_uppTransactionId");
	}
	 return $data;
}

/**
* Set auth_uppTransactionId - uppTransactionId
* @param string $auth_uppTransactionId
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_uppTransactionId ($auth_uppTransactionId) {
	$this->auth_uppTransactionId = $auth_uppTransactionId;
	return $this;
}

/**
* Set auth_amount - amount
* @return string
*/
public function getAuth_amount () {
	$data = $this->auth_amount;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_amount")->isEmpty($data)) {
		return $this->getValueFromParent("auth_amount");
	}
	 return $data;
}

/**
* Set auth_amount - amount
* @param string $auth_amount
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_amount ($auth_amount) {
	$this->auth_amount = $auth_amount;
	return $this;
}

/**
* Set auth_currency - currency
* @return string
*/
public function getAuth_currency () {
	$data = $this->auth_currency;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_currency")->isEmpty($data)) {
		return $this->getValueFromParent("auth_currency");
	}
	 return $data;
}

/**
* Set auth_currency - currency
* @param string $auth_currency
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_currency ($auth_currency) {
	$this->auth_currency = $auth_currency;
	return $this;
}

/**
* Set auth_refno - refno
* @return string
*/
public function getAuth_refno () {
	$data = $this->auth_refno;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_refno")->isEmpty($data)) {
		return $this->getValueFromParent("auth_refno");
	}
	 return $data;
}

/**
* Set auth_refno - refno
* @param string $auth_refno
* @return \Pimcore\Model\DataObject\PaymentProviderDatatrans
*/
public function setAuth_refno ($auth_refno) {
	$this->auth_refno = $auth_refno;
	return $this;
}

}

