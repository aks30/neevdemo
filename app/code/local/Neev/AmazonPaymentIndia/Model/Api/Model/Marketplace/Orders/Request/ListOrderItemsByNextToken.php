<?php

/**
 * Amazon Marketplace Orders API: ListOrderItemsByNextToken request model
 *
 * Fields:
 * <ul>
 * <li>SellerId: string</li>
 * <li>NextToken: string</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Request_ListOrderItemsByNextToken extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Orders_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'ListOrderItemsByNextToken';
        if ($this->issetSellerId()) {
            $params['SellerId'] = $this->getSellerId();
        }
        if ($this->issetNextToken()) {
            $params['NextToken'] = $this->getNextToken();
        }
        return $params;
    }

}