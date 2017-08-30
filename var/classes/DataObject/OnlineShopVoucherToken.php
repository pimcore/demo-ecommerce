<?php

/** Generated at 2016-04-07T17:04:01+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (2)
* IP:          192.168.11.5
*/


namespace Pimcore\Model\DataObject;



/**
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherToken\Listing getByTokenId ($value, $limit = 0)
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherToken\Listing getByToken ($value, $limit = 0)
* @method static \Pimcore\Model\DataObject\OnlineShopVoucherToken\Listing getByVoucherSeries ($value, $limit = 0)
*/

class OnlineShopVoucherToken extends Concrete {

public $o_classId = 34;
public $o_className = "OnlineShopVoucherToken";
public $tokenId;
public $token;
public $voucherSeries;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\OnlineShopVoucherToken
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get tokenId - Token ID
* @return float
*/
public function getTokenId () {
	$preValue = $this->preGetValue("tokenId");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->tokenId;
	return $data;
}

/**
* Set tokenId - Token ID
* @param float $tokenId
* @return \Pimcore\Model\DataObject\OnlineShopVoucherToken
*/
public function setTokenId ($tokenId) {
	$this->tokenId = $tokenId;
	return $this;
}

/**
* Get token - Token
* @return string
*/
public function getToken () {
	$preValue = $this->preGetValue("token");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->token;
	return $data;
}

/**
* Set token - Token
* @param string $token
* @return \Pimcore\Model\DataObject\OnlineShopVoucherToken
*/
public function setToken ($token) {
	$this->token = $token;
	return $this;
}

/**
* Get voucherSeries - Voucher Series
* @return \Pimcore\Model\DataObject\OnlineShopVoucherSeries
*/
public function getVoucherSeries () {
	$preValue = $this->preGetValue("voucherSeries");
	if($preValue !== null && !\Pimcore::inAdmin()) {
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("voucherSeries")->preGetData($this);
	return $data;
}

/**
* Set voucherSeries - Voucher Series
* @param \Pimcore\Model\DataObject\OnlineShopVoucherSeries $voucherSeries
* @return \Pimcore\Model\DataObject\OnlineShopVoucherToken
*/
public function setVoucherSeries ($voucherSeries) {
	$this->voucherSeries = $this->getClass()->getFieldDefinition("voucherSeries")->preSetData($this, $voucherSeries);
	return $this;
}

protected static $_relationFields = array (
  'voucherSeries' =>
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

