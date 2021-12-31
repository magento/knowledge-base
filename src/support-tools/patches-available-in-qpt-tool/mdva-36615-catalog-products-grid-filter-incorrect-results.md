---
title: "MDVA-36615: catalog products grid filter incorrect results"
labels: 2.4.2,QPT 1.0.21,QPT patches,Magento Commerce,Magento Commerce Cloud,Product Grid,catalog,configurable product,search,support tools,Adobe Commerce,on-premises,Adobe Commerce,cloud infrastructure,Magento Open Source
---

The MDVA-36615 patch fixes the issue with incorrect product count in the admin product grid. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-36615. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.4.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Incorrect product count in the admin product grid.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create simple and configurable products with the same phrase in the name (e.g. "red shirt" / "red shirt xs").
1. On the *Admin* sidebar, go to **Catalog** > **Products** > search for this phrase.
1. Click **Filters**. Set Type to *Configurable Product*.
1. Click **Apply Filters**.

<span class="wysiwyg-underline">Actual result:</span>

Correct number in matched product counter.

<span class="wysiwyg-underline">Expected result:</span>

Incorrect number in matched product counter.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
