<?php

/**
 * Amazon Marketplace Orders API: PaymentMethodList data type model
 *
 * Fields:
 * <ul>
 * <li>Method: Array<PaymentMethodEnum></li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_PaymentMethodList extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Method' => array('FieldValue' => null, 'FieldType' => array('PaymentMethodEnum'))
        );
        parent::__construct($data);
    }

}
