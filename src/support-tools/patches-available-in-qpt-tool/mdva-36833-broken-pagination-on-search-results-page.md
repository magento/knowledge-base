---
title: "MDVA-36833: broken pagination on search results page"
labels: 2.4.2,QPT 1.0.22,Magento Commerce Cloud,Quality Patches Tool,catalog,pagination,search,shared catalog,support tools,Adobe Commerce,cloud infrastructure
---

The MDVA-36833 patch fixes the issue where pagination breaks when the shared catalog is enabled and some products were excluded from shared catalog. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.22 is installed. The patch ID is MDVA-36833. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.3.

## Affected products and versions

 **The patch is created for Adobe Commerce version:** Adobe Commerce (all deployment methods) 2.4.2

>![info]
>
 >Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Excluding some products from shared catalog leads to broken pagination for search results.

 <span class="wysiwyg-underline">Steps to reproduce:</span>

1. Enable Shared Catalog.
1. Go to **Catalog** > **Shared Catalogs** and set up the default Shared Catalog by assigning all the products to it.
1. Load the storefront and search for "jacket".
1. Note the products listed on the first page. There should be 12 products.
1. Note down 11 SKUs from the 1st page. Go to backend and load Default Shared Catalog.
1. Un-assign previously noted SKUs from Default Shared Catalog.
1. Go to the storefront and search for "jacket".
1. Check the first page of the search results.

 <span class="wysiwyg-underline">Actual result:</span>

The first page has one product and the rest of the products are available on the second page.

 <span class="wysiwyg-underline">Expected result:</span>

The first page should have 12 products.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.


## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
