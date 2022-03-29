---
title: Credit card failed payments in a Sandbox environment
labels: troubleshooting,payment services,adobe commerce,magento,2.4.4
---

This article explains why a test credit card fails in a Sandbox environment with PayPal APIs.

## Affected products and versions

* [Payment Services](https://marketplace.magento.com/magento-payment-services.html) is now compatible with Adobe Commerce versions 2.4.0 to 2.4.4.

## Issue

When using test visa credit card `4111 1111 1111 1111` from PayPal, sometimes it fails:

```terminal
Error happened when processing the request. Please try again later.
```

## Cause

When PayPal flags a specific test credit card number for fraud triggers that error. This happens because it is a test credit card number used by everyone around the world testing with PayPal APIs.

## Solution

Use another test credit card, you can get them from online generators like:

* [Prepostseo](https://www.prepostseo.com/tool/credit-card-generator) 

You can use any expiration date and CVV code with the credit card number that you generate.
