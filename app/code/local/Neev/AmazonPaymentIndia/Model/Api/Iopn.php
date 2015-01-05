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
class Neev_AmazonPaymentIndia_Model_Api_Iopn
    extends Neev_AmazonPaymentIndia_Model_Api_Abstract
    implements Neev_AmazonPaymentIndia_Model_Api_Interface_Iopn {

    protected $_area = 'Amazon IOPN';

    public function newOrderNotification(array $params) {
        $result = $this->_getApiServer()->newOrderNotification($params);
        if ($result->issetProcessedOrder()) {
            return array('code' => 200, 'order' => $result->getProcessedOrder());
        }
        return array('code' => 500, 'message' => 'Internal error');
    }

    public function orderCancelledNotification(array $params) {
        $result = $this->_getApiServer()->orderCancelledNotification($params);
        if ($result->issetProcessedOrder()) {
            return array('code' => 200, 'order' => $result->getProcessedOrder());
        }
        return array('code' => 500, 'message' => 'Internal error');
    }

    public function orderReadyToShipNotification(array $params) {
        $result = $this->_getApiServer()->orderReadyToShipNotification($params);
        if ($result->issetProcessedOrder()) {
            return array('code' => 200, 'order' => $result->getProcessedOrder());                
        }
        return array('code' => 500, 'message' => 'Internal error');
    }

}
