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
 * @copyright  Copyright (c) 2014 Neev (http://www.neevtech.com)
 * @author     Milind Desai / Neev Technologies
 */
class Neev_AmazonPaymentIndia_Helper_Data extends Mage_Core_Helper_Abstract {

    protected
        $_debugInfo = null;

    /**
     *
     * @param string $message
     * @param int $code
     * @throws Neev_AmazonPaymentIndia_Exception
     */

    /**
     *
     * @param string $key
     * @param array $params
     * @return string
     */
    public function getConfigData($key, $params = array()) {
        return Neev_AmazonPaymentIndia_Model_Abstract::getConfigData($key, $params);
    }


    public function getHeadJs() {
        switch ($this->getConfigData('marketplace')) {
            case 'de_DE':
                switch ($this->getConfigData('mode')) {
                    case 'live':
                        return 'https://static-eu.payments-amazon.com/cba/js/de/PaymentWidgets.js';

                    case 'sandbox':
                        return 'https://static-eu.payments-amazon.com/cba/js/de/sandbox/PaymentWidgets.js';
                }
                case 'hi_IN':
                switch ($this->getConfigData('mode')) {
                    case 'live':
                        return 'https://static-eu.payments-amazon.com/cba/js/in/PaymentWidgets.js';

                    case 'sandbox':
                        return 'https://static-eu.payments-amazon.com/cba/js/in/sandbox/PaymentWidgets.js';
                }

            case 'en_GB':
                switch ($this->getConfigData('mode')) {
                    case 'live':
                        return 'https://static-eu.payments-amazon.com/cba/js/gb/PaymentWidgets.js';

                    case 'sandbox':
                        return 'https://static-eu.payments-amazon.com/cba/js/gb/sandbox/PaymentWidgets.js';
                }

            default:
                switch ($this->getConfigData('mode')) {
                    case 'live':
                        return 'https://static-na.payments-amazon.com/cba/js/us/PaymentWidgets.js';

                    case 'sandbox':
                        return 'https://static-na.payments-amazon.com/cba/js/us/sandbox/PaymentWidgets.js';
                }
        }
    }
}
