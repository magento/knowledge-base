---
title: "MDVA-37082: Incorrect partial index of stock status for grouped products"
labels: MQP Patches,Magento Quality Patches,support tools,MQP 1.0.25,Magento Commerce Cloud,Magento Commerce,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1, 2.4.2,2.4.2-p1
---

The MDVA-37082 Magento patch fixes the issue when the partial index of the stock status for grouped product is wrong for custom stocks. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-37082. Please note that the issue is scheduled to be fixed in Magento 2.4.4.


## Affected products and versions

**The patch is created for Magento version:**
Magento Commerce Cloud 2.3.4-p2

**Compatible with Magento versions:**
Magento Commerce and Magneto Commerce Cloud 2.3.0-2.4.2-p1
>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue
Incremental indexing of a grouped product child products can cause incorrect other grouped products to be incorrectly indexed when children are shared.

<ins>Steps to reproduce</ins>:

* Create a new stock and source for the main website.
* Create 3 simple products with qty 10,15 and 0.
* Create 2 grouped products and assing first simple product with qty 10 to one and other 2 simple products to the other.
* Confirm that both grouped products can be accessible from the frontend, in stock.
* Assign the simple product with qty 0 to the first grouped product's Up-Sell Products.
* Clean the Full-Page Cache and check the 2nd Grouped Product from the frontend.
* Run a full re-index.
* Check the 2nd Grouped Product from the frontend.
* Save the 1st Grouped Product.
* Clean Full-Page Cache and check the 2nd Grouped Product from the frontend.

<ins>Expected results</ins>:

Grouped Product is not out of stock after saving another Grouped Product with Up-sell. The issue is resolved after a full re-index.

<ins>Actual results</ins>:  

The 2nd Grouped Product goes out of stock when you save the 1st Grouped Product.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
