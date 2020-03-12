The article recommends how to fix Redis.

## Affected versions and products

*   Magento Commerce Cloud 2.2.x., 2.3.x
*   Magento Commerce&nbsp;2.2.x., 2.3x
*   All versions of Redis.

## Issue

Website slowness or outage due to memory overflow in Redis.

## Cause

Memory overflow can cause the Redis service to crash. During peak&nbsp;time, the Redis service may require more memory than what is currently allocated.

## Solution

To check current configuration and used memory, run the following command in the CLI. It checks for used memory, maxmemory, evicted keys, and Redis up time in days:

<pre class="line-numbers"><code class="language-clike">redis-cli -p REDIS_PORT -h REDIS_HOST info | egrep --color "(role|used_memory_peak|maxmemory|evicted_keys|uptime_in_days)"</code></pre>

The&nbsp;_REDIS\_PORT_ and_ REDIS\_HOST&nbsp;_variables can be retrieved from `` app/etc/env.php ``.

If the output from running the above query shows that the percentage of free memory is less than 40%,&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a ticket to Magento Support</a>&nbsp;requesting an increase of the&nbsp;`` maxmemory ``&nbsp;setting in Redis Server. If the evicted keys value is not "0"&nbsp;or the Redis up time in days equals 0 (indicating Redis has crashed today), you should also&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a ticket to Magento Support</a>&nbsp;requesting an investigation and a fix for this issue.

## Related Reading

To learn more about Redis memory refer to <a href="https://redis.io/topics/memory-optimization" rel="noopener" target="_blank">Redis Memory Optimization</a>.