---
title: "MDVA-27239: Cross-sell products are not displayed"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,QPT 1.1.7,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,cart,products,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-27239 patch fixes the issue where cross-sell products are not displayed. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.7 is installed. Please note that the issue was fixed in Adobe Commerce 2.3.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.3.4, 2.4.0

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.0 - 2.3.5-p2, 2.4.0 - 2.4.0-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Cross-sell products are not displayed in the cross-sell block on the shopping cart page.

<ins>Prerequisites</ins>:

1. Disable Magento_TargetRule module or remove from layout block Magento\TargetRule\Block\Checkout\Cart\Crosssell.
1. Create Product 1.
1. Create a schedule update for Product 1, so the newly created products will have row_id different from entity_id.
1. Create Product 2, Product 3, and Product 4.
1. Set Product 3 as cross-sell for Product 4.
1. Set Product 4 as cross-sell for Product 2.

<ins>Steps to reproduce</ins>:

1. Add Product 4 and Product 2 to the shopping cart.
1. Check the shopping cart page.

<ins>Expected results</ins>:

Product 3 is displayed in cross-sell block.

<ins>Actual results</ins>:

Cross-sell block is empty.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
