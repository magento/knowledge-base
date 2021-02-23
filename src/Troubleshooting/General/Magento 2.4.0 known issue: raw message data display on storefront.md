---
title: Magento 2.4.0 known issue: raw message data display on storefront
link: https://support.magento.com/hc/en-us/articles/360045804332-Magento-2-4-0-known-issue-raw-message-data-display-on-storefront
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,store,2.4.0,PHP 7.4.2,cookies,error message
---

<p>This article provides a solution for the issue when all error messages on the storefront display with a "+" sign instead of a space. This solution helps error messages remain readable.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.4.0.</li>
<li>Magento Commerce 2.4.0.</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Go to Create New Account page on the storefront.</li>
<li>Create a new account using a registered email. The following message is displayed:</li>
</ol>
<pre><code class="language-clike">There+is+already+an+account+with+this+email+address.+If+you+are+sure+that+it+is+your+email+address,+click+here+to+get+your+password+and+access+your+account.
</code></pre>
<h2>Cause</h2>
<p>The issue is caused by a PHP 7.4.2 issue related to set\read cookies. See <a href="https://bugs.php.net/bug.php?id=79174">PHP BUG #79174 setcookie() encodes space as `+`, but $_COOKIE no longer decodes them</a>.</p>
<h2>Solution</h2>
<p>To solve this issue, use another version of PHP 7.4.x. PHP 7.4.2 is not supported by Magento 2.4.0.</p>
<h2>Related reading</h2>
<ul>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046354992-Magento-2-4-0-known-issue-Braintree-payment-methods-do-not-show-up-in-Multiple-Addresses-checkout">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360046091332-Magento-2-4-0-known-issue-refresh-on-Customer-s-Activities-does-not-work">Magento 2.4.0 known issue - refresh on Customer's Activities does not work</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue - Export Tax Rates does not work</a>
</li>
<li>KB <a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a>
<div> </div>
</li>
</ul>