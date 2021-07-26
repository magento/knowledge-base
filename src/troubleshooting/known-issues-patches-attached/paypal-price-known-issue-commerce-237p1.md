---
title: "Adobe Commerce 2.3.7-p1 known issue: outdated order total for PayPal"
labels: troubleshooting,known issue,paypal,2.3.7-p1,order,Adobe Commerce
---

This article provides a patch for a known issue in Adobe Commerce 2.3.7-p1: when using PayPal Checkout more than once customers get the previously ordered product in cart, instead of the new one they are trying to order.
You can download the patch from this article and it is also available through the Magento Quality Patches (MQP) tool.

## Affected versions

* Adobe Commerce (all deployment options) 2.3.7-p1
* Magento Open Source 2.3.7-p1

## Issue
When placing an order by using PayPal Express Checkout payment method, then previously ordered purchased product is added into the order instead of the of the actual one.

<ins>Steps to reproduce:<ins>

1. On the store front, add any product to the cart (product A, price $50).
1. Click the cart link to open the cart.
1. Click the **PayPal Checkout** button.
1. Use you PayPal credentials to login to PayPal and submit the payment.
1. Finish order placement on the store side.
1. Go back to the catalog and a add different product (product B, price $100) to the cart.
1. Click the cart link to open the cart.
1. Click the **PayPal Checkout** button.

<ins>Actual result:</ins>
Product price in the cart is $50 instead of $100.
On the store side, the order contains product A instead of the product B.

<ins>Expected result:</ins>
Product B is added to the order.

## Solution

Apply the patch provided in this article.

## Patch

Use the following link to download a .zip file containing the patch: [MC42674-composer.patch.zip](assets/MC42674-composer.patch.zip).

### Compatible Adobe Commerce versions

* Adobe Commerce (all deployment options) 2.3.7-p1

## How to apply the patches

1. Unzip the downloaded .zip file.
1. See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for further instructions.
