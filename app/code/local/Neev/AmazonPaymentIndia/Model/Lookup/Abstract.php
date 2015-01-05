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
class Neev_AmazonPaymentIndia_Model_Lookup_Abstract extends Varien_Object {

    protected $_options = null;

    public function getOptions() {
        $result = array();
        $_options = $this->toOptionArray();
        foreach ($_options as $_option) {
            if (isset($_option['label']) && isset($_option['value']))
                $result[$_option['value']] = $_option['label'];
        }
        return $result;
    }

}
