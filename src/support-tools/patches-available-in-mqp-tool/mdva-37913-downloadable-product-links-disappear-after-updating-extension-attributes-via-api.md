---
title: MDVA-37913: Downloadable product links disappear after updating extension attributes via API
labels: MQP patches,Magento Quality Patches,MDVA-37913,Magento 2.4.3,MQP tool 1.0.24,
---

The MDVA-37913 Magento patch solves the issue where the downloadable product links disappear after updating extension attributes via API. This patch is available when the Magento Quality Patch (MQP) tool 1.0.24 is installed. The patch ID is MDVA-37913. Please note that the issue is scheduled to be fixed in Magento 2.4.3.


## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.6

**Compatible with Magento versions:**
Magento Commerce and Magento Commerce Cloud 2.3.0 - 2.4.0-p1
>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.


## Issue
Downloadable product links disappear after updating extension attributes via API.

<ins>Prerequisites</ins>:
Downloadable product with download links.

<ins>Steps to reproduce</ins>:

1. Update extension attributes, using request like this:

{
    "product": {
        "extension_attributes": {
            "stock_item": {
                "is_in_stock": true,
                "qty": 100
            }
        }
    }
}

<ins>Expected results</ins>:
Product should be updated, all downloadable links should not be removed.

<ins>Actual results</ins>:
Product updated, but all downloadable links were removed.


## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).


## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
