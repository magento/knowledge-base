This article talks about the issue where the Security Scan Tool shows a blank page instead of the actual report. To resolve it, you might need to add the IPs used by the Tool to the firewall whitelist.

### Affected products and versions:

*   Magento Commerce, Magento Open Source
*   All versions

## Issue

<span class="wysiwyg-underline">Steps to reproduce:</span>

1.   Configure the Security Scan Tool to check your website, as described in&nbsp;<a href="https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html" target="_self">https://docs.magento.com/m2/ee/user\_guide/magento/security-scan.html</a>.
2.   In the Actions column, select __Run Scan__.

<span class="wysiwyg-underline">Expected result:</span>

View the report completion notification and ability to open the report.

<span class="wysiwyg-underline">Actual result:</span>

No notification and no report available.&nbsp;

## Cause

This issue might appear because&nbsp;the Security Scan Tool was not able to reach your website. This means either the website is down and cannot be reached at all, or the Security Scan Tool is being blocked.

## Solution

Try to open your web site.

*   If the page loads successfully, you might need to add the IPs used by the Security Scan Tools to the firewall whitelist. The following IPs are used:&nbsp;52.72.230.169,&nbsp;52.87.98.44,&nbsp;52.86.204.1, at ports&nbsp;80 and 443.
*   If the site doesn't load and returns the _"There has been an error processing your request"_ message, check your website for possible errors.

## Related reading&nbsp;

*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/live/live.html?_ga=2.73579601.273749082.1559572284-888339099.1547722854#security-scan" target="_self">Go live and launch</a> on Magento DevDocs
*   <a href="https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html" target="_self">Security Scan</a> on Magento Merchant Docs

&nbsp;
&nbsp;
&nbsp;
&nbsp;