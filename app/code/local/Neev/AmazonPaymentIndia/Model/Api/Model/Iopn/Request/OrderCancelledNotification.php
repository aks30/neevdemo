<?php

/**
 * Instant Order Processing Notification API: OrderCancelledNotification request model
 *
 * Fields:
 * <ul>
 * <li>NotificationReferenceId: string</li>
 * <li>ProcessedOrder: Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Order</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Request_OrderCancelledNotification extends Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'NotificationReferenceId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ProcessedOrder' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Order')
        );
        parent::__construct($data);
    }

    /**
     * Construct Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Request_OrderCancelledNotification from XML string
     *
     * @param string $xml XML string to construct from
     * @return Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Request_OrderCancelledNotification
     */
    public static function fromXML($xml) {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('a', self::getConfigData('api_namespace', array('api' => 'iopn')));
        $response = $xpath->query('//a:OrderCancelledNotification');
        if ($response->length == 1) {
            return new Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Request_OrderCancelledNotification($response->item(0));
        } else {
            Mage::helper('amazonpaymentindia')->throwException(
                Mage::helper('amazonpaymentindia')->__('Unable to construct %s from provided XML. Make sure that %s is a root element.', 'Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Request_OrderCancelledNotification', 'OrderCancelledNotification'),
                null,
                array('area' => 'Amazon IOPN')    
            );
        }
    }

}