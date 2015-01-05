<?php

/**
 * Amazon Checkout API: CompletePurchaseContract request model
 *
 * Fields:
 * <ul>
 * <li>PurchaseContractId: string</li>
 * <li>IntegratorId: string</li>
 * <li>IntegratorName: string</li>
 * <li>InstantOrderProcessingNotificationURLs: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_InstantOrderProcessingNotificationUrl</li>
 * </ul>
 *
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Request_CompletePurchaseContract extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'PurchaseContractId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'IntegratorId' => array('FieldValue' => 'creativestyle', 'FieldType' => 'string'),
            'IntegratorName' => array('FieldValue' => (string)Mage::getConfig()->getNode('modules/Neev_AmazonPaymentIndia/version'), 'FieldType' => 'string'),
            'InstantOrderProcessingNotificationURLs' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_InstantOrderProcessingNotificationUrl')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'CompletePurchaseContract';
        if ($this->issetPurchaseContractId()) {
            $params['PurchaseContractId'] = $this->getPurchaseContractId();
        }
        if ($this->issetIntegratorId()) {
            $params['IntegratorId'] = $this->getIntegratorId();
        }
        if ($this->issetIntegratorName()) {
            $params['IntegratorName'] = $this->getIntegratorName();
        }
        if ($this->issetInstantOrderProcessingNotificationURLs()) {
            $instantOrderProcessingNotificationURLscompletePurchaseContractRequest = $this->getInstantOrderProcessingNotificationURLs();
            if ($instantOrderProcessingNotificationURLscompletePurchaseContractRequest->issetIntegratorURL()) {
                $params['InstantOrderProcessingNotificationURLs.IntegratorURL'] = $instantOrderProcessingNotificationURLscompletePurchaseContractRequest->getIntegratorURL();
            }
            if ($instantOrderProcessingNotificationURLscompletePurchaseContractRequest->issetMerchantURL()) {
                $params['InstantOrderProcessingNotificationURLs.MerchantURL'] = $instantOrderProcessingNotificationURLscompletePurchaseContractRequest->getMerchantURL();
            }
        }
        return $params;
    }

}
