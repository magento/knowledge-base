---
title: Safely delete files when disk run out of space in Adobe Commerce on cloud infrastructure
labels: troubleshooting,disk,disk space,Magento Commerce Cloud,space,data,file,Adobe Commerce,cloud infrastructure,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7,2.3.7-p2,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,Pro
---
This article provides a solution for when you run out of disk space and need to safely remove files. Before considering this action, review [Manage disk space](https://devdocs.magento.com/cloud/project/manage-disk-space.html#no-space-left) in our developer documentation. If the steps in that article are not appropriate for you or do not solve the issue, review the steps in this article.


## Affected products and versions

* Adobe Commerce on cloud infrastructure:
  2.3.0-2.3.7, 2.4.0-2.4.2-p1
* This is specific to dedicated Pro clusters. Starter and Integration environments are single node, and do not have the `/data/exports` directory.

## Signs of low disk space

Signs you are running out of disk space can be stuck deployment, disk full warnings, and poor performance.
To see the amount of disk space used by the file system run the following command in the CLI/Terminal:

`df -h`


## How to safely delete files to increase disk space

You can delete files from the application's mount points, from your `/app` path or through `/mnt/shared`. They are two different ways to access the same files.

>![warning]
>
>**Never modify or delete the contents of `/data/exports`**.
`/data/exports` is the underlying storage behind the shared filesystem, and it is managed by GlusterFS. 
The filesystem there contains not only the file contents, but metadata about the state of the filesystem to allow for synchronization >between the nodes of your cluster. **Changing or deleting files directly within this filesystem will corrupt the shared >filesystem, requiring extensive repairs or data recovery.**

To locate the largest files that might be good candidates for clearing, run the following command:

```bash
FS='/data/exports';NUMRESULTS=20;resize;clear; echo "Please find below the Largest Directories and Files:";date;df -h $FS; echo "Largest Directories:";du -x /app/*/ 2>/dev/null| sort -rnk1| head -n $NUMRESULTS| awk '
{printf "%d MB %s\n",\ $1/1024,$2}
';echo "Largest Files:"; nice -n 19 find /app/*/ -mount -type f -ls 2>/dev/null| sort -rnk7| head -n $NUMRESULTS|awk '
{printf "%d MB\t%s\n",\ ($7/1024)/1024,$NF}
'; echo "Please use the above information to clear any unwanted data from the server, it is important this is done as soon as possible to ensure your server stays functional.";
```

The output of the command will contain a list of the largest files and directories with their sizes specified.

## Related reading

In our support knowledge base:

* [Increase disk space for Integration environment on Cloud](https://support.magento.com/hc/en-us/articles/360005189554)
* [Low disk space](https://support.magento.com/hc/en-us/articles/360037072592)

In our developer documentation:

* [Manage disk space](https://devdocs.magento.com/cloud/project/manage-disk-space.html)
