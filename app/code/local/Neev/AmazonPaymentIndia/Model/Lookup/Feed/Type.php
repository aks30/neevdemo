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
class Neev_AmazonPaymentIndia_Model_Lookup_Feed_Type extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array();
            $feedTypeList = Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Abstract::getFeedTypes();
            foreach ($feedTypeList as $feedTypeCode => $feedTypeLabel) {
                $this->_options[] = array(
                    'value' => $feedTypeCode,
                    'label' => Mage::helper('amazonpaymentindia')->__($feedTypeLabel)
                );
            }
        }
        return $this->_options;
    }
}
