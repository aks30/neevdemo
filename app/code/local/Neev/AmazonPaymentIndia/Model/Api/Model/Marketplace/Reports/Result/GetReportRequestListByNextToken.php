<?php

/**
 * Amazon Marketplace Reports API: GetReportRequestListByNextToken result model
 *
 * Fields:
 * <ul>
 * <li>NextToken: string</li>
 * <li>HasNext: bool</li>
 * <li>ReportRequestInfo: Array<Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_ReportRequestInfo></li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Result_GetReportRequestListByNextToken extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'NextToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'HasNext' => array('FieldValue' => null, 'FieldType' => 'bool'),
            'ReportRequestInfo' => array('FieldValue' => null, 'FieldType' => array('Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_ReportRequestInfo'))
        );
        parent::__construct($data);
    }

}
