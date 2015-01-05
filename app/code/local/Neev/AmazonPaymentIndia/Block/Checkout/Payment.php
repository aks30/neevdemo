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

class Neev_AmazonPaymentIndia_Block_Checkout_Payment extends Neev_AmazonPaymentIndia_Block_Abstract {

    protected function _construct() {
        $this->getCheckout()->setStepData('payment', array(
            'label'     => Mage::helper('checkout')->__('Payment Information'),
            'is_show'   => $this->isShow()
        ));
        parent::_construct();
    }

    public function getWidgetWidth() {
        return Mage::getStoreConfig(self::XML_PATH_PAYMENT_WIDGET_WIDTH);
    }

    public function getWidgetHeight() {
        return Mage::getStoreConfig(self::XML_PATH_PAYMENT_WIDGET_HEIGHT);
    }

}
