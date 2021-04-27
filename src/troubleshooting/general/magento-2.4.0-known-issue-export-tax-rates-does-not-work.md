---
title: Magento 2.4.0 known issue - Export Tax Rates does not work 
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,button,export tax rates,known issues,troubleshooting
---

This article provides a solution for a Magento 2.4.0 known issue where the Export Tax Rates button does not work. 

## Affected products and versions

* Magento Commerce Cloud 2.4.0 
* Magento Commerce 2.4.0

## Issue

 Steps to reproduce:

1. Go to Magento Admin Panel > Stores > Tax Rules.
1. Click the Add New Tax Rule button.
1. Click on the text of the Export Tax Rates button.  
     ![magento_export_tax_rates.png](https://support.magento.com/hc/article_attachments/360061961892/mceclip0.png)

Expected result:  
 A `` tax_rates.csv `` file downloads containing tax rates.

Actual result:  
 No .csv file is downloaded.

## Solution

Workaround:

Click on the bottom left edge of the Export Tax Rates button to export the `` tax_rates.csv `` file.  
 ![magento_export_tax_rates.png](https://support.magento.com/hc/article_attachments/360062108811/mceclip1.png)

It is planned that the issue will be resolved in a 2.4.1 patch.

## Related reading

<ul><li>KB <a href="https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a>
</li><li>KB <a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a>
</li><li>KB <a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a>
</li><li>KB <a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a>
</li><li>KB <a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a>
<div> </div>
</li></ul>