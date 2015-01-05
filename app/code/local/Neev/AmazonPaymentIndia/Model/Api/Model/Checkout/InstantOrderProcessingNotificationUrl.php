<?php

/**
 * Amazon Checkout API: InstantOrderProcessingNotificationUrl data type model
 *
 * Fields:
 * <ul>
 * <li>IntegratorURL: string</li>
 * <li>MerchantURL: string</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_InstantOrderProcessingNotificationUrl extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'IntegratorURL' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MerchantURL' => array('FieldValue' => null, 'FieldType' => 'string')
        );
        parent::__construct($data);
    }

}