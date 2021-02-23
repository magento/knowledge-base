---
title: Patch for Amazon Pay checkout issue in Magento 2.3.5-p1
link: https://support.magento.com/hc/en-us/articles/360042646332-Patch-for-Amazon-Pay-checkout-issue-in-Magento-2-3-5-p1
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,Amazon Pay,2.3.5-p1
---

<p>This patch resolves the issue with inability to change a payment method on checkout "Review &amp; Payments" step from the payments widget, while checking out with Amazon Pay in Magento.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud version 2.3.5-p1</li>
<li>Magento Commerce version 2.3.5-p1</li>
</ul>
<h2>Issue</h2>
<p>When a shopper checks out with Amazon Pay, logs in, proceeds to the payment step, and tries to change their payment credit card from the payments widget, an error message appears.<br/> The checkout cannot be completed if the shopper ignores the error and proceeds to checkout.</p>
<p>To resolve this issue and remove the error, we have created a <a href="https://support.magento.com/hc/en-us/article_attachments/360056411111/BUNDLE-2554_EE_2.3.5-p1.composer.patch">patch</a>. </p>
<p>Steps to reproduce:</p>
<ol>
<li>Start checkout with Amazon Pay.</li>
<li>Login as Amazon Pay customer.</li>
<li>Select shipping method and proceed to payment step.</li>
<li>Try to change credit card to a different one.</li>
</ol>
<p>Expected result:<br/> A different credit card is selected as payment method without an error.</p>
<p>Actual result:<br/> The error message appears: <em>"Please contact this merchant for help completing your order."</em></p>
<h2>Solution</h2>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360056411111/BUNDLE-2554_EE_2.3.5-p1.composer.patch">Apply the patch</a> below.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360056411111/BUNDLE-2554_EE_2.3.5-p1.composer.patch">Download BUNDLE-2554_EE_2.3.5-p1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud version 2.3.5-p1</li>
<li>Magento Commerce version 2.3.5-p1</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce Cloud version 2.3.5</li>
<li>Magento Commerce version 2.3.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>