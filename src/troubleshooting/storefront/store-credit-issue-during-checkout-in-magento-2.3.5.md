---
title: Store credit issue during checkout in Adobe Commerce 2.3.5
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,Order Summary,checkout,credit,known issues,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a workaround for the known store credit-related issue during checkout in Adobe Commerce 2.3.5, where shoppers get errors during checkout after selecting and later removing store credit usage. A permanent fix will be available in Adobe Commerce 2.3.6.

## Affected products and versions

* Adobe Commerce on-premises 2.3.5
* Adobe Commerce on cloud infrastructure 2.3.5

## Issue

<ins>Steps to reproduce</ins>:

1. Customer adds products to the cart and proceeds to checkout.
1. Customer specifies store credit as payment method.
1. Customer removes store credit and changes the payment method.
1. Customer proceeds through checkout.

<ins>Expected results</ins>:

All order information is displayed correctly.

<ins>Actual results</ins>:

Adobe Commerce throws an error on the Order Summary section of the Order page.

## Solution

Customers can refresh the Order page, and the information in the Order Summary will load correctly. A fix will be available in Adobe Commerce 2.3.6, which is scheduled for release in Q4 2020.

## Related reading

Articles for Adobe Commerce 2.3.5 known issues in our support knowledge base:

* [Multi-shipping orders with a virtual product not processed correctly in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360044461831)

* [Country payment method issue in Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.5 and 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360043955991)

* [Adobe Commerce prompts customers to log in but provides invalid link](https://support.magento.com/hc/en-us/articles/360043857372)

* [Bulk action product count known issue in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360044839691)

* [Patch for Amazon Pay checkout issue in Adobe Commerce 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360042646332)

* [Product comparison issue in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360043970452)

In our developer documentation:

* [Adobe Commerce 2.3.5 Known Issues](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues)
