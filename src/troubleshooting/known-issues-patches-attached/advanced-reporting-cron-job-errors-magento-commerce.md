---
title: Advanced Reporting cron job errors Adobe Commerce
labels: 2.3.1,404,Magento Commerce,Magento Commerce Cloud,advanced reporting,known issue,patch,troubleshooting,2.3.4-p2,2.3.4,2.3.3-p1,2.3.3,2.3.2-p2,2.3.2,2.3.0
---

This article provides patches for the Advanced Reporting cron jobs issues in Adobe Commerce, which can cause a 404 error for customers trying to access Advanced Reporting.

## Affected products and versions

Adobe Commerce (all deployment options) 2.3.x

## Issue

A customer gets a 404 error when they attempt to access Advanced Reporting and there are errors in the logs associated to `analytics_collect_data job` .

## Compatible Magento versions:

The patches are compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* [MDVA-19391\_EE\_2.3.1\_COMPOSER\_v1.patch](assets/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch.zip): Adobe Commerce (all deployment options) 2.3.1-2.3.4-p2
* [MDVA-18980\_EE\_2.2.6\_COMPOSER\_v1.patch](assets/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch.zip): Adobe Commerce (all deployment options) 2.3.0
* [MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch](assets/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch.zip): Adobe Commerce (all deployment options) 2.3.0

## **Solution**

To fix the issue, please apply the relevant patch attached to this article. To download it, click the following links:

* Download [MDVA-19391\_EE\_2.3.1\_COMPOSER\_v1.patch](assets/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch.zip)
* Download [MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch](assets/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch.zip)
* Download [MDVA-18980\_EE\_2.3.1\_COMPOSER\_v1.patch](assets/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch.zip)

To check which patch to use:

<ol><li>Review the logs by using the following command:<code>grep analytics_collect_data var/log/support_report.log var/log/support_report.log.1.gz</code>
</li><li>Depending on the error you see, select a patch using the information from the following table.<table style="width: 826px;">
<tbody>
<tr>
<td class="wysiwyg-text-align-center">
<p>Error</p>
</td>
<td class="wysiwyg-text-align-center">Patch</td>
</tr>
<tr>
<td>
<pre>report.CRITICAL: Error when running a cron job {"exception":"[object] (RuntimeException(code:
  0): Error when running a cron job at /srv/public_html/vendor/magento/module-cron/Observer/ProcessCronQueueObserver.php:327,
  TypeError(code: 0): substr_count() expects parameter 1 to be string, null given
  at /srv/public_html/vendor/magento/module-page-builder-analytics/Model/ContentTypeUsageReportProvider.php:106)"}
  []</pre>OR<pre>report.ERROR: Cron Job analytics_collect_data has an error: substr_count() expects
  parameter 1 to be string, null given. Statistics: {"sum":0,"count":1,"realmem":0,"emalloc":0,"realmem_start":224919552,"emalloc_start":216398384}
  [] []</pre>
<p> </p>
</td>
<td>Apply<a href="assets/MDVA-19391_EE_2.3.1_COMPOSER_v1.patch">MDVA-19391_EE_2.3.1_COMPOSER_v1.patch.zip</a>, clear cache and wait 24 hours for the job to run again and try again.</td>
</tr>
<tr>
<td>
<p><em>Failed to open file /tmp/analytics/tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../tmp/../</em></p>
</td>
<td>Apply<a href="assets/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch">MDVA-15136_EE_2.2.6_COMPOSER_v1.patch.zip</a>, clear cache and wait 24 hours for the job to run again and try again.</td>
</tr>
<tr>
<td><em>Not valid cipher</em></td>
<td>Apply<a href="assets/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch">MDVA-18980_EE_2.2.6_COMPOSER_v1.patch.zip</a>, clear cache and wait 24 hours for the job to run again and try again.</td>
</tr>
</tbody>
</table>
</li></ol>

## How to apply the patch

Unzip the file and follow instructions in [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731).
