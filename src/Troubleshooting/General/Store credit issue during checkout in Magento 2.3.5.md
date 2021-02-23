---
title: Store credit issue during checkout in Magento 2.3.5
link: https://support.magento.com/hc/en-us/articles/360044427031-Store-credit-issue-during-checkout-in-Magento-2-3-5
labels: Magento Commerce Cloud,Magento Commerce,credit,troubleshooting,checkout,known issues,2.3.5,Order Summary
---

<p>This article provides a workaround for the known store credit related issue during checkout in Magento 2.3.5, where shoppers get errors during checkout, after selecting and later removing store credit usage. A permanent fix will be available in Magento 2.3.6.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.3.5</li>
<li>Magento Commerce Cloud 2.3.5</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Customer adds products to the cart and proceeds to checkout.</li>
<li>Customer specifies store credit as payment method. </li>
<li>Customer removes store credit and changes the payment method.</li>
<li>Customer proceeds through checkout. </li>
</ol>
<p>Expected result</p>
<p>All order information is displayed correctly.</p>
<p>Actual result </p>
<p>Magento throws an error on the Order Summary section of the Order page.</p>
<h2>Solution</h2>
<p>Customers can refresh the Order page and the information in the Order Summary will load correctly. A fix will be available in Magento 2.3.6, which is scheduled for release in Q4 2020.</p>
<h2>Related reading</h2>
<ul>
<li>Magento Support Knowledge Base articles for Magento 2.3.5 known issues:
<ul>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360044461831">Multi-shipping orders with a virtual product not processed correctly in Magento 2.3.5</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043955991">Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043857372">Magento prompts customers to log in but provides invalid link</a></p>
</li>
<li><a href="https://support.magento.com/hc/en-us/articles/360044839691">Bulk action product count known issue in Magento 2.3.5</a></li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360042646332">Patch for Amazon Pay checkout issue in Magento 2.3.5-p1</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360043970452">Product comparison issue in Magento 2.3.5</a></p>
</li>
</ul>
</li>
<li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues">Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation</a></li>
</ul>