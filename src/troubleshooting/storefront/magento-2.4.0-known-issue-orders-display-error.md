---
title: "Adobe Commerce 2.4.0 known issue: orders display error"
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,display,error,known issues,orders,Adobe Commerce,on-premises,cloud infrastructure
---

This article provides a workaround for a known issue in Adobe Commerce for an orders display error. When logged-in customers review their orders in the **My Account** menu (**My Account > My Orders**), the orders grid is unable to switch the number of orders per page to 20 from page 2 when there are 11 orders. Also, if there are more orders than is configured to be shown per page, when navigating to the last page with orders, changing the number of orders shown per page produces the error message: *You have placed no orders*. This issue will be resolved in Adobe Commerce 2.4.1.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

## Issue

<span class="wysiwyg-underline">Prerequisites</span>

* Adobe Commerce 2.4.0 is installed.
* Create at least one category and one simple product.

<span class="wysiwyg-underline">Steps to reproduce</span>

1. Create 11 orders with products.
1. Go to **My Account**.
1. Go to **My Orders**.
1. Click the second page to display the 11th order on the orders grid.
1. Select **Show = 20 per page** from the drop-down menu.

<span class="wysiwyg-underline">Expected result</span>

All 11 orders are displayed on the first page, as expected.

<span class="wysiwyg-underline">Actual result</span>

The *You have placed no orders* error message is displayed.

## Workaround

The workaround is to have the buyer reopen **My Orders** page, and then the orders list will be displayed correctly. The issue will be fixed in the next release, Adobe Commerce 2.4.1, which is scheduled for release in Q4 2020.

## Related readings in our support knowledge base

* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332)
* [Adobe Commerce 2.4.0 Known Issue: Raw message data display on Storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 Known Issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote](https://support.magento.com/hc/en-us/articles/360046801971)
