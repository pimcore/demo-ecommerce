<?php 

/** 
* Generated at: 2017-01-02T09:01:06+01:00
* Inheritance: no
* Variants: no
* Changed by: cfasching (6)
* IP: 192.168.11.5


Fields Summary: 
- ordernumber [input]
- orderState [select]
- orderdate [datetime]
- items [objects]
- comment [textarea]
- customerOrderData [input]
- voucherTokens [objects]
- giftItems [objects]
- priceModifications [fieldcollections]
- subTotalNetPrice [numeric]
- subTotalPrice [numeric]
- totalNetPrice [numeric]
- totalPrice [numeric]
- taxInfo [table]
- currency [input]
- cartId [input]
- customer [href]
- customerFirstname [input]
- customerLastname [input]
- customerCompany [input]
- customerStreet [input]
- customerZip [input]
- customerCity [input]
- customerCountry [country]
- customerEmail [input]
- deliveryFirstname [input]
- deliveryLastname [input]
- deliveryCompany [input]
- deliveryStreet [input]
- deliveryZip [input]
- deliveryCity [input]
- deliveryCountry [country]
- paymentProvider [objectbricks]
- paymentInfo [fieldcollections]
- paymentReference [input]
*/ 

namespace Pimcore\Model\Object;


/**
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByOrdernumber ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByOrderState ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByOrderdate ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByItems ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByComment ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerOrderData ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByVoucherTokens ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByGiftItems ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByPriceModifications ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getBySubTotalNetPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getBySubTotalPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByTotalNetPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByTotalPrice ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByTaxInfo ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCurrency ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCartId ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomer ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerCompany ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerStreet ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerZip ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerCity ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerCountry ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByCustomerEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryCompany ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryStreet ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryZip ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryCity ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByDeliveryCountry ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByPaymentProvider ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByPaymentInfo ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\OnlineShopOrder\Listing getByPaymentReference ($value, $limit = 0) 
*/

