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
 * @copyright  Copyright (c) 2012 Neev Technologies (http://www.neevtech.com)
 * @author     Milind Desai / Neev Technologies
 */

$installer = $this;

$installer->startSetup();

$installer->run("
    -- DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_api')};
    CREATE TABLE {$this->getTable('amazonpaymentindia/log_api')} (
        `log_id` int(10) unsigned NOT NULL auto_increment,
        `host` varchar(255) NOT NULL default '',
        `action` varchar(255) NOT NULL default '',
        `request_method` varchar(64) NOT NULL default 'GET',
        `headers` text NULL,
        `get_data` text NULL,
        `post_data` longtext NULL,
        `file_data` longtext NULL,
        `response_code` varchar(64) NULL,
        `response` longtext NULL,
        `creation_time` timestamp NOT NULL,
        PRIMARY KEY (`log_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->run("
    -- DROP TABLE IF EXISTS {$this->getTable('amazonpaymentindia/log_api_order')};
    CREATE TABLE {$this->getTable('amazonpaymentindia/log_api_order')} (
        `log_order_id` int(10) unsigned NOT NULL auto_increment,
        `log_id` int(10) unsigned NOT NULL,
        `order_id` int(10) unsigned NOT NULL,
        PRIMARY KEY (`log_order_id`),
        FOREIGN KEY (`log_id`) REFERENCES `{$this->getTable('amazonpaymentindia/log_api')}` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (`order_id`) REFERENCES `{$this->getTable('sales/order')}` (`entity_id`) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();
