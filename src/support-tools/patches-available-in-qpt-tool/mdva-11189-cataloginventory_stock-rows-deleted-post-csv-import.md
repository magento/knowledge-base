---
title: "MDVA-11189: cataloginventory_stock rows deleted post CSV import"
labels: 2.2.3,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,Inventory,QPT 1.0.20,QPT patches,Magento Commerce,Magento Commerce Cloud,catalog,csv file,data discrepancies,import,product,support tools
---

The MDVA-11189 Magento patch fixes the issue when after importing a .csv file to update product stock, rows from the `cataloginventory_stock` table are deleted. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.20 is installed. The patch ID is MDVA-1189. Please note that the issue was fixed in Magento 2.3.5.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.2.3

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0-2.3.4-p2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Fixes the issue when after importing a .csv to update product stock, rows from the `cataloginventory_stock` table are deleted.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. In the database run the following MySQL command:

    ``select count(*) from cataloginventory_stock_status;``    
1. Note the number of rows.
1. Set the crontab as follows:

    ``* * * * * /usr/bin/php <path to installation>/bin/magento cron:run  | grep -v "Ran jobs by schedule" >> <path to installation>/var/log/cron.log 2>&1``    
1. Go to the Admin panel in **System** > **Tools** > **Index Management** .
1. Set indexers to *Update By Schedule.*
1. Go to **System** > *Data Transfer* > **Export** .
1. Set **Entity Type** equal to *Products* > **Continue** .
1. Open the saved .csv file > Remove all columns except for SKU and QTY.
1. Update the quantity for all products to 150.
1. Save the .csv file.
1. Go to **System** > *Data Transfer* > **Import** .
1. Set the following values:
   1. Entity Type: *Products* 
   1. Import Behavior: *Add/Update*
   1. Leave all other values at default.
   1. Choose File to select the catalog product spreadsheet.

1. Click **Check Data** > **Import** . Allow 5-10 minutes to pass.
1. In the database run the following MySQL command:

    ``select count(*) from cataloginventory_stock_status;``    

 <span class="wysiwyg-underline">Actual result:</span>

The number of rows in `cataloginventory_stock` is decreased after the CSV import to update the stock.

 <span class="wysiwyg-underline">Expected result:</span>

The number of rows in `cataloginventory_stock` should remain the same after the CSV import to update the stock.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
