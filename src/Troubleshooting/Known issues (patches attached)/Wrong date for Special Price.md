---
title: Wrong date for Special Price
link: https://support.magento.com/hc/en-us/articles/360026174032-Wrong-date-for-Special-Price
labels: Magento Commerce,patch,troubleshooting,special price,known issues,2.2.2
---

<p>This article provides a patch for the known Magento Commerce 2.2.2 issue related to the product special price "from" date being incorrect if its value is changed by the admin whose interface locale is different.</p>
<h2>Issue</h2>
<p>When you set/change the special price for a product, the current date and time is saved in the database as a value for the <code>special_from_date</code> attribute (not visible when editing a product). If you edit the special price and your admin user account is set to different interface locale, a wrong value might be set to <code>special_from_date</code>, because of the issues in parsing date format for different locales.</p>
<p>Steps to reproduce:</p>
<p>Prerequisites: the admin user locale is English (United States).</p>
<ol>
<li>Log in to Magento Admin.</li>
<li>Go to the admin user account settings.</li>
<li>Set Interface Locale to Ukrainian.</li>
<li>Click Save Account.</li>
<li>Go to Catalog &gt; Product.</li>
<li>Select any product.</li>
<li>On the product page, click Advanced Pricing.</li>
<li>Add a special price.</li>
<li>Save the product.</li>
<li>Repeat steps 7-9.</li>
<li>Go to System &gt; Action Logs.</li>
<li>Check the log for product update.</li>
</ol>
<p>Expected result:<br/> Start date for the special price should be the current date.</p>
<p>Actual result:<br/> Start date for the special price is for a date a few years in the future, preventing the special price for being active.</p>
<h2>Solution</h2>
<p>Applying the patch will prevent the issue from happening again. To correct the data for the products where date was set incorrectly, re-set the special price after applying the patch.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/article_attachments/360025650852/MDVA-11605_EE_2.2.2_COMPOSER_v1.patch">Download MDVA-11605_EE_2.2.2_COMPOSER_v1.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.2</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.1.0-2.1.18, 2.2.0-2.2.5</li>
<li>Magento Commerce Cloud 2.1.11-2.1.18, 2.2.0-2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>