---
title: Customers get logged out or lose cart content on Magento storefront
link: https://support.magento.com/hc/en-us/articles/360049032952-Customers-get-logged-out-or-lose-cart-content-on-Magento-storefront
labels: Magento Commerce Cloud,Magento Commerce,how to,SameSite,session,cookies,cart,logged out
---

This article provides a solution and workaround for the issue, where customers get logged out or lose items from the shopping cart on the storefront, after being re-directed back to Magento store from payment or other third-party services (session cookie "gets lost").

 Affected products and versions
------------------------------

 
 * Magento Commerce, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 * Magento Commerce Cloud, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
 
 Issue
-----

 Steps to reproduce:

 
 2. Customer adds products to cart on storefront and proceeds to checkout. 
 4. Customer is redirected to the third-party site for payment/shipping or other information/service.
 6. Customer is redirected back to Magento.
 
 Actual result: 

 Customer redirected to the empty shopping cart or a blank page. 

 Expected result:

 Customer redirected to a success payment page (or other success page), without losing the checkout data and progress. 

 Cause
-----

 The SameSite cookie attribute is set to *Lax* or not specified (which is treated as set to *Lax*). Having SameSite = *Lax* disables transferring a cookie to external URLs via POST requests.

 Solution
--------

 To solve the issue, contact the third-party service provider and request their developers update their integrations to configure cookie parameters.

 ### Temporary workaround

 To make your integration work while developers of the third-party service provider resolve the issue, you can set SameSite value to *None*.   
This can be done by configuring headers in Nginx or configuring this parameter via HTTP headers. 

 Magento does not recommend such modifications, because it might cause security issues and/or break PCI compliance. Magento recommends contacting the third-party developer who provides your payment platform and requesting changes to cookie settings configuration.

 Related reading
---------------

 [Chrome SameSite update](https://www.chromestatus.com/feature/5088147346030592)

