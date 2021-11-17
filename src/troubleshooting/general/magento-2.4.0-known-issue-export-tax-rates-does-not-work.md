---
title: Adobe Commerce 2.4.0 known issue - Export Tax Rates does not work
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,button,export tax rates,known issues,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a solution for an Adobe Commerce 2.4.0 known issue where the **Export Tax Rates** button does not work.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.4.0
* Adobe Commerce on-premises 2.4.0

## Issue

 <ins>Steps to reproduce:</ins>

1. Go to the Commerce Admin Panel > **Stores** > **Tax Rules**.
1. Click the **Add New Tax Rule** button.
1. Click on the text of the **Export Tax Rates** button.

    ![magento_export_tax_rates.png](assets/mceclip0.png)    

 <ins>Expected result</ins>:

 A `tax_rates.csv` file downloads containing tax rates.

 <ins>Actual result</ins>:

 No .csv file is downloaded.

## Solution

Workaround:

Click on the bottom left edge of the **Export Tax Rates** button to export the `tax_rates.csv` file.

![magento_export_tax_rates.png](assets/mceclip1.png)

It is planned that the issue will be resolved in a 2.4.1 patch.

## Related reading

In our support knowledge base:

* [Adobe Commerce 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout](https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout).
* [Shipping labels creation known issue in Adobe Commerce 2.4.0](https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0).
* [Adobe Commerce 2.4.0 known issue - refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work).
* [Adobe Commerce 2.4.0 known issue: raw message data display on storefront](https://support.magento.com/hc/en-us/articles/360045804332).
* [Adobe Commerce 2.4.0 known issue: “Add selections to my cart” button does not work](https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work).
