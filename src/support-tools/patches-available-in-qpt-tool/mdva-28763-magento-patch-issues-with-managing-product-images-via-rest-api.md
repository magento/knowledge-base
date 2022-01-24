---
title: "MDVA-28763: issues with managing product images via REST API"
labels: 2.3.2,2.3.3.x,API,QPT 1.0.5,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,images,support tools,on-premises,cloud infrastructure,Adobe Commerce
---

The MDVA-28763 patch solves multiple issues related to managing the media gallery using REST API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.5 is installed. The issues are scheduled to be fixed in later Adobe Commerce versions (see issues descriptions in [Issues](https://support.magento.com/hc/en-us/articles/360050056271#issues)).

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on-premises 2.3.2 - 2.3.3.x
* Adobe Commerce on cloud infrastructure 2.3.2 - 2.3.3.x

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issues

The MDVA-28763 patch includes fixes for the following issues associated with the media gallery:

* When using REST API to update YouTube videos (`PUT rest/V1/products/ {SKU}`, Adobe Commerce displays a thumbnail for the video, but the video player does not load when you click the "Play" button. Scheduled to be fixed in Adobe Commerce 2.3.6.
* `PUT /V1/products/:sku/media/:entryId` call creates a new entry rather than replaces the existing one. Fixed in Adobe Commerce 2.3.5.
* Issues with product images deletion when products are assigned to multiple store views. Fixed in Adobe Commerce 2.3.4.
* Merchants with multiple websites can now use REST to create and update products while preserving the image and image-role inheritance. Previously, when a merchant used REST to create and update products, and a product was updated for store view, the default image roles were loaded and saved for that store view. As a result, the store-view image roles stopped inheriting from the default scope after the update. Scheduled to be fixed in Adobe Commerce 2.3.6.
* Media attributes (image, thumbnail, ..) values in store views referencing removed images not being automatically cleaned up. Scheduled to be fixed in Adobe Commerce 2.4.2.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
