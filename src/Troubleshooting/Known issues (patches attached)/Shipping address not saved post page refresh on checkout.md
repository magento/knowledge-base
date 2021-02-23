---
title: Shipping address not saved post page refresh on checkout 
link: https://support.magento.com/hc/en-us/articles/360025843552-Shipping-address-not-saved-post-page-refresh-on-checkout-
labels: Magento Commerce,patch,troubleshooting,shipping address not saved,known issues,2.2.3
---

<p>This article provides a patch for the known Magento Commerce 2.2.3 issue where the customer's already populated shipping address form was blank again after refreshing the browser page on guest checkout. The issue was experienced when the persistent shopping cart was enabled.</p>
<h2>Issue</h2>
<p>Customers go through guest checkout and complete all forms including the shipping address. They get to the Review and payments section and reload the page. The form is empty, and they need to re-enter the shipping address again. Persistent shopping cart functionality is enabled.</p>
<p>Steps to reproduce:</p>
<p>Prerequisites: The persistent shopping cart functionality is enabled. Check if it is enabled in the Admin, under Stores &gt; Configuration &gt; Customers or Stores &gt; Configuration &gt; Sales, depending on your Magento version.</p>
<ol>
<li>Go to the store front.</li>
<li>Add products to the shopping cart.</li>
<li>Proceed to checkout as a guest.</li>
<li>Fill in your shipping address, choose shipping options, and continue to secure payment.</li>
<li>Get redirected to the Review and payments section of checkout.</li>
<li>Double check that you see the shipping address in the Ship to section.</li>
<li>Refresh the page.</li>
</ol>
<p>Expected result:<br/> You are able to continue checkout and all data is saved.</p>
<p>Actual result:<br/> Shipping address is empty, you need to-renter it.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360025238631/MDVA-9718_EE_2.2.3_COMPOSER_v1.patch">Download MDVA-9718_EE_2.2.3_COMPOSER_v1.patch</a></p>
<h3>Compatible Magento versions</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.3</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce Cloud from 2.1.13 to 2.1.18</li>
<li>Magento Commerce Cloud from 2.2.0 to 2.2.5</li>
<li>Magento Commerce 2.0.X</li>
<li>Magento Commerce 2.1.X</li>
<li>Magento Commerce from 2.2.0 to 2.2.2, and from 2.2.4 to 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>