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
class Neev_AmazonPaymentIndia_Block_Adminhtml_Debug_Section extends Mage_Adminhtml_Block_Template {

    protected
        $_id = null,
        $_area = 'general',
        $_showKeys = true;

    public function __construct() {
        parent::__construct();
        $this->setTemplate('neev/amazonpaymentindia/debug/section.phtml');
    }

    public function getDebugInfo() {
        return Mage::helper('amazonpaymentindia/debug')->getDebugInfo($this->_area);
    }

    public function getSectionId() {
        if (null === $this->_id) {
            $this->_id = 'section-' . uniqid();
        }
        return $this->_id;
    }

    public function setArea($area) {
        $this->_area = $area;
        return $this;
    }

    public function setShowKeys($show) {
        $this->_showKeys = $show;
        return $this;
    }

    public function getShowKeys() {
        return $this->_showKeys;
    }

}
