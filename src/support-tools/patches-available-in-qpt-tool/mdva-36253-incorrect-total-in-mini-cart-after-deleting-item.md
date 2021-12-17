---
title: "MDVA-36253: Incorrect total in mini cart after deleting item"
labels: 2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.22,Magento Commerce Cloud,Quality Patches Tool,cart,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-36253 patch solves the issue where the product price is not being updated if you go back to the mini cart page after deleting a product when using multi-shipping checkout step. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-36253. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.0-2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Incorrect total in mini cart after deleting item.

<ins>Steps to reproduce</ins>:

1. Log in as a customer that has at least one address.
1. Add four products to cart (price = $10 for each).
1. Go to the cart and click **Check Out with Multiple Addresses**.
1. Remove one item.
1. Navigate back to the Home page.
1. Open the cart and check the total price.

<ins>Expected results</ins>:

Total is $30.

<ins>Actual results</ins>:

Total is $40.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
