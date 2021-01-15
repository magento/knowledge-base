---
title: Magento 2.4.1 known issue: error popping up on Checkout with PayPal Braintree  
link: https://support.magento.com/hc/en-us/articles/360050253211-Magento-2-4-1-known-issue-error-popping-up-on-Checkout-with-PayPal-Braintree-
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,2.4.1,PayPal Braintree
---

This article describes a known Magento 2.4.1 issue, where an error message pops-up and disappears on the Billing step of Checkout, if PayPal Braintree payment is used and multiple addresses shipment selected. 

 Affected products and versions
------------------------------

 
 * Magento Commerce Cloud 2.4.1
 * Magento Commerce 2.4.1
 
  Issue
------

 An error message pops-up and disappears on the Billing step of Checkout, if PayPal Braintree payment is used and multiple addresses shipment selected. 

 Steps to reproduce:

 
 2. On the storefront, log in as a customer. (optionally could be a guest checkout, if it is enabled in Admin)
 4. Add a product to the cart. 
 6. Click to open the cart preview.
 8. Click **View and Edit Cart**.
 10. On the Cart page, click **Check Out with Multiple Addresses**.
 12. Click **Go to Shipping Information** and specify the addresses. 
 14. Click **Continue to Billing Information**. 
 16. Select **PayPal Braintree** and click the **PayPal** button.
 18. In the pop-up window click **Agree & Pay**.
 
 Expected result:

 The order is placed without any error. 

 Actual result: 

 The order is placed, but with an error. The *PayPal Checkout could not be initialized. Please contact store owner*. error is displayed for a second and disappears. 

 Fix
---

 Since the order placing is not blocked, there is no need to perform workaround steps. The issue is scheduled to be fixed in Magento Commerce 2.4.2.

