---
title: Performance issues caused by excessive Ajax requests 
link: https://support.magento.com/hc/en-us/articles/360041095391-Performance-issues-caused-by-excessive-Ajax-requests-
labels: Magento Commerce Cloud,Magento Commerce,patch,performance,troubleshooting,known issues,banner,2.3.x,2.2.x
---

<p>This article provides a patch for the known Magento Commerce performance issue caused by excessive Ajax requests.</p>
<p>The issue was fixed in Magento Commerce 2.3.4.</p>
<h2>Issue</h2>
<p>Magento might be sending redundant Ajax requests from the storefront to the server, to get the banner information and customer information. These Ajax requests have a performance impact, especially in high-load (high-volume and high-traffic) conditions. So if the Banner functionality is not used, it is recommended that you completely <a href="https://support.magento.com/hc/en-us/articles/360035285852">disable the Magento Banner module output</a> and apply the patch to improve retrieving customer information.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360052613331/MDVA-24597_EE_2.2.9_COMPOSER_v1.patch">Download the MDVA-24597_EE_2.2.9_COMPOSER_v1.patch</a></p>
<h3>Compatible Magento versions</h3>
<p>The patch is valid for the following products and versions:</p>
<ul>
<li>Magento Commerce Cloud 2.2.9 and Magento Commerce 2.2.9</li>
</ul>
<p>If you have a different version of Magento Commerce, consider updating to the latest 2.3.x release. If this is not an option currently, please <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">contact Magento Support</a> and request a patch for your version.</p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>