---
title: Update Advanced Reporting to run on its own cron group
labels: 2.3.0,Advanced Reporting,Magento Commerce Cloud,known issues,no data,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a patch for the known issue for Adobe Commerce on cloud infrastructure 2.3.0 where Advanced Reporting is not showing any data. This is because Advanced Reporting job `analytics_collect_data` is not executed according to schedule. This article provides a patch that will create an Advanced Reporting cron group `analytics`.

## Issue

No data is loaded into the Advanced Reporting module.

## Patch

The patch is attached to this article. The patch moves the `analytics` cron job tasks from default group into `analytics`.

To download it, scroll down to the end of the article and click the file name, or click the following link:

 [MDVA-19640\_EE\_2.3.0\_COMPOSER\_v1.patch](assets/MDVA-19640_EE_2.3.0_COMPOSER_v1.patch.zip)

After applying the patch run the following SQL query. The query has to be run to change records in `cron_schedule` table.

```clike
UPDATE core_config_data
SET `path` = REPLACE(path, "crontab/default/jobs/analytics", "crontab/analytics/jobs/analytics")
WHERE `path` LIKE "crontab/default/jobs/analytics%";
```

### Compatible Adobe Commerce versions:

The patch was created for

* Adobe Commerce on cloud infrastructure 2.3.0

The patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions: 2.2.2-2.2.10, 2.3.0-2.3.2 and 2.3.2-p2 and 2.3.3, for Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure

## How to apply the patch

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

## Attached files
