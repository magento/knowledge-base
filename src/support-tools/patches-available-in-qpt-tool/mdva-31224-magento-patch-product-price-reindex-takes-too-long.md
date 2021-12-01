---
title: "MDVA-31224 patch: Product price reindex takes too long"
labels: 2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,QPT 1.0.7,QPT patches,Magento Commerce,Magento Commerce Cloud,price,product,reindex,support tools,time,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-31224 patch solves the issue when product price reindex takes too long to complete or never completes. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.7 is installed.

## Affected products and versions

* The patch was designed for Adobe Commerce on cloud infrastructure 2.3.3.
* The patch is also compatible with Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure 2.3.3 - 2.3.4-p2.

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

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
