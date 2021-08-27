---
title: Advanced Reporting 404 error on Magento Commerce
labels: 2.2.6,404 error,Advanced Reporting,Magento Commerce,known issues,patch,troubleshooting
---

This article provides a patch for the Magento Commerce issue when a customer gets a 404 error when they attempt to access [Advanced Reporting](https://docs.magento.com/m2/ee/user_guide/configuration/general/advanced-reporting.html). After this patch is installed, users will be able to access Advanced Reporting.

To check if this patch could solve this issue, first review the logs by using the following command:

 `zgrep analytics_collect_data var/log/support_report.log var/log/support_report.log.1.gz`

If you see the `Not valid cipher` error, apply the attached patch.

## Affected products and versions

Magento Commerce 2.2.6

## Issue

A customer gets a 404 error when they attempt to access Advanced reporting.

## Solution

To fix the issue, please apply the patch attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link: [Download MDVA-18980\_EE\_2.2.6\_COMPOSER\_v1](assets/MDVA-18980_EE_2.2.6_COMPOSER_v1.patch.zip)

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached files
