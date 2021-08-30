---
title: "MDVA-36833: broken pagination on search results page"
labels: 2.4.2,QPT 1.0.22,Magento Commerce Cloud,Quality Patches Tool,catalog,pagination,search,shared catalog,support tools
---

The MDVA-36833 Magento patch fixes the issue where pagination breaks when the shared catalogue is enabled and some products were excluded from shared catalog. This patch is available when the [Quality Patches Tool (QPT) tool](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-36833. Please note that the issue is scheduled to be fixed in Magento 2.4.3.

## Affected products and versions

 **The patch is created for Magento version:** Magento Commerce and Commerce Cloud 2.4.2

>![info]
>
>Note: the patch might become applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status` .

## Issue

Excluding some products from shared catalog leads to broken pagination for search results.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Enable Shared Catalog.
1. Go to **Catalog** > **Shared Catalogs** and setup the default Shared Catalog by assigning all the products to it.
1. Load the store front and search for "jacket".
1. Note the products listed on the first page. There should be 12 products.
1. Note down 11 SKUs from the 1st page. Go to backend and load Default Shared Catalog.
1. Un-assign previously noted SKUs from Default Shared Catalog.
1. Go to the store front and search for "jacket".
1. Check the first page of the search results.

 <span class="wysiwyg-underline">Actual result:</span> 

The first page has one product and the rest of the products are available on the second page.

 <span class="wysiwyg-underline">Expected result:</span> 

The first page should have 12 products.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.