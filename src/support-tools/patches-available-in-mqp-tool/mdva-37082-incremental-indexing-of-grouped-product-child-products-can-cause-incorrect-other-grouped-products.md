---
title: "MDVA-37082: partial index of stock status for grouped products is wrong for custom stock"
labels:
---

The MDVA-37082 Magento patch fixes the issue where the partial index of the stock status for grouped products is wrong for custom stocks.
This patch is available when the Magento Quality Patch (MQP) tool 1.0.25 is installed. The patch ID is MDVA-37082. Please note that the issue was is scheduled to be fixed in Magento 2.4.4.


## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.4-p2
**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.0-2.4.2-p1
>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue
Incremental indexing of grouped product child products can cause incorrect other grouped products to be incorrectly indexed when children are shared.

<ins>Steps to reproduce</ins>:

1. Create new stock and source for the main website.
1. Create 3 simple products with qty 10,15 and 0.
1. Create 2 grouped products and assing first simple product with qty 10 to one and other 2 simple products to the other.
1. Confirm that both grouped products can be accessible from the frontend, in stock.
1. Assign the simple product with qty 0 to the first grouped product's Up-Sell Products
1. Clean the FPC and check the 2nd GP from the frontend
1. Run a full reindex
1. Check the 2nd GP from the frontend
1. Save the 1st GP
1. Clean FPC and check the 2nd GP from the frontend

<ins>Expected results</ins>:
***GP shouldn't go OOS after saving another GP with Up-sell.
The issue resolves after a full reindex.***
<ins>Actual results</ins>:
***When you save the 1st GP the 2nd GP goes OOS.***

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
