---
title: "MDVA-33894 patch: bundle solution for Quick Order"
labels: 2.4.0,2.4.0-p1,QPT 1.0.15,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,order by SKU,quick order,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33894 patch fixes multiple issues for the Quick Order functionality including adding and removing multiple products and SKU case sensitivity. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.15 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.0

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.4.0-2.4.1-p1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

MDVA-33894 patch is a bundle solution with fixes for the following issues:

* **My Account** > **Order by SKU** functionality is case sensitive: if you enter a valid SKU but the case is not correct (uppercase instead of lowercase and so on), Adobe Commerce throws an error.
* When a shopper uses Quick Order to add multiple products to their cart, and tries to remove a product, the product does not get removed.
* Case sensitivity issues when adding multiple SKUs to a bulk order.
* Quick Order page cache issue with previously entered SKUs.
* Quick Order quantity is not reflected in cart.
* SKU duplication is not validated properly.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
