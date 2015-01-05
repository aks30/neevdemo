<?php

/**
 * Amazon Common API: Price data type model
 *
 * Fields:
 * <ul>
 * <li>Amount: NonNegativeDouble</li>
 * <li>CurrencyCode: string</li>
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
abstract class Neev_AmazonPaymentIndia_Model_Api_Model_Price extends Neev_AmazonPaymentIndia_Model_Api_Model_Abstract {

    protected function _prepareInput($data = null) {
        if (is_array($data) || is_null($data)) {
            if (!isset($data['CurrencyCode'])) $data['CurrencyCode'] = self::getConfigData('currency_code');
            if (isset($data['Amount'])) $data['Amount'] = Mage::helper('amazonpaymentindia')->sanitizePrice($data['Amount']);
        }
        return $data;
    }

    public function __construct($data = null) {
        $this->_fields = array(
            'Amount' => array('FieldValue' => null, 'FieldType' => 'NonNegativeDouble'),
            'CurrencyCode' => array('FieldValue' => null, 'FieldType' => 'string')
        );
        parent::__construct($this->_prepareInput($data));
    }

}
