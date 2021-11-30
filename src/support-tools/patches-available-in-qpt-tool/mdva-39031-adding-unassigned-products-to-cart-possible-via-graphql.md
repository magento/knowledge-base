---
title: "MDVA-39031: Adding unassigned products to cart possible via GraphQL"
labels: 2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,QPT 1.1.6,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Support Tools,GraphQL,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-39031 patch solves the issue where adding a product to the cart via GraphQL is possible even if it is not assigned to the target website. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.6 is installed. The patch ID is MDVA-39031. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.2 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Adding a product to the cart via GraphQL is possible even if it is not assigned to the target website.

<ins>Steps to reproduce</ins>:

1. Create a secondary website.
1. Create a product and assign it to the primary website.
1. Create an empty cart for the secondary website using GraphQL.

    <pre>
    <code class="language-graphql">
    mutation{
     createEmptyCart
    }
    </code>
    </pre>

    With headers like:

    <pre>
    <code class="language-graphql">
    {
      "Store":"en_au"
    }
    </code>
    </pre>

1. Add the product assigned to the primary website to the cart in secondary website.

    <pre>
    <code class="language-graphql">
    mutation {
      addProductsToCart(
          cartId: "XHrUN2nJ37OqDByhtL0VC8OxYsEZs41c"
          cartItems: [
            {
              quantity: 1
              sku: "p1"
            }
          ]
        ) {
          cart {
           items {
            product {
              name
              sku
            }
            quantity
          }
        }
      }
    }
    </code>
    </pre>

    Headers

    <pre>
    <code class="language-graphql">
    {
      "Store":"en_au"
    }
    </code>
    </pre>

<ins>Expected results</ins>:

The product is not added to the cart because it was not assigned to the store defined in the header.

<ins>Actual results</ins>:

The product gets added to the cart successfully.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
