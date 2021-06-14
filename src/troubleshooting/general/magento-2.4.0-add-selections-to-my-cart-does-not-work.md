---
title: "Magento 2.4.0: “Add selections to my cart” does not work"
labels: "2.4.0,Magento Commerce,Magento Commerce Cloud,button,known issues,product,“Add selections to my cart”"
---

This article provides a workaround for a broken button known issue in Magento Admin when managing a customer's shopping cart. When trying to add selected products to a customer's shopping cart, the Add selections to my cart button located on the bottom of the section does not work. This issue occurs on any Admin panel page that contains two Add selections to my cart buttons. A permanent fix will be available in Magento 2.4.1. \#\# Affected products and versions

* Magento Commerce version 2.4.0
* Magento Commerce Cloud version 2.4.0

## Issue

Steps to reproduce

1. Navigate to any Admin panel page that contains two Add selections to my cart buttons.
1. Select items to add to my cart.
1. Click the Add selections to my cart button located on the bottom of the section.

Expected result

All selections are added to my cart as expected.

Actual result

Magento does not add your selections to my cart.

## Solution

The Add selections to my cart button located on the top of the page is still working. The issue is expected to be fixed in Magento version 2.4.1, which is scheduled for release in Q4 1. \#\# Related reading

* [MerchDocs' Managing a Shopping Cart](https://docs.magento.com/user-guide/sales/shopping-assisted-cart-manage.html)
* [Magento 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Magento 2.4.0 known issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992)

