---
title: "MDVA-30593 patch: expired quotes are not cleaned up"
labels: 2.3.0,2.3.1,2.3.2,2.3.3,2.3.3-p1,QPT 1.0.5,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,quote,support tools
---

The MDVA-30593 patch solves the issue where quotes that expired according to the **Quote Lifetime** setting, are not cleaned up. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.5 is installed. Please note that the issue was fixed in Adobe Commerce 2.3.4.

## Affected products and versions

* Adobe Commerce (all deployment methods) 2.3.0-2.3.3.x

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Quotes, that expired according to the **Quote Lifetime** setting, are not cleaned up.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. In the Commerce Admin, go to **Stores** > **Configuration** > **Sales** > **Checkout** > **Shopping Cart**.
1. Set **Quote Lifetime (days)** = *1*
1. Save configuration and clear cache.
1. Log in as a customer.
1. Add a product to the cart.
1. After one day, go back to the cart.

 <span class="wysiwyg-underline">Expected result:</span>

The quote is cleared, and product is removed from the cart, since the old price is no longer valid.

 <span class="wysiwyg-underline">Actual result:</span>

 The product is still in the cart.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
