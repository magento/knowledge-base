---
title: Magento 2.4.0: 404 error removing rewards points on multi-shipping checkout
link: https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-404-error-removing-rewards-points-on-multi-shipping-checkout
labels: Magento Commerce Cloud,Magento Commerce,checkout,known issues,multishipping,404 error,2.4.0,shopping cart,rewards points
---

<p>This article provides a workaround for a known issue in Magento 2.4.0 for a "<em>404 Not Found</em>" web page error when removing rewards points on a multi-shipping checkout page. Currently, on the multi-shipping checkout page, when trying to remove reward points which were used to pay for an order,  a "<em>404 Not Found</em>" page is displayed instead of successful reward points cancellation. This issue will be resolved in with a Magento 2.4.1 patch release.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Navigate to the storefront and login as a customer. </li>
<li>Add at least 2 products to the Shopping Cart. </li>
<li>Open the Mini-Cart.</li>
<li>Click the View and Edit Cart link.</li>
<li>Click the Check Out with Multiple Addresses link.</li>
<li>Select shipping addresses on the Ship to Multiple Addresses page.</li>
<li>Click the Go to Shipping Information button. </li>
<li>Select the Flat Rate — Fixed Shipping Method for each address.</li>
<li>Click the Continue to Billing Information button.</li>
<li>Check the Use Your Reward Points checkbox on the Billing Information page.</li>
<li>Click the Go to Review Your Order button.</li>
<li>Click the Remove link for any address to remove the reward points.</li>
</ol>
<p>Expected results</p>
<ul>
<li>The Shopping Cart page should appear.</li>
<li>The “<em>You removed the reward points from this order.</em>” message should appear.</li>
</ul>
<p>Actual result</p>
<p>A "<em>404 Not Found</em>” error page appears.</p>
<h2>Workaround</h2>
<p>The workaround is to have the buyer navigate back to the Cart and remove the reward points from the Cart web page. The issue is expected to be fixed in the Magento version 2.4.1 patch, which is scheduled for release in Q4 2020.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 Known Issue: Raw message data display on Storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 Known Issue: Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046802271">Magento 2.4.0 known issue: Orders display error</a></li>
</ul>