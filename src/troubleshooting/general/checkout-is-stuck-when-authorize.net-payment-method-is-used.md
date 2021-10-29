---
title: Checkout is stuck when Authorize.net payment method is used
labels: 2.3.x,Authorize.net,Magento Commerce,checkout,troubleshooting,Adobe Commerce
---

This article provides an explanation and fix for the Adobe Commerce 2.3.X issue where the checkout gets stuck if Authorize.net is used, with the *'Cannot read property 'length' of null'* error message in the browser console log.

## Affected products and versions

* Adobe Commerce 2.3.X

>![info]
>
>The core Adobe Commerce Authorize.Net payment integration is deprecated since 2.3.4 and will be completely removed in 2.4.0. Use the [official extension](https://marketplace.magento.com/authorizenet-magento-module-authorizenet.html) from marketplace instead.

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. Configure the Authorize.net payment method in the Commerce Admin.
1. Go to the storefront.
1. Add a product to the cart and proceed to checkout.
1. Choose Authorize.net as a payment method.
1. Click **Place Order**.

 <span class="wysiwyg-underline">Expected result</span>

The Authorize.net iframe is loaded.

 <span class="wysiwyg-underline">Actual result</span>

Ajax spinner is displayed, and the page never loads. The following JS error is displayed in the browser console log: *'Uncaught TypeError: Cannot read property 'length' of null at b (jstest.authorize.net/v1/AcceptCore.js:1)'*

## Cause

One of the most common reasons for this issue is the Public Client Key not being specified in the Authorize.Net configuration in the Commerce Admin.

## Solution

Under **Stores** > **Settings** > **Configuration** > **Sales** > **Payment Methods**, in the **Authorize.net** section, check if the value is specified in the **Public Client Key** field. If it is empty, enter the key value from your Authorize.Net merchant account.

For the changes to be applied, clean the cache by running

```bash
bin/magento cache:clean
```
