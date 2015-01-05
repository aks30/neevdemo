<?php

/**
 * Amazon Checkout API: PurchaseItem data type model
 *
 * Fields:
 * <ul>
 * <li>MerchantItemId: IdType</li>
 * <li>SKU: string</li>
 * <li>MerchantId: IdType</li>
 * <li>Title: string</li>
 * <li>Description: string</li>
 * <li>UnitPrice: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price</li>
 * <li>Quantity: PositiveInteger</li>
 * <li>URL: string</li>
 * <li>Category: string</li>
 * <li>FulfillmentNetwork: FulfillmentNetwork</li>
 * <li>ItemCustomData: string</li>
 * <li>ProductType: ProductType</li>
 * <li>PhysicalProductAttributes: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PhysicalProductAttributes</li>
 * <li>DigitalProductAttributes: Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DigitalProductAttributes</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PurchaseItem extends Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Abstract {

    protected function _prepareInput($data = null) {
        if (is_array($data) || is_null($data)) {
            if (!isset($data['MerchantId'])) $data['MerchantId'] = self::getConfigData('merchant_id');
        }
        return $data;
    }

    public function __construct($data = null) {
        $this->_fields = array(
            'MerchantItemId' => array('FieldValue' => null, 'FieldType' => 'IdType'),
            'SKU' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MerchantId' => array('FieldValue' => null, 'FieldType' => 'IdType'),
            'Title' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Description' => array('FieldValue' => null, 'FieldType' => 'string'),
            'UnitPrice' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_Price'),
            'Quantity' => array('FieldValue' => null, 'FieldType' => 'PositiveInteger'),
            'URL' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Category' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FulfillmentNetwork' => array('FieldValue' => null, 'FieldType' => 'FulfillmentNetwork'),
            'ItemCustomData' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ProductType' => array('FieldValue' => null, 'FieldType' => 'ProductType'),
            'PhysicalProductAttributes' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_PhysicalProductAttributes'),
            'DigitalProductAttributes' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Checkout_DigitalProductAttributes')
        );
        parent::__construct($this->_prepareInput($data));
    }

    public function setItemTax($tax) {
        if ($this->issetPhysicalProductAttributes()) {
            if ($this->getPhysicalProductAttributes()->issetItemCharges()) {
                $this->getPhysicalProductAttributes()->getItemCharges()->setTax($tax);
            } else {
                $chargesObject = $this->_getApiModel('charges');
                $chargesObject->setTax($tax);
                $this->getPhysicalProductAttributes()->setItemCharges($chargesObject);
            }
        } else {
            $physicalAttribsObj = $this->_getApiModel('physicalProductAttributes');
            $this->setPhysicalProductAttributes($physicalAttribsObj);
            $chargesObject = $this->_getApiModel('charges');
            $chargesObject->setTax($tax);
            $this->getPhysicalProductAttributes()->setItemCharges($chargesObject);
        }
        return $this;
    }

    public function setItemShipping($shipping) {
        if ($this->issetPhysicalProductAttributes()) {
            if ($this->getPhysicalProductAttributes()->issetItemCharges()) {
                $this->getPhysicalProductAttributes()->getItemCharges()->setShipping($shipping);
            } else {
                $chargesObject = $this->_getApiModel('charges');
                $chargesObject->setShipping($shipping);
                $this->getPhysicalProductAttributes()->setItemCharges($chargesObject);
            }
        } else {
            $physicalAttribsObj = $this->_getApiModel('physicalProductAttributes');
            $this->setPhysicalProductAttributes($physicalAttribsObj);
            $chargesObject = $this->_getApiModel('charges');
            $chargesObject->setShipping($shipping);
            $this->getPhysicalProductAttributes()->setItemCharges($chargesObject);
        }
        return $this;
    }

}
