<?php declare(strict_types=1);
/**
 * @copyright Copyright © 2023 SmileSolutions. All rights reserved.
 * @author    irion-kollewijn@bluewin.ch
 */

namespace SmileSolutions\AntiSpam\Plugin\Customer\Model;

use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Framework\Exception\LocalizedException;

class AccountManagementPlugin
{
    /**
     * @throws LocalizedException
     */
    public function beforeCreateAccount(\Magento\Customer\Model\AccountManagement $subject, CustomerInterface $customer )
    {
        $spamContent = array(
            "http://",
            "https://",
            "www.",
            ".com",
            ".ru",
            ".cn",
            ".net"
        );

        foreach ($spamContent as $entry) {
            if (strpos($customer->getFirstname(), $entry) !== false || strpos($customer->getLastname(), $entry) !== false)
                throw new LocalizedException(__('Suspected spam. The account could not be created.'));
        }
        return null;
    }
}
