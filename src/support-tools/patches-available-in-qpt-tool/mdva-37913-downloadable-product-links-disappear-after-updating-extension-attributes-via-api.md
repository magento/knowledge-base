---
title: "MDVA-37913: Product download links vanish after updating extension attributes via API"
labels: support tools,QPT patches,Quality Patches Tool,Magento Commerce,Magento Commerce Cloud,QPT tool 1.0.24,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,Adobe Commerce,cloud infrastructure,on-premises,quality patches for Adobe Commerce
---

The MDVA-37913 patch for solves the issue where the downloadable product links disappear after updating extension attributes via API. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.24 is installed. The patch ID is MDVA-37913. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.


## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.3.6

**Compatible with Adobe Commerce versions:**
Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0 - 2.4.0-p1
>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.


## Issue
Downloadable product links disappear after updating extension attributes via API.

<ins>Prerequisites</ins>:
Downloadable product with download links.

<ins>Steps to reproduce</ins>:

1. Update extension attributes, using request like this:

```JSON
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
```

<ins>Expected results</ins>:<br>
Product is updated, all download links are not removed.

<ins>Actual results</ins>:<br>
Product updated, but all download links were removed.


## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html)
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html)

## Related reading

To learn more about Quality Patches Tool in our support knowledge base, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492)
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252)

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section in our support knowledge base.
