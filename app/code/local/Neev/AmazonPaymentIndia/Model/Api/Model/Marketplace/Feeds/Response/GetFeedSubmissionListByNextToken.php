<?php

/**
 * Amazon Marketplace Feeds API: GetFeedSubmissionListByNextToken response model
 *
 * Fields:
 * <ul>
 * <li>GetFeedSubmissionListByNextTokenResult: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Result_GetFeedSubmissionListByNextToken</li>
 * <li>ResponseMetadata: Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_ResponseMetadata</li>
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
class Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Response_GetFeedSubmissionListByNextToken extends Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Abstract {

    public function __construct($data = null) {
        $this->_fields = array(
            'GetFeedSubmissionListByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Result_GetFeedSubmissionListByNextToken'),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_ResponseMetadata')
        );
        parent::__construct($data);
    }

    /**
     * Construct Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Response_GetFeedSubmissionListByNextToken from XML string
     *
     * @param string $xml XML string to construct from
     * @return Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Response_GetFeedSubmissionListByNextToken
     */
    public static function fromXML($xml) {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $xpath->registerNamespace('a', self::getConfigData('api_namespace', array('api' => 'mws_feeds')));
        $response = $xpath->query('//a:GetFeedSubmissionListByNextTokenResponse');
        if ($response->length == 1) {
            return new Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Response_GetFeedSubmissionListByNextToken($response->item(0));
        } else {
            Mage::helper('amazonpaymentindia')->throwException(
                Mage::helper('amazonpaymentindia')->__('Unable to construct %s from provided XML. Make sure that %s is a root element.', 'Neev_AmazonPaymentIndia_Model_Api_Model_Marketplace_Feeds_Response_GetFeedSubmissionListByNextToken', 'GetFeedSubmissionListByNextTokenResponse'),
                null,
                array('area' => 'Amazon MWS Feeds')
            );
        }
    }

}
