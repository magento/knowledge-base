---
title: Magento 2.4.0: 404 error removing rewards points on multi-shipping checkout
labels: 2.4.0,404 error,Magento Commerce,Magento Commerce Cloud,checkout,known issues,multishipping,rewards points,shopping cart
---

This article provides a workaround for a known issue in Magento 2.4.0 for a "_404 Not Found_" web page error when removing rewards points on a multi-shipping checkout page. Currently, on the multi-shipping checkout page, when trying to remove reward points which were used to pay for an order,  a "_404 Not Found_" page is displayed instead of successful reward points cancellation. This issue will be resolved in with a Magento 2.4.1 patch release.

## Affected products and versions

* Magento Commerce version 2.4.0
* Magento Commerce Cloud version 2.4.0

## Issue

Steps to reproduce

1. Navigate to the storefront and login as a customer. 
1. Add at least 2 products to the Shopping Cart. 
1. Open the Mini-Cart.
1. Click the View and Edit Cart link.
1. Click the Check Out with Multiple Addresses link.
1. Select shipping addresses on the Ship to Multiple Addresses page.
1. Click the Go to Shipping Information button. 
1. Select the Flat Rate — Fixed Shipping Method for each address.
1. Click the Continue to Billing Information button.
1. Check the Use Your Reward Points checkbox on the Billing Information page.
1. Click the Go to Review Your Order button.
1. Click the Remove link for any address to remove the reward points.

Expected results

* The Shopping Cart page should appear.
* The “_You removed the reward points from this order._” message should appear.

Actual result

A "_404 Not Found_” error page appears.

## Workaround

The workaround is to have the buyer navigate back to the Cart and remove the reward points from the Cart web page. The issue is expected to be fixed in the Magento version 2.4.1 patch, which is scheduled for release in Q4 1. ## Related reading

* [Magento 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332)
* [Magento 2.4.0 Known Issue: Raw message data display on Storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Magento 2.4.0 Known Issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Magento 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971)
* [Magento 2.4.0 known issue: Orders display error](https://support.magento.com/hc/en-us/articles/360046802271)