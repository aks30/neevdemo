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
class Neev_AmazonPaymentIndia_Model_Api_Client_Marketplace_Orders extends Neev_AmazonPaymentIndia_Model_Api_Client_Abstract {

    protected
        $_area = 'Amazon MWS Orders';

    public function __construct() {
        parent::__construct();
        $config = array(
            'ApiUrl' => self::getConfigData('api_url', array('api' => 'mws_orders')),
            'ApiVersion' => self::getConfigData('api_version', array('api' => 'mws_orders')),
        );
        $this->_config = array_merge($this->_config, $config);
    }

}
