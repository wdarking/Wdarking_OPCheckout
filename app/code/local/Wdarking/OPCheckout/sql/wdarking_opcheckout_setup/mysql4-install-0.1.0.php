<?php
// ini_set('display_errors', '1');
$installer = $this;
$installer->startSetup();

$connection = $installer->getConnection();
$connection->addColumn($installer->getTable('sales/quote_address'), 'wdk_company_name', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'after'     => null, // column name to insert new column after
        'comment'   => 'Wdk Company Name'
    ));
$connection->addColumn($installer->getTable('sales/quote_address'), 'wdk_company_taxvat', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'after'     => null, // column name to insert new column after
        'comment'   => 'Wdk Company Taxvat'
    ));
$connection->addColumn($installer->getTable('sales/quote_address'), 'wdk_company_ie', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'after'     => null, // column name to insert new column after
        'comment'   => 'Wdk Company IE'
    ));
//
$connection->addColumn($installer->getTable('sales/order_address'), 'wdk_company_name', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'after'     => null, // column name to insert new column after
        'comment'   => 'Wdk Company Name'
    ));
$connection->addColumn($installer->getTable('sales/order_address'), 'wdk_company_taxvat', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'after'     => null, // column name to insert new column after
        'comment'   => 'Wdk Company Taxvat'
    ));
$connection->addColumn($installer->getTable('sales/order_address'), 'wdk_company_ie', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_TEXT,
        'nullable'  => true,
        'length'    => 255,
        'after'     => null, // column name to insert new column after
        'comment'   => 'Wdk Company IE'
    ));


$installer->addAttribute("customer_address", "wdk_company_name",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "Wdk Company Name",
    "input"    => "text",
    "source"   => "",
    "global"  => true,
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

    ));

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer_address", "wdk_company_name");


$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
$used_in_forms[]="customer_register_address";
$used_in_forms[]="customer_address_edit";
$used_in_forms[]="adminhtml_customer_address";
        $attribute->setData("used_in_forms", $used_in_forms)
        ->setData("is_used_for_customer_segment", true)
        ->setData("is_system", 0)
        ->setData("is_user_defined", 1)
        ->setData("is_visible", 1)
        ->setData("visible_on_front", 1)
        ->setData("sort_order", 100)
        ;
        $attribute->save();




$installer->addAttribute("customer_address", "wdk_company_taxvat",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "Wdk Company Taxvat",
    "input"    => "text",
    "source"   => "",
    "global"  => true,
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

    ));

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer_address", "wdk_company_taxvat");


$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
$used_in_forms[]="customer_register_address";
$used_in_forms[]="customer_address_edit";
$used_in_forms[]="adminhtml_customer_address";
        $attribute->setData("used_in_forms", $used_in_forms)
        ->setData("is_used_for_customer_segment", true)
        ->setData("is_system", 0)
        ->setData("is_user_defined", 1)
        ->setData("is_visible", 1)
        ->setData("visible_on_front", 1)
        ->setData("sort_order", 100)
        ;
        $attribute->save();




$installer->addAttribute("customer_address", "wdk_company_ie",  array(
    "type"     => "varchar",
    "backend"  => "",
    "label"    => "Wdk Company IE",
    "input"    => "text",
    "source"   => "",
    "global"  => true,
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

    ));

$attribute   = Mage::getSingleton("eav/config")->getAttribute("customer_address", "wdk_company_ie");


$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
$used_in_forms[]="checkout_register";
$used_in_forms[]="customer_account_create";
$used_in_forms[]="customer_account_edit";
$used_in_forms[]="adminhtml_checkout";
$used_in_forms[]="customer_register_address";
$used_in_forms[]="customer_address_edit";
$used_in_forms[]="adminhtml_customer_address";
        $attribute->setData("used_in_forms", $used_in_forms)
        ->setData("is_used_for_customer_segment", true)
        ->setData("is_system", 0)
        ->setData("is_user_defined", 1)
        ->setData("is_visible", 1)
        ->setData("visible_on_front", 1)
        ->setData("sort_order", 100)
        ;
        $attribute->save();



$installer->endSetup();

