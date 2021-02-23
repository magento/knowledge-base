---
title: Magento 2.4.0 patch: returns shipping label creation issue
link: https://support.magento.com/hc/en-us/articles/360046441312-Magento-2-4-0-patch-returns-shipping-label-creation-issue
labels: Magento Commerce Cloud,Magento Commerce,patch,known issues,2.4.0,shipping label,return
---

<p>This article provides a patch for the Magento 2.4.0 known issue when there is a problem with printing a shipping label for customers’ returns.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.0</li>
<li>Magento Commerce 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Place and complete an order with one of the following core shipping methods FedEx, DHL, UPS, or USPS.</li>
<li>Create and authorize returns for this order.</li>
<li>Open an authorized Return Information page and click the Create Shipping Label button.<em><br/></em>
</li>
<li>Select shipping method, add a product to a package and click Save. </li>
</ol>
<p>Expected result:</p>
<p>A shipping label is created successfully and you see a message: <em>You created a shipping label.</em><br/><br/>Actual result:</p>
<p>The Return Information page is broken and you see an error message on the Return Information page: <em>General Information Changes have been made to this section that have not been saved. This tab contains invalid data</em>. </p>
<h2>Solution</h2>
<p>Apply <a href="https://support.magento.com/hc/en-us/article_attachments/360063124151/MC-35984-2.4.0-CE-composer.patch">patch</a> provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360063124151/MC-35984-2.4.0-CE-composer.patch">MC-35984-2.4.0-CE-composer.patch</a></p>
<p>The patch is also available for download in both, <code>.git</code> and <code>.composer</code>, formats on <a href="https://magento.com/tech-resources/download">Magento Commerce Downloads</a> page, under Patches in the left column navigation. Search for MC-35984 patch. </p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Related reading</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue: Export Tax Rates does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360045838312">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046354992">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046801971-Magento-2-4-0-known-issue-B2B-Admin-cannot-add-a-configurable-product-to-a-quote">Magento 2.4.0 B2B Admin can't add configurable product to quote</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046802271-Magento-2-4-0-known-issue-orders-display-error">Magento 2.4.0 known issue: orders display error</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a></li>
</ul>