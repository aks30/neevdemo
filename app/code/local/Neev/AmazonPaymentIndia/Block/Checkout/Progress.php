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

class Neev_AmazonPaymentIndia_Block_Checkout_Progress extends Neev_AmazonPaymentIndia_Block_Abstract {

    public function formatPrice($price) {
        return $this->getQuote()->getStore()->formatPrice($price);
    }

    public function getShippingMethod() {
        return $this->getQuote()->getShippingAddress()->getShippingMethod();
    }

    public function getShippingDescription() {
        return $this->getQuote()->getShippingAddress()->getShippingDescription();
    }

    public function getShippingPriceInclTax() {
        $exclTax = $this->getQuote()->getShippingAddress()->getShippingAmount();
        $taxAmount = $this->getQuote()->getShippingAddress()->getShippingTaxAmount();
        return $this->formatPrice($exclTax + $taxAmount);
    }

    public function getShippingPriceExclTax() {
        return $this->formatPrice($this->getQuote()->getShippingAddress()->getShippingAmount());
    }

    public function getShippingHtml() {
        return $this->getChildHtml('shipping_info');
    }

    public function getPaymentHtml() {
        return $this->getChildHtml('payment_info');
    }

}
