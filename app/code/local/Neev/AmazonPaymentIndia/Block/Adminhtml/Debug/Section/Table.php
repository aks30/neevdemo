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
class Neev_AmazonPaymentIndia_Block_Adminhtml_Debug_Section_Table extends Neev_AmazonPaymentIndia_Block_Adminhtml_Debug_Section {

    public function __construct() {
        parent::__construct();
        $this->setTemplate('neev/amazonpaymentindia/debug/section/table.phtml');
    }

}
