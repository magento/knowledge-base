---
title: Multiple cron jobs scheduled for the same time period
labels: 2.1.13,2.1.14,2.1.4,2.1.5,2.2.0,2.2.2,2.2.4,Magento Commerce,cron,known issues,patch,troubleshooting
---

This article provides a patch for a known Magento Commerce 2.2.2 issue related to having multiple cron jobs scheduled to run at the same time after the time variables for certain tasks were edited in the Magento Admin.

## Issue

When cron is configured to run every minute, if you edit time variables for three scheduled tasks in Admin, the `cron_schedule` database table shows groups of multiple tasks scheduled to run at the same time.

 <span class="wysiwyg-underline">Steps to reproduce</span> :

1. In Magento Admin, navigate to **Stores** > Settings > **Configuration** > **ADVANCED** > **System** > **Cron (Scheduled Tasks)** > **Cron configuration options for group: default.**
1. Configure the following options:

* **History Cleanup Every** : clear the **Use system** checkbox, and set to *1440*
* **Success History Lifetime** : clear the **Use system** checkbox, and set to *1440*
* **Failure History Lifetime** : clear the **Use system** checkbox, and set to *1440*

1. Click **Save Config** .

1. In SSH, run the `crontab -e` command.

1. Set cron to run every minute.

1. Open three terminal tabs/windows.

1. Go to the Magento `root/base/project` directory in each terminal window.

1. Run the following command in each tab/window:

```bash
bin/magento cache:flush && bin/magento cron:run && bin/magento cache:flush && bin/magento cron:run
```

1. Go to MySQL and run the following query:

```sql
SELECT job_code, scheduled_at, count as count FROM cron_schedule GROUP BY job_code, scheduled_at HAVING count > 1 ORDER BY scheduled_at;
```

1. See groups of tasks scheduled to run at the same time.

 <span class="wysiwyg-underline">Expected result</span> : One cron `job_code` should be scheduled for the certain time period.

 <span class="wysiwyg-underline">Actual result</span> : There are multiple cron jobs scheduled for the same time period.

## Solution

For Magento Commerce Cloud customers, [updating the ECE-tools](https://devdocs.magento.com/guides/v2.2/cloud/project/ece-tools-update.html) will solve the issue.

Magento Commerce customers should apply one of the attached patches to solve the issue.

## Patches

The patches are attached to this article. To download, scroll down to the end of the article and click the file name, or click one the following link:

* [Download MDVA-11304\_EE\_2.1.4\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025797991/MDVA-11304_EE_2.1.4_COMPOSER_v1.patch)
* [Download MDVA-11304\_EE\_2.1.5\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025798031/MDVA-11304_EE_2.1.5_COMPOSER_v1.patch)
* [Download MDVA-11304\_EE\_2.1.13\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786332/MDVA-11304_EE_2.1.13_COMPOSER_v1.patch)
* [Download MDVA-11304\_EE\_2.1.14\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025798071/MDVA-11304_EE_2.1.14_COMPOSER_v1.patch)
* [Download MDVA-11304\_EE\_2.2.0\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786392/MDVA-11304_EE_2.2.0_COMPOSER_v1.patch)
* [Download MDVA-11304\_EE\_2.2.2\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786432/MDVA-11304_EE_2.2.2_COMPOSER_v1.patch)
* [Download MDVA-11304\_EE\_2.2.4\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786472/MDVA-11304_EE_2.2.4_COMPOSER_v1.patch)

### Compatible Magento versions

The patches were created for particular version noted in the patch file name. For example, MDVA-11304\_EE\_2.2.4\_COMPOSER\_v1.patch was created for Magento Commerce 2.2.4 and is the best patch to be used for this version.

The patches are also compatible with the following versions:

* For Magento Commerce 2.1.0-2.1.4: [Download MDVA-11304\_EE\_2.1.4\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025797991/MDVA-11304_EE_2.1.4_COMPOSER_v1.patch) The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:    
    * Magento Commerce (Cloud) 2.1.0-2.1.4
* For Magento Commerce 2.1.5-2.1.12: [Download MDVA-11304\_EE\_2.1.5\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025798031/MDVA-11304_EE_2.1.5_COMPOSER_v1.patch) The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:    
    * Magento Commerce (Cloud) 2.1.5-2.1.12
* For Magento Commerce (Cloud) 2.1.13: [Download MDVA-11304\_EE\_2.1.13\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786332/MDVA-11304_EE_2.1.13_COMPOSER_v1.patch)
* For Magento Commerce 2.1.14-2.1.17: [Download MDVA-11304\_EE\_2.1.14\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025798071/MDVA-11304_EE_2.1.14_COMPOSER_v1.patch) The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:    
    * Magento Commerce 2.1.18
    * Magento Commerce (Cloud) 2.1.14-2.1.18
* For Magento Commerce 2.2.0-2.2.1: [Download MDVA-11304\_EE\_2.2.0\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786392/MDVA-11304_EE_2.2.0_COMPOSER_v1.patch) The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:    
    * Magento Commerce (Cloud) 2.2.0-2.2.1
* For Magento Commerce 2.2.0-2.2.3: [Download MDVA-11304\_EE\_2.2.2\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786432/MDVA-11304_EE_2.2.2_COMPOSER_v1.patch) The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:    
    * Magento Commerce (Cloud) 2.2.0-2.2.3
* For Magento Commerce 2.2.4: [Download MDVA-11304\_EE\_2.2.4\_COMPOSER\_v1.patch](https://support.magento.com/hc/en-us/article_attachments/360025786472/MDVA-11304_EE_2.2.4_COMPOSER_v1.patch) The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:    
    * Magento Commerce (Cloud) 2.2.4

## How to apply the patch

See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached Files
