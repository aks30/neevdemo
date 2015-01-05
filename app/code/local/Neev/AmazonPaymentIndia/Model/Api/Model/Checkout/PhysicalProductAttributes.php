<?php

/**
 * Amazon Checkout API: PhysicalProductAttributes data type model
 *
 * Fields:
 * <ul>
 * <li>Weight: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Weight</li>
 * <li>Condition: string</li>
 * <li>GiftOption: string</li>
 * <li>GiftMessage: string</li>
 * <li>DeliveryMethod: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DeliveryMethod</li>
 * <li>ItemCharges: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Charges</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PhysicalProductAttributes extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Weight' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Weight'),
            'Condition' => array('FieldValue' => null, 'FieldType' => 'string'),
            'GiftOption' => array('FieldValue' => null, 'FieldType' => 'string'),
            'GiftMessage' => array('FieldValue' => null, 'FieldType' => 'string'),
            'DeliveryMethod' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DeliveryMethod'),
            'ItemCharges' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Charges')
        );
        parent::__construct($data);
    }

}
