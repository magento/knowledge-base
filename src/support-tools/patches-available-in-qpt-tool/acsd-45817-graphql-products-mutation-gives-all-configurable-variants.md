---
title: "ACSD-45817: GraphQL products mutation gives all configurable variants"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.18,configurable product,GraphQL query,Internal Server error,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.3-p2,2.4.3-p3
---

The ACSD-45817 patch fixes the issue where a GraphQL `products` mutation for a specific store returns all configurable variants, including those not assigned to the requested store. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.18 is installed. The patch ID is ACSD-45817. Please note that the issue was fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.3-p3

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

A GraphQL `products` mutation for a specific store returns all configurable variants, including those not assigned to the requested store.

<ins>Prerequisites</ins>:

Create a 2nd website, 2nd store, and a 2nd store view.

<ins>Steps to reproduce</ins>:

1. Create a configurable product with two subproducts: "configurable-a" and "configurable-b".
1. Assign the configurable product to both websites.
1. Assign only one "configurable-a" variation to the 2nd website.
1. Go to the **Storefront**, switch to the 2nd website, and open the configurable product.
1. Make sure you see only one child option: "configurable-a".
1. Run a GraphQL query using `POST: /graphql` endpoint, and `Headers: "store" = "new"`
    ```GraphQL
    {
      products(filter: { sku: { eq: "configurable" } }) {
        items {
          id
          attribute_set_id
          name
          sku
          __typename
          price_range{
            minimum_price{
              regular_price{
                value
                currency
              }
            }
          }
          categories {
            id
          }
          ... on ConfigurableProduct {
            configurable_options {
              id
              attribute_id_v2
              label
              position
              use_default
              attribute_code
              values {
                value_index
                label
              }
              product_id
            }
            variants {
              product {
                id
                name
                sku
                attribute_set_id
                ... on PhysicalProductInterface {
                  weight
                }
                price_range{
                  minimum_price{
                    regular_price{
                      value
                      currency
                    }
                  }
                }
              }
              attributes {
                uid
                label
                code
                value_index
              }
            }
          }
        }
      }
    }
    ```

<ins>Expected results</ins>:

The "configurable-b" variation is not assigned to the 2nd website and should not be displayed in the response.

<ins>Actual results</ins>:

The "configurable-b" variation is displayed in the response.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
