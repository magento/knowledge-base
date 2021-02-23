---
title: Checkout pages not loading when ad blocker is enabled
link: https://support.magento.com/hc/en-us/articles/360025397571-Checkout-pages-not-loading-when-ad-blocker-is-enabled
labels: Magento Commerce Cloud,patch,troubleshooting,checkout,adblock,known issues,2.2.2
---

<p>This article provides a patch for the known Magento Commerce Cloud 2.2.2 issue related to the failure to load checkout pages caused by uBlock or other ad blockers.</p>
<h2>Issue</h2>
<p>If Google Analytics is enabled for the store, when a customer with installed uBlock or other ad blocker proceeds to checkout, the <code>trackingCode.js</code> file is blocked from loading and RequireJS breaks the JS execution flow. This causes problems with loading the checkout page.</p>
<p>Steps to reproduce:</p>
<p>Prerequisites: An ad blocker must be installed and active in browser.</p>
<ol>
<li>In the Magento Admin, enable and configure the Google Analytics functionality.</li>
<li>Open a product page on the store front.</li>
<li>Add products to cart.</li>
<li>Click the Go to Checkout link.</li>
</ol>
<p>Expected result:<br/> Checkout page loads and a customer can complete checkout.</p>
<p>Actual result:<br/> Checkout page does not load, the loading spinner never disappears.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023954791/MDVA-9353_EE_2.2.2_v1.composer.patch">Download MDVA-9353_EE_2.2.2_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.2</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) from 2.1.0 to 2.1.14</li>
<li>Magento Commerce (Cloud) from 2.2.0 to 2.2.1, and from 2.2.3 to 2.2.5</li>
<li>Magento Commerce from 2.1.0 to 2.1.14</li>
<li>Magento Commerce from 2.2.0 to 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Useful links</h2>
<ul>
<li><a href="https://github.com/magento/magento2/pull/13061">The issue discussed on GitHub</a></li>
</ul>
<h2>Attached Files</h2>