This article provides a patch for the known Magento Commerce Cloud 2.2.3 issue related to getting the _"Area code is not set"_ error when running the <code class="language-bash">setup:upgrade</code> command.

<p class="info">The issue was fixed in Magento Commerce 2.2.4.</p>

## Issue

When running the <code class="language-bash">bin/magento setup:upgrade</code> command, you get the following error message: _"Module 'Magento\_AdvancedSalesRule': Installing data...Area code not set: Area code must be set before starting a session" _and the command execution is interrupted. The issue appears because area configuration is requested before it is actually set. The patch allows catching the error and not interrupting the upgrade process.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360025885651/MDVA-10439_EE_2.2.3_COMPOSER_v1.patch" rel="noopener" target="_blank">Download MDVA-10439\_EE\_2.2.3\_COMPOSER\_v1.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce Cloud 2.2.3

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce Cloud, Magento Commerce
*   2.2.0-2.2.3

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files