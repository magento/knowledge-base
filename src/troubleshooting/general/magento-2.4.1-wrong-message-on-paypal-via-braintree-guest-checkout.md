---
title: "Adobe Commerce 2.4.1: wrong message on PayPal-Braintree guest checkout"
labels: 2.4.0,2.4.1,Braintree,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,PayPal,cart,guest checkout,known issues,Adobe Commerce,cloud infrastructure,on-premises
---

This article describes a known Adobe Commerce 2.4.1 issue where if guest checkout is disabled, a guest customer trying to place an order with PayPal through Braintree gets a non-informative error message.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0, 2.4.1
* Adobe Commerce on cloud infrastructure 2.4.0, 2.4.1

## Issue

An unspecific error is shown when guest checkout is disabled from the backend, and the PayPal through Braintree payment option is selected from the Mini-cart or Shopping Cart.

<ins>Prerequisites</ins>:

1. In the Commerce Admin, under **Stores** > **Configuration** > **Sales** > **Checkout**, set **Allow Guest Checkout** = *No*.
1. Enable PayPal through Braintree as described in the [Braintree](https://docs.magento.com/user-guide/payment/braintree.html?) in our user guide.

<ins>Steps to reproduce</ins>:

1. Add product to cart as a guest.
1. Select **Mini-cart** and click **Pay with PayPal**.
1. Complete the Paypal checkout, and then you will land on the Order Review page.
1. Select **Shipping Method**.
1. Click **Place Order**.

<ins>Expected results</ins>:

When a customer clicks on the PayPal button on the Mini-cart or Shopping Cart page, the following message should be displayed to the customer:

<pre><code class="language-bash">To check out, please sign in with your email address.</code></pre>

If you enable direct Paypal without using Braintree, this scenario behaves differently. It doesn't allow the guest user to continue with the payment process. It will show the following message when the guest user clicks on the PayPal button in the Mini-cart:

<pre><code class="language-bash">To check out, please sign in with your email address.</code></pre>

<ins>Actual results</ins>:

The customer is redirected to the Shopping Cart page, and the following message is displayed:

<pre><code class="language-bash">The customer email is missing. Enter and try again.</code></pre>

## Workaround

The workaround for this issue is that the customer can log in at a store (Logged-in users do not use guest checkout.) where guest checkout is disabled. This issue was fixed in Adobe Commerce version 2.4.2.

## Related reading

* [Best practice for number of products in cart in Adobe Commerce](https://support.magento.com/hc/en-us/articles/360048550332) in our support knowledge base.
* [Order processing tutorial: Step 1. Add items to the cart](https://devdocs.magento.com/guides/v2.4/rest/tutorials/orders/order-add-items.html) in our developer documentation
* [GraphQL checkout tutorial: Step 1. Add products to the cart](https://devdocs.magento.com/guides/v2.4/graphql/tutorials/checkout/checkout-add-product-to-cart.html) in our developer documentation
