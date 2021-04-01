---
title: Redis service crashed
labels: Magento Commerce Cloud,Magento Commerce,Redis,low memory,Redis crashed,2.3.x,2.2.x,how to,overflow
---

The article recommends how to fix Redis.

## Affected products and versions

* Magento Commerce Cloud 2.2.x., 2.3.x
* Magento Commerce 2.2.x., 2.3x
* All versions of Redis.

## Issue

Website slowness or outage due to memory overflow in Redis.

## Cause

Memory overflow can cause the Redis service to crash. During peak time, the Redis service may require more memory than what is currently allocated.

## Solution

To check current configuration and used memory, run the following command in the CLI. It checks for used memory, maxmemory, evicted keys, and Redis up time in days:

<pre class="line-numbers"><code class="language-clike">redis-cli -p REDIS_PORT -h REDIS_HOST info | egrep --color "(role|used_memory_peak|maxmemory|evicted_keys|uptime_in_days)"</code></pre>

The _REDIS\_PORT_ and_ REDIS\_HOST _variables can be retrieved from `` app/etc/env.php ``.

If the output from running the above query shows that the percentage of free memory is less than 40%, [submit a ticket to Magento Support](https://support.magento.com/hc/en-us/articles/360019088251) requesting an increase of the `` maxmemory `` setting in Redis Server. If the evicted keys value is not "0" or the Redis up time in days equals 0 (indicating Redis has crashed today), you should also [submit a ticket to Magento Support](https://support.magento.com/hc/en-us/articles/360019088251) requesting an investigation and a fix for this issue.

## Related Reading

To learn more about Redis memory refer to [Redis Memory Optimization](https://redis.io/topics/memory-optimization).