<?php 

/** 
* Generated at: 2018-09-07T16:07:20+02:00


Fields Summary: 
 - configurationKey [input]
 - auth_orderNumber [input]
 - auth_paymentMethod [input]
 - auth_amount [input]
 - auth_currency [input]
 - auth_ip [input]
 - auth_paymentId [input]
 - auth_customerName [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderOGone extends DataObject\Objectbrick\Data\AbstractData  {

protected $type = "PaymentProviderOGone";
protected $configurationKey;
protected $auth_orderNumber;
protected $auth_paymentMethod;
protected $auth_amount;
protected $auth_currency;
protected $auth_ip;
protected $auth_paymentId;
protected $auth_customerName;


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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setConfigurationKey ($configurationKey) {
	$this->configurationKey = $configurationKey;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setAuth_orderNumber ($auth_orderNumber) {
	$this->auth_orderNumber = $auth_orderNumber;
	return $this;
}

/**
* Get auth_paymentMethod - Payment Method
* @return string
*/
public function getAuth_paymentMethod () {
	$data = $this->auth_paymentMethod;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentMethod")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentMethod");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_paymentMethod - Payment Method
* @param string $auth_paymentMethod
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setAuth_paymentMethod ($auth_paymentMethod) {
	$this->auth_paymentMethod = $auth_paymentMethod;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setAuth_currency ($auth_currency) {
	$this->auth_currency = $auth_currency;
	return $this;
}

/**
* Get auth_ip - IP
* @return string
*/
public function getAuth_ip () {
	$data = $this->auth_ip;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_ip")->isEmpty($data)) {
		return $this->getValueFromParent("auth_ip");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_ip - IP
* @param string $auth_ip
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setAuth_ip ($auth_ip) {
	$this->auth_ip = $auth_ip;
	return $this;
}

/**
* Get auth_paymentId - Ogone Payment Id
* @return string
*/
public function getAuth_paymentId () {
	$data = $this->auth_paymentId;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentId")->isEmpty($data)) {
		return $this->getValueFromParent("auth_paymentId");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_paymentId - Ogone Payment Id
* @param string $auth_paymentId
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setAuth_paymentId ($auth_paymentId) {
	$this->auth_paymentId = $auth_paymentId;
	return $this;
}

/**
* Get auth_customerName - Customer Name
* @return string
*/
public function getAuth_customerName () {
	$data = $this->auth_customerName;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_customerName")->isEmpty($data)) {
		return $this->getValueFromParent("auth_customerName");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_customerName - Customer Name
* @param string $auth_customerName
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function setAuth_customerName ($auth_customerName) {
	$this->auth_customerName = $auth_customerName;
	return $this;
}

}

