---
title: Upgrade MariaDB 10.0 to 10.2 for Adobe Commerce on cloud
labels: 2.3.x,2.4.x,End of Life,Magento Commerce Cloud,MariaDB,MariaDB 10.0,MariaDB 10.1,MariaDB 10.2,MariaDB 10.3,MariaDB 10.4,database,ece-tools,how to,tables,update,upgrade, Adobe Commerce,cloud infrastructure
---

MariaDB 10.0 and 10.1 are end-of-life (EOL). [Support ended 31 Mar 2019 and 17 Oct 2020 respectively](https://endoflife.date/mariadb). This article explains how to upgrade MariaDB from 10.0 to 10.2 or 10.2 to 10.3 or to 10.4, in order to use Adobe Commerce on cloud infrastructure.

>![info]
>
>MariaDB 10.0 is end-of-life (EOL) and is not supported in current Adobe Commerce versions. It is best practice to move off any EOL version within 30 days of its EOL.

## Affected product and versions

* MariaDB 10.2 is recommended for Adobe Commerce on cloud infrastructure 2.3.x.
* MariaDB 10.4 is recommended for 2.4.x. MariaDB 10.3 is also compatible with Adobe Commerce on cloud infrastructure 2.4.x.

## Upgrade steps

To upgrade from MariaDB 10.0 to 10.2 or 10.2 to 10.3 or to 10.4, complete the following steps:

1. Create a [DB backup using ECE-Tools DB backup commands](https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump). This must be done before steps 2 and 3 in case something goes wrong while updating tables/rows.
1. [Check and convert all compact tables to dynamic tables](https://support.magento.com/hc/en-us/articles/360048389631). This is required to avoid potential data loss during the database upgrade.
1. Check for MYISAM tables. You need to [convert all MyISAM tables to InnoD](https://support.magento.com/hc/en-us/articles/360041997312#convert).
1. After you have prepared the database tables and rows (the previous two steps), create a [DB backup using ECE-Tools DB backup commands](https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump).
1. [Open a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) to schedule the upgrade from MariaDB 10.0 to 10.2 or 10.2 to 10.3 or 10.4. In the ticket detail the date and time when you want the DB upgraded. The support team needs 48 hours' notice and the merchants dev team needs to be available. Once the time and date are agreed for the upgrade, do the following:
    1. Put your site into maintenance mode, and stop any DB activities, e.g., crons.
    1. Create a [DB backup using ECE-Tools DB backup commands](https://devdocs.magento.com/cloud/project/project-webint-snap.html#db-dump).
    1. Let support know you have completed the backup. Do this via your support ticket. To get steps for viewing and tracking your tickets, refer to [Adobe Commerce Help Center User Guide: Track your Tickets](https://support.magento.com/hc/en-us/articles/360000913794#track-tickets) in our support knowledge base.
    1. The Adobe Commerce support team will begin the MariaDB upgrade process. If all the above steps have been taken, and the database is average size, this can be done in about an hour. Larger DBs will take longer. You will be informed via your ticket once the upgrade is complete.
1. Disable maintenance mode. Refer to [Enable or disable maintenance mode](https://devdocs.magento.com/guides/v2.4/install-gde/install/cli/install-cli-subcommands-maint.html#instgde-cli-maint) in our developer documentation.

## Related Reading

To learn more about requirements for Adobe Commerce 2.4.x, refer to [Adobe Commerce 2.4 system requirements > Database](https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html#database) in our developer documentation.
