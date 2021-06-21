---
title: "MDVA-28763 Magento patch: issues with managing product images via REST API"
labels: 2.3.2,2.3.3.x,API,MQP 1.0.5,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,images,support tools
---

The MDVA-28763 patch solves multiple issues related to managing the media gallery using REST API. This patch is available when the [Magento Quality Patch (MQP) tool](https://support.magento.com/hc/en-us/articles/360047139492) v.1.0.5 is installed. The issues are scheduled to be fixed in later Magento versions (see issues descriptions in [Issues](https://support.magento.com/hc/en-us/articles/360050056271#issues) ).

## Affected products and versions

* Magento Commerce 2.3.2 - 2.3.3.x
* Magento Commerce Cloud 2.3.2 - 2.3.3.x

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

<h2 id="issues">Issues</h2>

The MDVA-28763 patch includes fixes for the following issues associated with media gallery:

* When using REST API to update YouTube videos ( `PUT `rest/V1/products/ {SKU}'` , Magento displays a thumbnail for the video, but the video player does not load when you click the "Play" button. Scheduled to be fixed in Magento 2.3.6.
* `PUT `/V1/products/:sku/media/:entryId`` call creates a new entry rather than replaces the existing one. Fixed in Magento 2.3.5.
* Issues with product images deletion when products are assigned to multiple store views. Fixed in Magento 2.3.4.
* Merchants with multiple websites can now use REST to create and update products while preserving image and image-role inheritance. Previously, when a merchant used REST to create and update products, and a product was updated for store view, the default image roles were loaded and saved for that store view. As a result, the store-view image roles stopped inheriting from the default scope after update. Scheduled to be fixed in Magento 2.3.6.
* Media attributes (image, thumbnail, ..) values in store views referencing removed images not being automatically cleaned up. Scheduled to be fixed in Magento 2.4.2.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Magento Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
 