---
title: Store credit issue during checkout in Magento 2.3.5
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,Order Summary,checkout,credit,known issues,troubleshooting
---

This article provides a workaround for the known store credit related issue during checkout in Magento 2.3.5, where shoppers get errors during checkout, after selecting and later removing store credit usage. A permanent fix will be available in Magento 2.3.6.

## Affected products and versions

* Magento Commerce 2.3.5
* Magento Commerce Cloud 2.3.5

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. Customer adds products to the cart and proceeds to checkout.
1. Customer specifies store credit as payment method.
1. Customer removes store credit and changes the payment method.
1. Customer proceeds through checkout.

 <span class="wysiwyg-underline">Expected result</span> 

All order information is displayed correctly.

 <span class="wysiwyg-underline">Actual result</span> 

Magento throws an error on the Order Summary section of the Order page.

## Solution

Customers can refresh the Order page and the information in the Order Summary will load correctly. A fix will be available in Magento 2.3.6, which is scheduled for release in Q4 2020.

## Related reading

<ul><li>Magento Support Knowledge Base articles for Magento 2.3.5 known issues:<ul>
<li>
<p title="Multi-shipping orders with a virtual product not processed correctly in Magento 2.3.5"><a href="https://support.magento.com/hc/en-us/articles/360044461831">Multi-shipping orders with a virtual product not processed correctly in Magento 2.3.5</a></p>
</li>
<li>
<p title="Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1"><a href="https://support.magento.com/hc/en-us/articles/360043955991">Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1</a></p>
</li>
<li>
<p title="Magento prompts customers to log in but provides invalid link"><a href="https://support.magento.com/hc/en-us/articles/360043857372">Magento prompts customers to log in but provides invalid link</a></p>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360044839691">Bulk action product count known issue in Magento 2.3.5</a></li>
<li>
<p title="Patch for Amazon Pay checkout issue in Magento 2.3.5-p1"><a href="https://support.magento.com/hc/en-us/articles/360042646332">Patch for Amazon Pay checkout issue in Magento 2.3.5-p1</a></p>
</li>
<li>
<p title="Product comparison issue in Magento 2.3.5"><a href="https://support.magento.com/hc/en-us/articles/360043970452">Product comparison issue in Magento 2.3.5</a></p>
</li>
</ul>
</li><li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues">Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation</a></li></ul>