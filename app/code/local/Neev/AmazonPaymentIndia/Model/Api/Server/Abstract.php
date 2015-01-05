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
abstract class Neev_AmazonPaymentIndia_Model_Api_Server_Abstract extends Neev_AmazonPaymentIndia_Model_Abstract {

    protected $_area = 'General';

    public function __construct() {
        $modelSuffix = preg_replace('/^(.+_Model_)(Api)_(Server)_(.+)$/', '$2_Model_$4', get_class($this));
        $modelSuffix = preg_replace('/(_.?)/e', "strtolower('$1')", $modelSuffix);
        $modelSuffix[0] = strtolower($modelSuffix[0]);
        $this->_modelClassPrefix = $this->_modulePrefix . '/' . $modelSuffix  . '_';
    }

    public function __call($function, $params) {
        $uFunction = $function;
        $uFunction[0] = strtoupper($uFunction[0]);
        $requestClass = str_replace('_Model_Api_Server_', '_Model_Api_Model_', get_class($this)) . '_Request_' . $uFunction;
        if (class_exists($requestClass, true) && is_callable($requestClass . '::fromXML') && isset($params[0])) {
            return call_user_func(array($requestClass, 'fromXML'), $this->_extractXml($params[0]));
            if ($this->_validateParams($params[0])) {
                return call_user_func(array($requestClass, 'fromXML'), $this->_extractXml($params[0]));
            }
        } else {
            Mage::helper('amazonpaymentindia')->throwException(
                Mage::helper('amazonpaymentindia')->__('Invalid method %s::%s (%s)', get_class($this), $function, print_r($params, 1)),
                null,
                array('area' => $this->_area)
            );
        }
    }

}
