<?php 

/** 
* Generated at: 2018-04-27T11:38:13+02:00
* IP: 192.168.9.18


Fields Summary: 
 - auth_orderNumber [input]
 - auth_language [input]
 - auth_amount [input]
 - auth_currency [input]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderQpay extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "PaymentProviderQpay";
public $auth_orderNumber;
public $auth_language;
public $auth_amount;
public $auth_currency;


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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_orderNumber ($auth_orderNumber) {
	$this->auth_orderNumber = $auth_orderNumber;
	return $this;
}

/**
* Set auth_language - Language
* @return string
*/
public function getAuth_language () {
	$data = $this->auth_language;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_language")->isEmpty($data)) {
		return $this->getValueFromParent("auth_language");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_language - Language
* @param string $auth_language
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_language ($auth_language) {
	$this->auth_language = $auth_language;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function setAuth_currency ($auth_currency) {
	$this->auth_currency = $auth_currency;
	return $this;
}

}

