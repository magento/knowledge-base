---
title: Advanced Reporting 404 error on split database solution
link: https://support.magento.com/hc/en-us/articles/360044725072-Advanced-Reporting-404-error-on-split-database-solution
labels: Magento Commerce,patch,troubleshooting,known issues,404 error,Advanced Reporting,2.3.x
---

This article provides a patch for Magento Commerce 2.3.x users with the [split database solution](https://devdocs.magento.com/guides/v2.3/config-guide/multi-master/multi-master.html) that experience a 404 error when trying to use Advanced Reporting.

## Affected products and versions

Magento Commerce, all v2.3.x (v2.3.0 through v2.3.5-p1)

## Issue

The patch fixes the issue where the wrong connection name is used to collect quotes data. Due to the wrong connection name being used, the quote data is not sent to Magento Business Intelligence (MBI) and the reports cannot be generated.

## Solution

Apply the [patch](https://support.magento.com/hc/en-us/article_attachments/360059846152/MDVA-26831_EE_2.3.4_v1.composer.patch) provided in this article.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

[MDVA-26831\_EE\_2.3.4\_v1.composer.patch](https://support.magento.com/hc/en-us/article_attachments/360059846152/MDVA-26831_EE_2.3.4_v1.composer.patch)

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files

