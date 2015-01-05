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
class Neev_AmazonPaymentIndia_Block_Adminhtml_Logger_Notifications_View extends Mage_Adminhtml_Block_Widget_Container {

    protected
        $_model = null;

    public function __construct() {
        parent::__construct();
        $this->_controller = 'adminhtml_logger_notifications';
        $this->_headerText = $this->__('Notification');
        $this->setTemplate('neev/amazonpaymentindia/logger/notifications/view.phtml');

        $this->_addButton('back', array(
            'label'     => Mage::helper('adminhtml')->__('Back'),
            'onclick'   => 'window.location.href=\'' . $this->getUrl('*/*/') . '\'',
            'class'     => 'back',
        ));

        $this->_addButton('content_button', array(
            'label'     => Mage::helper('amazonpaymentindia')->__('Show notification data'),
            'class'     => 'scalable'
        ));

    }

    public function getLogModel() {
        return $this->_model;
    }

    public function setLogModel($model) {
        $this->_model = $model;
        if ($this->getLogModel()->getId()) {
            $this->_headerText = $this->__('%s # %s | %s',
                $this->getNotificationType(),
                $this->getUuid(),
                $this->getCreationTime()
            );
            if ($this->getLogModel()->getNotificationContent()) {
                $this->_updateButton('content_button', 'onclick', 'Modalbox.show($(\'notification_data_code\'), {title: \'' . $this->__('%s #%s', $this->getNotificationType(), $this->getUuid()) . '\', width: \'95%\'})');
            } else {
                $this->_updateButton('content_button', 'disabled', true);
            }
        }
        return $this;
    }

    public function getCreationTime() {
        return $this->formatDate($this->getLogModel()->getCreationTime(), 'medium', true);
    }

    public function getNotificationType() {
        $notificationTypeOptions = Mage::getModel('amazonpaymentindia/lookup_notification_type')->getOptions();
        if (isset($notificationTypeOptions[$this->getLogModel()->getNotificationType()])) return $notificationTypeOptions[$this->getLogModel()->getNotificationType()];
        return $this->getLogModel()->getNotificationType();
    }

    public function getFormattedNotificationContent() {
        if (!$this->getLogModel()->getNotificationContent()) return null;
        return $this->helper('amazonpaymentindia')->prettifyXml($this->getLogModel()->getNotificationContent(), true);
    }

    public function getUuid() {
        return $this->getLogModel()->getUuid();
    }

    public function getProcessingResult() {
        return $this->getLogModel()->getProcessingResult();
    }

    public function getHeaderCssClass() {
        return 'icon-head head-' . strtr($this->_controller, '_', '-');
    }

}
