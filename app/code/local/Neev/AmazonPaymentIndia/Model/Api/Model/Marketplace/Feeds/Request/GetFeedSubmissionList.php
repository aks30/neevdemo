<?php

/**
 * Amazon Marketplace Feeds API: GetFeedSubmissionList request model
 *
 * Fields:
 * <ul>
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>FeedSubmissionIdList: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_IdList</li>
 * <li>MaxCount: string</li>
 * <li>FeedTypeList: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_TypeList</li>
 * <li>FeedProcessingStatusList: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_StatusList</li>
 * <li>SubmittedFromDate: DateTime</li>
 * <li>SubmittedToDate: DateTime</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Request_GetFeedSubmissionList extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
            'FeedSubmissionIdList' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_IdList'),
            'MaxCount' => array('FieldValue' => 50, 'FieldType' => 'string'),
            'FeedTypeList' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_TypeList'),
            'FeedProcessingStatusList' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_StatusList'),
            'SubmittedFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
            'SubmittedToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'GetFeedSubmissionList';
        if ($this->issetMarketplace()) {
            $params['Marketplace'] = $this->getMarketplace();
        }
        if ($this->issetMerchant()) {
            $params['Merchant'] = $this->getMerchant();
        }
        if ($this->issetFeedSubmissionIdList()) {
            $feedSubmissionIdList = $this->getFeedSubmissionIdList();
            $feedSubmissionIdListIndex = 1;
            foreach ($feedSubmissionIdList->getId() as $id) {
                $params['FeedSubmissionIdList.Id.' . $feedSubmissionIdListIndex] = $id;
                $feedSubmissionIdListIndex++;
            }
        }
        if ($this->issetMaxCount()) {
            $params['MaxCount'] = $this->getMaxCount();
        }
        if ($this->issetFeedTypeList()) {
            $feedTypeList = $this->getFeedTypeList();
            $feedTypeListIndex = 1;
            foreach ($feedTypeList->getType() as $type) {
                $params['FeedTypeList.Type.' . $feedTypeListIndex] = $type;
                $feedTypeListIndex++;
            }
        }
        if ($this->issetFeedProcessingStatusList()) {
            $feedProcessingStatusList = $this->getFeedProcessingStatusList();
            $feedProcessingStatusListIndex = 1;
            foreach ($feedProcessingStatusList->getStatus() as $status) {
                $params['FeedProcessingStatusList.Status.' . $feedProcessingStatusListIndex] = $status;
                $feedProcessingStatusListIndex++;
            }
        }
        if ($this->issetSubmittedFromDate()) {
            $params['SubmittedFromDate'] = $this->getSubmittedFromDate();
        }
        if ($this->issetSubmittedToDate()) {
            $params['SubmittedToDate'] = $this->getSubmittedToDate();
        }
        return $params;
    }

}
