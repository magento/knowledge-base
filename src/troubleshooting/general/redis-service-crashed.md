---
title: Redis service crashed
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,Redis,Redis crashed,how to,low memory,overflow,Adobe Commerce,cloud infrastructure,on-premises
---

The article recommends how to fix Redis.

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x., 2.3.x
* Adobe Commerce on-premises 2.2.x., 2.3x
* All versions of Redis

## Issue

Website slowness or outage due to memory overflow in Redis.

## Cause

Memory overflow can cause the Redis service to crash. During peak time, the Redis service may require more memory than what is currently allocated.

## Solution

To check current configuration and used memory, run the following command in the CLI. It checks for used memory, maxmemory, evicted keys, and Redis up time in days:

```clike
redis-cli -p REDIS_PORT -h REDIS_HOST info | egrep --color "(role|used_memory_peak|maxmemory|evicted_keys|uptime_in_days)"
```

The *REDIS\_PORT* and *REDIS\_HOST* variables can be retrieved from `app/etc/env.php`.

If the output from running the above query shows that the percentage of free memory is less than 40%, [submit a ticket to Adobe Commerce support](https://support.magento.com/hc/en-us/articles/360019088251) requesting an increase of the `maxmemory` setting in Redis Server. If the evicted keys value is not "0" or the Redis up time in days equals 0 (indicating Redis has crashed today), you should also [submit a ticket to Adobe Commerce support](https://support.magento.com/hc/en-us/articles/360019088251) requesting an investigation and a fix for this issue.

## Related Reading

To learn more about Redis memory refer to [Redis Memory Optimization](https://redis.io/topics/memory-optimization).
