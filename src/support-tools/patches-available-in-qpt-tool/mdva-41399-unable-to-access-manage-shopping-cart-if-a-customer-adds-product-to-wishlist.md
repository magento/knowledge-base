---
title: "MDVA-41399: Unable to access the Manage Shopping Cart if a customer adds product to wishlist"
labels: QPT patches,Quality Patches Tool,MQP,QPT 1.1.6,Adobe Commerce,Magento,cloud infrastructure,on-premises,Support Tools,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1
---

The MDVA-41399 patch solves the issue where admin users are unable to access the Manage Shopping Cart page if a customer adds a product to the wishlist. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.6 is installed. The patch ID is MDVA-41399. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.3 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Admin users are unable to access the Manage Shopping Cart page if a customer adds a product to the wishlist.

<ins>Prerequisites</ins>:

1. Create two or more products.
1. Create a customer.
1. Enable the Developer mode.

<ins>Steps to reproduce</ins>:

1. Go to Storefront and sign in as the customer from the preconditions.
1. Add a product to Wish List.
1. Go to the Admin panel and navigate to the created customer edit page and click on the **Manage Shopping Cart** button.

<ins>Expected results</ins>:

Admin user is able to manage the shopping cart.

<ins>Actual results</ins>:

Admin user gets an error message: *An error has occurred. See error log for details.*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
