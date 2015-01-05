<?php

/**
 * Amazon Checkout API: CreatePurchaseContract request model
 *
 * Fields:
 * <ul>
 * <li>PurchaseContractMetadata: byte[]</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Request_CreatePurchaseContract extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'PurchaseContractMetadata' => array('FieldValue' => null, 'FieldType' => 'byte[]')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'CreatePurchaseContract';
        if ($this->issetPurchaseContractMetadata()) {
            $params['PurchaseContractMetadata'] = $this->getPurchaseContractMetadata();
        }
        return $params;
    }

}
