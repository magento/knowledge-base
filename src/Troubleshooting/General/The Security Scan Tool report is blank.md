---
title: The Security Scan Tool report is blank
link: https://support.magento.com/hc/en-us/articles/360029224131-The-Security-Scan-Tool-report-is-blank
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,security scan
---

<p>This article provides a fix for the issue where the Security Scan Tool shows a blank page instead of the actual report. To resolve it, you might need to add the IPs used by the Tool to the firewall AllowList.</p>
<h3>Affected products and versions:</h3>
<ul>
<li>Magento Commerce, Magento Open Source</li>
<li>All versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Configure the Security Scan Tool to check your website, as described in <a href="https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html">https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html</a>.</li>
<li>In the Actions column, select Run Scan.</li>
</ol>
<p>Expected result:</p>
<p>View the report completion notification and ability to open the report.</p>
<p>Actual result:</p>
<p>No notification and no report available. </p>
<h2>Cause</h2>
<p>This issue might appear because the Security Scan Tool was not able to reach your website. This means either the website is down and cannot be reached at all, or the Security Scan Tool is being blocked.</p>
<h2>Solution</h2>
<p>Try to open your web site.</p>
<ul>
<li>If the page loads successfully, you might need to add the IPs used by the Security Scan Tools to the firewall AllowList. The following IPs are used: 52.72.230.169, 52.87.98.44, 52.86.204.1, at ports 80 and 443.</li>
<li>If the site doesn't load and returns the <em>"There has been an error processing your request"</em> message, check your website for possible errors.</li>
</ul>
<h2>Related reading </h2>
<ul>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/cloud/live/live.html?_ga=2.73579601.273749082.1559572284-888339099.1547722854#security-scan">Go live and launch</a> on Magento DevDocs</li>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html">Security Scan</a> on Magento Merchant Docs</li>
</ul>
<p> </p>
<p> </p>
<p> </p>
<p> </p>