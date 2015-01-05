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
class Neev_AmazonPaymentIndia_Model_Lookup_Report_Type extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array();
            $reportTypeList = Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Abstract::getReportTypes();
            foreach ($reportTypeList as $reportTypeCode => $reportTypeLabel) {
                $this->_options[] = array(
                    'value' => $reportTypeCode,
                    'label' => Mage::helper('amazonpaymentindia')->__($reportTypeLabel)
                );
            }
        }
        return $this->_options;
    }
}
