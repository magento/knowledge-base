This article provides a patch for the known Magento Commerce Cloud 2.2.1 issue related to having low site and API performance caused by a long time required to write `` debug.log ``.

## Issue

Site performance is slow. API operations run slowly, for example updating products using the `` PUT `` method. When you take a closer look at the operations using NewRelic, most memory and CPU is consumed by writing to `` /var/log/debug.log ``.

## Solution

To solve the issue, apply the patch. The patch&nbsp;splits and writes the log, payment, and shipping methods logs to separate files.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360025304332/MDVA-8371_EE_2.2.1_COMPOSER_v2.patch" rel="noopener" target="_blank">Download MDVA-8371\_EE\_2.2.1\_COMPOSER\_v2.patch</a>

### Compatible Magento versions

The patch was created for:

*   Magento Commerce Cloud 2.2.1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce Cloud,&nbsp;Magento Commerce
*   2.2.0, 2.2.2, 2.2.3

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files