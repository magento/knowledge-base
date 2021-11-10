---
title: "MDVA-34474: API requisition list update results in error"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,requisition list,support tools
---

The MDVA-34474 Magento patch fixes the issue where adding a product to the requisition list using API results in error. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-34474. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:**

 Magento Commerce Cloud 2.4.0

 **Compatible with Magento versions:**

 Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Adding a product to the requisition list using API results in error.

<ins>Steps to reproduce</ins>:

1. Activate requisition list in Admin (**Stores** > **Configuration** > **General** > **B2B Features** > **Enable Requisition List** = *Yes*).
1. Create a customer.
1. Create a new requisition list for this customer sending call ```json    POST rest/all/V1/requisition_lists``` with the json payload attached.

<ins>Expected results</ins>:

No error and the list is created.

<ins>Actual results</ins>:

400 error.

```json
{"message":"Could not save Requisition List"}
```

## Apply the patch

For instructions on how to apply a QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
