---
title: "MDVA-34469: Wrong store code specified for cart"
labels: 2.4.1,2.4.1-p1,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,cart,default,headers,store,support tools,views,Adobe Commerce,cloud infrastructure,on-premsies
---

The MDVA-34469 patch solves the issue where users get the error message: *Wrong store code specified for cart* when adding a product to the cart after switching store views. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. The patch ID is MDVA-34469. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.1

**Compatible with Adobe Commerce versions:**

Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.4.1 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The user sees a cart query error, *"Wrong store code specified for cart"*, when trying to switch store views.

<ins>Prerequisites</ins>:

* Adobe Commerce 2.4.0.
* Single website with a single store and two store views is configured.
* A customer account is created.

<ins>Steps to reproduce</ins>:

1. Adobe Commerce backend is configured to have two store views (with store codes: default, second).
1. The user creates a shopping cart using the default store code.
1. The user tries to retrieve this cart using the second store code in the<tt>Store</tt>request header.

<ins>Expected results</ins>:

The cart displays because switching the store (sending the new code in the `Store` request header) associates the cart to the requested store.

<ins>Actual results</ins>:

The cart query returns an error, and the cart does not display.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
