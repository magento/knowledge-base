---
title: MDVA-30186: Unsorted attribute options in GraphQL response
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,2.4.2,2.4.2-p1,MQP 1.0.23,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,support tools,products,attribute,GraphQL,unsorted,sorted
---

The MDVA-30186 patch solves the issue where attribute options are not sorted in the GraphQL response. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.23 is installed. The patch ID is MDVA-30186. Please note that the issue is scheduled to be fixed in Magento version 2.4.3.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.4 and 2.4.2
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.4 - 2.3.5-p2, 2.4.0 - 2.4.0-p1, and 2.4.2 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches status`.

## Issue

 <ins>Steps to reproduce</ins>:

1. Add any 3 options to the existing color attribute.
1. Create 6 simple products with options (Example: *Option 1*: 1 product, *Option 2*: 2 products, *Option 3*: 3 products).
1. Create a category and assign all the above products created.
1. Now make the following GraphQL request with your category id:

    <pre><code class="language-graphql">
    {
      products(
        filter: { category_id: { eq: "3" } }
        pageSize: 200
        currentPage: 1
        sort: { name: ASC }
      ) {
        aggregations {
          attribute_code
          count
          label
          options {
            count
            label
            value
          }
        }
        items {
          name
          sku
          url_key
        }
      }
    }
    </code></pre>

1. Now alter the sort order of attribute options from the attribute edit page in the Admin.
1. Make the above GraphQL request again, and observe the color attribute options.


 <ins>Expected results</ins>:

The attribute options are sorted according to the order set from the Admin, as expected.

 <ins>Actual results</ins>:

The attribute options are always sorted according to the associated number of products.


## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html).
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html).

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.
