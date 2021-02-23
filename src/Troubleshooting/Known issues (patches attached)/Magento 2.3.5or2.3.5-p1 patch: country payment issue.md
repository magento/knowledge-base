---
title: Magento 2.3.5or2.3.5-p1 patch: country payment issue
link: https://support.magento.com/hc/en-us/articles/360043955991-Magento-2-3-5-2-3-5-p1-patch-country-payment-issue
labels: Magento Commerce Cloud,Magento Commerce,patch,payments,troubleshooting,known issues,2.3.5,2.3.5-p1
---

<p>This patch resolves an issue in Magento where the storefront checkout workflow did not display any payment method that has been enabled for specific countries, except for Klarna and Amazon Pay.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud versions 2.3.5 and 2.3.5-p1</li>
<li>Magento Commerce versions 2.3.5 and 2.3.5-p1</li>
</ul>
<h2>Issue</h2>
<p>When a store has Amazon Pay and another payment assigned to different countries, and when one of those countries and payment methods is selected, the payment method and place order buttons are not visible.</p>
<p>A web page refresh is a workaround for the issue.</p>
<p>To resolve this issue and remove the error, we have created a <a href="https://support.magento.com/hc/en-us/article_attachments/360057950771/BUNDLE-2546_EE_2.3.5-p1.composer.patch">patch</a>. </p>
<p>Prerequisites:</p>
<ul>
<li>A simple product is created.</li>
<li>
Check / Money order are enabled only for specific countries (at Store &gt; Configuration; Sales &gt; Payment Methods).</li>
<ul>
<li>Example: Payment from Applicable Countries = Specific Countries</li>
<li>Example: Payment from Specific Countries = United Kingdom</li>
</ul>
</ul>
<p>Steps to reproduce:</p>
<ol>
<li>Go to the Storefront as a Guest.</li>
<li>Add a simple product to the shopping cart.</li>
<li>Go to Checkout.</li>
<li>Fill the form with valid data.</li>
</ol><ul>
<li>Country = <em>United States</em>
</li>
</ul>
<li>Select shipping rate and go Next.</li>
<ul>
<li>Payment step is opened.</li>
<li>There are no available payments.</li>
<li>Message: No Payment method available.
</li>
<li>There is no Place Order button.</li>
</ul>
<li>Go back to the Shipping Step and change the value to:</li>
<ul>
<li>Country = <em>United Kingdom</em>
</li>
</ul>
<li>Select shipping rate and go Next.</li>
<p>Expected result:<br/>The Payment step opens.</p>
<ul>
<li>
Cash On Delivery appears.</li>
<li>
Check / Money order appears.</li>
<li>The Place Order button appears.
</li>
</ul>
<p>Actual result:<br/>The Payment step opens.</p>
<ul>
<li>There are no available payments.</li>
<li>Message: No Payment method available.</li>
<li>There is no Place Order button.</li>
</ul>
<h2>Solution</h2>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360057950771/BUNDLE-2546_EE_2.3.5-p1.composer.patch">Apply the patch</a> below.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360057950771/BUNDLE-2546_EE_2.3.5-p1.composer.patch">Download BUNDLE-2546_EE_2.3.5-p1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud versions 2.3.5 and 2.3.5-p1</li>
<li>Magento Commerce versions 2.3.5 and 2.3.5-p1</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce versions 2.3.4-p2 through 2.2.6</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>