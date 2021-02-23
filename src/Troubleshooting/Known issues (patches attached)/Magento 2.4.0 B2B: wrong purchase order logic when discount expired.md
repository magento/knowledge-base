---
title: Magento 2.4.0 B2B: wrong purchase order logic when discount expired 
link: https://support.magento.com/hc/en-us/articles/360047251111-Magento-2-4-0-B2B-wrong-purchase-order-logic-when-discount-expired-
labels: Magento Commerce Cloud,Magento Commerce,patch,B2B,troubleshooting,known issues,2.4.0,purchase order
---

<p>This article provides a patch for the known issue of a purchase order (PO) discount not being applied in Magento 2.4.0 B2B. If the PO was placed with a discount code that expired while the PO was in the approval process, the approved order does not reflect the discount. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.0</li>
<li>Magento Commerce 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites: a discount coupon is created, and approval rules preventing POs from being processed automatically exist. </p>
<p>Steps to reproduce:</p>
<ol>
<li>Place a PO with a discount applied.</li>
<li>Deactivate the discount coupon. </li>
<li>Approve PO as a manager. </li>
<li>Check the order created as a result.</li>
</ol>
<p>Expected result:</p>
<p>Order is created with a discounted total. </p>
<p>Actual result:</p>
<p>Order is created for the full amount.</p>
<h2>Solution </h2>
<p>Apply the patch provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360063988371/B2B-709-composer.patch">B2B-709-composer.patch</a></p>
<p>The patch is also available for download in both, <code>.git</code> and <code>.composer</code>, formats on <a href="https://magento.com/tech-resources/download">Magento Commerce Downloads</a> page, under Patches in the left column navigation. Search for XXX patch. </p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<p> </p>
<p> </p>