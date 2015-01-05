<?php

/**
 * Amazon Marketplace Orders API: GetServiceStatus result model
 *
 * Fields:
 * <ul>
 * <li>Status: ServiceStatusEnum</li>
 * <li>Timestamp: string</li>
 * <li>MessageId: string</li>
 * <li>Messages: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_MessageList</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Result_GetServiceStatus extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Status' => array('FieldValue' => null, 'FieldType' => 'ServiceStatusEnum'),
            'Timestamp' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MessageId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Messages' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_MessageList')
        );
        parent::__construct($data);
    }

}
