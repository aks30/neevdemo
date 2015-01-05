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
class Neev_AmazonPaymentIndia_Block_Adminhtml_Logger_Feeds_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Options {

    public function render(Varien_Object $row) {
        if ($row->getProcessingStatus() == '_DONE_') return '<span style="font-weight:bold;color:#009900;">' . parent::render($row) . '</span>';
        return parent::render($row);
    }

}
