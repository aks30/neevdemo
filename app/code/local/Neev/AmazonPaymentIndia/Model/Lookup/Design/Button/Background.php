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
class Neev_AmazonPaymentIndia_Model_Lookup_Design_Button_Background extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    const BACKGROUND_WHITE  = 'white';
    const BACKGROUND_LIGHT  = 'light';
    const BACKGROUND_DARK   = 'dark';

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array(
                array('value' => self::BACKGROUND_WHITE, 'label' => Mage::helper('amazonpaymentindia')->__('White')),
                array('value' => self::BACKGROUND_LIGHT, 'label' => Mage::helper('amazonpaymentindia')->__('Light coloured')),
                array('value' => self::BACKGROUND_DARK, 'label' => Mage::helper('amazonpaymentindia')->__('Dark')),
            );
        }
        return $this->_options;
    }

}
