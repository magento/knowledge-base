---
title: Advanced Reporting 404 error on Magento Commerce
link: https://support.magento.com/hc/en-us/articles/360038183911-Advanced-Reporting-404-error-on-Magento-Commerce
labels: Magento Commerce,patch,troubleshooting,known issues,404 error,2.2.6,Advanced Reporting
---

<p>This article provides a patch for the Magento Commerce issue when a customer gets a 404 error when they attempt to access <a href="https://docs.magento.com/m2/ee/user_guide/configuration/general/advanced-reporting.html">Advanced Reporting</a>. After this patch is installed, users will be able to access Advanced Reporting. </p>
<p>To check if this patch could solve this issue, first review the logs by using the following command:</p>
<p><code>zgrep analytics_collect_data var/log/support_report.log var/log/support_report.log.1.gz</code></p>
<p>If you see the <code>Not valid cipher</code> error, apply the attached patch. <br/> <br/> For a solution to seeing a 404 error page when trying to connect to Advanced Reporting on Magento Commerce Cloud review <a href="https://support.magento.com/hc/en-us/articles/360038498611-Advanced-Reporting-not-working-in-Magento-Commerce-Cloud">Advanced Reporting 404 error on Magento Commerce Cloud</a>.</p>
<h2>Affected products and versions</h2>
<p>Magento Commerce 2.2.6</p>
<h2>Issue</h2>
<p>A customer gets a 404 error when they attempt to access Advanced reporting. </p>
<h2>Solution </h2>
<p>To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:<br/> <br/> <a href="https://support.magento.com/hc/en-us/article_attachments/360046698871/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch">Download MDVA-18980_EE_2.2.6_COMPOSER_v1</a></p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions. </p>
<h2>Attached files</h2>