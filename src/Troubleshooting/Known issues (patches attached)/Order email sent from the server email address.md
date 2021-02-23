---
title: Order email sent from the server email address
link: https://support.magento.com/hc/en-us/articles/360024855431-Order-email-sent-from-the-server-email-address
labels: Magento Commerce Cloud,patch,troubleshooting,2.2.4,order email,known issues
---

<p>This articles provides a patch for the known Magento Commerce Cloud 2.2.4 issue related to order emails being sent from the server email address.</p>
<h2>Issue</h2>
<p>Order confirmation emails are sent from the Apache server email address. Other emails (Forgot password and so on) sent from the configured email addresses.</p>
<p>Steps:</p>
<ol>
<li>Place an order with the Send order confirmation box checked.</li>
<li>Check email.</li>
</ol>
<p>Expected result:<br/> The email was sent from the Magento configured sending address.</p>
<p>Actual result:<br/> The email was sent from email address configured in the Apache server being used.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023209891/MDVA-10993_EE_2.2.4_v1.composer.patch">Download MDVA-10993_EE_2.2.4_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.4</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.5</li>
<li>Magento Commerce (Cloud) 2.2.6</li>
<li>Magento Commerce (Cloud) 2.2.7</li>
<li>Magento Commerce (Cloud) 2.2.8</li>
<li>Magento Commerce 2.2.4</li>
<li>Magento Commerce 2.2.5</li>
<li>Magento Commerce 2.2.6</li>
<li>Magento Commerce 2.2.7</li>
<li>Magento Commerce 2.2.8</li>
<li>Magento Commerce 2.3.0</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>