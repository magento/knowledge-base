---
title: MDVA-38468: Error when saving CMS pages
labels: MQP patches,Magento Quality Patches,
---

The MDVA-38468 Magento patch fixes the issue of ***error when saving CMS pages.*** This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.26 is installed. The patch ID is MDVA-38468. Please note that the issue was fixed in Magento 2.3.6. 

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.2-p2

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.2-2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

Error when saving CMS pages - Item with the same ID 'PAGE_ID' already exists.

<ins>Steps to reproduce</ins>:

1. Create a new website+store+storeview.
1. Create one more website+store+storeview.
1. Go to Content -> Hierarchy -> Add any existing CMS page to hierarchy tree.
1. Go to Content -> Pages -> Add new Page:
  * add any title
  * in "Page in Websites" section assign to both created storeviews
  * in "Hierarchy" section assign to any category
  * Save and continue edit

<ins>Expected results</ins>:
The page is saved without errors.

<ins>Actual results</ins>:
The page saved, but you get the following error message: *Item (Magento\VersionsCms\Model\Hierarchy\Node) with the same ID "PAGE_ID" already exists"*

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
