<?php

/**
 * Amazon Checkout API: DestinationList data type model
 *
 * Fields:
 * <ul>
 * <li>Destination: Array<Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Destination></li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DestinationList extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Destination' => array('FieldValue' => null, 'FieldType' => array('Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Destination'))
        );
        parent::__construct($data);
    }

}
