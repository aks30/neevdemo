<?php

/**
 * Amazon Marketplace Reports API: UpdateReportAcknowledgements request model
 *
 * Fields:
 * <ul>
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportIdList: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_IdList</li>
 * <li>Acknowledged: bool</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Request_UpdateReportAcknowledgements extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
            'Merchant' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ReportIdList' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_IdList'),
            'Acknowledged' => array('FieldValue' => null, 'FieldType' => 'bool')
        );
        parent::__construct($data);
    }

    public function convertToQueryString() {
        $params = array();
        $params['Action'] = 'UpdateReportAcknowledgements';
        if ($this->issetMarketplace()) {
            $params['Marketplace'] = $this->getMarketplace();
        }
        if ($this->issetMerchant()) {
            $params['Merchant'] = $this->getMerchant();
        }
        if ($this->issetReportIdList()) {
            $reportIdList = $this->getReportIdList();
            $reportIdListIndex = 1;
            foreach ($reportIdList->getId() as $id) {
                $params['ReportIdList.Id.' . $reportIdListIndex] = $id;
                $reportIdListIndex++;
            }
        }
        if ($this->issetAcknowledged()) {
            $params['Acknowledged'] = $this->getAcknowledged() ? 'true' : 'false';
        }
        return $params;
    }

}
