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
class Neev_AmazonPaymentIndia_Model_Lookup_Notification_Type extends Neev_AmazonPaymentIndia_Model_Lookup_Abstract {

    public function toOptionArray() {
        if (null === $this->_options) {
            $this->_options = array(
                array(
                    'value' => 'NewOrderNotification',
                    'label' => 'NewOrderNotification'
                ),
                array(
                    'value' => 'OrderCancelledNotification',
                    'label' => 'OrderCancelledNotification'
                ),
                array(
                    'value' => 'OrderReadyToShipNotification',
                    'label' => 'OrderReadyToShipNotification'
                )
            );
        }
        return $this->_options;
    }
}
