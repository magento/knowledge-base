---
title: New orders are sent to archive
link: https://support.magento.com/hc/en-us/articles/360026405051-New-orders-are-sent-to-archive
labels: Magento Commerce,patch,troubleshooting,orders,known issues,2.2.0
---

<p>This article provides a patch for the known Magento Commerce 2.2.0 issue related to the newly created orders showing in the archive instead of the Orders grid in Magento Admin.</p>
<p class="info">The issue was fixed in 2.2.3 and later. </p>
<h2>Issue</h2>
<p>When customers place orders, they appear in the archived orders grid, instead of the regular orders grid.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Add any product to cart on the storefront and proceed through checkout, and place the order.</li>
<li>In the Magento Admin, navigate to Sales &gt; Operations &gt; Order.  See the order appear in the grid.</li>
<li>Navigate to Sales &gt; Archive &gt; Orders. See the new order in the grid.</li>
</ol>
<p>Expected result:<br/>The order is displayed in the Orders grid only.</p>
<p>Actual result:<br/>The order is displayed in the Orders grid and in the order archive grid.</p>
<h2>Solution</h2>
<p>After applying the patch, orders will appear in the Order grid as expected. But you need to manually restore in the Magento Admin the ones that were sent to archive before the patch was applied.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/article_attachments/360025565431/MDVA-8007_EE_2.2.0_v1.composer.patch">Download MDVA-8007_EE_2.2.0_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.0</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce, Magento Commerce Cloud</li>
<li>2.2.1-2.2.3</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Useful links</h2>
<ul>
<li><a href="https://docs.magento.com/m2/2.2/ee/user_guide/sales/order-archive.html">Manage Archived orders</a></li>
</ul>
<h2>Attached Files</h2>