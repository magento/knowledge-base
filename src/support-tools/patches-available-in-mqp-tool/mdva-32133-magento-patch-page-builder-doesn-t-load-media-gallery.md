---
title: "MDVA-32133 Magento patch: page builder doesn't load media gallery"
labels: 2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.12,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,load,media gallery,page builder,support tools
---

The MDVA-32133 solves the issue where the Media Gallery is not loaded. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.12 is installed. Please note that this issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

* **The patch is created for Magento version:** Magento Commerce Cloud 2.4.0.
* **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.4.0-2.4.2.

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Fixes the issue where the order history loads very slow or not loaded at all. <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Edit selected cms page.2. Expand Content and click **Edit with Page Builder** .3. Expand Media. Drag and drop Image on the Row area.4. Click **Select from Gallery** .5. You can log out and then log in via some other window.

 <span class="wysiwyg-underline">Actual result:</span> The media gallery is not loaded.

 <span class="wysiwyg-underline">Expected result:</span> The media gallery is loaded.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

<h2 id="QPTPatchKBDataCollectionInstructionsProposal-Additionalstepsrequiredafterthepatchinstallation">Related reading</h2>

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.