---
title: 'MDVA-38447: "Not visible individually" configurable child products are returned in GraphQL response and slow MySQL query'
labels: QPT patches,Quality Patches Tool,QPT 1.1.2,Support Tools,Magento Commerce Cloud,Magento Commerce,Adobe Commerce,cloud infrastructure,on-premises,GraphQL,MySQL,B2B,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

The MDVA-38447 Adobe Commerce patch fixes the issue where "Not visible individually" configurable child products are returned in GraphQL response and slow MySQL query for GraphQL products query with category filter. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.2 is installed. The patch ID is MDVA-38447. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

"Not visible individually" configurable child products are returned in GraphQL response and slow MySQL query for GraphQL products query with category filter.

<ins>Prerequisites</ins>:

B2B modules must be installed.

<ins>Steps to reproduce</ins>:

1. Create a configurable product with simple products set to **Not visible individually**.
1. Run a **full reindex**.
1. Run a **GraphQL query** like:

<pre>query getFilteredProducts(
  $filter: ProductAttributeFilterInput!
  $sort: ProductAttributeSortInput!
  $search: String
  $pageSize: Int!
  $currentPage: Int!
) {
  products(
    filter: $filter
    sort: $sort
    search: $search
    pageSize: $pageSize
    currentPage: $currentPage
  ) {
    total_count
    page_info {
      total_pages
      current_page
      page_size
    }
    items {
      name
      sku
    }
  }
}</pre>

Variables:

<pre>{"filter":{"user_group":{"eq":""}},"search":"config-100","sort":{},"pageSize":200,"currentPage":1}
</pre>

<ins>Expected results</ins>:

Products with visibility set to "Not visible individually" won't be returned in response.

<ins>Actual results</ins>:

Products with visiblility set to "Not visible individually" are returned in response.

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about quality patches for Adobe Commerce, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
