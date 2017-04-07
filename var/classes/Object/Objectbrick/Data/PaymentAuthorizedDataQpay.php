<?php 

/** Generated at 2015-05-08T13:49:26+02:00 */

/**
* IP:          192.168.9.77
*/


namespace Pimcore\Model\Object\Objectbrick\Data;

use Pimcore\Model\Object;

class PaymentAuthorizedDataQpay extends Object\Objectbrick\Data\AbstractData  {

public $type = "paymentAuthorizedDataQpay";
public $data_orderNumber;
public $data_language;
public $data_amount;
public $data_currency;


/**
* Set data_orderNumber - OrderNumber
* @return string
*/
public function getData_orderNumber () {
	$data = $this->data_orderNumber;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_orderNumber")->isEmpty($data)) {
		return $this->getValueFromParent("data_orderNumber");
	}
	 return $data;
}

/**
* Set data_orderNumber - OrderNumber
* @param string $data_orderNumber
* @return \Pimcore\Model\Object\PaymentAuthorizedDataQpay
*/
public function setData_orderNumber ($data_orderNumber) {
	$this->data_orderNumber = $data_orderNumber;
	return $this;
}

/**
* Set data_language - Language
* @return string
*/
public function getData_language () {
	$data = $this->data_language;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_language")->isEmpty($data)) {
		return $this->getValueFromParent("data_language");
	}
	 return $data;
}

/**
* Set data_language - Language
* @param string $data_language
* @return \Pimcore\Model\Object\PaymentAuthorizedDataQpay
*/
public function setData_language ($data_language) {
	$this->data_language = $data_language;
	return $this;
}

/**
* Set data_amount - Amount
* @return string
*/
public function getData_amount () {
	$data = $this->data_amount;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_amount")->isEmpty($data)) {
		return $this->getValueFromParent("data_amount");
	}
	 return $data;
}

/**
* Set data_amount - Amount
* @param string $data_amount
* @return \Pimcore\Model\Object\PaymentAuthorizedDataQpay
*/
public function setData_amount ($data_amount) {
	$this->data_amount = $data_amount;
	return $this;
}

/**
* Set data_currency - Currency
* @return string
*/
public function getData_currency () {
	$data = $this->data_currency;
	if(\Pimcore\Model\Object::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("data_currency")->isEmpty($data)) {
		return $this->getValueFromParent("data_currency");
	}
	 return $data;
}

/**
* Set data_currency - Currency
* @param string $data_currency
* @return \Pimcore\Model\Object\PaymentAuthorizedDataQpay
*/
public function setData_currency ($data_currency) {
	$this->data_currency = $data_currency;
	return $this;
}

}

