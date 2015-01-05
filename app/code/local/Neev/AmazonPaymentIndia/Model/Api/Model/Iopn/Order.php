<?php

/**
 * Instant Order Processing Notification API: Order data type model
 *
 * Fields:
 * <ul>
 * <li>OrderChannel: string</li>
 * <li>AmazonOrderID: string</li>
 * <li>OrderDate: DateTime</li>
 * <li>BuyerInfo: Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_BuyerInfo</li>
 * <li>ShippingAddress: Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_ShippingAddress</li>
 * <li>ShippingServiceLevel: ShippingServiceLevel</li>
 * <li>ProcessedOrderItems: Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_ItemList</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Order extends Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'OrderChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AmazonOrderID' => array('FieldValue' => null, 'FieldType' => 'string'),
            'OrderDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
            'BuyerInfo' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_BuyerInfo'),
            'BillingAddress' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_BillingAddress'),
            'ShippingAddress' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_ShippingAddress'),
            'ShippingServiceLevel' => array('FieldValue' => null, 'FieldType' => 'ShippingServiceLevel'),
            'ProcessedOrderItems' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_ItemList')
        );
        parent::__construct($data);
    }

}
