---
title: "MDVA-37082: Incorrect partial index of stock status for grouped products"
labels: QPT Patches,Quality Patches Tool,support tools,QPT 1.0.25,Magento Commerce Cloud,Magento Commerce,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1, 2.4.2,2.4.2-p1
---

The MDVA-37082 Magento patch fixes the issue when the partial index of stock status for grouped products is wrong for custom stocks. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.25 is installed. The patch ID is MDVA-37082. Please note that the issue is scheduled to be fixed in Magento 2.4.4.


## Affected products and versions

**The patch is created for Adobe Commerce version:**
Adobe Commerce on cloud infrastructure 2.3.4-p2

**Compatible with Adobe Commerce versions:**
Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.0-2.4.2-p1
>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue
Incremental indexing of grouped product child products can cause incorrect other grouped products to be incorrectly indexed when children are shared.

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

To apply individual patches use the following links to our developer documentation, depending on your Adobe Commerce deployment method:

* Adobe Commerce on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
