---
title: Unable to validate VAT number - Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360043471592-Unable-to-validate-VAT-number-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,patch,troubleshooting,known issues,vat error,2.3.x
---

<p>This article provides a patch for the issue where there is an error during VAT number verification.</p>
<h2>Affected products and versions</h2>
<p>All Magento Commerce and Magento Commerce Cloud versions up to 2.3.6 (including 2.3.5-p1) were affected, including already released p1 and p2 versions. This includes:</p>
<ul>
<li>2.3.5-p1</li>
<li>2.3.5</li>
<li>2.3.4 - 2.3.4-p2</li>
<li>2.3.3-2.3.3-p1</li>
<li>2.3.2 -2.3.2-p2</li>
<li>2.0.0 - 2.3.1</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Go to Stores &gt; Configuration &gt; Customers &gt; Customer Configuration &gt; Create New Account Options and set Enable Automatic Assignment to Customer Group to <em>Yes</em>. </li>
<li> Go to General &gt; Store Information &gt; and set a valid Country and VAT Number.</li>
<li> Click on Validate VAT Number.</li>
</ol>
<p>Expected result:</p>
<p>Validation is successful.</p>
<p>Actual result:</p>
<p>The following error is displayed: "<em>Error during VAT Number verification.</em>"</p>
<h2>Solution</h2>
<p>Apply the <a href="https://support.magento.com/hc/en-us/article_attachments/360058272591/MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch">patch</a> provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360058272591/MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch">MDVA-27623_EE_2.3.2-p2_COMPOSER_v1.patch</a></p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>