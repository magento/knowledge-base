---
title: "MDVA-33614 patch: can't save Terms page"
labels: 2.4.1,QPT 1.0.19,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Page Builder,Terms,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-33614 patch fixes the issue where it is impossible to save edits to the Terms page, because Page Builder throws the following error: *An error has occurred while initiating Page Builder. Please consult with your technical support contact*. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.19 is installed. The patch ID is MDVA-33614. Please note that the issue was fixed in Adobe Commerce 2.4.2.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce on cloud infrastructure 2.4.1

 **Compatible with Adobe Commerce versions:** Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.4.1

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

It is impossible to save edits to the Terms page, because Page Builder throws an error.

<ins>Steps to reproduce</ins>:

1. In Commerce Admin, go to **CONTENT** > Elements > **Pages**.
1. Select Terms page.
1. Click **Edit**.
1. Make an edit and click **Save**.

<ins>Expected result</ins>:

The page is saved with no errors.

<ins>Actual result</ins>:

The following error is displayed: *An error has occurred while initiating Page Builder. Please consult with your technical support contact*.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT tool, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
