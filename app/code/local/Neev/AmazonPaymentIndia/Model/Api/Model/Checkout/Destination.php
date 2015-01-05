<?php

/**
 * Amazon Checkout API: Destination data type model
 *
 * Fields:
 * <ul>
 * <li>DestinationName: string</li>
 * <li>DestinationType: DestinationType</li>
 * <li>PhysicalDestinationAttributes: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PhysicalDestinationAttributes</li>
 * <li>DigitalDestinationAttributes: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DigitalDestinationAttributes</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Destination extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'DestinationName' => array('FieldValue' => null, 'FieldType' => 'string'),
            'DestinationType' => array('FieldValue' => null, 'FieldType' => 'DestinationType'),
            'PhysicalDestinationAttributes' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PhysicalDestinationAttributes'),
            'DigitalDestinationAttributes' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DigitalDestinationAttributes')
        );
        parent::__construct($data);
    }

}
