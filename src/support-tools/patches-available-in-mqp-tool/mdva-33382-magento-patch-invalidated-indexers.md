---
title: "MDVA-33382 Magento patch: invalidated indexers"
labels: 2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.4.0,2.4.0-p1,2.4.1,QPT 1.0.14,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,catalog_category_product,catalogsearch_fulltext,category,invalidated indexer,products
---

The MDVA-33382 Magento patch solves the issue when indexers are invalidated after adding, removing, or reordering products in a category. The indexers that are invalidated are `catalog_category_product` , `catalogsearch_fulltext` (and their dependents).

This patch is available when the [Quality Patches Tool (QPT) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.14 is installed. Please note that the issue will be fixed in Magento version 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce Cloud 2.3.4-p2

 **Compatible with Magento versions:** Magento Commerce Cloud and Magento Commerce 2.3.0 - 2.4.1

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Set all indices indexer modes to **Update on schedule** .
1. Remove a product from a category edit page.
1. Save the category.
1. Verify indices status either in backend or in CLI.

 <span class="wysiwyg-underline">Expected results:</span> 

The following indices are not invalidated: `catalog_category_product` , `catalogsearch_fulltext` (and their dependents), as expected.

 <span class="wysiwyg-underline">Actual results:</span> 

The following indices are invalidated: `catalog_category_product` , `catalogsearch_fulltext` (and their dependents).

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check patch for Magento issue with Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.