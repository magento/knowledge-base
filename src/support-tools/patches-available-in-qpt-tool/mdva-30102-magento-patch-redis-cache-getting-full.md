---
title: "MDVA-30102 Magento patch: Redis cache getting full"
labels: 2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,QPT 1.0.6,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,Redis,cache,memory,missing products,support tools
---

The MDVA-30102 patch solves the issue of the Redis cache getting full and generating errors, causing problems with Product Listing Pages (PLP) and Product Detail Pages (PDP) such as missing products. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v1.0.6 is installed.

## Affected products and versions

**The patch is created for Magento version:**

* Magento Commerce Cloud 2.3.5-p1

**Compatible with Magento versions:**

* Magento Commerce and Magento Commerce Cloud 2.3.2-2.4.1-p1

>![info]
>
>Note: the patch can be applicable to other versions with new QPT tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status`

## Issue

Redis cache is getting full and the allocated `maxmemory` appears to be insufficient. The layout cache didn't have TTL and was not evicted causing cache growth and eviction of other keys in Redis. As the result all Redis memory was allocated for layout cache. <span class="wysiwyg-underline">Steps to reproduce:</span>

Prerequisites:

* The user must be on Magento Commerce 2.4 and have 100K simple products (product type does not matter) and 50 categories.
* Redis cache must be configured according to steps in DevDocs [Magento Configuration Guide > Use Redis for the Magento page and default cache](https://devdocs.magento.com/guides/v2.4/config-guide/redis/redis-pg-cache.html#example-command) .

1. Browse through all the PDPs and PLPs. You can use [OWASP ZAP](https://owasp.org/www-project-zap/) to crawl the site.
1. Observe the Redis memory usage.
1. Also check current configuration and used memory. Run the following command in the CLI. It checks for used memory, maxmemory, evicted keys, and Redis up time in days:

```clike
redis-cli -p REDIS_PORT -h REDIS_HOST info | egrep --color "(role|used_memory_peak|maxmemory|evicted_keys|uptime_in_days)"
```

 <span class="wysiwyg-underline">Actual result:</span>

Redis cache grows up to ~5GB. There is a max limit of 8GB of Redis memory, so if you have 1M products you will run out memory very quickly. <span class="wysiwyg-underline">Expected result:</span>

Redis cache should not be rapidly growing.

## Apply the patch

For instructions on how to apply an QPT patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Apply patches using Quality Patches Tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Quality Patches Tool, refer to:

* KB [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* KB [Check if patch is available for your Magento issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) .

For info about other patches available in QPT tool, refer to the [Patches available in QPT tool](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
