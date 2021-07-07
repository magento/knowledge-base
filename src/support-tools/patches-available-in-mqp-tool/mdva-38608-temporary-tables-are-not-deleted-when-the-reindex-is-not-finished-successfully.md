---
title: "MDVA-38608: Temporary tables are not deleted for unsuccessful reindexes"
labels: MQP patches,Magento Quality Patches,MQP,Support Tools,MQP 1.0.26,Magento Commerce Cloud,Magento Commerce,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1
---

The MDVA-38608 Magento patch fixes the issue where temporary tables are not deleted for unsuccessful reindexes. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.26 is installed. The patch ID is MDVA-38608. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.2-p2

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.0-2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

Temporary tables are not deleted when the reindex is not finished successfully.

<ins>Steps to reproduce</ins>:

1. Run reindex.
1. Reindex fails due to some error.

<ins>Expected results</ins>:

Temporary tables are deleted.

<ins>Actual results</ins>:

Temporary tables are NOT deleted.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:


* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).
 
## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
