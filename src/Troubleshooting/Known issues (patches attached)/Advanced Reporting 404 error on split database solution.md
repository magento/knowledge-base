---
title: Advanced Reporting 404 error on split database solution
link: https://support.magento.com/hc/en-us/articles/360044725072-Advanced-Reporting-404-error-on-split-database-solution
labels: Magento Commerce,patch,troubleshooting,known issues,404 error,Advanced Reporting,2.3.x
---

<p>This article provides a patch for Magento Commerce 2.3.x users with the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master.html">split database solution</a> that experience a 404 error when trying to use Advanced Reporting. </p>
<h2>Affected products and versions</h2>
<p>Magento Commerce, all v2.3.x (v2.3.0 through v2.3.5-p1)</p>
<h2>Issue</h2>
<p>The patch fixes the issue where the wrong connection name is used to collect quotes data. Due to the wrong connection name being used, the quote data is not sent to Magento Business Intelligence (MBI) and the reports cannot be generated.</p>
<h2>Solution</h2>
<p>Apply the <a href="https://support.magento.com/hc/en-us/article_attachments/360059846152/MDVA-26831_EE_2.3.4_v1.composer.patch">patch</a> provided in this article.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360059846152/MDVA-26831_EE_2.3.4_v1.composer.patch">MDVA-26831_EE_2.3.4_v1.composer.patch</a></p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>