---
title: "ACSD-45849: Video metadata is lost after staging update"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.18,staging update,video metadata,Magento,YouTube API,Adobe Commerce,cloud infrastructure,on-premises,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3
---

The ACSD-45849 patch fixes the issue where the video metadata is lost after a staging update is applied. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.18 is installed. The patch ID is ACSD-45849. Please note that the issue was fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.3 - 2.4.3-p3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The video metadata is lost after a staging update is applied.

<ins>Steps to reproduce</ins>:

1. Set up the YouTube API key in **Admin** > **Stores** > **Configuration** > **Catalog** > **Product Video**.
1. Create a product with a YouTube video. Note that the URL, title, and description are filled.
1. Create a new scheduled update for the product with any parameters without changing the *Images and Video* section.
1. Click on **View/Edit** in Scheduled Changes.
1. Go to **Images and Videos** and click on the video.

<ins>Expected results</ins>:

The URL, title, and description contain appropriate data.

<ins>Actual results</ins>:

The URL, title, and description fields are empty.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
