<?php 

/** 
* Generated at: 2018-08-28T12:12:20+02:00


Fields Summary: 
 - configurationKey [input]
 - auth_aliasCC [input]
 - auth_maskedCC [input]
 - auth_pmethod [input]
 - auth_expm [input]
 - auth_expy [input]
 - auth_reqtype [input]
 - auth_uppTransactionId [input]
 - auth_amount [input]
 - auth_currency [input]
 - auth_refno [input]
 - paymentFinished [datetime]
 - sourceOrder [href]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class PaymentProviderDatatrans extends DataObject\Objectbrick\Data\AbstractData  {

public $type = "PaymentProviderDatatrans";
public $configurationKey;
public $auth_aliasCC;
public $auth_maskedCC;
public $auth_pmethod;
public $auth_expm;
public $auth_expy;
public $auth_reqtype;
public $auth_uppTransactionId;
public $auth_amount;
public $auth_currency;
public $auth_refno;
public $paymentFinished;
public $sourceOrder;


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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setConfigurationKey ($configurationKey) {
	$this->configurationKey = $configurationKey;
	return $this;
}

/**
* Get auth_aliasCC - aliasCC
* @return string
*/
public function getAuth_aliasCC () {
	$data = $this->auth_aliasCC;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_aliasCC")->isEmpty($data)) {
		return $this->getValueFromParent("auth_aliasCC");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_aliasCC - aliasCC
* @param string $auth_aliasCC
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_aliasCC ($auth_aliasCC) {
	$this->auth_aliasCC = $auth_aliasCC;
	return $this;
}

/**
* Get auth_maskedCC - maskedCC
* @return string
*/
public function getAuth_maskedCC () {
	$data = $this->auth_maskedCC;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_maskedCC")->isEmpty($data)) {
		return $this->getValueFromParent("auth_maskedCC");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_maskedCC - maskedCC
* @param string $auth_maskedCC
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_maskedCC ($auth_maskedCC) {
	$this->auth_maskedCC = $auth_maskedCC;
	return $this;
}

/**
* Get auth_pmethod - pmethod
* @return string
*/
public function getAuth_pmethod () {
	$data = $this->auth_pmethod;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_pmethod")->isEmpty($data)) {
		return $this->getValueFromParent("auth_pmethod");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_pmethod - pmethod
* @param string $auth_pmethod
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_pmethod ($auth_pmethod) {
	$this->auth_pmethod = $auth_pmethod;
	return $this;
}

/**
* Get auth_expm - expm
* @return string
*/
public function getAuth_expm () {
	$data = $this->auth_expm;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_expm")->isEmpty($data)) {
		return $this->getValueFromParent("auth_expm");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_expm - expm
* @param string $auth_expm
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_expm ($auth_expm) {
	$this->auth_expm = $auth_expm;
	return $this;
}

/**
* Get auth_expy - expy
* @return string
*/
public function getAuth_expy () {
	$data = $this->auth_expy;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_expy")->isEmpty($data)) {
		return $this->getValueFromParent("auth_expy");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_expy - expy
* @param string $auth_expy
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_expy ($auth_expy) {
	$this->auth_expy = $auth_expy;
	return $this;
}

/**
* Get auth_reqtype - reqtype
* @return string
*/
public function getAuth_reqtype () {
	$data = $this->auth_reqtype;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_reqtype")->isEmpty($data)) {
		return $this->getValueFromParent("auth_reqtype");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_reqtype - reqtype
* @param string $auth_reqtype
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_reqtype ($auth_reqtype) {
	$this->auth_reqtype = $auth_reqtype;
	return $this;
}

/**
* Get auth_uppTransactionId - uppTransactionId
* @return string
*/
public function getAuth_uppTransactionId () {
	$data = $this->auth_uppTransactionId;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_uppTransactionId")->isEmpty($data)) {
		return $this->getValueFromParent("auth_uppTransactionId");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_uppTransactionId - uppTransactionId
* @param string $auth_uppTransactionId
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_uppTransactionId ($auth_uppTransactionId) {
	$this->auth_uppTransactionId = $auth_uppTransactionId;
	return $this;
}

/**
* Get auth_amount - amount
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
* Set auth_amount - amount
* @param string $auth_amount
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_amount ($auth_amount) {
	$this->auth_amount = $auth_amount;
	return $this;
}

/**
* Get auth_currency - currency
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
* Set auth_currency - currency
* @param string $auth_currency
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_currency ($auth_currency) {
	$this->auth_currency = $auth_currency;
	return $this;
}

/**
* Get auth_refno - refno
* @return string
*/
public function getAuth_refno () {
	$data = $this->auth_refno;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_refno")->isEmpty($data)) {
		return $this->getValueFromParent("auth_refno");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set auth_refno - refno
* @param string $auth_refno
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setAuth_refno ($auth_refno) {
	$this->auth_refno = $auth_refno;
	return $this;
}

/**
* Get paymentFinished - Date and Time
* @return \Carbon\Carbon
*/
public function getPaymentFinished () {
	$data = $this->paymentFinished;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("paymentFinished")->isEmpty($data)) {
		return $this->getValueFromParent("paymentFinished");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set paymentFinished - Date and Time
* @param \Carbon\Carbon $paymentFinished
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setPaymentFinished ($paymentFinished) {
	$this->paymentFinished = $paymentFinished;
	return $this;
}

/**
* Get sourceOrder - Source Order
* @return \Pimcore\Model\DataObject\OnlineShopOrder
*/
public function getSourceOrder () {
	$data = $this->getDefinition()->getFieldDefinition("sourceOrder")->preGetData($this);
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("sourceOrder")->isEmpty($data)) {
		return $this->getValueFromParent("sourceOrder");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set sourceOrder - Source Order
* @param \Pimcore\Model\DataObject\OnlineShopOrder $sourceOrder
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function setSourceOrder ($sourceOrder) {
	$this->sourceOrder = $this->getDefinition()->getFieldDefinition("sourceOrder")->preSetData($this, $sourceOrder);
	return $this;
}

}

