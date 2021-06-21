---
title: "MDVA-30565 Magento patch: session cache local storage and checkout issue"
labels: 2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,MQP 1.0.6,Magento Commerce,Magento Commerce Cloud,cookie,estimate shipping method,guest checkout,local storage,session cache,support tools
---

The MDVA-30565 patch solves the issue with session cache local storage and checkout. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.6 is installed.

## Affected products and versions

* The patch was designed for Magento Commerce Cloud 2.3.3-p1.
* The patch is also compatible with Magento Commerce and Magento Commerce Cloud 2.3.2 - 2.3.3-p1.

>![info]
>
>Note: the patch might become applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

When a customer session times out, cart items still can be seen on the cart page. This causes an estimate shipping method error where no shipping methods are available for guest checkout.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Enable persistent shopping cart in Magento Admin. ( **Enable Persistence** = " *Yes* ")
1. Log in as a customer in the frontend. This creates the `persistent_shopping_cart` cookie and initiates a persistent session.
1. Add a product into the cart.
1. Wait until the frontend session gets timed out, or delete the `PHPSESSID` cookie.
1. Now you are a guest user, but if you go to the cart, you can still see the product that was added as a logged-in customer.
1. Remove the product from the cart, and now the cart is empty. You can see Magento deletes the `persistent_shopping_cart` cookie in this event.
1. Add a new product into the cart, and go to the cart page.
1. Now in the browser console it shows `V1/guest-carts/4/estimate-shipping-methods` request now returns a 404 response with message `{"message":"No such entity        with %fieldName = %fieldValue","parameters":{"fieldName":"cartId","fieldValue":0}}` 

 <span class="wysiwyg-underline">Expected result:</span> 

The estimate shipping method request returns correct results as expected.

 <span class="wysiwyg-underline">Actual result:</span> 

The estimate shipping method request fails with an error like, " *Sorry, no quotes are available for this order at this time.* "

## Apply the patch

To apply individual patches use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in MQP tool, refer to the [Patches available in MQP tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-) section.