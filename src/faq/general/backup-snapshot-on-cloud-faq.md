---
title: "Backup (snapshot) on Cloud: FAQ"
labels: 2.2.x,2.3.x,FAQ,Magento Commerce Cloud,Pro,Pro Legacy,Starter,backup,production,snapshot,staging,Adobe Commerce,cloud infrastructure
---

This article covers the essentials of backing up your environments with snapshots on Adobe Commerce on cloud infrastructure.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x
* Architecture plans:  Starter, Pro Legacy, Pro

## Environment snapshot, Pro plan

### Staging and Production environments

* Your Staging and Production environments are automatically backed up with snapshots **every hour**.
* Automatic snapshots are created **regardless of the live state** of your site (snapshots also created for sites that have not been launched yet).
* Environment snapshots include your full system (file system and the database).
* Manual snapshots are not available for Staging and Production environments on Pro plan.
* The backups are created using the **encrypted Amazon Web Services Elastic Block Store (AWS EBS) snapshots**.
* Retention time for automatic snapshots **is different** and follows [the schedule](https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery).

### Integration (Development) environment

* Your [Integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter) is **not being backed up automatically** , but you may create snapshots **manually**.
* You can create manual snapshots for Integration environments on non-live stores.
* You may have **multiple snapshots** that have been triggered manually.
* A manually triggered snapshot is stored for **7 days** .

 **Related articles in our developer documentation:**  

* [Backup and disaster recovery](https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery)
* [Create a snapshot](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#create-snapshot)

## Environment snapshot, Starter plan

* All types of environments (Integration, Staging, Production)**are not being backed up automatically**, but you may create snapshots manually.
* You may create manual snapshots **regardless of the live state** of your site (snapshots also created for sites that have not been launched yet).
* A manually triggered snapshot is stored for **7 days** .

## Restore an environment snapshot

To restore an existing snapshot, follow the steps in [Snapshots and backup management: Restore a snapshot](https://devdocs.magento.com/cloud/project/project-webint-snap.html#restore-snapshot) in our developer documentation.

## Database (DB) backup

DB backup is a part of a Cloud snapshot:

>
A snapshot is a complete backup of an environment that includes all persistent data from all running services (for example, **your MySQL database** , Redis, and so on) and any files stored on the mounted volumes.

[Snapshots and backup management](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html) in our developer documentation.

If, for any reason, you need to backup your DB only (on any environment), see the knowledge base article: [Generate database dumps on Cloud](https://support.magento.com/hc/en-us/articles/360003254334).
