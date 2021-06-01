---
title: MDVA-36832: Images duplicate on pages with 768px view width
labels: 2.4.2,MQP 1.0.24,Magento Commerce Cloud,Magento Quality Patches,support tools, Magento Commerce, MQP patches, 2.3.4, 2.3.4-p2, 2.3.5-p1, 2.3.5-p2, 2.4.0, 2.3.6, 2.4.0-p1, 2.4.1, 2.3.6-p1, 2.4.1-p1, 2.4.2, 2.3.7, 2.4.2-p1, product image, duplicate
---

The MDVA-36832 Magento patch fixes the issue where images duplicates on pages with view width of 768px. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.24 is installed. The patch ID is MDVA-36832. Please note that the issue is scheduled to be fixed in Magento 2.4.4.

## Affected products and versions

**The patch is created for Magento version:** Magento Commerce Cloud 2.3.5-p2

**Compatible with Magento versions:** Magento Commerce and Magneto Commerce Cloud 2.3.4 - 2.4.2-p1
  >![info]
  >
  >Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

  Images duplicate on pages with view width of 768px.

<ins>Steps to reproduce:</ins>

   1. Go to backend > CONTENT > Pages and edit any page.
   1. Add any image to page.
   1. Go to frontend and open edited page.
   1. Open developer tools in Chrome.
   1. Enable "device view" and select iPad view or set page width to 768px.

   <ins>Actual result:</ins>

The image gets duplicated.

   <ins>Expected result:</ins>

Only one added image should be visible on the page.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
