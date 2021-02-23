---
title: Magento 2.4.0 known issue: Klarna On-Site Messaging blank pages
link: https://support.magento.com/hc/en-us/articles/360047637951-Magento-2-4-0-known-issue-Klarna-On-Site-Messaging-blank-pages
labels: Magento Commerce Cloud,Magento Commerce,payment,design,troubleshooting,known issues,2.4.0,Klarna,on-site messaging
---

<p>This article describes a known Magento 2.4.0 issue with Klarna payment method, where enabling Klarna on-site messaging without specifying a design theme, results in not displaying product pages on the storefront correctly (product pages appear blank).</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.0</li>
<li>Magento Commerce Cloud 2.4.0</li>
</ul>
<p>Prerequisites: Klarna payment method is enabled.</p>
<p>Steps to reproduce:</p>
<ol>
<li>In the Magento Admin, go to Stores &gt; Configuration &gt; Sales &gt; Payment Methods &gt; Klarna &gt; Klarna On-Site Messaging.</li>
<li>Set Enable to <em>Yes</em>.</li>
<li>Leave the Design theme field blank.</li>
<li>Save configuration by clicking Save Config.</li>
<li>Go to storefront and navigate to any product page.</li>
</ol>
<p>Expected result:</p>
<p>The page loads successfully with default design theme applied for Klarna on-site messaging.</p>
<p>Actual result:</p>
<p>A blank page is displayed.</p>
<h2>Solution</h2>
<p>If enabling the Klarna on-site messaging, always ensure that the Design theme field is not blank. </p>