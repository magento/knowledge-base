---
title: Ticket submission form: merchant is not displayed in Organization drop-down
link: https://support.magento.com/hc/en-us/articles/360043335371-Ticket-submission-form-merchant-is-not-displayed-in-Organization-drop-down
labels: form,shared access,organization,submit a ticket
---

<p>This article provides a solution for a support ticket submission issue, where the merchant corresponding to the shared account is not displayed in the Organization options.</p>
<h2>Issue</h2>
<p>Prerequisites: you have a shared access account granted by a merchant.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Log in to the Help Center using your shared account. </li>
<li>Click the Submit a ticket link. The ticket submission form opens.</li>
<li>Expand the Organization drop-down field to select the merchant. </li>
</ol>
<p>Expected result:</p>
<p>The merchant corresponding to the shared account is listed in Organization options. </p>
<p>Actual result:</p>
<p>The merchant corresponding to the used shared account is not available in the Organization options. </p>
<h2>Solution</h2>
<p>After having been granted shared access from the merchant, you need to take the following steps (only once):</p>
<ol>
<li>Log in to your <a href="https://account.magento.com/">Magento account on the magento.com website</a>.</li>
<li>In the Switch Accounts drop-down field in top-right corner, select the shared access account.</li>
<li>Click on the Support tab in the left panel. Doing this will ensure that the Magento Help Center is configured properly via the SSO call from Magento.com to Magento Help Center.</li>
</ol>
<p> </p>
<p> </p>
<p> </p>