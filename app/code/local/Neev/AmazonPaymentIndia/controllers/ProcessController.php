<?php

/**
 * This file is part of The Official Amazon Payments Magento Extension
 * (c) Neev Technologies
 * All rights reserved
 *
 * Reuse or modification of this source code is not allowed
 * without written permission from Neevtech
 *
 * @category   Neev
 * @package    Neev_AmazonPaymentIndia
 * @copyright  Copyright (c) 2011 - 2014 Neevtech (http://www.neevtech.com)
 * @author     Milind Desai / Neev Technologies
 */
class Neev_AmazonPaymentIndia_ProcessController extends Mage_Core_Controller_Front_Action {
public function processamzoneorderAction()
{
        
        $payments = Mage::getSingleton('payment/config')->getActiveMethods();
        $qid=Mage::getModel('checkout/cart')->getQuote()->getId();
        $quote = Mage::getModel('sales/quote')->load($qid);
             $addressData = array(
        'firstname' => 'Test',
        'lastname' => 'Test',
        'street' => 'Sample Street 10',
        'city' => 'Somewhere',
        'postcode' => '123456',
        'telephone' => '123456',
        'country_id' => 'IN',
        'region_id' => "", // id from directory_country_region table
        );
$billingAddress = $quote->getBillingAddress()->addData($addressData);
$shippingAddress = $quote->getShippingAddress()->addData($addressData);
$shippingAddress->setCollectShippingRates(true)->collectShippingRates()
->setShippingMethod('flatrate_flatrate')
->setPaymentMethod('amazonpaymentindia_sandbox');
$quote->getPayment()->importData(array('method' => 'amazonpaymentindia_sandbox'));
$quote->collectTotals()->save();
$service = Mage::getModel('sales/service_quote', $quote);
$service->submitAll();
$order = $service->getOrder();  

            echo "herer";
            exit;
}

}
