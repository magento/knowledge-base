---
title: "MDVA-33614 Magento patch: can't save Terms page"
labels: 2.4.1,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Page Builder,Terms,support tools
---

The MDVA-33614 Magento patch fixes the issue where it is impossible to save edits to the Terms page, because Page Builder throws the following error: *An error has occurred while initiating Page Builder. Please consult with your technical support contact* . This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-33614. Please note that the issue was fixed in Magento 2.4.2.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.1

 **Compatible with Magento versions:** Magento Commerce and Magento Commerce Cloud 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

It is impossible to save edits to the Terms page, because Page Builder throws an error.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. In Magento Admin, go to **CONTENT** > Elements > **Pages** .
1. Select Terms page.
1. Click **Edit** .
1. Make an edit and click **Save** .

 <span class="wysiwyg-underline">Actual result:</span> 

The following error is displayed: *An error has occurred while initiating Page Builder. Please consult with your technical support contact* .

 <span class="wysiwyg-underline">Expected result:</span> 

The page is saved with no errors.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.