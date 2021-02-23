---
title: Magento 2.4.0 known issue: exception during B2B 1.2.0 install
link: https://support.magento.com/hc/en-us/articles/360047633331-Magento-2-4-0-known-issue-exception-during-B2B-1-2-0-install
labels: Magento Commerce Cloud,Magento Commerce,installation,patch,B2B,exception,setup:upgrade,2.4.0
---

<p>This article provides a fix for a Magento known issue for an exception thrown during <code>setup:upgrade</code> when installing B2B 1.2.0.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0</li>
<li>B2B version 1.2.0</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Install Magento with more than 1 store created.</li>
<li>Create an additional store.</li>
<li>Install B2B 1.2.0.</li>
</ol>
<p class="warning">The upgrade of any B2B instance with more than 1 store from a version below 1.2.0 or Magento instance below 2.4.0, is also affected.</p>
<p>Expected result</p>
<p>B2B 1.2.0 installs.</p>
<p>Actual result </p>
<p>When <code>setup:upgrade</code> runs to install B2B 1.2.0, this error appears on the <code>PurchaseOrder</code> module:</p>
<pre><code class="language-php">Module 'Magento_PurchaseOrder':
  Unable to apply data patch Magento\PurchaseOrder\Setup\Patch\Data\InitPurchaseOrderSalesSequence
  for module Magento_PurchaseOrder. Original exception message: DDL statements
  are not allowed in transactions</code></pre>
<h2>Solution</h2>
<p>Apply the patch provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article, available for download in both <code>.composer</code> and <code>.git</code> formats.</p>
<p>To download it, scroll down to the end of the article and click the file name, or click one of the following links:</p>
<ul>
<li><a href="https://support.magento.com/hc/article_attachments/360064512792/B2B-716_composer.patch">Composer patch B2B-716_composer.patch</a></li>
<li><a href="https://support.magento.com/hc/article_attachments/360064512772/B2B-716_git.patch">Git patch B2B-716_git.patch</a></li>
</ul>
<h2>How to apply a patch</h2>
<p>Composer patch</p>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for composer patch instructions.</p>
<p>Git patch</p>
<ul>
<li>See DevDocs' <a href="https://devdocs.magento.com/cloud/project/project-patch.html">Apply patches</a> for git patch instructions for Magento Commerce Cloud.</li>
<li>See DevDocs' <a href="https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#custom-patches">Applying patches: Custom patches</a> for git patch instructions for Magento Commerce.</li>
</ul>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue: Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046354992">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360047139331-Magento-2-4-0-known-issue-Error-message-selecting-local-payment-method-displayed-for-some-countries-during-checkout">Magento 2.4.0 known issue: Error message selecting local payment method displayed for some countries during checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046920131-Magento-2-4-0-known-issue-404-error-when-removing-rewards-points-on-multi-shipping-checkout">Magento 2.4.0 known issue: 404 error when removing rewards points on multi-shipping checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error">Magento 2.4.0 known issue: orders display error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a></li>
</ul>