---
title: Shipping labels creation known issue in Magento 2.4.0
link: https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0
labels: Magento Commerce Cloud,Magento Commerce,patch,known issues,2.4.0,shipping label
---

<p>This article provides a patch for a known Magento 2.4.0 issue, where a shipping label cannot be created.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.0</li>
<li>Magento Commerce Cloud 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites: create an order using FedEx, DHL, UPS, or USPS shipping method.</p>
<h3>Scenario 1: Create a label when adding a shipment</h3>
<p>Steps to reproduce:</p>
<ol>
<li>Open the placed order in Magento Admin, under Sales &gt; Orders.</li>
<li>Click the Ship button. The New Shipment page opens. </li>
</ol>
<p>Expected result:</p>
<p>The Create Shipping Label checkbox is displayed in the bottom of the page. </p>
<p>Actual result:</p>
<p>The Create Shipping Label checkbox is not displayed.</p>
<h3>Scenario 2: Create a label for existing shipment</h3>
<p>Steps to reproduce:</p>
<ol>
<li>Open the placed order in Magento Admin, under Sales &gt; Orders.</li>
<li>Click the Ship button. The New Shipment page opens. </li>
<li>Click the Submit Shipment button. A shipment is created.</li>
<li>Open the newly created shipment.</li>
<li>Click the Create Shipping Label button. The Create Packages dialog opens.</li>
</ol>
<p>Expected result:</p>
<p>The Add Products to Package button on the Create Packages modal window displays fields with order items.</p>
<p>Actual result:</p>
<p>The Create Packages modal window is not displayed properly, it is not possible to add order items to the shipment.</p>
<h2>Solution</h2>
<p>Apply the patch provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360063419631/MC-35514-2.4.0-CE-composer-2.patch">MC-35514-2.4.0-CE-composer-2.patch</a></p>
<p>The patch is also available for download in both, <code>.git</code> and <code>.composer</code>, formats on <a href="https://magento.com/tech-resources/download">Magento Commerce Downloads</a> page, under Patches in the left column navigation. Search for MC-35514 patch. </p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud version 2.4.0</li>
<li>Magento Commerce version 2.4.0</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>