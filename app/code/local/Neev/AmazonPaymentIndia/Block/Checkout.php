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
class Neev_AmazonPaymentIndia_Block_Checkout extends Neev_AmazonPaymentIndia_Block_Abstract {

    public function getSteps() {
        $steps = array();
        $stepCodes = array('shipping', 'shipping_method', 'payment', 'review');
        foreach ($stepCodes as $step) {
            $steps[$step] = $this->getCheckout()->getStepData($step);
        }
        return $steps;
    }

    public function getActiveStep() {
        return 'shipping';
    }

    public function getPurchaseContractId() {
        return Mage::getSingleton('checkout/session')->getAmazonPurchaseContractId();
    }
}
