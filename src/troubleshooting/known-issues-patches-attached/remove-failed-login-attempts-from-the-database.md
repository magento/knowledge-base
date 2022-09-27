---
title: Remove failed login attempts from the database
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,database,failed login,known issues,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

>![info]
>
>This article was updated on April 13, 2020, with a new script called DB\_CLEANUP\_SCRIPT\_v2. Please use the attached DB\_CLEANUP\_SCRIPT\_v2 script to clear pre-existing failed login data in additional tables. You need to use DB\_CLEANUP\_SCRIPT\_v2, even if you have run DB\_CLEANUP\_SCRIPT\_v1 previously to help ensure additional tables are cleaned up.

This article explains how to remove pre-existing failed login credentials from the Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure database. For versions 2.2.10+ and 2.3.3+, you only need to run the attached script. For older versions 2.3.0-2.3.2-p2, you need to apply a patch to stop logging and run the attached script to remove pre-existing failed login credentials.

## **Affected products and versions**

* This issue affects Magento Open Source, Adobe Commerce on-premises, and Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x, and earlier versions.
* Adobe Commerce 1.x deployments are not affected.

## Issue

In 2019, a bug was reported to Adobe Commerce that allowed failed login attempts to be logged in a database in Adobe Commerce 2.3.x and 2.2.x. In response, Adobe Commerce included a fix for this issue in Adobe Commerce 2.3.3 and 2.2.10 (released October, 2019). While the fix for that bug stopped the logging of failed login attempts, information collected prior to updating to these current versions may still exist. This most recent fix clears the login attempts information that was previously logged, if any.   CVE-2019-8118 is described and tracked in [Common Vulnerabilities and Exposures](https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-8118).

## Solution

Whether you need to use the attached script and the patch, or just the script, depends on your version of Adobe Commerce:

 **Adobe Commerce and Magento Open Source versions 2.3.0-2.3.2-p2**

For these versions you must apply the patch and run the attached database clean-up script to end continued logging and eliminate logs.

1. Run the composer patch to stop logging. This patch is attached to the article. To download it, scroll down to the end of the article and click the file name, or click the following link [CLEANUP\_PATCH\_COMPOSER\_2.3.2.patch](assets/CLEANUP_PATCH_COMPOSER_2.3.2.patch.zip). For instructions on how to apply the patch, see [How to apply a composer patch provided by Adobe Commerce](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

1. Now run the script to clean the database of the pre-existing failed login attempts. This script is attached to the article. To download it, scroll down to the end of the article and click the file name, or click the following link [DB\_CLEANUP\_SCRIPT\_v2.php](assets/DB_CLEANUP_SCRIPT_v2.php.zip).

Please refer to the [ **How to run the script** ](https://support.magento.com/hc/en-us/articles/360040209352#run_script) section for instructions.

 **Adobe Commerce and Magento Open Source versions 2.3.3 and above/2.2.10 & above**<br>
For these versions only, run the below script to clear old logs (logging was ended previously for these versions through a fix released in October, 2019). This script is attached to the article. To download it, scroll down to the end of the article and click the file name, or click the following link [DB\_CLEANUP\_SCRIPT\_v2.php](assets/DB_CLEANUP_SCRIPT_v2.php.zip).

Please refer to the [ **How to run the script** ](https://support.magento.com/hc/en-us/articles/360040209352#run_script) section in our support knowledge base, for instructions.

 **How to run the script**

Please follow the below instructions to run the script:

1. Put `DB_CLEANUP_SCRIPT_v2.php` in the root directory of the Adobe Commerce or Magento Open Source installation (in the same directory as app which contains `app/bootstrap.php`).
1. Run this command in the terminal: `php DB_CLEANUP_SCRIPT_v2.php` and it will begin the database clean up process.

If you encounter any issues while running the script, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) or email us at [security@magento.com](mailto:security@magento.com).

 **Attached files**

[CLEANUP\_PATCH\_COMPOSER\_2.3.2.patch](assets/CLEANUP_PATCH_COMPOSER_2.3.2.patch.zip)

[DB\_CLEANUP\_SCRIPT\_v2.php](assets/DB_CLEANUP_SCRIPT_v2.php.zip)
