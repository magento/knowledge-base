---
title: Magento 2.4.0 known issue: orders display error
link: https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error
labels: Magento Commerce Cloud,Magento Commerce,error,orders,known issues,2.4.0,display
---

<p>This article provides a workaround for a known issue in Magento for an orders display error. When logged-in customers review their orders in the My Account menu (My Account &gt; My Orders), the orders grid is unable to switch the number of orders per page to 20 from page 2 when there are 11 orders. Also, if there are more orders than is configured to be shown per page, when navigating to the last page with orders, changing the number of orders shown per page produces the error message, "<em>You have placed no orders</em>." This issue will be resolved in Magento 2.4.1.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Preconditions</p>
<ul>
<li>Magento 2.4.0 is installed.</li>
<li>Create at least 1 category and 1 simple product.</li>
</ul>
<p>Steps to reproduce</p>
<ol>
<li>Create 11 orders with products. </li>
<li>Go to My Account. </li>
<li>Go to My Orders.</li>
<li>Click the second page to display the 11th order on the orders grid.</li>
<li>Select Show = 20 per page from the drop-down menu. </li>
</ol>
<p>Expected result</p>
<p>All 11 orders are displayed on the first page, as expected.</p>
<p>Actual result</p>
<p>The "<em>You have placed no orders"</em> error message is displayed.</p>
<h2>Workaround</h2>
<p>The workaround is to have the buyer reopen My Orders page, and then the orders list will be displayed correctly. The issue will be fixed in the next release, Magento version 2.4.1, which is scheduled for release in Q4 2020.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 Known Issue: Raw message data display on Storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 Known Issue: Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
</ul>