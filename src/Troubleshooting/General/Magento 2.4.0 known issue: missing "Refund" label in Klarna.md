---
title: Magento 2.4.0 known issue: missing "Refund" label in Klarna
link: https://support.magento.com/hc/en-us/articles/360047598311-Magento-2-4-0-known-issue-missing-Refund-label-in-Klarna
labels: Magento Commerce Cloud,Magento Commerce,refund,known issues,2.4.0,Klarna,label
---

<p>This article provides a workaround for a known issue in Admin for a missing Refund label in Klarna VBE (Vendor Bundled Extension). When in the Klarna portal conducting a refund, the Refund label is not displayed next to the Bundled product which was refunded.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce version 2.4.0</li>
<li>Magento Commerce Cloud version 2.4.0</li>
</ul>
<h2>Issue</h2>
<p>Preconditions</p>
<ul>
<li>Klarna is enabled.</li>
<li>A Bundled product is created.</li>
</ul>
<p>Steps to reproduce</p>
<ol>
<li>Go to Magento frontend, and add a Bundled product to cart.</li>
<li>Navigate to checkout.</li>
<li>Input consumer information into checkout and click Next.</li>
<li>Select KP option and click Place Order.</li>
<li>Go to Admin &gt; Sales &gt; Orders.</li>
<li>Open the order.</li>
<li>Create Invoice for product.</li>
<li>Go to Invoices &gt; Select invoice &gt; Click Credit Memo &gt; Click Refund (Not Refund Offline).</li>
<li>Go to Klarna portal.</li>
<li>Open the order.</li>
<li>The Refund label is present.</li>
</ol>
<p>Expected result</p>
<p>On the Klarna portal, the Refund label is displayed next to the product which was refunded.</p>
<p>Actual result </p>
<p>On the Klarna portal, the Refund label is not displayed next to the product which was refunded.</p>
<h2>Workaround</h2>
<p>The workaround for this issue is to ignore the missing Refund label in the Klarna portal for refunded bundled products. The refund has occurred, even though the Refund label did not display. The issue is expected to be fixed in Magento version 2.4.1, which is scheduled for release in Q4 2020.</p>
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