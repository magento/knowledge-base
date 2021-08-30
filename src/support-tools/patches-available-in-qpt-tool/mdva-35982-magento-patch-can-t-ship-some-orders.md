---
title: "MDVA-35982 Magento patch: Can't ship some orders"
labels: 2.3.0,2.3.5-p1,2.4.2,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,orders,shipping,site,support tools
---

The MDVA-35982 Magento patch fixes the error when admin user restricted to a specific website cannot create a shipment for the order placed on same website. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-35982. Please note that the issue was scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p1

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud: 2.3.0 - 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Merchant is unable to ship certain orders.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Choose any product website for the product except the default store. See [Product in Websites](https://docs.magento.com/user-guide/catalog/settings-basic-websites.html) in the Magento User Guide for detailed steps.
1. Create a user role for the Admin with Custom Role Scopes, in which the default website/store is not selected. See [Define a role](https://docs.magento.com/user-guide/system/permissions-user-roles.html#define-a-role) in the Magento User Guide for detailed steps.
1. Open the product in edit mode and set a Group Price for this product, in **Advanced Pricing** . See [Group Price](https://docs.magento.com/user-guide/catalog/product-price-group.html) in the Magento User Guide for detailed steps.
1. Create an order with this product.
1. Log in under the Admin with this user role and create a shipment. See [Creating a Shipment](https://docs.magento.com/user-guide/sales/shipments-create.html) in the Magento User Guide for detailed steps.

 <span class="wysiwyg-underline">Actual result:</span> 

See this error:

 `"0":"Notice: Undefined offset: XX in \/vendor\/magento\/module-catalog\/Model\/Product\/Attribute\/Backend\/GroupPrice\/AbstractGroupPrice.php on line 290"` 

 <span class="wysiwyg-underline">Expected result:</span> 

The shipment is created.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.