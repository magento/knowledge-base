---
title: "MDVA-34189: Visual merchandiser runs long MySQL queries"
labels: 2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,MySQL,Site-Wide Analysis Tool,Visual Merchandiser,catalog,category,support tools
---

The MDVA-34189 Magento patch solves the issue where Magento executes large Visual Merchandiser queries when loading the Admin category page.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.18 is installed. The patch ID is MDVA-34189. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.4-2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Website runs large MySQL queries on the Production server.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. To access the Visual Merchandiser go to the *Admin* sidebar, click **Catalog** > **Categories** .
1. Load the **Categories** page in the Admin panel (the initial root category load) and observe the queries that it executes.

 <span class="wysiwyg-underline">Actual result:</span> 

This depends on your PHP configuration. The most common example of this error is that the **Categories** page does not open and an error *Error 503 first byte timeout* displays.Alternately when Magento loads the Visual Merchandiser it executes a slow MySQL query. This query includes many product IDs inserted in to `ORDER BY FIELD(`e`.`entity_id`,
  ...)` 

in `app/code/Magento/VisualMerchandiser/Model/Category/Products.php:: applyPositions` 

 <span class="wysiwyg-underline">Expected result:</span> 

The Admin **Categories** page should load without generating slow queries.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.