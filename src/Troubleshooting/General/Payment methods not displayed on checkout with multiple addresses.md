---
title: Payment methods not displayed on checkout with multiple addresses
link: https://support.magento.com/hc/en-us/articles/360029360451-Payment-methods-not-displayed-on-checkout-with-multiple-addresses
labels: Magento Commerce Cloud,Magento Commerce,payments,troubleshooting,Cybersource,multishipping,2.x.x
---

This article explains that most of the payment methods are not displayed on checkout when multiple shipping addresses are specified, because the functionality is only implemented for Cybersource.

 ### Affected products and versions

 
 * Magento Commerce, Magento Commerce Cloud
 * 2.x.x
 
 The core Magento Cybersource payment integration is deprecated since 2.3.3 and will be completely removed in 2.4.0. Use the [official extension](https://marketplace.magento.com/cybersource-global-payment-management.html) from marketplace instead.

 Issue
-----

 Prerequisites: In the Magento Admin, enable and configure PayPal and Cybersource payment methods, and enable Multishipping for your store. 

 Steps to reproduce:

 
 2. On the storefront, add multiple products to the cart.
 4. Go to the shopping cart page.
 6. Click **Check Out with Multiple Addresses**.
 8. Log in or create account.
 10. Split up products between the addresses on the Ship to Multiple Addresses page.
 12. Click **Go to Shipping Information**.
 14. Select shipping methods for each shipment.
 16. Click **Continue to Billing Information**.
 
 Expected result  
PayPal and Cybersource are available as payment options.

 Actual result  
Only Cybersource appears as available payment option.

 Cause
-----

 Currently Cybersource is the only supported live payment method for multishipping checkout, starting from version 2.2.4. Support for multishipping will likely be built for each payment method one by one. No exact dates or release numbers can be provided at the moment.

