---
title: "MDVA-33453: Page Builder preview breaks product price differs across sites"
labels: 2.3.6,2.3.6-p1,2.4.0-p1,2.4.1,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Page Builder,error,price,product,support tools,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

The MDVA-33453 patch solves the issue where the Page Builder preview is broken if matching products have a different price for each website. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.6 - 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The Page Builder product preview breaks when there is a product with different prices on different websites.

<ins>Steps to reproduce</ins>:

1. Log in to Commerce Admin panel.
1. Create two websites.
1. Create a simple product.
1. Set a different price for the product on each website.
1. Run cron and reindex.
1. Create or edit a CMS page, and use the product block to add the product.

<ins>Actual result</ins>:<br>

The below error occurs:

 *Error filtering template: Item (Magento\\Catalog\\Model\\Product\\Interceptor) with the same ID "2" already exists.*

<ins>Expected result</ins>:<br>

No errors are displayed.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
