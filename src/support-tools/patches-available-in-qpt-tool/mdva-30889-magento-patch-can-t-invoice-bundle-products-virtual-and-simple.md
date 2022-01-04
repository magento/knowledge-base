---
title: "MDVA-30889: Can't invoice bundle products virtual and simple"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.9,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,bundle options,error,invoice,order,product,simple,virtual,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30889 patch solves the issue where an error occurs after invoicing a bundle product with both virtual and simple options. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.9 is installed. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.4

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Prerequisites</ins>:

Install Adobe Commerce with [Inventory Management](https://devdocs.magento.com/guides/v2.4/inventory/).

<ins>Steps to reproduce</ins>:

1. Go to **Admin**.
1. Create a simple product.
1. Create a virtual product.
1. Create a bundle product (Create two dropdown options for child products, and assign virtual and simple products.). Set **Dynamic Price** = *No*.
1. Go to the storefront.
1. Go to the product's page.
1. Add the product to the cart.
1. Proceed to checkout, and order the product.
1. Go to **Admin > Orders**.
1. Open the created order, and invoice it.

<ins>Expected results</ins>:

The invoice of a bundle product (that contains both simple and virtual products) is created.

<ins>Actual results</ins>:

The invoice is not created, and you receive an error similar to this:

```php
TypeError: Return value of Magento\InventorySourceSelection\Model\Request\InventoryRequest::getItems() must be of the type array, null returned in vendor/magento/module-inventory-source-selection/Model/Request/InventoryRequest.php:102
```

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
