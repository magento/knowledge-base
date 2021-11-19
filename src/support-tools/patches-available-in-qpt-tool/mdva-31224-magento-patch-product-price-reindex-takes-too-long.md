---
title: "MDVA-31224 Magento patch: Product price reindex takes too long"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,price,product,reindex,support tools,time
---

The MDVA-31224 patch solves the issue when product price reindex takes too long to complete or never completes. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.7 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.3.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.3 - 2.3.4-p2.

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Product price reindex takes too long to complete or never completes.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Create 6000 bundled products with 15 options.
1. Create 1 bundled product with 30 options.
1. Run price reindex from CLI:     `bin/magento indexer:reindex catalog_product_price`     

 <span class="wysiwyg-underline">Expected results:</span>

Product price reindex takes 1.5 hours or more to complete.

 <span class="wysiwyg-underline">Actual results:</span>

Product price reindex takes a short time (a minute or two) to complete.

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
