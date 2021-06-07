---
title: MDVA-34330: Orders are not filtered according to admin timezone
labels: MQP patches, Magento Quality Patches,
---

The MDVA-34330 Magento patch solves the issue where orders are not filtered according to admin timezone. This patch is available when the Magento Quality Patch (MQP) tool 1.0.24 is installed. The patch ID is MDVA-34330. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

**The patch is created for Magento version:**

Magento Commerce Cloud 2.4.1

**Compatible with Magento versions:**

Magento Commerce and Magneto Commerce Cloud 2.3.1 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

Orders not filtered according to admin timezone.

<ins>Steps to reproduce</ins>:

1. Go to **Stores** > Setting > **Configuration** > **General** and set the **Timezone** to *Eastern Standard Time (America/New_York)*
1. Place a new order after 00:00 UTC
1. Go to Sales > Orders and filter by today's date


<ins>Expected results</ins>:

Order placed today after 00:00 UTC should be visible in filtered results.

<ins>Actual results</ins>:

The order is missing in filtered results.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
