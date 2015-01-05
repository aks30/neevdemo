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
class Neev_AmazonPaymentIndia_Model_Lookup_Prefix extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array();
            $options = trim(Mage::helper('customer/address')->getConfig('prefix_options'));
            if ($options) {
                $options = explode(';', $options);
                foreach ($options as &$v) {
                    $v = Mage::helper('core')->htmlEscape(trim($v));
                    $this->_options[] = array(
                        'value' => $v,
                        'label' => $v
                    );
                }
            }
            array_unshift($this->_options, array('value' => '', 'label' => '---'));
        }
        return $this->_options;
    }
}
