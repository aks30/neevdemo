<?php

/**
 * Instant Order Processing Notification API: BillingAddress data type model
 *
 * Fields:
 * <ul>
 * <li>Name: string</li>
 * <li>AddressId: string</li>
 * <li>AddressLineOne: string</li>
 * <li>AddressLineTwo: string</li>
 * <li>AddressLineThree: string</li>
 * <li>City: string</li>
 * <li>State: string</li>
 * <li>PostalCode: string</li>
 * <li>CountryCode: string</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_BillingAddress extends Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Name' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressFieldOne' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressFieldTwo' => array('FieldValue' => null, 'FieldType' => 'string'),
            'AddressFieldThree' => array('FieldValue' => null, 'FieldType' => 'string'),
            'City' => array('FieldValue' => null, 'FieldType' => 'string'),
            'State' => array('FieldValue' => null, 'FieldType' => 'string'),
            'PostalCode' => array('FieldValue' => null, 'FieldType' => 'string'),
            'CountryCode' => array('FieldValue' => null, 'FieldType' => 'string')
        );
        parent::__construct($data);
    }

}
