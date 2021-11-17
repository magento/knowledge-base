---
title: "MDVA-31242 Magento patch: issue in exporting orders in CSV format"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,QPT 1.0.8,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool
---

The MDVA-31242 patch solves the issue where an error occurs when exporting orders in CSV file format. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.8 is installed. Please note that the issue is scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.4.0.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.0-p1.

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Login to the Admin backend.2. Enable **Company** at **Stores > Configuration > B2B Features** .3. Go to **Sales > Orders** .4. Click the **Column > Company Name** checkbox.5. Enter any value into the **Filters > Company Name** text field.6. Click the **Apply Filters** button.7. Click the **Export > CSV > Export** button.

 <span class="wysiwyg-underline">Expected results:</span> 

The selected file pop-up is opened as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

White screen with the error, *There has been an error processing your request* , exception is displayed.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.