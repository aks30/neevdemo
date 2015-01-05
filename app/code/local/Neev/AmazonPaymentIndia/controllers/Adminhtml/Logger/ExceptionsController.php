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
class Neev_AmazonPaymentIndia_Adminhtml_Logger_ExceptionsController extends Mage_Adminhtml_Controller_Action {

    protected function _getModel() {
        return Mage::getModel('amazonpaymentindia/log_exception');
    }

    protected function _initAction() {
        $this->loadLayout()->_setActiveMenu('creativestyle/amazonpaymentindia/logger/exceptions');
        return $this;
    }

    protected function _setBreadcrumbs() {
        return $this;
    }

    protected function _setTitle($title = null) {
        $this->_title(Mage::helper('amazonpaymentindia')->__('Checkout by Amazon'))
            ->_title(Mage::helper('amazonpaymentindia')->__('Amazon exceptions'));
        if ($title) $this->_title(Mage::helper('amazonpaymentindia')->__($title));
        return $this;
    }

    public function indexAction() {
        $this->_setTitle()->_initAction()->_setBreadcrumbs();
        $this->renderLayout();
    }

    public function viewAction() {
        $id = $this->getRequest()->getParam('id');
        $logModel = $this->_getModel()->load($id);

        if ($logModel->getId()) {
            $this->_setTitle('View exception')->_initAction()->_setBreadcrumbs();
            $this->_addContent($this->getLayout()->createBlock('amazonpaymentindia/adminhtml_logger_exceptions_view')->setLogModel($logModel));
            $this->renderLayout();
        } else {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('amazonpaymentindia')->__('Log does not exist'));
            $this->_redirect('*/*/');
        }
    }

}