# Wdarking_OPCheckout
Magento 1.9 Custom Onepage Checkout module

Base module to modify the onepage checkout fields/validation/whatever. This module already includes brazilian taxvat validation. You can disabled it in `app/code/local/Wdarking/OPCheckout/Model/Observer.php`.

### Instalation

You need to copy the contents of the module inside your magento installation. If you use any custom magento theme, please copy the contents of the `app/design/frontend/base/default/template/wdarking/opcheckout` to `app/design/frontend/<your-theme>/default/template/wdarking/opcheckout`.
You also need to override the onepage checkout template files, and add the wanted custom blocks in the templates.

Example: custom company fields in onepage checkout billing page
You should copy the file at `app/design/frontend/base/default/template/persistent/checkout/onepage/billing.phtml` to `app/design/frontend/<your-theme>/custom/template/persistent/checkout/onepage/billing.phtml` and insert the following line in the file:

`<?php echo $this->getChildHtml('wdarking.opcheckout.companyfields'); ?>`

