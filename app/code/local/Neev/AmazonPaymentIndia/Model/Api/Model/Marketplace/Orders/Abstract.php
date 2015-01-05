<?php

/**
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
abstract class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Abstract extends Neev_AmazonPaymentIndia_Model_Api_Model_Abstract {

    protected
        $_area = 'Amazon MWS Orders';

    protected function _prepareInput($data = null) {
        if (is_array($data) || is_null($data)) {
            if (!isset($data['SellerId'])) $data['SellerId'] = self::getConfigData('merchant_id');
        }
        return $data;
    }

    public function __construct($data = null) {
        parent::__construct($this->_prepareInput($data));
    }

    protected function _getNamespace() {
        return self::getConfigData('api_namespace', array('api' => 'mws_orders'));
    }

}
