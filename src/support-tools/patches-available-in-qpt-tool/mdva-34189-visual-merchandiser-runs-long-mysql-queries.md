---
title: "MDVA-34189: Visual merchandiser runs long MySQL queries"
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,MySQL,Site-Wide Analysis Tool,Visual Merchandiser,catalog,category,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Commerce,Magento Open Source
---

The MDVA-34189 patch solves the issue where Adobe Commerce executes large Visual Merchandiser queries when loading the Admin category page.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-34189. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.5-p2

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.4-2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Website runs large MySQL queries on the Production server.

<ins>Steps to reproduce</ins>:

1. To access the Visual Merchandiser go to the *Admin* sidebar, click **Catalog** > **Categories**.
1. Load the **Categories** page in the Admin panel (the initial root category load) and observe the queries that it executes.

<ins>Expected result</ins>:

The Admin **Categories** page should load without generating slow queries.

<ins>Actual result</ins>:

This depends on your PHP configuration. The most common example of this error is that the **Categories** page does not open and an error *Error 503 first byte timeout* displays.<br>
Alternately when Adobe Commerce loads the Visual Merchandiser, it executes a slow MySQL query. This query includes many product IDs inserted in to `ORDER BY FIELD(`e`.`entity_id`,
  ...)`

in `app/code/Magento/VisualMerchandiser/Model/Category/Products.php:: applyPositions`

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
