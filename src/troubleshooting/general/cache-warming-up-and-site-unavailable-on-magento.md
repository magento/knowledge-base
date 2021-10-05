---
title: Cache warming up and site unavailable on Adobe Commerce
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce Cloud,cache,site,site down,stuck deployment,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when the page cache is warming up and there is a stuck deployment or site down.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).

## Issue

The cache warm up script, at the end of the post-deploy phase, sends requests at such a high rate that certain instances, like 4-cpu ones, cannot cope. Their nginx exhausts the number of workers.

 <ins>Steps to reproduce</ins>:

Start cache warm up operations.

 <ins>Expected result</ins>:

Pages or whole site loads.

 <ins>Actual result</ins>:

The site is unavailable or the response time is too high.

## Solution

Limit the number of concurrent connections during the cache warm-up. This requires adding the `WARM_UP_CONCURRENCY` post-deploy variable to specify the number of warm-up requests that the cache warm-up script can send concurrently. Setting this option can help manage the load on Adobe Commerce's cloud infrastructure. For steps, see [Post-deploy variables > WARM\_UP\_CONCURRENCY](https://devdocs.magento.com/cloud/env/variables-post-deploy.html#warm_up_concurrency) in our developer documentation.

## Related reading

 [Full-Page Cache](https://docs.magento.com/user-guide/system/cache-full-page.html) in our user guide
