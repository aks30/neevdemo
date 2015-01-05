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
class Neev_AmazonPaymentIndia_Model_Lookup_Design_Button_Size extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    const SIZE_MEDIUM   = 'medium';
    const SIZE_LARGE    = 'large';
    const SIZE_XLARGE   = 'x-large';

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array(
                array('value' => self::SIZE_MEDIUM, 'label' => Mage::helper('amazonpaymentindia')->__('Medium')),
                array('value' => self::SIZE_LARGE, 'label' => Mage::helper('amazonpaymentindia')->__('Large')),
                array('value' => self::SIZE_XLARGE, 'label' => Mage::helper('amazonpaymentindia')->__('X-Large'))
            );
        }
        return $this->_options;
    }
}
