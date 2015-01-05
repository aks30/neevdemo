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
 * @copyright  Copyright (c) 2011 - 2014 Neev Technologies (http://www.neevtech.com)
 * @author     Milind Desai / Neev Technologies
 */
class Neev_AmazonPaymentIndia_Block_Adminhtml_Logger_Feeds_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct() {
        parent::__construct();
        $this->setId('amazon_logger_feeds_grid');
        $this->setDefaultSort('creation_time');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection() {
        $collection = Mage::getModel('amazonpaymentindia/log_feed')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {

        $this->addColumn('creation_time', array(
            'header'        => Mage::helper('amazonpaymentindia')->__('Date'),
            'index'         => 'creation_time',
            'type'          => 'datetime',
            'width'         => '150px'
        ));

        $this->addColumn('submission_id', array(
            'header'        => Mage::helper('amazonpaymentindia')->__('Feed submission ID'),
            'index'         => 'submission_id',
            'width'         => '150px'
        ));

        $this->addColumn('feed_type', array(
            'header'        => Mage::helper('amazonpaymentindia')->__('Feed type'),
            'index'         => 'feed_type',
            'type'          => 'options',
            'options'       => Mage::getModel('amazonpaymentindia/lookup_feed_type')->getOptions(),
            'width'         => '300px'
        ));

        $this->addColumn('processing_status', array(
            'header'        => Mage::helper('amazonpaymentindia')->__('Processing status'),
            'index'         => 'processing_status',
            'align'         => 'center',
            'renderer'      => 'amazonpaymentindia/adminhtml_logger_feeds_grid_renderer_status',
            'type'          => 'options',
            'options'       => Mage::getModel('amazonpaymentindia/lookup_feed_status')->getOptions(),
            'width'         => '100px'
        ));


        $this->addColumn('action', array(
            'header'    => Mage::helper('amazonpaymentindia')->__('Action'),
            'type'      => 'action',
            'align'     => 'center',
            'width'     => '50px',
            'getter'    => 'getId',
            'actions'   => array(
                array(
                    'caption' => Mage::helper('amazonpaymentindia')->__('View'),
                    'url'     => array('base' => '*/*/view'),
                    'field'   => 'id'
                )
            ),
            'filter'    => false,
            'sortable'  => false,
            'is_system' => true
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($row) {
        return $this->getUrl('*/*/view', array('id' => $row->getId()));
    }

}
