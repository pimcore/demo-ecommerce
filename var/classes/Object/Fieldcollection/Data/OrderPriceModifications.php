<?php 

/** 
* Generated at: 2016-12-23T21:18:54+01:00
* IP: 10.242.2.2


Fields Summary: 
 - name [input]
 - netAmount [numeric]
 - amount [numeric]
*/ 

namespace Pimcore\Model\Object\Fieldcollection\Data;

use Pimcore\Model\Object;

class OrderPriceModifications extends Object\Fieldcollection\Data\AbstractData  {

public $type = "OrderPriceModifications";
public $name;
public $netAmount;
public $amount;


/**
* Get name - Name
* @return string
*/
public function getName () {
	$data = $this->name;
	 return $data;
}

/**
* Set name - Name
* @param string $name
* @return \Pimcore\Model\Object\OrderPriceModifications
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get netAmount - NetAmount
* @return float
*/
public function getNetAmount () {
	$data = $this->netAmount;
	 return $data;
}

/**
* Set netAmount - NetAmount
* @param float $netAmount
* @return \Pimcore\Model\Object\OrderPriceModifications
*/
public function setNetAmount ($netAmount) {
	$this->netAmount = $netAmount;
	return $this;
}

/**
* Get amount - Amount
* @return float
*/
public function getAmount () {
	$data = $this->amount;
	 return $data;
}

/**
* Set amount - Amount
* @param float $amount
* @return \Pimcore\Model\Object\OrderPriceModifications
*/
public function setAmount ($amount) {
	$this->amount = $amount;
	return $this;
}

}

