---
title: Magento 2.4.0 known issue: Braintree Virtual Terminal page is corrupted 
link: https://support.magento.com/hc/en-us/articles/360046800071-Magento-2-4-0-known-issue-Braintree-Virtual-Terminal-page-is-corrupted-
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,known issues,2.4.0,Braintree Virtual Terminal
---

<p>This article provides a patch for the known Magento 2.4.0 issue, where the Braintree Virtual Terminal page does not load the proper UI elements or a proper error message if Braintree is not configured.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.0</li>
<li>Magento Commerce Cloud 2.4.0</li>
</ul>
<h2>Issue</h2>
<h3>Scenario 1: Braintree payment method is configured</h3>
<p>Steps to reproduce:</p>
<p>In Magento Admin, go to Sales &gt; Braintree Virtual Terminal. </p>
<p>Expected result:</p>
<p>The Braintree Virtual Terminal page loads with proper UI.</p>
<p>Actual result:</p>
<p>The UI of the Braintree Virtual Terminal page is broken.</p>
<h3>Scenario 2: Braintree payment method is configured</h3>
<p>Steps to reproduce:</p>
<p>In Magento Admin, go to Sales &gt;  Braintree Virtual Terminal. </p>
<p>Expected result:</p>
<p>The Braintree Virtual Terminal page loads with proper UI and a warning is displayed informing that Braintree is not yet configured.</p>
<p>Actual result:</p>
<p>The UI of the Braintree Virtual Terminal page is broken and no warning is displayed.</p>
<h2>Solution</h2>
<p>Apply the patch provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360063914412/BUNDLE-2670-composer.patch">BUNDLE-2670-composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud 2.4.0</li>
<li>Magento Commerce 2.4.0</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>