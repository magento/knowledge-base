---
title: "MDVA-30889 Magento patch: Can't invoice bundle products virtual and simple"
labels: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,MQP 1.0.9,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,bundle options,error,invoice,order,product,simple,virtual"
---

The MDVA-30889 patch solves the issue where an error occurs after invoicing a bundle product with both virtual and simple options. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.9 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce 2.3.4.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisites</span> :

Install Magento with [Inventory Management](https://devdocs.magento.com/guides/v2.4/inventory/) .

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Go to **Admin** .
1. Create a simple product.
1. Create a virtual product.
1. Create a bundle product (Create two dropdown options for child products, and assign virtual and simple products.). Set **Dynamic Price** = *No.* 
1. Go to the storefront.
1. Go to the product's page.
1. Add the product to cart.
1. Proceed to checkout, and order the product.
1. Go to **Admin > Orders** .
1. Open the created order, and invoice it.

 <span class="wysiwyg-underline">Expected results:</span> 

The invoice of a bundle product (that contains both simple and virtual products) is created, as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The invoice is not created, and you receive an error similar to this:

```php
TypeError: Return value of Magento\InventorySourceSelection\Model\Request\InventoryRequest::getItems() must be of the type array, null returned in vendor/magento/module-inventory-source-selection/Model/Request/InventoryRequest.php:102
```

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.