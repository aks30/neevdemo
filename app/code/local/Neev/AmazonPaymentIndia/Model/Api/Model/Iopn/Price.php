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
class Neev_AmazonPaymentIndia_Model_Api_Model_Iopn_Price extends Neev_AmazonPaymentIndia_Model_Api_Model_Price {

    protected
        $_area = 'Amazon IOPN';

    protected function _getNamespace() {
        return self::getConfigData('api_namespace', array('api' => 'iopn'));
    }

}
