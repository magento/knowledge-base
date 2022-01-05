---
title: "Adobe Commerce 2.4.1 issue: unable to change Amazon account in Chrome"
labels: 2.4.1,Amazon Pay,Javascript,Magento Commerce,Magento Commerce Cloud,browser,cookies,known issues,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article describes a known Adobe Commerce 2.4.1 issue where customers get signed in to the previously used Amazon accounts instead of being suggested to log in, when using Amazon Pay during checkout.

## Affected products and versions

* Adobe Commerce on-premises 2.4.1
* Adobe Commerce on cloud infrastructure 2.4.1

## Issue

Customers get signed in to the previously used Amazon accounts instead of being suggested to log in, when using Amazon Pay during checkout.

<span class="wysiwyg-underline">Steps to reproduce:</span>

1. On storefront, add any item to the shopping cart and proceed to guest checkout.
1. Click the **Amazon Pay** button. Amazon.com sign in pop-up appears.
1. Log in to the Amazon account.
1. Select an address and click **Next**.
1. Select the payment method.
1. Click **Place order**.
1. Go back to the home page and log in to the store account.
1. Add any item to the shopping cart again and proceed to checkout.
1. Click the **Amazon Pay** button.

<span class="wysiwyg-underline">Actual result:</span>

You get automatically logged into the previously used (Step 3) Amazon account again.

<span class="wysiwyg-underline">Expected result:</span>

Amazon.com sign in pop-up appears and you can log in or create a new account for Amazon Pay.

## Cause

The issue might happen in one of the following situations:

* When the `SameSite` cookie value is `LAX`, the cookie will not be sent as part of any third-party calls.
* Mozilla Firefox content blocking feature prevents third-parties from tracking browser users’ activities by blocking usage of scripts and client-side storage mechanisms. Firefox uses an external vendor, Disconnect.me to provide a list of tracking sites to be blocked. Amazon Pay uses an iframe on a third-party website to return an access token after sign-in and render Address and wallet widget. With the content blocking feature, Amazon Pay iframe load requests are considered as third-party tracking requests and get blocked, resulting in the buyer not being able to proceed with checkout.
* Any situation where third-party cookies or JS are being explicitly blocked by the browser.

## Solution

Make sure Amazon Pay iframe requests are not blocked by browsers.
