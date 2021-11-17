---
title: "MDVA-36853: No images load from large media galleries"
labels: 2.4.2,QPT 1.0.22,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,directory,media gallery,page builder,widget,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Commerce,Magento Open Source
---

The MDVA-36853 patch fixes the issue when no images load since the page builder media gallery widget doesn't load when you have a large media directory.

This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-36853. Please note that the issue is scheduled to be fixed in Adobe Commerce version 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.2

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Set **Enable Old Media Gallery** = *Yes* in **Admin > Stores > Configuration > Advanced > System > Media gallery**.
1. Navigate to **Content > Blocks**, and create a new CMS block or edit an existing CMS block.
1. Click on the **Edit with Pagebuilder** button.
1. Add a media element.
1. Click on the **Select from Gallery** button.

<ins>Expected results</ins>:

The media gallery widget and media gallery images both load, as expected.

<ins>Actual results</ins>:

The media gallery widget and media gallery images both do not load when you have a large `pub/media/catalog/product/cache/` directory.

## Apply the patch

To apply individual patches, use the following links, depending on your Adobe Commerce product:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
