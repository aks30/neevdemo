<?php

/**
 * Amazon Marketplace Feeds API: GetFeedSubmissionResult request model
 *
 * Fields:
 * <ul>
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>FeedSubmissionId: string</li>
 * <li>FeedSubmissionResult: string</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Request_GetFeedSubmissionResult extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FeedSubmissionId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FeedSubmissionResult' => array('FieldValue' => null, 'FieldType' => 'string')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'GetFeedSubmissionResult';
        if ($this->issetMarketplace()) {
            $params['Marketplace'] = $this->getMarketplace();
        }
        if ($this->issetMerchant()) {
            $params['Merchant'] = $this->getMerchant();
        }
        if ($this->issetFeedSubmissionId()) {
            $params['FeedSubmissionId'] = $this->getFeedSubmissionId();
        }
        if ($this->issetFeedSubmissionResult()) {
            $params['FeedSubmissionResult'] = $this->getFeedSubmissionResult();
        }
        return $params;
    }

}