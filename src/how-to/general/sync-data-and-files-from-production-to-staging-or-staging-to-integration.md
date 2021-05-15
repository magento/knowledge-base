---
title: Sync data and files from Production to Staging or Staging to Integration
labels: Magento Commerce Cloud,data,how to,production,staging,sync
---

This article explains how to synchronize your Production environment down to Staging on Magento Commerce Cloud, this is possible via user interface.

## Affected products and versions

* Magento Commerce Cloud 2.3.x, 2.4.x.

## To sync data from one environment to another

To sync the data, you must manually dump the database from the source environment. To transfer data to another environment, you must then upload the source dump to the target environment and import it. For more information, see [Import Magento Commerce code into a Cloud project > Import Magento database](https://devdocs.magento.com/cloud/live/stage-prod-migrate.html#cloud-live-migrate-db) .

For Pro plan, you can also sync from Staging and Production to your Integration master branch. This sync only pulls and pushes code, not data. To sync data, you will need to dump the database data and push it to another environment's database.

## To sync files from one environment to another

To sync files from one environment to another, use the `rsync` command. For more information, see [Deploy code and migrate static files and data > Migrate files using rsync](https://devdocs.magento.com/cloud/live/stage-prod-migrate.html#migrate-files-using-rsync) in Magento Developer Documentation.

>![info]
>
>If you want to sync the code from Integration to Staging, you must do it from the Integration branch. For steps, see [Sync from the environment’s parent](https://devdocs.magento.com/cloud/project/project-webint-branch.html#project-branch-sync) in Magento Developer Documentation.