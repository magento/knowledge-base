---
title: "MDVA-34928: checkout page error after store credit removed"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,checkout,error,store credit,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-34928 patch solves the issue where after removing store credit, there is an infinite loader at the checkout page. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-34928. Please note that the issue was fixed in Adobe Commerce 2.3.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.5-p2

**Compatible with Adobe Commerce versions:**

Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.5 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

After removing store credit, there is an infinite loader at the checkout page.

<ins>Steps to reproduce</ins>:

1. Create a customer account.
1. Determine a possible item to add to the cart - take note of the price.
1. Edit the account in the Admin.
1. Click **Store Credit**.
1. Add an amount to cover the price of the item.
1. Log in as the customer on the storefront.
1. Add the item to the cart.
1. Proceed to checkout.
1. Apply the store credit.
1. Try to remove the store credit.

<ins>Expected results</ins>:

Store credit is removed.

<ins>Actual results</ins>:

Infinite loader spins until the page is refreshed.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
