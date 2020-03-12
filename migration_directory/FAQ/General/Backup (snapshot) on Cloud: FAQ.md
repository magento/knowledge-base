This article covers the essentials of backing up your environments with snapshots on Magento Commerce (Cloud).

## Affected versions

Magento Commerce Cloud:

*   __Version:__ 2.1.X, 2.2.X, 2.3.X
*   __Plan:__ Starter, Pro Legacy, and Pro

## Environment snapshot, Pro plan

### Staging and Production environments

*   Your Staging and Production environments are automatically backed up with snapshots __every__ __6 hours__.
*   Automatic snapshots are created __regardless of the live state __of your site (snapshots also created for sites that have not been launched yet).
*   Environment snapshots include your full system (file system and the database).
*   Manual snapshots are not available for Staging and Production environments on Pro plan.
*   The backups are created using the __encrypted Amazon Web Services Elastic Block Store (AWS EBS) snapshots__.
*   Retention time for automatic snapshots __is different__ and follows [the schedule](https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery).

### Integration (Development) environment

*   Your Integration environment is __not being backed up automatically__, but you may create snapshots __manually__.
*   You can create manual snapshots for Integration environments on non-live stores.
*   You may have __multiple snapshots__ that have been triggered manually.
*   A manually triggered snapshot is stored for __7 days__.

__Related documentation&nbsp;on DevDocs:__&nbsp;

*   [Backup and disaster recovery](https://devdocs.magento.com/guides/v2.2/cloud/architecture/pro-architecture.html#backup-and-disaster-recovery)
*   [Create a snapshot](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html#create-snapshot)

## Environment snapshot, Starter plan

*   All types of environments (Integration, Staging, Production) __are not being backed up automatically__, but you may create snapshots manually.
*   You may create manual snapshots __regardless of the live state__ of your site (snapshots also created for sites that have not been launched yet).
*   A manually triggered snapshot is stored for __7 days__.

## Restore an environment snapshot

The snapshots are not visible in the Project Web Interface of your Magento Commerce Cloud project, thus you cannot restore them manually.

To restore an existing snapshot, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting this operation. Please kindly make sure to provide as many details about the requested snapshot (project ID, date and time, etc.) as you find reasonably possible.

## Database (DB) backup

DB backup is a part of a Cloud snapshot:

>  
> A snapshot is a complete backup of an environment that includes all persistent data from all running services (for example, __your MySQL database__, Redis, and so on) and any files stored on the mounted volumes.
> 
> [Snapshots and backup management](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-snap.html) (DevDocs)
> 

If, for any reason, you need to backup your DB only (on any environment), see the Knowledge Base article: [Generate database dumps on Cloud](https://support.magento.com/hc/en-us/articles/360003254334).