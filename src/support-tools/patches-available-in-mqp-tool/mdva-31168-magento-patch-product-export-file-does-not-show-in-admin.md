---
title: "MDVA-31168 Magento patch: Product export file does not show in Admin"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.10,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,csv file,product export file
---

The MDVA-31168 patch solves the issue where the product export CSV file does not appear in the list of exportable CSV files. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.10 is installed. Please note that the issue was fixed in Magento version 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce 2.3.5-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.1.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Prerequisites</span> :

Install Magento with sample data.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Create a downloadable product, and assign it to **Bags** category.
1. Start an export for all products.
1. Run following command from CLI:    ```php    bin/magento queue:consumers:start exportProcessor --single-thread --max-messages=10000    ```    

 <span class="wysiwyg-underline">Expected results:</span> 

The product export CSV file with all products is displayed in the file list in Admin, as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The product export CSV file with all products is not displayed in the list in Admin, though the file with headers only will be generated in the `/var` folder on the server.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.