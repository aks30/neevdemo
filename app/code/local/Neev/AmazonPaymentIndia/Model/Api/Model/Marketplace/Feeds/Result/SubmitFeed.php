<?php

/**
 * Amazon Marketplace Feeds API: SubmitFeed result model
 *
 * Fields:
 * <ul>
 * <li>FeedSubmissionInfo: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_FeedSubmissionInfo</li>
 * </ul>
 *
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Result_SubmitFeed extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'FeedSubmissionInfo' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_FeedSubmissionInfo')
        );
        parent::__construct($data);
    }

}
