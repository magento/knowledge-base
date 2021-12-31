---
title: "MDVA-30102: Redis cache getting full"
labels: 2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Redis,cache,memory,missing products,support tools,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-30102 patch solves the issue of the Redis cache getting full and generating errors, causing problems with Product Listing Pages (PLP) and Product Detail Pages (PDP), such as missing products. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.0.6 is installed.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

* Adobe Commerce on cloud infrastructure 2.3.5-p1

**Compatible with Adobe Commerce versions:**

* Adobe Commerce (all deployment methods) 2.3.2 - 2.4.1-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Redis cache is getting full, and the allocated `maxmemory` appears to be insufficient. The layout cache didn't have TTL and was not evicted, causing cache growth and eviction of other keys in Redis. As a result, all Redis memory was allocated for layout cache.

<ins>Prerequisites</ins>:

* The user must be on Adobe Commerce 2.4 and have 100K simple products (product type does not matter) and 50 categories.
* Redis cache must be configured according to steps given in [Adobe Commerce Configuration Guide > Use Redis for the Adobe Commerce page and default cache](https://devdocs.magento.com/guides/v2.4/config-guide/redis/redis-pg-cache.html#example-command) in our developer documentation.

<ins>Steps to reproduce</ins>:

1. Browse through all the PDPs and PLPs. You can use [OWASP ZAP](https://owasp.org/www-project-zap/) to crawl the site.
1. Observe the Redis memory usage.
1. Also, check current configuration and used memory. Run the following command in the CLI. It checks for used memory, maxmemory, evicted keys, and Redis up time in days:

```clike
redis-cli -p REDIS_PORT -h REDIS_HOST info | egrep --color "(role|used_memory_peak|maxmemory|evicted_keys|uptime_in_days)"
```

<ins>Expected results</ins>:

Redis cache should not be rapidly growing.

<ins>Actual results</ins>:

Redis cache grows up to ~5GB. There is a max limit of 8GB of Redis memory, so if you have 1M products, you will run out of memory very quickly.

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
