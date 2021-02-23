---
title: 'Area code is not set' error when running setup:updgrade
link: https://support.magento.com/hc/en-us/articles/360025918872--Area-code-is-not-set-error-when-running-setup-updgrade
labels: Magento Commerce Cloud,patch,troubleshooting,known issues,2.2.3,setup:upgrade
---

<p>This article provides a patch for the known Magento Commerce Cloud 2.2.3 issue related to getting the <em>"Area code is not set"</em> error when running the <code class="language-bash">setup:upgrade</code> command.</p>
<p class="info">The issue was fixed in Magento Commerce 2.2.4.</p>
<h2>Issue</h2>
<p>When running the <code class="language-bash">bin/magento setup:upgrade</code> command, you get the following error message: <em>"Module 'Magento_AdvancedSalesRule': Installing data...Area code not set: Area code must be set before starting a session" </em>and the command execution is interrupted. The issue appears because area configuration is requested before it is actually set. The patch allows catching the error and not interrupting the upgrade process.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360025885651/MDVA-10439_EE_2.2.3_COMPOSER_v1.patch">Download MDVA-10439_EE_2.2.3_COMPOSER_v1.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce Cloud 2.2.3</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce Cloud, Magento Commerce</li>
<li>2.2.0-2.2.3</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>