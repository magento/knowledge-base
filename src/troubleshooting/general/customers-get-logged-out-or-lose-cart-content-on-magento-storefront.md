---
title: Customers get logged out or lose cart content on Magento storefront
labels: Magento Commerce,Magento Commerce Cloud,SameSite,cart,cookies,how to,logged out,session
---

This article provides a solution and workaround for the issue, where customers get logged out or lose items from the shopping cart on the storefront, after being re-directed back to Magento store from payment or other third-party services (session cookie "gets lost").

## Affected products and versions

* Magento Commerce, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce Cloud, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. The customer adds products to cart on storefront and proceeds to checkout.
1. The customer is redirected to the third-party site for payment/shipping or other information/service.
1. The customer is redirected back to Magento.

 <span class="wysiwyg-underline">Actual result:</span> 

Customer redirected to the empty shopping cart or a blank page.

 <span class="wysiwyg-underline">Expected result:</span> 

Customer redirected to a success payment page (or other success page), without losing the checkout data and progress.

## Cause

The SameSite cookie attribute is set to *Lax* or not specified (which is treated as set to *Lax* ). Having `SameSite` = *Lax* disables transferring a cookie to external URLs via `POST` requests.

## Solution

To solve the issue, contact the third-party service provider and request their developers update their integrations to configure cookie parameters.

### Temporary workaround

To make your integration work while developers of the third-party service provider resolve the issue, you can set `SameSite` value to *None* . This can be done by configuring headers in Nginx or configuring this parameter via HTTP headers.

>![warning]
>
>Magento does not recommend such modifications, because it might cause security issues and/or break PCI compliance. Magento recommends contacting the third-party developer who provides your payment platform and requesting changes to cookie settings configuration.

## Related reading

 [Chrome SameSite update](https://www.chromestatus.com/feature/5088147346030592) 