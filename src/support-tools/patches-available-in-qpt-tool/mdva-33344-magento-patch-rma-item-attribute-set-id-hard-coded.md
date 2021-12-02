---
title: 'MDVA-33344 patch: "rma-item" attribute set ID hard-coded'
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.2,API,QPT 1.0.16,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,rma_item,support tools,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce,Magento Open Source
---

The MDVA-33344 patch fixes the issue where the hard coded "rma\_item" entity default attribute set ID is used instead of the value from the database. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.16 is installed. Please note that the issue was fixed/is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.3.4

 **Compatible with Adobe Commerce versions:** Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.0 - 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The `/rest/default/V1/returnsAttributeMetadata` WebAPI endpoint returns empty result, if the "rma\_item" entity default attribute set ID is different from the default installation ID.

<ins>Steps to reproduce</ins>:

Make an API call to `/rest/default/V1/returnsAttributeMetadata`.

<ins>Expected result</ins>:

Data is returned.

<ins>Actual result</ins>:

Empty result is returned.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to the [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
