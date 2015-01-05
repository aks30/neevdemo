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

$installer = $this;

$installer->startSetup();

$installer->run("DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_iopn_order')};");

$installer->run("DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_feed_order')};");

$installer->run("DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_report_order')};");

$installer->run("DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_exception_order')};");

$installer->run("DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_api_order')};");

$installer->endSetup();
