---
title: "MDVA-26005: Unable to select category in tree for Cart Price rule conditions"
labels: QPT patches,Quality Patches Tool,MQP,Magento,Support Tools,QPT,QPT 1.1.4,category,tree,rule conditions,Cart Price,Adobe Commerce,cloud infrastructure,on-premises,2.3.4,2.3.4-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2
---

The MDVA-26005 patch solves the issue where users are not able to select a category in the category tree for Cart Price rule conditions. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.4 is installed. The patch ID is MDVA-26005. Please note that the issue was fixed in Adobe Commerce 2.3.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.3.4

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.4 - 2.3.5-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Unable to select a category in the category tree for Cart Price rule conditions.

<ins>Steps to reproduce</ins>:

1. Create a new or edit an existing Cart Price rule.
1. Go to the Action section and choose category in Condition.
1. Render the category tree and try to choose a category.

<ins>Expected results</ins>:

You are able to select a category.

<ins>Actual results</ins>:

You are not able to select a category due to JS error.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
