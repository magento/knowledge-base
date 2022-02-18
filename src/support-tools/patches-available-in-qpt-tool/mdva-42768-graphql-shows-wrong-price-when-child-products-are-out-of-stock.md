---
title: "MDVA-42768: GraphQL shows wrong price when child products are out of stock"
labels: QPT patches,Quality Patches Tool,Support Tools,Magento,Adobe Commerce,cloud infrastructure,on-premises,QPT,GraphQL,child products,Out of Stock,configurable product,price,setting,1.1.10,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1
---

The MDVA-42768 patch fixes the issue where GraphQL shows the wrong price when the child products a configurable product are out of stock. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.10 is installed. The patch ID is MDVA-42768. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.5.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.4 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

When the child products of a configurable product are out of stock and the Display Out of Stock Products setting is enabled, GraphQL query shows the regular price of the product as **0**.

<ins>Prerequisites</ins>:

Sample data is installed.

<ins>Steps to reproduce</ins>:

1. Enable the Display Out of Stock product setting in the Commerce Admin by going to **Stores** > **Configuration** > **Catalog** > **Inventory**.
1. Create a configurable product and assign a simple child product to it.
1. Set the inventory of the variant (simple) product to **Out of Stock**.
1. Reindex.
1. Execute the below GraphQL query:
    ```GraphQL
    query {
      products(filter: { sku: { eq: "MH01" } }) {
        items {
          sku
          price_range {
            minimum_price {
              regular_price {
                value
                currency
              }
              final_price {
                value
                currency
              }
              discount {
                amount_off
                percent_off
              }
            }
            maximum_price {
              regular_price {
                value
                currency
              }
              final_price {
                value
                currency
              }
              discount {
                amount_off
                percent_off
              }
            }
          }
        }
      }
    }
    ```
1. Check the response section `minimum_price` > `regular price`.

<ins>Expected results</ins>:

The minimum regular price is not displayed as 0 in response.

<ins>Actual results</ins>:

The minimum regular price = 0 in response.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
