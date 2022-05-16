---
title: "Adobe Commerce cloud: reindex is terminated with `Killed` message"
labels: troubleshooting,Adobe Commerce,Magento,cloud infrastructure,reindex,integration,staging,starter
---

## Affected products and versions

* Adobe Commerce on cloud infrastructure (all versions)

## Issue

You are trying to run a reindex on the Integration branch (or on Staging of the Starter architecture project), and the process is being terminated with the `Killed` message.

## Cause

This usually happens because the PHP processes are running out of memory.
The most common reason for that is a large number of products, stores, and/or customer groups on the instance.

## Solution

1. Reduce the number of products (as well as customer groups and stores - if applicable).
1. Limit use to one or two concurrent users.
1. Disable cron jobs, and run manually as needed.
1. If this has not been done previously, request an upgrade to the Enhanced Integration environments - take note of the restriction on the number of environments you would be limited to once the upgrade has been performed. Refer to the [Integration Environment enhancement request - Pro and Starter](https://support.magento.com/hc/en-us/articles/360043032152) article in our support knowledge base for details.

## Related reading:

In our developer documentation:

* [Pro architecture > Integration environment](https://devdocs.magento.com/cloud/architecture/pro-architecture.html#cloud-arch-int)
* [Starter architecture > Staging environment](https://devdocs.magento.com/cloud/architecture/starter-architecture.html#cloud-arch-stage)
