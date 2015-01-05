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
interface Neev_AmazonPaymentIndia_Model_Api_Interface_Iopn {

    public function newOrderNotification(array $params);

    public function orderCancelledNotification(array $params);

    public function orderReadyToShipNotification(array $params);

}
