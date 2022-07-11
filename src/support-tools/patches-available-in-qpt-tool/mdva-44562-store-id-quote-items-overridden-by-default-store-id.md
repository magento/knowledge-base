---
title: "MDVA-44562: Store id for quote items overridden by default store id"
labels: QPT patches,Quality Patches Tool,Support Tools,QPT 1.1.16,GraphQL,Magento,Adobe Commerce,cloud infrastructure,on-premises,2.4.3,2.4.3-p1,2.4.3-p2,2.4.4
---

The MDVA-44562 patch fixes the issue where the default store id overrides the store id for quote items for GraphQL requests. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.16 is installed. The patch ID is MDVA-44562. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.6.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce (all deployment methods) 2.4.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.4.3 - 2.4.4

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

The store id for quote items is overridden by the default store id for GraphQL requests.

<ins>Steps to reproduce</ins>:

1. Create a new store view.
1. Create a new simple product with different names per store view.
1. Create a new customer.
1. Obtain the customer authorization token.

    <pre>
    <code class="language-graphql">
    POST /rest/all/V1/integration/customer/token
    {
      "username": "test@example.com",
      "password": "password"
    }
    </code>
    </pre>

1. Create a new quote for the customer using the authorization token.

    <pre>
    <code class="language-graphql">
    POST rest/default/V1/carts/mine
    </code>
    </pre>

1. Add a product to the cart.

    <pre>
    <code class="language-graphql">
    POST /rest/default/V1/carts/mine/items
    {
      "cartItem": {
        "sku": "simple1",
        "qty": 1,
        "quote_id": "1"
      }
    }
    </code>
    </pre>

1. Get the cart content for the default store view.

    <pre>
    <code class="language-graphql">
    GET rest/default/V1/carts/mine/
    </code>
    </pre>

1. Get the cart content for the new store view.

    <pre>
    <code class="language-graphql">
    GET rest/<store_view_2>/V1/carts/mine/
    </code>
    </pre>

<ins>Expected results</ins>:

Response from the new store view shows the product name from the new store view.

<ins>Actual results</ins>:

Response from the new store view shows the product name setup under the default store view.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
