---
title: "MDVA-36424: Images attached to page builder vanish on save"
labels: 2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.21,QPT patches,Magento Commerce,Magento Commerce Cloud,URL,content,images,save,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-36424 patch solves the issue where the images attached to page builder elements disappear when the category is saved for the second time in the case of multiple websites, with the default website's base URL being different from the admin URL. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.21 is installed. The patch ID is MDVA-36424. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce on cloud infrastructure 2.3.6

**Compatible with Magento versions:**

Adobe Commerce (all deployment methods) 2.3.5 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Media images attached to page builder elements are not saved if the backend base URL is different from the storefront base URL.

<ins>Steps to reproduce</ins>:

1. Create a second website - website2.
1. Set a different base URL for website2 (the base URL used in admin should be different from the second website).
1. Set the second website as the default website (**Stores** > *Settings* > **All Stores** > Select the second website > set as *Default*).
1. Navigate to the category page in the backend, go to a category edit view.
1. Navigate to **Content** > *Description*.
1. Add a column to the content and set a background image using the media gallery.
1. Save the category.
1. Go to the **Content** > *Description* again; you will see the saved image correctly.
1. Save the category again.
1. Go to the **Content** > *Description*.

<ins>Expected results</ins>:

The image is not removed when saving the category.

<ins>Actual results</ins>:

The image is removed after saving the category a second time.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
