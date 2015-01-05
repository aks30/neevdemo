<?php

/**
 * Amazon Checkout API: Charges data type model
 *
 * Fields:
 * <ul>
 * <li>Tax: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price</li>
 * <li>Shipping: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price</li>
 * <li>GiftWrap: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price</li>
 * <li>Promotions: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PromotionList</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Charges extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Tax' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price'),
            'Shipping' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price'),
            'GiftWrap' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price'),
            'Promotions' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PromotionList')
        );
        parent::__construct($data);
    }

}
