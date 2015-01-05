<?php

/**
 * Amazon Marketplace Orders API: OrderItemList data type model
 *
 * Fields:
 * <ul>
 * <li>OrderItem: Array<Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_OrderItem></li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_OrderItemList extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'OrderItem' => array('FieldValue' => null, 'FieldType' => array('Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_OrderItem'))
        );
        parent::__construct($data);
    }

}