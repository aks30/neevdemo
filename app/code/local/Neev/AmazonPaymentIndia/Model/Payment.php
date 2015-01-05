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
class Neev_AmazonPaymentIndia_Model_Payment extends Mage_Payment_Model_Method_Abstract {

    protected $_code = 'amazonpayments';
    protected $_infoBlockType = 'amazonpaymentindia/payment_info';

    protected $_isGateway = false;
    protected $_canAuthorize = true;
    protected $_canCapture = false;
    protected $_canCapturePartial = false;
    protected $_canRefund = true;
    protected $_canRefundInvoicePartial = false;
    protected $_canVoid = true;
    protected $_canUseInternal = false;
    protected $_canUseCheckout = true;
    protected $_canUseForMultishipping = false;
    protected $_isInitializeNeeded = true;

    /**
     * Get checkout session
     *
     * @return Mage_Checkout_Model_Session
     */
    protected function _getCheckout() {
        return Mage::getSingleton('checkout/type_onepage');
    }

    protected function _isAmazonCheckout() {
        $_module = Mage::app()->getRequest()->getModuleName();
        if ($this->_getCheckoutMethod() == Neev_AmazonPaymentIndia_Model_Abstract::CHECKOUT_METHOD_AMAZON && $_module == 'amazonpaymentindia') return true;
        return false;
    }

    protected function _getCheckoutMethod() {
        return $this->_getCheckout()->getQuote()->getData('checkout_method');
    }

    /**
     * Check whether payment method can be used
     *
     * @param Mage_Sales_Model_Quote
     * @return bool
     */
    public function isAvailable($quote = null) {
        $checkResult = new StdClass;
        $checkResult->isAvailable = Mage::helper('amazonpaymentindia')->getConfigData('active') ?
                ($this->_isAmazonCheckout() ? true : false) :
                false;
        Mage::dispatchEvent('payment_method_is_active', array(
            'result' => $checkResult,
            'method_instance' => $this,
            'quote' => $quote,
        ));
        return $checkResult->isAvailable;
    }

    /**
     * Instantiate state and set it to state object
     * @param string $paymentAction
     * @param Varien_Object
     */
    public function initialize($paymentAction, $stateObject) {
        $state = Mage_Sales_Model_Order::STATE_PENDING_PAYMENT;
        $stateObject->setState($state);
        $stateObject->setStatus('pending_amazon');
        $stateObject->setIsNotified(false);
        return $this;
    }

    public function getOrderPlaceRedirectUrl() {
        return Mage::getUrl('amazonpaymentindia/checkout/success');
    }

}