class OnlineShopOrder extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractOrder {

public $o_classId = 9;
public $o_className = "OnlineShopOrder";
public $ordernumber;
public $orderState;
public $orderdate;
public $items;
public $comment;
public $customerOrderData;
public $voucherTokens;
public $giftItems;
public $priceModifications;
public $subTotalNetPrice;
public $subTotalPrice;
public $totalNetPrice;
public $totalPrice;
public $taxInfo;
public $currency;
public $cartId;
public $customer;
public $customerFirstname;
public $customerLastname;
public $customerCompany;
public $customerStreet;
public $customerZip;
public $customerCity;
public $customerCountry;
public $customerEmail;
public $deliveryFirstname;
public $deliveryLastname;
public $deliveryCompany;
public $deliveryStreet;
public $deliveryZip;
public $deliveryCity;
public $deliveryCountry;
public $paymentProvider;
public $paymentInfo;
public $paymentReference;


/**
* @param array $values
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get ordernumber - Ordernumber
* @return string
*/
public function getOrdernumber () {
	$preValue = $this->preGetValue("ordernumber"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->ordernumber;
	return $data;
}

/**
* Set ordernumber - Ordernumber
* @param string $ordernumber
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setOrdernumber ($ordernumber) {
	$this->ordernumber = $ordernumber;
	return $this;
}

/**
* Get orderState - OrderState
* @return string
*/
public function getOrderState () {
	$preValue = $this->preGetValue("orderState"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderState;
	return $data;
}

/**
* Set orderState - OrderState
* @param string $orderState
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setOrderState ($orderState) {
	$this->orderState = $orderState;
	return $this;
}

/**
* Get orderdate - Orderdate
* @return \Carbon\Carbon
*/
public function getOrderdate () {
	$preValue = $this->preGetValue("orderdate"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->orderdate;
	return $data;
}

/**
* Set orderdate - Orderdate
* @param \Carbon\Carbon $orderdate
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setOrderdate ($orderdate) {
	$this->orderdate = $orderdate;
	return $this;
}

/**
* Get items - Items
* @return \Pimcore\Model\Object\OnlineShopOrderItem[]
*/
public function getItems () {
	$preValue = $this->preGetValue("items"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("items")->preGetData($this);
	return $data;
}

/**
* Set items - Items
* @param \Pimcore\Model\Object\OnlineShopOrderItem[] $items
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setItems ($items) {
	$this->items = $this->getClass()->getFieldDefinition("items")->preSetData($this, $items);
	return $this;
}

/**
* Get comment - Comment
* @return string
*/
public function getComment () {
	$preValue = $this->preGetValue("comment"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->comment;
	return $data;
}

/**
* Set comment - Comment
* @param string $comment
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setComment ($comment) {
	$this->comment = $comment;
	return $this;
}

/**
* Get customerOrderData - Customer Order Data
* @return string
*/
public function getCustomerOrderData () {
	$preValue = $this->preGetValue("customerOrderData"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerOrderData;
	return $data;
}

/**
* Set customerOrderData - Customer Order Data
* @param string $customerOrderData
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerOrderData ($customerOrderData) {
	$this->customerOrderData = $customerOrderData;
	return $this;
}

/**
* Get voucherTokens - Voucher Tokens
* @return \Pimcore\Model\Object\OnlineShopVoucherToken[]
*/
public function getVoucherTokens () {
	$preValue = $this->preGetValue("voucherTokens"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("voucherTokens")->preGetData($this);
	return $data;
}

/**
* Set voucherTokens - Voucher Tokens
* @param \Pimcore\Model\Object\OnlineShopVoucherToken[] $voucherTokens
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setVoucherTokens ($voucherTokens) {
	$this->voucherTokens = $this->getClass()->getFieldDefinition("voucherTokens")->preSetData($this, $voucherTokens);
	return $this;
}

/**
* Get giftItems - Gift Items
* @return \Pimcore\Model\Object\OnlineShopOrderItem[]
*/
public function getGiftItems () {
	$preValue = $this->preGetValue("giftItems"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("giftItems")->preGetData($this);
	return $data;
}

/**
* Set giftItems - Gift Items
* @param \Pimcore\Model\Object\OnlineShopOrderItem[] $giftItems
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setGiftItems ($giftItems) {
	$this->giftItems = $this->getClass()->getFieldDefinition("giftItems")->preSetData($this, $giftItems);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getPriceModifications () {
	$preValue = $this->preGetValue("priceModifications"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("priceModifications")->preGetData($this);
	 return $data;
}

/**
* Set priceModifications - PriceModifications
* @param \Pimcore\Model\Object\Fieldcollection $priceModifications
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setPriceModifications ($priceModifications) {
	$this->priceModifications = $this->getClass()->getFieldDefinition("priceModifications")->preSetData($this, $priceModifications);
	return $this;
}

/**
* Get subTotalNetPrice - SubTotalNetPrice
* @return float
*/
public function getSubTotalNetPrice () {
	$preValue = $this->preGetValue("subTotalNetPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->subTotalNetPrice;
	return $data;
}

/**
* Set subTotalNetPrice - SubTotalNetPrice
* @param float $subTotalNetPrice
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setSubTotalNetPrice ($subTotalNetPrice) {
	$this->subTotalNetPrice = $subTotalNetPrice;
	return $this;
}

/**
* Get subTotalPrice - SubTotalPrice
* @return float
*/
public function getSubTotalPrice () {
	$preValue = $this->preGetValue("subTotalPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->subTotalPrice;
	return $data;
}

/**
* Set subTotalPrice - SubTotalPrice
* @param float $subTotalPrice
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setSubTotalPrice ($subTotalPrice) {
	$this->subTotalPrice = $subTotalPrice;
	return $this;
}

/**
* Get totalNetPrice - TotalNetPrice
* @return float
*/
public function getTotalNetPrice () {
	$preValue = $this->preGetValue("totalNetPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalNetPrice;
	return $data;
}

/**
* Set totalNetPrice - TotalNetPrice
* @param float $totalNetPrice
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setTotalNetPrice ($totalNetPrice) {
	$this->totalNetPrice = $totalNetPrice;
	return $this;
}

/**
* Get totalPrice - TotalPrice
* @return float
*/
public function getTotalPrice () {
	$preValue = $this->preGetValue("totalPrice"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->totalPrice;
	return $data;
}

/**
* Set totalPrice - TotalPrice
* @param float $totalPrice
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setTotalPrice ($totalPrice) {
	$this->totalPrice = $totalPrice;
	return $this;
}

/**
* Get taxInfo - Tax Information
* @return array
*/
public function getTaxInfo () {
	$preValue = $this->preGetValue("taxInfo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->taxInfo;
	return $data;
}

/**
* Set taxInfo - Tax Information
* @param array $taxInfo
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setTaxInfo ($taxInfo) {
	$this->taxInfo = $taxInfo;
	return $this;
}

/**
* Get currency - Currency
* @return string
*/
public function getCurrency () {
	$preValue = $this->preGetValue("currency"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->currency;
	return $data;
}

/**
* Set currency - Currency
* @param string $currency
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCurrency ($currency) {
	$this->currency = $currency;
	return $this;
}

/**
* Get cartId - Cart ID
* @return string
*/
public function getCartId () {
	$preValue = $this->preGetValue("cartId"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->cartId;
	return $data;
}

/**
* Set cartId - Cart ID
* @param string $cartId
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCartId ($cartId) {
	$this->cartId = $cartId;
	return $this;
}

/**
* Get customer - Customer
* @return \Pimcore\Model\Object\Customer
*/
public function getCustomer () {
	$preValue = $this->preGetValue("customer"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("customer")->preGetData($this);
	return $data;
}

/**
* Set customer - Customer
* @param \Pimcore\Model\Object\Customer $customer
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomer ($customer) {
	$this->customer = $this->getClass()->getFieldDefinition("customer")->preSetData($this, $customer);
	return $this;
}

/**
* Get customerFirstname - Firstname
* @return string
*/
public function getCustomerFirstname () {
	$preValue = $this->preGetValue("customerFirstname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerFirstname;
	return $data;
}

/**
* Set customerFirstname - Firstname
* @param string $customerFirstname
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerFirstname ($customerFirstname) {
	$this->customerFirstname = $customerFirstname;
	return $this;
}

/**
* Get customerLastname - Lastname
* @return string
*/
public function getCustomerLastname () {
	$preValue = $this->preGetValue("customerLastname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerLastname;
	return $data;
}

/**
* Set customerLastname - Lastname
* @param string $customerLastname
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerLastname ($customerLastname) {
	$this->customerLastname = $customerLastname;
	return $this;
}

/**
* Get customerCompany - Company
* @return string
*/
public function getCustomerCompany () {
	$preValue = $this->preGetValue("customerCompany"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerCompany;
	return $data;
}

/**
* Set customerCompany - Company
* @param string $customerCompany
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerCompany ($customerCompany) {
	$this->customerCompany = $customerCompany;
	return $this;
}

/**
* Get customerStreet - Street
* @return string
*/
public function getCustomerStreet () {
	$preValue = $this->preGetValue("customerStreet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerStreet;
	return $data;
}

/**
* Set customerStreet - Street
* @param string $customerStreet
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerStreet ($customerStreet) {
	$this->customerStreet = $customerStreet;
	return $this;
}

/**
* Get customerZip - Zip
* @return string
*/
public function getCustomerZip () {
	$preValue = $this->preGetValue("customerZip"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerZip;
	return $data;
}

/**
* Set customerZip - Zip
* @param string $customerZip
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerZip ($customerZip) {
	$this->customerZip = $customerZip;
	return $this;
}

/**
* Get customerCity - City
* @return string
*/
public function getCustomerCity () {
	$preValue = $this->preGetValue("customerCity"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerCity;
	return $data;
}

/**
* Set customerCity - City
* @param string $customerCity
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerCity ($customerCity) {
	$this->customerCity = $customerCity;
	return $this;
}

/**
* Get customerCountry - Country
* @return string
*/
public function getCustomerCountry () {
	$preValue = $this->preGetValue("customerCountry"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerCountry;
	return $data;
}

/**
* Set customerCountry - Country
* @param string $customerCountry
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerCountry ($customerCountry) {
	$this->customerCountry = $customerCountry;
	return $this;
}

/**
* Get customerEmail - Email
* @return string
*/
public function getCustomerEmail () {
	$preValue = $this->preGetValue("customerEmail"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->customerEmail;
	return $data;
}

/**
* Set customerEmail - Email
* @param string $customerEmail
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setCustomerEmail ($customerEmail) {
	$this->customerEmail = $customerEmail;
	return $this;
}

/**
* Get deliveryFirstname - Firstname
* @return string
*/
public function getDeliveryFirstname () {
	$preValue = $this->preGetValue("deliveryFirstname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryFirstname;
	return $data;
}

/**
* Set deliveryFirstname - Firstname
* @param string $deliveryFirstname
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryFirstname ($deliveryFirstname) {
	$this->deliveryFirstname = $deliveryFirstname;
	return $this;
}

/**
* Get deliveryLastname - Lastname
* @return string
*/
public function getDeliveryLastname () {
	$preValue = $this->preGetValue("deliveryLastname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryLastname;
	return $data;
}

/**
* Set deliveryLastname - Lastname
* @param string $deliveryLastname
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryLastname ($deliveryLastname) {
	$this->deliveryLastname = $deliveryLastname;
	return $this;
}

/**
* Get deliveryCompany - Company
* @return string
*/
public function getDeliveryCompany () {
	$preValue = $this->preGetValue("deliveryCompany"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryCompany;
	return $data;
}

/**
* Set deliveryCompany - Company
* @param string $deliveryCompany
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryCompany ($deliveryCompany) {
	$this->deliveryCompany = $deliveryCompany;
	return $this;
}

/**
* Get deliveryStreet - Street
* @return string
*/
public function getDeliveryStreet () {
	$preValue = $this->preGetValue("deliveryStreet"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryStreet;
	return $data;
}

/**
* Set deliveryStreet - Street
* @param string $deliveryStreet
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryStreet ($deliveryStreet) {
	$this->deliveryStreet = $deliveryStreet;
	return $this;
}

/**
* Get deliveryZip - Zip
* @return string
*/
public function getDeliveryZip () {
	$preValue = $this->preGetValue("deliveryZip"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryZip;
	return $data;
}

/**
* Set deliveryZip - Zip
* @param string $deliveryZip
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryZip ($deliveryZip) {
	$this->deliveryZip = $deliveryZip;
	return $this;
}

/**
* Get deliveryCity - City
* @return string
*/
public function getDeliveryCity () {
	$preValue = $this->preGetValue("deliveryCity"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryCity;
	return $data;
}

/**
* Set deliveryCity - City
* @param string $deliveryCity
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryCity ($deliveryCity) {
	$this->deliveryCity = $deliveryCity;
	return $this;
}

/**
* Get deliveryCountry - Country
* @return string
*/
public function getDeliveryCountry () {
	$preValue = $this->preGetValue("deliveryCountry"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->deliveryCountry;
	return $data;
}

/**
* Set deliveryCountry - Country
* @param string $deliveryCountry
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setDeliveryCountry ($deliveryCountry) {
	$this->deliveryCountry = $deliveryCountry;
	return $this;
}

/**
* @return \Pimcore\Model\Object\Objectbrick
*/
public function getPaymentProvider () {
	$data = $this->paymentProvider;
	if(!$data) { 
		if(\Pimcore\Tool::classExists("\\Pimcore\\Model\\Object\\OnlineShopOrder\\PaymentProvider")) { 
			$data = new \Pimcore\Model\Object\OnlineShopOrder\PaymentProvider($this, "paymentProvider");
			$this->paymentProvider = $data;
		} else {
			return null;
		}
	}
	$preValue = $this->preGetValue("paymentProvider"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set paymentProvider - Payment Provider
* @param \Pimcore\Model\Object\Objectbrick $paymentProvider
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setPaymentProvider ($paymentProvider) {
	$this->paymentProvider = $this->getClass()->getFieldDefinition("paymentProvider")->preSetData($this, $paymentProvider);
	return $this;
}

/**
* @return \Pimcore\Model\Object\Fieldcollection
*/
public function getPaymentInfo () {
	$preValue = $this->preGetValue("paymentInfo"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	$data = $this->getClass()->getFieldDefinition("paymentInfo")->preGetData($this);
	 return $data;
}

/**
* Set paymentInfo - Payment Informations
* @param \Pimcore\Model\Object\Fieldcollection $paymentInfo
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setPaymentInfo ($paymentInfo) {
	$this->paymentInfo = $this->getClass()->getFieldDefinition("paymentInfo")->preSetData($this, $paymentInfo);
	return $this;
}

/**
* Get paymentReference - Payment Ref.
* @return string
*/
public function getPaymentReference () {
	$preValue = $this->preGetValue("paymentReference"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->paymentReference;
	return $data;
}

/**
* Set paymentReference - Payment Ref.
* @param string $paymentReference
* @return \Pimcore\Model\Object\OnlineShopOrder
*/
public function setPaymentReference ($paymentReference) {
	$this->paymentReference = $paymentReference;
	return $this;
}

protected static $_relationFields = array (
  'items' => 
  array (
    'type' => 'objects',
  ),
  'voucherTokens' => 
  array (
    'type' => 'objects',
  ),
  'giftItems' => 
  array (
    'type' => 'objects',
  ),
  'customer' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'giftItems',
  1 => 'customer',
);

}

