---
title: "Adobe Commerce 2.3.5 known issue: virtual product multi-ship orders"
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,address,known issues,multishipping,order,product,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article explains a known issue in Adobe Commerce 2.3.5 where a multi-shipping order containing a virtual product is not processed correctly.

## Affected products and versions

* Adobe Commerce on-premises 2.3.5
* Adobe Commerce on cloud infrastructure 2.3.5

## Issue

<ins>Steps to reproduce</ins>:

1. On the storefront, add physical and virtual products to the cart.
1. Proceed to checkout and select **Check Out with Multiple Addresses**.
1. Add all the required information and place the order.

<ins>Expected result</ins>:

Orders are placed for all products successfully.

<ins>Actual result</ins>:

The order for the virtual product is empty.

## Fix

A fix will be available in Adobe Commerce 2.3.6, which is scheduled for release in Q4 2020.

## Related reading

In our support knowledge base:

* [Product comparison known issue in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360043970452)
* [Bulk action product count known issue in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360044839691)
* [Country payment method issue in Adobe Commerce 2.3.5 and 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360043955991)
* [Adobe Commerce prompts customers to log in but provides invalid link](https://support.magento.com/hc/en-us/articles/360043857372)
* [Patch for Amazon Pay checkout issue in Adobe Commerce 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360042646332)

In our developer documentation:

* [Adobe Commerce 2.3.5 Release Notes](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues)
