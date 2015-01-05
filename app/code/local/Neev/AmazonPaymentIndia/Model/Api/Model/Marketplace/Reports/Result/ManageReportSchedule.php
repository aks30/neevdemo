<?php

/**
 * Amazon Marketplace Reports API: ManageReportSchedule result model
 *
 * Fields:
 * <ul>
 * <li>Count: int</li>
 * <li>ReportSchedule: Array<Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_ReportSchedule></li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Result_ManageReportSchedule extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'Count' => array('FieldValue' => null, 'FieldType' => 'int'),
            'ReportSchedule' => array('FieldValue' => null, 'FieldType' => array('Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Reports_ReportSchedule'))
        );
        parent::__construct($data);
    }

}
