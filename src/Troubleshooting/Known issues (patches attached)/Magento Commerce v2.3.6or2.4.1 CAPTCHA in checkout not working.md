---
title: Magento Commerce v2.3.6or2.4.1 CAPTCHA in checkout not working
link: https://support.magento.com/hc/en-us/articles/360051235772-Magento-Commerce-v2-3-6-2-4-1-CAPTCHA-in-checkout-not-working
labels: Magento Commerce Cloud,Magento Commerce,Magento Open Source,patch,order,PayPal Express Checkout,2.3.6,2.4.1,CyberSource,PayFlow Pro,CAPTCHA
---

<p>This article provides a patch for the issue where the CAPTCHA feature for checkout does not work as expected on the Place Order page when using third-party payment providers like Paypal Express, Payflow Pro, or CyberSource in Magento.</p>
<p>This known issue is mentioned in DevDocs:</p>
<p>For Magento 2.3.6:</p>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/commerce-2-3-6.html#known-issues">Magento Commerce 2.3.6 Release Notes: Known Issues</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/release-notes/open-source-2-3-6.html#known-issues">Magento Open Source 2.3.6 Release Notes: Known Issues</a></li>
</ul>
<p>For Magento 2.4.1:</p>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.4/release-notes/commerce-2-4-1.html#known-issues">Magento Commerce 2.4.1 Release Notes: Known Issues</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.4/release-notes/open-source-2-4-1.html#known-issues">Magento Open Source 2.4.1 Release Notes: Known Issues</a></li>
</ul>
<h2>Affected products and versions</h2>
<p>Magento Commerce and Magento Open Source 2.3.6 and 2.4.1</p>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Setup at least one of these payment methods in Magento: Paypal Express, Payflow Pro, or CyberSource.</li>
<li>Go to Admin &gt; Stores &gt; Configuration &gt; Customers &gt; Customer Configuration &gt; CAPTCHA.</li>
</ol><ul>
<li>Set Enable CAPTCHA on the Storefront = <em>Yes</em>.</li>
<li>Select in Forms: <em>Checkout/Placing Order</em>, <em>Login</em>, and <em>Forgot password</em>.</li>
<li>Set Displaying Mode = <em>After number of attempts to login</em> (to make the Number of Unsuccessful Attempts to Login setting appear).</li>
<li>Set Number of Unsuccessful Attempts to Login = <em>0</em> (to make captcha work all the time).</li>
</ul>
<li>On the frontend, add a product to the cart and try to checkout.</li>
<li>On Payment information page, enter captcha and try to checkout with Paypal Express, Payflow Pro, or CyberSource.</li>
<p>Expected result:</p>
<p>The CAPTCHA feature functions as expected.</p>
<p>Actual result:</p>
<p>The error message displays: <em>Please provide CAPTCHA code and try again.</em></p>
<h2>Solution</h2>
<p>Apply one of the patches below depending on whether you are on Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.3.6 or 2.4.1.</p>
<h2>Patches</h2>
<p>The patches are attached to this article, available for download in both <code>.composer</code> and <code>.git</code> formats.</p>
<p>To download a patch, scroll down to the end of the article and click the file name, or click one of the following links:</p>
<p>For Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.3.6:</p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360074568351/MC-38033___2_3_x-p1__CAPTCHA_COMPOSER.patch">Composer patch MC-38033___2_3_x-p1__CAPTCHA_COMPOSER.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360074377532/MC-38033___2_3_x-p1__CAPTCHA_GIT.patch">Git patch MC-38033___2_3_x-p1__CAPTCHA_GIT.patch</a></li>
</ul>
<p>For Magento Commerce/Magento Commerce Cloud/Magento Open Source 2.4.1:</p>
<ul>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360074377552/MC-38072___2_4_x-p1__CAPTCHA_COMPOSER.patch">Composer patch MC-38072___2_4_x-p1__CAPTCHA_COMPOSER.patch</a></li>
<li><a href="https://support.magento.com/hc/en-us/article_attachments/360074568371/MC-38072___2_4_x-p1__CAPTCHA_GIT.patch">Git patch MC-38072___2_4_x-p1__CAPTCHA_GIT.patch</a></li>
</ul>
<p>These patches are not compatible with any other Magento versions and editions.</p>
<h2>How to apply the patch</h2>
<p>Composer patch</p>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for composer patch instructions.</p>
<p>Git patch</p>
<ul>
<li>See DevDocs <a href="https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#custom-patches">Applying patches: Custom patches</a> for git patch instructions for Magento Commerce/Magento Open Source.</li>
</ul>
<h2>Attached files</h2>