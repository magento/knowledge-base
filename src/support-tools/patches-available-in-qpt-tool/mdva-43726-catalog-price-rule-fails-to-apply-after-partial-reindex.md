---
title: "MDVA-43726: Catalog price rule fails to apply after partial reindex"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.12,catalog,store-level attribute,reindex,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-43726 patch fixes the issue where the catalog price rule based on store-level attribute match fails to apply after partial reindex. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.12 is installed. The patch ID is MDVA-43726. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.3 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The catalog price rule based on store-level attribute match fails to apply after partial reindex.

<ins>Steps to reproduce</ins>:

1. Set indexer mode to run on schedule.
1. Create two configurable product attributes. For example: Color (Visual Swatch) and Size (Text Swatch).
1. Create a configurable product using both attributes created in Step 2.
1. After creating the products, create a **Yes/No** type attribute and make it visible in the rule conditions.
1. Add this attribute to the default attribute set.
1. Create a catalog price rule to apply when this attribute is set to **Yes**.
1. Open one of the simple products related to the configurable product.
1. Change the scope to store view and update the attribute value to **Yes**.
1. Run the `CRON` and check the price on the frontend.
1. Run a full reindex. Again, check the price on the frontend.
1. Update the configurable product category.
1. Run the `CRON` and check the price again on the frontend.

<ins>Expected results</ins>:

The catalog rule applies correctly without a full reindex using incremental indexers.

<ins>Actual results</ins>:

The catalog rule doesn't apply without running a full reindex.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
