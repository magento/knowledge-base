---
title: "Magento 2.3.5 known issue: virtual product multi-ship orders"
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,address,known issues,multishipping,order,product,troubleshooting
---

This article explains a known issue in Magento 2.3.5 where a multi-shipping order containing a virtual product is not processed correctly.

## Affected products and versions

* Magento Commerce 2.3.5
* Magento Commerce Cloud 2.3.5

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span> 

1. On the storefront, add physical and virtual products to the cart.
1. Proceed to checkout and select **Check Out with Multiple Addresses** .
1. Add all the required information and place the order.

 <span class="wysiwyg-underline">Expected result</span> 

Orders are placed for all products successfully.

 <span class="wysiwyg-underline">Actual result</span> 

The order for the virtual product is empty.

## Fix

A fix will be available in Magento 2.3.6, which is scheduled for release in Q4 2020.

## Related reading

<ul><li>Magento Support Knowledge Base articles for Magento 2.3.5 known issues:<ul>
<li>
<p title="Product comparison known issue in Magento 2.3.5"><a href="https://support.magento.com/hc/en-us/articles/360043970452">Product comparison known issue in Magento 2.3.5</a></p>
</li>
<li>
<p title="Bulk action product count known issue in Magento 2.3.5"><a href="https://support.magento.com/hc/en-us/articles/360044839691">Bulk action product count known issue in Magento 2.3.5</a></p>
</li>
<li>
<p title="Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1"><a href="https://support.magento.com/hc/en-us/articles/360043955991">Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1</a></p>
</li>
<li>
<p title="Magento prompts customers to log in but provides invalid link"><a href="https://support.magento.com/hc/en-us/articles/360043857372">Magento prompts customers to log in but provides invalid link</a></p>
</li>
<li>
<p title="Patch for Amazon Pay checkout issue in Magento 2.3.5-p1"><a href="https://support.magento.com/hc/en-us/articles/360042646332">Patch for Amazon Pay checkout issue in Magento 2.3.5-p1</a></p>
</li>
</ul>
</li><li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues">Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation</a></li></ul>