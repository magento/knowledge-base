---
title: MDVA-36853: No images load from large media galleries
labels: 2.4.2,MQP 1.0.22,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,directory,media gallery,page builder,widget
---

The MDVA-36853 Magento patch fixes the issue when no images load since the page builder media gallery widget doesn't load when you have a large media directory.

This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-36853. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.4.2

 **Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. Set **Enable Old Media Gallery** = *Yes* in **Admin > Stores > Configuration > Advanced > System > Media gallery** .
1. Navigate to **Content > Blocks** , and create a new CMS block or edit an existing CMS block.
1. Click on the **Edit with Pagebuilder** button.
1. Add a media element.
1. Click on the **Select from Gallery** button.

 <span class="wysiwyg-underline">Expected results</span> :

The media gallery widget and media gallery images both load, as expected.

 <span class="wysiwyg-underline">Actual results</span> :

The media gallery widget and media gallery images both do not load when you have a large `pub/media/catalog/product/cache/` directory.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.