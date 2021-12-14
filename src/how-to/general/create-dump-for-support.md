---
 title: How to create a "scrubbed" dump when requested by support agent
 labels: Adobe Commerce,how to,dump,scrubbed,support,cloud infrastructure,on-premises,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1-p1,2.4.2,2.4.2-p1,2.3.7-p1,2.3.7-p2,2.4.1,2.4.2-p2,2.4.3,2.4.3-p1
---
This article provides information on how to create a "scrubbed" dump (backup) of your database and code from the Adobe Commerce Admin when requested to provide one by an Adobe Commerce support agent. This dump excludes your media files to speed up the process and to result in a much smaller file. All sensitive data is hashed when making the database backup.

## Affected products and versions

Adobe Commerce (all deployment methods) 2.3.x, 2.4.x.

## Create a "scrubbed" dump

Create a "scrubbed" dump from the Admin:

1. In the Commerce Admin, go to **System** > **Support** > **Data Collector**.
1. Click **New Backup**.
1. After a few minutes, click **Refresh Status** (may take longer, repeat every 5 minutes until completed).
1. Relocate the generated dump files from the `/var/support` directory to the Adobe Commerce root directory.

You can then provide to Support the direct download link to the dump files (your store address and the file name as displayed).

If you have issues creating dumps from the Admin, consider using CLI commands as described in [Run the support utilities](https://devdocs.magento.com/guides/v2.4/config-guide/cli/config-cli-subcommands-spt-util.html) in our developer documentation.

## Related reading

* [Create full database backup for Adobe Commerce on cloud infrastructure](https://support.magento.com/hc/en-us/articles/360003254334) in our support knowledge base.
