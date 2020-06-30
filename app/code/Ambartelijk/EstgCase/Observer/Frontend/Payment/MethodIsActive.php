<?php
/**
 * Copyright © Ambartelijk All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Ambartelijk\EstgCase\Observer\Frontend\Payment;

class MethodIsActive implements \Magento\Framework\Event\ObserverInterface
{

    /**
     * @var \Magento\Customer\Model\Session
     */
    private $customerSession;
    
    public function __construct(\Magento\Customer\Model\Session $customerSession)
    {
        $this->customerSession = $customerSession;
    }

    /**
     * Check the current customer group to see if any payment methods
     * have been disabled. We should add some caching in here.
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!$this->customerSession->isLoggedIn()) {
            if ($observer->getEvent()->getMethodInstance()->getCode() === "checkmo") {
                $result = $observer->getEvent()->getResult();
                $result->setData('is_available', false);
            }
        }
    }
}

