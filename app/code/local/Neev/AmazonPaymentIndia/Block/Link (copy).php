<?php

/**
 * This file is part of The Official Amazon Payments Magento Extension
 * (c) Neev Technologies
 * All rights reserved
 *
 * Reuse or modification of this source code is not allowed
 * without written permission from Neev Technologies
 *
 * @category   Neev
 * @package    Neev_AmazonPaymentIndia
 * @copyright  Copyright (c) 2011 - 2013 Neev Technologies (http://www.neevtech.com)
 * @author     Milind Desai / Neev Technologies
 */
class Neev_AmazonPaymentIndia_Block_Link extends Neev_AmazonPaymentIndia_Block_Abstract {

    public function _toHtml() {
        $quote = Mage::getSingleton('checkout/session')->getQuote();
        if ($this->_isActive() && $quote->validateMinimumAmount()) {
            return parent::_toHtml();
        }
        return '';
    }

    protected function _getButtonSize() {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_SIZE);
    }

    protected function _getButtonColor() {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_COLOR);
    }

    protected function _getButtonBackground() {
        return Mage::getStoreConfig(self::XML_PATH_BUTTON_BACKGROUND);
    }

    public function getButtonWidgetUrl() {
        switch ($this->_getMarketplace()) {
            case 'de_DE':
                switch ($this->_getMode()) {
                    case 'live':
                        return 'https://payments.amazon.de/gp/cba/button?cartOwnerId=' . $this->getMerchantId() . '&size=' . $this->_getButtonSize() . '&color=' . $this->_getButtonColor() . '&background=' . $this->_getButtonBackground() . '&type=inlineCheckout';

                    case 'sandbox':
                        return 'https://payments-sandbox.amazon.de/gp/cba/button?cartOwnerId=' . $this->getMerchantId() . '&size=' . $this->_getButtonSize() . '&color=' . $this->_getButtonColor() . '&background=' . $this->_getButtonBackground() . '&type=inlineCheckout';
                }

            case 'en_GB':
                switch ($this->_getMode()) {
                    case 'live':
                        return 'https://payments.amazon.co.uk/gp/cba/button?cartOwnerId=' . $this->getMerchantId() . '&size=' . $this->_getButtonSize() . '&color=' . $this->_getButtonColor() . '&background=' . $this->_getButtonBackground() . '&type=inlineCheckout';

                    case 'sandbox':
                        return 'https://payments-sandbox.amazon.co.uk/gp/cba/button?cartOwnerId=' . $this->getMerchantId() . '&size=' . $this->_getButtonSize() . '&color=' . $this->_getButtonColor() . '&background=' . $this->_getButtonBackground() . '&type=inlineCheckout';
                }

            default:
                switch ($this->_getMode()) {
                    case 'live':
                        return 'https://payments.amazon.com/gp/cba/button?cartOwnerId=' . $this->getMerchantId() . '&size=' . $this->_getButtonSize() . '&color=' . $this->_getButtonColor() . '&background=' . $this->_getButtonBackground() . '&type=inlineCheckout';

                    case 'sandbox':
                        return 'https://payments-sandbox.amazon.com/gp/cba/button?cartOwnerId=' . $this->getMerchantId() . '&size=' . $this->_getButtonSize() . '&color=' . $this->_getButtonColor() . '&background=' . $this->_getButtonBackground() . '&type=inlineCheckout';
                }
        }

    }

    public function getAmazonCheckoutUrl() {
        $url = Mage::getUrl('amazonpaymentindia/checkout');
/*
        if (preg_match('/\?(.+)/', $url))
            $url .= '&purchaseContractId=';
            $url .= '?purchaseContractId=';
 */
        return $url;
    }

    public function getPurchaseContractId() {
        if (Mage::getStoreConfig(self::XML_PATH_REUSE_AMAZON_SESSION)) {
            if (Mage::getSingleton('checkout/session')->getAmazonPurchaseContractId()) {
                try {
                    $purchaseContract = Mage::getModel('amazonpaymentindia/api_checkout')->getPurchaseContract(Mage::getSingleton('checkout/session')->getAmazonPurchaseContractId());
                    if (strtolower($purchaseContract->getState()) == 'active') return $purchaseContract->getId();
                } catch (Exception $e) {
                    return false;
                }
            }
        }
        return false;
    }
     public function createOrderInputValue()
    {

        $dom = new \DOMDocument("1.0","utf-8");
        $dom->formatOutput = true;
        $orderXML = $dom->saveXML($this->toXML($dom));
        $orderInput = "type:merchant-signed-order/aws-accesskey/1;order:".$this->encodeCart($orderXML).";"."signature:".$this->signCart($orderXML) .";aws-access-key-id:". "AKIAJVP37DC3GTETQI4A";return $orderInput;
    }

    public function toXML($dom)
    {
        //$this->validateOptionalProperties();
        $orderXML = $dom->createElement("Order");
        $orderXML->setAttribute("xmlns","http://payments.amazon.com/checkout/2009-05-15/");

        //Arrays for item Shipping Tables and Promotions
        $itemShippingMethods = array();
        $itemPromotions = array();
        $cart = $dom->createElement("Cart");
        $itemsTag = $dom->createElement("Items");   
                 
        $quote = Mage::getSingleton('checkout/session')->getQuote();
        $cartItems = $quote->getAllVisibleItems();    
        foreach ($cartItems as $item)
        {     
          $productId = $item->getProductId();
          $product = Mage::getModel('catalog/product')->load($productId);
          $itemsTag->appendChild($dom->importNode($this->toitemXML("A111O19OHHZ2JW","INR","g",$dom,$product,$item->getQty()),true));
        }
        $cart->appendChild($itemsTag);
        $orderXML->appendChild($cart);        
        $orderXML->appendChild($dom->createElement("IntegratorId",""));
        $orderXML->appendChild($dom->createElement("IntegratorName","standard checkout"));
        $orderXML->appendChild($dom->createElement("ReturnUrl","https://amazonetest.com/index.php/return"));
        $orderXML->appendChild($dom->createElement("CancelUrl","https://amazonetest.com/index.php/return"));
        $callbacksTag = $dom->createElement("OrderCalculationCallbacks");

            $callbacksTag->appendChild($dom->createElement("CalculatePromotions","false"));
            $callbacksTag->appendChild($dom->createElement("CalculateShippingRates","false"));
            $callbacksTag->appendChild($dom->createElement("OrderCallbackEndpoint","https://amazonetest.com/cba/CallBack.php"));
            $callbacksTag->appendChild($dom->createElement("ProcessOrderOnCallbackFailure","false"));

            $orderXML->appendChild($callbacksTag);
        return $orderXML;
    }


    public function encodeCart($orderXML)
    {
        return base64_encode($orderXML);
    }
    public function signCart($orderXML)
    {
       // $calculator = new \AmazonPayments\Signature\SignatureCalculator();
        return $this->calculateRFC2104HMAC($orderXML, "bcoOQlP+GMQLff/RCaWaNjDo+/XFYe+dcV3CNt32");
    }

     public function calculateRFC2104HMAC($data, $key) {
    // compute the hmac on input data bytes, make sure to set returning raw hmac to be true
        $HMAC_SHA1_ALGORITHM = "sha1";
    $rawHmac = hash_hmac($HMAC_SHA1_ALGORITHM, $data, $key, true);

    // base64-encode the raw hmac
    return base64_encode($rawHmac);
  }
  public function toitemXML($merchantId,$currency,$weightunit,$dom,$product,$qty)
  {
       
        $itemXML = $dom->createElement("Item");

        $itemXML->appendChild($dom->createElement("SKU",$product->getSku()));

        $itemXML->appendChild($dom->createElement("MerchantId",$merchantId));

        $itemXML->appendChild($dom->createElement("Title",$product->getName()));

        $itemXML->appendChild($dom->createElement("Description",$product->getDescription()));

        $itemXML->appendChild($dom->importNode($this->topriceXML($product->getFinalPrice(),$dom),true));
        $itemXML->appendChild($dom->createElement("Quantity",$qty));
        return $itemXML;
  } 

  public function towightXML($dom){

        $itemWeight = $dom->createElement("Weight");
        $itemWeight->appendChild($dom->createElement("Amount","2.00"));
        $itemWeight->appendChild($dom->createElement("Unit","KG"));
        
        return $itemWeight;
        

  }

  public function topriceXML($price,$dom){

        $itemPrice = $dom->createElement("Price");
        $itemPrice->appendChild($dom->createElement("Amount",$price));
        $itemPrice->appendChild($dom->createElement("CurrencyCode","INR"));
        return $itemPrice;
    
  }
  public function toordercalculationXML($dom)
  {
    $ordercal = $dom->createElement("OrderCalculationCallbacks");
    $ordercal->appendChild($dom->createElement("CalculateTaxRates",true));
    $ordercal->appendChild($dom->createElement("CalculatePromotions",true));
    $ordercal->appendChild($dom->createElement("CalculateShippingRates",true));
    $ordercal->appendChild($dom->createElement("OrderCallbackEndpoint","https://amazonetest.com/cba/CallBack.php"));
    $ordercal->appendChild($dom->createElement("ProcessOrderOnCallbackFailure",true));
        return $ordercal;
    
  }

}
