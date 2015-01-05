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
class Neev_AmazonPaymentIndia_Block_Adminhtml_Debug extends Mage_Adminhtml_Block_Template {

    public function __construct() {
        parent::__construct();
        $this->setTemplate('neev/amazonpaymentindia/debug.phtml');
    }

    protected function _prepareLayout() {
        
        $accordion = $this->getLayout()->createBlock('adminhtml/widget_accordion')->setId('amazonPaymentsDebug');
        
        $accordion->addItem('general', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('General info'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section')->setArea('general')->toHtml()
        ));

        $accordion->addItem('stores', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Stores'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section_table')->setArea('stores')->toHtml()
        ));

        $accordion->addItem('amazon_general_settings', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Amazon general settings'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section_table')->setArea('amazon_general_settings')->toHtml()
        ));

        $accordion->addItem('amazon_mws_settings', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Amazon MWS settings'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section_table')->setArea('amazon_mws_settings')->toHtml()
        ));

        $accordion->addItem('amazon_appearance_settings', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Amazon appearance settings'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section_table')->setArea('amazon_appearance_settings')->toHtml()
        ));

        $accordion->addItem('cronjobs', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Amazon cronjobs'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section_table')->setArea('cronjobs')->setShowKeys(false)->toHtml()
        ));

        $accordion->addItem('cron_failures', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Cronjob errors'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section')->setArea('cron_failures')->toHtml()
        ));

        $accordion->addItem('event_observers', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Event observers'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section')->setArea('event_observers')->toHtml()
        ));

        $accordion->addItem('magento_general_settings', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Magento settings'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section_table')->setArea('magento_general_settings')->toHtml()
        ));

        $accordion->addItem('magento_extensions', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Installed Magento extensions'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section')->setArea('magento_extensions')->toHtml()
        ));

        $accordion->addItem('php_modules', array(
            'title'     => Mage::helper('amazonpaymentindia')->__('Installed PHP modules'),
            'content'   => $this->getLayout()->createBlock('amazonpaymentindia/adminhtml_debug_section')->setArea('php_modules')->toHtml()
        ));

        $this->setChild('debug_info', $accordion);

        return parent::_prepareLayout();
    }

}
