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
class Neev_AmazonPaymentIndia_Model_Log_Abstract extends Mage_Core_Model_Abstract {

    protected
        $_resourceName = 'amazonpaymentindia/log_abstract';

    protected function _construct() {
        $this->_init($this->_resourceName);
    }

    public function cleanLogs($dueDate = null) {
        $this->getResource()->cleanLogs($dueDate);
        return $this;
    }
}