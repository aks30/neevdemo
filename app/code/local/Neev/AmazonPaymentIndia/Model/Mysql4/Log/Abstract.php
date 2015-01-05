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
abstract class Neev_AmazonPaymentIndia_Model_Mysql4_Log_Abstract extends Mage_Core_Model_Mysql4_Abstract {

    protected
        $_tableName = 'amazonpaymentindia/log_abstract';

    protected function _construct() {
        $this->_init($this->_tableName, 'log_id');
    }

    /**
     * Perform operations before object save
     *
     * @param Mage_Cms_Model_Block $object
     * @return Neev_AmazonPaymentIndia_Model_Mysql4_Log_Abstract
     */
    protected function _beforeSave(Mage_Core_Model_Abstract $object) {
        if (!$object->getId()) {
            $object->setCreationTime(Mage::getSingleton('core/date')->gmtDate());
        }
        return parent::_beforeSave($object);
    }

    public function cleanLogs($dueDate = null) {
        if ($dueDate) {
            $this->_getWriteAdapter()->delete(
                $this->getTable($this->_tableName),
                $this->_getWriteAdapter()->quoteInto('creation_time < ?', $dueDate)
            );
        } else {
            $this->_getWriteAdapter()->delete(
                $this->getTable($this->_tableName)
            );
        }
    }

}
