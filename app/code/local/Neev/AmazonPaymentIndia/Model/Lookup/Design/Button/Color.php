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
class Neev_AmazonPaymentIndia_Model_Lookup_Design_Button_Color extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    const COLOR_ORANGE  = 'orange';
    const COLOR_TAN     = 'tan';

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array(
                array('value' => self::COLOR_ORANGE, 'label' => Mage::helper('amazonpaymentindia')->__('Orange (recommended)')),
                array('value' => self::COLOR_TAN, 'label' => Mage::helper('amazonpaymentindia')->__('Tan')),
            );
        }
        return $this->_options;
    }

}
