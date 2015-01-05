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
class Neev_AmazonPaymentIndia_Block_Badge extends Neev_AmazonPaymentIndia_Block_Abstract {

    public function _toHtml() {
        if ($this->_isActive()) {
            return parent::_toHtml();
        }
        return '';
    }

    public function getAmazonBadgeUrl() {
        switch ($this->_getMarketplace()) {
            case 'de_DE':
                return $this->getSkinUrl('creativestyle/images/amazon-payments-badge.de.gif');
            default:
                return $this->getSkinUrl('creativestyle/images/amazon-payments-badge.png');
        }
    }

}
