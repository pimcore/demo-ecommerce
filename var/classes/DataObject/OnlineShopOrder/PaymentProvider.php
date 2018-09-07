<?php 

namespace Pimcore\Model\DataObject\OnlineShopOrder;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {



protected $brickGetters = array('PaymentProviderDatatrans','PaymentProviderMpay24','PaymentProviderOGone','PaymentProviderPayPal','PaymentProviderQpay','PaymentProviderWirecardSeamless');


protected $PaymentProviderDatatrans = null;

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

protected $PaymentProviderMpay24 = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24
*/
public function getPaymentProviderMpay24() { 
   return $this->PaymentProviderMpay24; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderMpay24 $PaymentProviderMpay24
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderMpay24 ($PaymentProviderMpay24) {
	$this->PaymentProviderMpay24 = $PaymentProviderMpay24;
	return $this;
}

protected $PaymentProviderOGone = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone
*/
public function getPaymentProviderOGone() { 
   return $this->PaymentProviderOGone; 
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderOGone $PaymentProviderOGone
* @return \Pimcore\Model\DataObject\OnlineShopOrder\PaymentProvider
*/
public function setPaymentProviderOGone ($PaymentProviderOGone) {
	$this->PaymentProviderOGone = $PaymentProviderOGone;
	return $this;
}

protected $PaymentProviderPayPal = null;

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

protected $PaymentProviderQpay = null;

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

protected $PaymentProviderWirecardSeamless = null;

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

