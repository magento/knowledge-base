---
title: Magento 2.4.0 known issue - Export Tax Rates does not work 
link: https://support.magento.com/hc/en-us/articles/360045850032-Magento-2-4-0-known-issue-Export-Tax-Rates-does-not-work-
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,button,export tax rates,2.4.0
---

<p>This article provides a solution for a Magento 2.4.0 known issue where the Export Tax Rates button does not work. </p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.0 </li>
<li>Magento Commerce 2.4.0</li>
</ul>
<h2>Issue</h2>
<p> Steps to reproduce:</p>
<ol>
<li>Go to Magento Admin Panel &gt; Stores &gt; Tax Rules.</li>
<li>Click the Add New Tax Rule button.</li>
<li>Click on the text of the Export Tax Rates button.<br/> <img alt="magento_export_tax_rates.png" src="https://support.magento.com/hc/article_attachments/360061961892/mceclip0.png"/>
</li>
</ol>
<p>Expected result:<br/> A <code>tax_rates.csv</code> file downloads containing tax rates.</p>
<p>Actual result:<br/> No .csv file is downloaded.</p>
<h2>Solution</h2>
<p>Workaround:</p>
<p>Click on the bottom left edge of the Export Tax Rates button to export the <code>tax_rates.csv</code> file.<br/> <img alt="magento_export_tax_rates.png" src="https://support.magento.com/hc/article_attachments/360062108811/mceclip1.png"/></p>
<p>It is planned that the issue will be resolved in a 2.4.1 patch.</p>
<h2>Related reading</h2>
<ul>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a>
<div> </div>
</li>
</ul>