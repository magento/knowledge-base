---
title: "Adobe Commerce cloud: reindex is terminated with `Killed` message"
labels: troubleshooting,Adobe Commerce,Magento,cloud infrastructure,reindex,integration,staging,starter,
---

## Affects products and versions

* Adobe Commerce on cloud infrastructure (all versions)

## Issue

If you are trying to run a reindex on the Integration branch (as well as in Staging for Starter projects) and the process is being termined with the *Killed* message.

## Cause

This usually happens because the PHP processes are running out of memory.
The most common reason for that is there is a large number of products, stores, and customer groups on the instance. If this applies to you, we strongly recommend that you reduce the data size.

## Solution

Per https://devdocs.magento.com/cloud/architecture/pro-architecture.html#cloud-arch-int
For best performance in the Integration environment follow these best practices:

* Restrict catalog size
* Limit use to one or two concurrent users
* Disable crons and manually run as needed

Solution

1. You should reduce the number of products (as well as customer groups and stores - if applicable)
1. If this has not been done, request an upgrade to the Enhanced Integration environments - take note of the restriction on the number of environments you would be limited to once the upgrade has been performed.
