<?php 

namespace Pimcore\Model\Object\OnlineShopOrder;

class PaymentProvider extends \Pimcore\Model\Object\Objectbrick {



protected $brickGetters = array('PaymentProviderWirecardSeamless','PaymentProviderDatatrans','PaymentProviderPayPal','PaymentProviderQpay');


public $PaymentProviderWirecardSeamless = null;

/**
* @return \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderWirecardSeamless
*/
public function getPaymentProviderWirecardSeamless() { 
   return $this->PaymentProviderWirecardSeamless; 
}

/**
* @param \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderWirecardSeamless $PaymentProviderWirecardSeamless
* @return void
*/
public function setPaymentProviderWirecardSeamless ($PaymentProviderWirecardSeamless) {
	$this->PaymentProviderWirecardSeamless = $PaymentProviderWirecardSeamless;
	return $this;;
}

public $PaymentProviderDatatrans = null;

/**
* @return \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderDatatrans
*/
public function getPaymentProviderDatatrans() { 
   return $this->PaymentProviderDatatrans; 
}

/**
* @param \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderDatatrans $PaymentProviderDatatrans
* @return void
*/
public function setPaymentProviderDatatrans ($PaymentProviderDatatrans) {
	$this->PaymentProviderDatatrans = $PaymentProviderDatatrans;
	return $this;;
}

public $PaymentProviderPayPal = null;

/**
* @return \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderPayPal
*/
public function getPaymentProviderPayPal() { 
   return $this->PaymentProviderPayPal; 
}

/**
* @param \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderPayPal $PaymentProviderPayPal
* @return void
*/
public function setPaymentProviderPayPal ($PaymentProviderPayPal) {
	$this->PaymentProviderPayPal = $PaymentProviderPayPal;
	return $this;;
}

public $PaymentProviderQpay = null;

/**
* @return \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderQpay
*/
public function getPaymentProviderQpay() { 
   return $this->PaymentProviderQpay; 
}

/**
* @param \Pimcore\Model\Object\Objectbrick\Data\PaymentProviderQpay $PaymentProviderQpay
* @return void
*/
public function setPaymentProviderQpay ($PaymentProviderQpay) {
	$this->PaymentProviderQpay = $PaymentProviderQpay;
	return $this;;
}

}

