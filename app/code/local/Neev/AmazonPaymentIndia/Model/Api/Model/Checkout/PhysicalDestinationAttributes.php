<?php

/**
 * Amazon Checkout API: PhysicalDestinationAttributes data type model
 *
 * Fields:
 * <ul>
 * <li>ShippingAddress: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_ShippingAddress</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PhysicalDestinationAttributes extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'ShippingAddress' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_ShippingAddress')
        );
        parent::__construct($data);
    }

}
