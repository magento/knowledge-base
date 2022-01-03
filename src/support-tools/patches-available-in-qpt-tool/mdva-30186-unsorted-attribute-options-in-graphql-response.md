---
title: "MDVA-30186: Unsorted attribute options in GraphQL response"
labels: 2.3.4,2.3.4-p1,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.4.0,2.4.0-p1,2.4.2,2.4.2-p1,QPT 1.0.23,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,support tools,products,attribute,GraphQL,unsorted,sorted,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30186 patch solves the issue where attribute options are not sorted in the GraphQL response. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.23 is installed. The patch ID is MDVA-30186. Please note that the issue was fixed in Adobe Commerce 2.4.3.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.4 and 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.4 - 2.3.5-p2, 2.4.0 - 2.4.0-p1, and 2.4.2 - 2.4.2-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

<ins>Steps to reproduce</ins>:

1. Add any three options to the existing color attribute.
1. Create six simple products with options (Example: *Option 1*: 1 product, *Option 2*: 2 products, *Option 3*: 3 products).
1. Create a category and assign all the products created above.
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

The attribute options are sorted according to the order set from the Admin.

<ins>Actual results</ins>:

The attribute options are always sorted according to the associated number of products.


## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
