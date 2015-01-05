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
if (version_compare(Mage::helper('amazonpaymentindia')->getMagentoVersion(), '1.4.2') > 0) {
    $installer = $this;

    $statuses = array(
        'pending_amazon' => Mage::getConfig()->getNode('global/sales/order/statuses/pending_amazon')->asArray()
    );

    foreach ($statuses as $statusCode => $statusInfo) {
        $data = array('status' => $statusCode, 'label' => (isset($statusInfo['label']) ? $statusInfo['label'] : ''));
        $installer->getConnection()->insert($installer->getTable('sales/order_status'), $data);
        $data = array('status' => $statusCode, 'state' => 'pending_payment', 'is_default' => 0);
        $installer->getConnection()->insert($installer->getTable('sales/order_status_state'), $data);
    }
}
