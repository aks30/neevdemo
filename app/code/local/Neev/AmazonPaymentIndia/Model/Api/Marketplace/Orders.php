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
class Neev_AmazonPaymentIndia_Model_Api_Marketplace_Orders
    extends Neev_AmazonPaymentIndia_Model_Api_Abstract
    implements Neev_AmazonPaymentIndia_Model_Api_Interface_Marketplace_Orders {

    protected $_area = 'Amazon MWS Orders';

    public function listOrdersByNextToken($request) {

    }

    public function listOrderItemsByNextToken($request) {

    }

    public function getOrder(array $orderIdList) {
        $request = $this->_getApiModel('request_getOrder', array(
            'AmazonOrderId' => array('Id' => $orderIdList)
        ));
        $response = $this->_getApiClient()->getOrder($request);
        if ($response->issetGetOrderResult()) {
            $getOrderResult = $response->getGetOrderResult();
            if ($getOrderResult->issetOrders()) {
                $orders = $getOrderResult->getOrders();
                if ($orders->issetOrder()) {
                    return $orders->getOrder();
                }
            }
        }
        return null;
    }

    public function listOrderItems($request) {

    }

    public function listOrders($request) {

    }

    public function getServiceStatus($request) {}

}
