<?php

/**
 * Amazon Marketplace Reports API: RequestReport request model
 *
 * Fields:
 * <ul>
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>MarketplaceIdList: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_IdList</li>
 * <li>ReportType: string</li>
 * <li>StartDate: DateTime</li>
 * <li>EndDate: DateTime</li>
 * <li>ReportOptions: string</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Request_RequestReport extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MarketplaceIdList' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_IdList'),
            'ReportType' => array('FieldValue' => null, 'FieldType' => 'string'),
            'StartDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
            'EndDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
            'ReportOptions' => array('FieldValue' => null, 'FieldType' => 'string')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'RequestReport';
        if ($this->issetMarketplace()) {
            $params['Marketplace'] = $this->getMarketplace();
        }
        if ($this->issetMerchant()) {
            $params['Merchant'] = $this->getMerchant();
        }
        if ($this->issetMarketplaceIdList()) {
            $marketplaceIdList = $this->getMarketplaceIdList();
            $marketplaceIdListIndex = 1;
            foreach ($marketplaceIdList->getId() as $id) {
                $params['MarketplaceIdList.Id.' . $marketplaceIdListIndex] = $id;
                $marketplaceIdListIndex++;
            }
        }
        if ($this->issetReportType()) {
            $params['ReportType'] = $this->getReportType();
        }
        if ($this->issetStartDate()) {
            $params['StartDate'] = $this->getStartDate();
        }
        if ($this->issetEndDate()) {
            $params['EndDate'] = $this->getEndDate();
        }
        if ($this->issetReportOptions()) {
            $params['ReportOptions'] = $this->getReportOptions();
        }
        return $params;
    }

}