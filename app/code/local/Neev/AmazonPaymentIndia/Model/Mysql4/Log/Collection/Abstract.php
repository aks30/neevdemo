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
class Neev_AmazonPaymentIndia_Model_Mysql4_Log_Collection_Abstract extends Mage_Core_Model_Mysql4_Collection_Abstract {

    protected
        $_modelName = 'amazonpaymentindia/log_abstract';

    public function _construct() {
        parent::_construct();
        $this->_init($this->_modelName);
    }

}
