---
title: "MDVA-30565: session cache local storage and checkout issue"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,QPT 1.0.6,Magento Commerce,Magento Commerce Cloud,cookie,estimate shipping method,guest checkout,local storage,session cache,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30565 patch solves the issue with session cache local storage and checkout. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.0.6 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.3-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.2 - 2.3.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Cart items can still be seen on the cart page when a customer session times out. This causes an estimate shipping method error where no shipping methods are available for guest checkout.

<ins>Steps to reproduce</ins>:

1. Enable persistent shopping cart in the Commerce Admin. (**Enable Persistence** = "*Yes*")
1. Log in as a customer in the frontend. This creates the `persistent_shopping_cart` cookie and initiates a persistent session.
1. Add a product into the cart.
1. Wait until the frontend session gets timed out, or delete the `PHPSESSID` cookie.
1. Now you are a guest user, but if you go to the cart, you can still see the product that was added as a logged-in customer.
1. Remove the product from the cart, and now the cart is empty. You can see Adobe Commerce deletes the `persistent_shopping_cart` cookie in this event.
1. Add a new product into the cart, and go to the cart page.
1. Now in the browser console it shows `V1/guest-carts/4/estimate-shipping-methods` request now returns a 404 response with message `{"message":"No such entity        with %fieldName = %fieldValue","parameters":{"fieldName":"cartId","fieldValue":0}}`

<ins>Expected results</ins>:

The estimate shipping method request returns correct results.

<ins>Actual results</ins>:

The estimate shipping method request fails with an error like, "*Sorry, no quotes are available for this order at this time.*"

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
