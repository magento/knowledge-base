---
title: Credit card failed payments in a Sandbox environment
labels: troubleshooting,payment services,Adobe Commerce,Magento,2.4.0,2.4.1,2.4.3,2.4.4,on-premises,cloud infrastructure
---

This article explains why a test credit card fails in a Sandbox environment with PayPal APIs.

## Affected products and versions


* Adobe Commerce 2.4.0 - 2.4.4 , all deployment options, with [Payment Services](https://marketplace.magento.com/magento-payment-services.html)

## Issue

When using a test Visa credit card `4111 1111 1111 1111` from PayPal, sometimes it fails due to PayPal fraud policies with the following error::

```terminal
Error happened when processing the request. Please try again later.
```

## Cause

This error is displayed when PayPal flags a specific test credit card number for fraud. This happens because it is a test credit card number used by everyone around the world testing with PayPal APIs.

## Solution

Use another test credit card. To generate mock credit cards you can use for testing:

1. Go to the PayPal Developer Portal [Credit Card Generator](https://developer.paypal.com/developer/creditCardGenerator/) page.
1. Log in to the PayPal Developer Portal Dashboard.
1. Generate a test credit card.
