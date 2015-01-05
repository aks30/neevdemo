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
class Neev_AmazonPaymentIndia_Model_Payment_AmazonPaymentIndia_Abstract extends Neev_AmazonPaymentIndia_Model_Payment_Abstract {

    protected $_code = 'amazonpaymentindia_abstract';
    protected $_infoBlockType = 'amazonpaymentindia/payment_info';

    protected $_isGateway = false;
    protected $_canAuthorize = true;
    protected $_canCapture = true;
    protected $_canCapturePartial = false;
    protected $_canRefund = true;
    protected $_canRefundInvoicePartial = true;
    protected $_canVoid = true;
    protected $_canUseInternal = false;
    protected $_canUseCheckout = false;
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

    /**
     * @deprecated after 1.5.0
     */
    protected function _isAmazonCheckout() {
        $_module = Mage::app()->getRequest()->getModuleName();
        if ($this->_getCheckoutMethod() == Neev_AmazonPaymentIndia_Model_Abstract::CHECKOUT_METHOD_AMAZON && $_module == 'amazonpaymentindia') return true;
        return false;
    }

    /**
     * @deprecated after 1.5.0
     */
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
        $checkResult->isAvailable = (bool)Mage::helper('amazonpaymentindia')->getConfigData('active');
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
     * @return Neev_AmazonPaymentIndia_Model_Payment_AmazonPaymentIndia_Abstract
     */
    public function initialize($paymentAction, $stateObject) {
        $state = Mage_Sales_Model_Order::STATE_PENDING_PAYMENT;
        $stateObject->setState($state);
        $stateObject->setStatus('pending_amazon');
        $stateObject->setIsNotified(false);
        return $this;
    }

    /**
     * Authorize
     *
     * @param Varien_Object $payment
     * @param float $amount
     * @return Neev_AmazonPaymentIndia_Model_Payment_AmazonPaymentIndia_Abstract
     */
    public function authorize(Varien_Object $payment, $amount) {

        if (!$this->canAuthorize()) Mage::helper('amazonpaymentindia')->throwException('Authorize action is not available');

        if ($payment->getOrder()->canInvoice()) {
            $invoice = $payment->getOrder()
                ->prepareInvoice()
                ->register();
            $invoice->setTransactionId($payment->getLastTransId());
            $this->_getOrder()->addRelatedObject($invoice);
        }

        return $this;
    }

    /**
     * Refund money
     *
     * @param Varien_Object $payment
     * @param float $amount
     * @return Neev_AmazonPaymentIndia_Model_Payment_AmazonPaymentIndia_Abstract
     */
    public function refund(Varien_Object $payment, $amount) {
        if (!$this->canRefund()) Mage::helper('amazonpaymentindia')->throwException('Refund action is not available');
        Mage::getSingleton('amazonpaymentindia/manager')->sendRefundNotify($payment);
        return $this;
    }

    public function getOrderPlaceRedirectUrl() {
        return Mage::getUrl('amazonpaymentindia/checkout/success');
    }

}
