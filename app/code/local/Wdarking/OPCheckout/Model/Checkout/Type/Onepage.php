<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Checkout
 * @copyright  Copyright (c) 2006-2018 Magento, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Checkout Type Onepage model
 *
 * @category   Mage
 * @package    Mage_Checkout_Type_Onepage
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Wdarking_OPCheckout_Model_Checkout_Type_Onepage extends Mage_Checkout_Model_Type_Onepage
{
    public function saveBilling($data, $customerAddressId)
    {
        Mage::log('Wdarking_OPCheckout_Model_Checkout_Type_Onepage');

        if (isset($data['taxvat'])) {
            $cpf = new Wdarking_Helpers_ValidaCPFCNPJ($data['taxvat']);

            if (!$cpf->valida()) {
                return array('error' => -1, 'message' => Mage::helper('checkout')->__('Invalid Taxvat'));
            }
        }

        if (isset($data['wdk_use_company']) && $data['wdk_use_company'] === '1' && isset($data['wdk_company_taxvat'])) {
            if (!isset($data['wdk_company_name'])) {
                return array('error' => -1, 'message' => Mage::helper('checkout')->__('Invalid Wdk Company Name'));
            }

            $cnpj = new Wdarking_Helpers_ValidaCPFCNPJ($data['wdk_company_taxvat']);
            if (!$cnpj->valida()) {
                return array('error' => -1, 'message' => Mage::helper('checkout')->__('Invalid Wdk Company Taxvat'));
            }
        }

        return parent::saveBilling($data, $customerAddressId);
    }
}

