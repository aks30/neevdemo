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
class Neev_AmazonPaymentIndia_Block_Page_Html_Head extends Mage_Page_Block_Html_Head {

    protected function _isIpAllowed() {
        $allowedIps = Mage::helper('amazonpaymentindia')->getConfigData('allowed_ips');
        if (is_array($allowedIps)) {
            if (!(isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], $allowedIps))) return false;
        }
        return true;
    }

    protected function _isActive() {
        return Mage::helper('amazonpaymentindia')->getConfigData('active') && $this->_isIpAllowed();
    }

    public function getCssJsHtml() {
        $html = parent::getCssJsHtml();
        if ($this->_isActive()) {
            $prepend = '<script type="text/javascript" src="' . Mage::helper('amazonpaymentindia')->getHeadJs() . '"></script>';
            $html = $prepend . "\n" . $html;
        }
        return $html;
    }

}
