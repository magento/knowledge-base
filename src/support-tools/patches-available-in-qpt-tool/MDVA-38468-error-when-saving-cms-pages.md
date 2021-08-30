---
title: "MDVA-38468: Receive an error message when saving CMS page"
labels: QPT patches,Quality Patches Tool,QPT,Support Tools,QPT 1.0.26,Magento Commerce Cloud,Magento Commerce,CMS,error message,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2
---

The MDVA-38468 Magento patch fixes the issue where users get the error message: *Item with the same ID "PAGE_ID" already exists,* when saving a CMS page. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.26 is installed. The patch ID is MDVA-38468. Please note that the issue was fixed in Magento 2.3.6.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.2-p2

**Compatible with Magento versions:**
Magento Commerce and Magento Commerce Cloud 2.3.2-2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

When trying to save a CMS page, you receive the following error message: *Item with the same ID "PAGE_ID" already exists.*

<ins>Steps to reproduce</ins>:

1. Create a new Website + Store + Storeview.
1. Create one more Website + Store + Storeview.
1. Go to **Content** > **Hierarchy** > Add any existing CMS page to hierarchy tree.
1. Go to **Content** > **Pages** > **Add New Page**:
   * Add any title.
   * In Page in Websites section assign to both created Storeviews.
   * In Hierarchy section assign to any category.
   * **Save and Continue Edit.**

<ins>Expected results</ins>:

The page is saved without any error.

<ins>Actual results</ins>:

The page is saved, but you get the following error message: *Item (Magento\VersionsCms\Model\Hierarchy\Node) with the same ID "PAGE_ID" already exists.*

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
