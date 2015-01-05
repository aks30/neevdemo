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
 * @copyright  Copyright (c) 2011 - 2014 Neev Technologies (http://www.neevtech.com)
 * @author     Milind Desai / Neev Technologies
 */
class Neev_AmazonPaymentIndia_Block_Adminhtml_Info extends Mage_Adminhtml_Block_System_Config_Form_Fieldset {

    public function render(Varien_Data_Form_Element_Abstract $element) {
        $this->setTemplate('neev/amazonpaymentindia/info.phtml');
        $output = $this->toHtml();
        return $output;
    }

    public function getExtensionVersion() {
        return (string)Mage::getConfig()->getNode('modules/Neev_AmazonPaymentIndia/version');
    }


    protected function _getInfo() {
        $output = $this->_getStyle();
        $output .= '<div class="neev-info">';
        $output .= $this->_getLogo();
        $output .= '<h3>' . $this->__('Checkout by Amazon') . ' <small>(v. ' . (string)Mage::getConfig()->getNode('modules/Neev_AmazonPaymentIndia/version') . ')</small>' . '</h3>';
        $output .= '<p style="clear:both;">';
        $output .= $this->__('This extension integrates easily your Magento shop with Checkout by Amazon payment service.');
        $output .= '</p>';
        $output .= $this->_getFooter();
        $output .= '</div>';
        return $output;
    }

    protected function _getFooter() {
        $content = '--------------------------------------------------------<br />';
        $content .= '<p>' . $this->helper('neev')->__('Visit <a href="%s" target="_blank">%s</a> to get more information.', 'http://www.neevtech.com/amazon-extension.html', 'http://www.neevtech.com/amazon-extension.html') . '</p>';
        return $content;
    }

}
