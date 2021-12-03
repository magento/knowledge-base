---
 title: How to create a dump when requested by support agent
 labels: Adobe Commerce,how to,Adobe Commerce,dump
---
This article provides information on how to create a "scrubbed" dump of your database from the Admin, when requested to provide one by an Adobe Commerce support agent. This dump will not contain/will contain only..

Create a "scrubbed" dump:

1. In the Commerce Admin, go to **System** > **Support** > **Data Collector**.
1. Click **New Backup**.
1. After a few minutes, click **Refresh Status** (may take longer, repeat every 5 minutes until completed).
1. Relocate the generated dump files from the `/var/support` directory to the Adobe Commerce root directory.

You can then provide to Support the direct download link to the dump files (your store address and the file name as displayed).
