---
title: Magento 2.4.1 known issue: unable to change Amazon account in Google Chrome
link: https://support.magento.com/hc/en-us/articles/360049814152-Magento-2-4-1-known-issue-unable-to-change-Amazon-account-in-Google-Chrome
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,browser,Amazon Pay,Javascript,cookies,2.4.1
---

<p>This article describes a known Magento 2.4.1 issue where customers get signed in to the previously used Amazon accounts instead of being suggested to log in, when using Amazon Pay during checkout.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.1</li>
<li>Magento Commerce Cloud 2.4.1</li>
</ul>
<h2>Issue</h2>
<p>Customers get signed in to the previously used Amazon accounts instead of being suggested to log in, when using Amazon Pay during checkout.</p>
<p>Steps to reproduce:</p>
<ol>
<li>On storefront, add any item to the shopping cart and proceed to guest checkout.</li>
<li>Click the Amazon Pay button. Amazon.com sign in pop-up appears.</li>
<li>Log in to the Amazon account.</li>
<li>Select an address and click Next.</li>
<li>Select the payment method.</li>
<li>Click Place order.</li>
<li>Go back to the home page and log in to the store account.</li>
<li>Add any item to the shopping cart again and proceed to checkout.</li>
<li>Click the Amazon Pay button.</li>
</ol>
<p>Actual result:<br/>You get automatically logged into the previously used (Step 3) Amazon account again.</p>
<p>Expected result:<br/>Amazon.com sign in pop-up appears and you can log in or create a new account for Amazon Pay.</p>
<h2>Cause</h2>
<p>The issue might happen in one of the following situations:</p>
<ul>
<li>When the <code>SameSite</code> cookie value is <code>LAX</code>, the cookie will not be sent as part of any third-party calls. </li>
<li>
Mozilla Firefox content blocking feature prevents third parties from tracking browser user’s activities by blocking usage of scripts and client-side storage mechanisms. Firefox uses an external vendor Disconnect.me to provide a list of tracking sites to be blocked. Amazon Pay uses an iframe on a third-party website to return an access token after sign-in and render Address and wallet widget. With the content blocking feature, Amazon Pay iframe load requests are considered as third-party tracking requests and get blocked resulting in buyer not able to proceed with checkout.
</li>
<li>Any situation where third-party cookies or JS are being explicitly blocked by the browser.</li>
</ul>
<h2>Solution</h2>
<p>Make sure Amazon Pay iframe requests are not blocked by browsers.</p>