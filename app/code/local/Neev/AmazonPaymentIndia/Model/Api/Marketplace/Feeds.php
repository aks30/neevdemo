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
class Neev_AmazonPaymentIndia_Model_Api_Marketplace_Feeds
    extends Neev_AmazonPaymentIndia_Model_Api_Abstract
    implements Neev_AmazonPaymentIndia_Model_Api_Interface_Marketplace_Feeds {

    protected $_area = 'Amazon MWS Feeds';

    public function submitFeed($feedType, $content, $contentMd5) {
        $feedSubmissionId = null;
        $request = $this->_getApiModel('request_submitFeed', array(
            'FeedContent' => $content,
            'FeedType' => $feedType,
            'ContentMd5' => $contentMd5
        ));
        $response = $this->_getApiClient()->submitFeed($request);
        if ($response->issetSubmitFeedResult()) {
            $submitFeedResult = $response->getSubmitFeedResult();
            if ($submitFeedResult->issetFeedSubmissionInfo()) {
                $feedSubmissionInfo = $submitFeedResult->getFeedSubmissionInfo();
                if ($feedSubmissionInfo->issetFeedSubmissionId()) {
                    $feedSubmissionId = $feedSubmissionInfo->getFeedSubmissionId();
                }
            }
        }
        return $feedSubmissionId;
    }

    public function getFeedSubmissionListByNextToken($request) {}

    public function cancelFeedSubmissions($request) {}

    public function getFeedSubmissionCount($request) {}

    public function getFeedSubmissionResult($feedSubmissionId) {
        $getFeedSubmissionResultResult = null;
        $request = $this->_getApiModel('request_getFeedSubmissionResult', array(
            'FeedSubmissionId' => $feedSubmissionId
        ));
        $response = $this->_getApiClient()->processRequest($request);
        return $response;
    }

    public function getFeedSubmissionList($submissionList = null) {
        $getFeedSubmissionListResult = null;
        $params = is_array($submissionList) ? array('FeedSubmissionIdList' => array('Id' => $submissionList)) : null;
        $request = $this->_getApiModel('request_getFeedSubmissionList', $params);
        $response = $this->_getApiClient()->getFeedSubmissionList($request);
        if ($response->issetGetFeedSubmissionListResult()) {
            $getFeedSubmissionListResult = $response->getGetFeedSubmissionListResult();
        }
        return $getFeedSubmissionListResult;
    }

}
