<?php

/**
 * Amazon Common API: Weight data type model
 *
 * Fields:
 * <ul>
 * <li>Value: NonNegativeDouble</li>
 * <li>Unit: WeightUnit</li>
 * </ul>
 *
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
abstract class Neev_AmazonPaymentIndia_Model_Api_Model_Weight extends Neev_AmazonPaymentIndia_Model_Api_Model_Abstract {

    protected function _prepareInput($data = null) {
        if (is_array($data) || is_null($data)) {
            if (!isset($data['Unit'])) $data['Unit'] = self::getConfigData('weight_unit');
        }
        return $data;
    }

    public function __construct($data = null) {
        $this->_fields = array(
            'Value' => array('FieldValue' => null, 'FieldType' => 'NonNegativeDouble'),
            'Unit' => array('FieldValue' => null, 'FieldType' => 'WeightUnit')
        );
        parent::__construct($this->_prepareInput($data));
    }

}
