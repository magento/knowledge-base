---
title: The Security Scan Tool report is blank
link: https://support.magento.com/hc/en-us/articles/360029224131-The-Security-Scan-Tool-report-is-blank
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,security scan
---

This article provides a fix for the issue where the Security Scan Tool shows a blank page instead of the actual report. To resolve it, you might need to add the IPs used by the Tool to the firewall AllowList.

### Affected products and versions:

* Magento Commerce, Magento Open Source

* All versions

## Issue

Steps to reproduce:

1. Configure the Security Scan Tool to check your website, as described in <https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html>.

1. In the Actions column, select **Run Scan**.

Expected result:

View the report completion notification and ability to open the report.

Actual result:

No notification and no report available.

## Cause

This issue might appear because the Security Scan Tool was not able to reach your website. This means either the website is down and cannot be reached at all, or the Security Scan Tool is being blocked.

## Solution

Try to open your web site.

* If the page loads successfully, you might need to add the IPs used by the Security Scan Tools to the firewall AllowList. The following IPs are used: 52.72.230.169, 52.87.98.44, 52.86.204.1, at ports 80 and 443.

* If the site doesn't load and returns the *"There has been an error processing your request"* message, check your website for possible errors.

## Related reading

* 
[Go live and launch](https://devdocs.magento.com/guides/v2.3/cloud/live/live.html?_ga=2.73579601.273749082.1559572284-888339099.1547722854#security-scan) on Magento DevDocs

* 
[Security Scan](https://docs.magento.com/m2/ee/user_guide/magento/security-scan.html) on Magento Merchant Docs









