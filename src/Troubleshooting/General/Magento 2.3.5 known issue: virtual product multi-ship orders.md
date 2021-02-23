---
title: Magento 2.3.5 known issue: virtual product multi-ship orders
link: https://support.magento.com/hc/en-us/articles/360044461831-Magento-2-3-5-known-issue-virtual-product-multi-ship-orders
labels: Magento Commerce Cloud,Magento Commerce,order,troubleshooting,known issues,product,multishipping,2.3.5,address
---

<p>This article explains a known issue in Magento 2.3.5 where a multi-shipping order containing a virtual product is not processed correctly. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.3.5</li>
<li>Magento Commerce Cloud 2.3.5</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>On the storefront, add physical and virtual products to the cart. </li>
<li>Proceed to checkout and select Check Out with Multiple Addresses.</li>
<li>Add all the required information and place the order.</li>
</ol>
<p>Expected result</p>
<p>Orders are placed for all products successfully. </p>
<p>Actual result</p>
<p>The order for the virtual product is empty. </p>
<h2>Fix</h2>
<p>A fix will be available in Magento 2.3.6, which is scheduled for release in Q4 2020.</p>
<h2>Related reading</h2>
<ul>
<li>Magento Support Knowledge Base articles for Magento 2.3.5 known issues: <br/>
<ul>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043970452">Product comparison known issue in Magento 2.3.5</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360044839691">Bulk action product count known issue in Magento 2.3.5</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043955991">Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043857372">Magento prompts customers to log in but provides invalid link</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360042646332">Patch for Amazon Pay checkout issue in Magento 2.3.5-p1</a></p>
</li>
</ul>
</li>
<li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues">Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation</a></li>
</ul>