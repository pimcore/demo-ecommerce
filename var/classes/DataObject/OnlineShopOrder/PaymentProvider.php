<?php 

namespace Pimcore\Model\DataObject\OnlineShopOrder;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {



protected $brickGetters = array('PaymentProviderDatatrans','PaymentProviderPayPal','PaymentProviderQpay','PaymentProviderWirecardSeamless');


public $PaymentProviderDatatrans = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans
*/
public function getPaymentProviderDatatrans() { 
   return $this->PaymentProviderDatatrans; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderDatatrans $PaymentProviderDatatrans
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderDatatrans ($PaymentProviderDatatrans) {
	$this->PaymentProviderDatatrans = $PaymentProviderDatatrans;
	return $this;
}

public $PaymentProviderPayPal = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal
*/
public function getPaymentProviderPayPal() { 
   return $this->PaymentProviderPayPal; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderPayPal $PaymentProviderPayPal
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderPayPal ($PaymentProviderPayPal) {
	$this->PaymentProviderPayPal = $PaymentProviderPayPal;
	return $this;
}

public $PaymentProviderQpay = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay
*/
public function getPaymentProviderQpay() { 
   return $this->PaymentProviderQpay; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderQpay $PaymentProviderQpay
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderQpay ($PaymentProviderQpay) {
	$this->PaymentProviderQpay = $PaymentProviderQpay;
	return $this;
}

public $PaymentProviderWirecardSeamless = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function getPaymentProviderWirecardSeamless() { 
   return $this->PaymentProviderWirecardSeamless; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderWirecardSeamless $PaymentProviderWirecardSeamless
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderWirecardSeamless ($PaymentProviderWirecardSeamless) {
	$this->PaymentProviderWirecardSeamless = $PaymentProviderWirecardSeamless;
	return $this;
}

}

