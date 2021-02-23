---
title: Redis service crashed
link: https://support.magento.com/hc/en-us/articles/360039371552-Redis-service-crashed
labels: Magento Commerce Cloud,Magento Commerce,Redis,low memory,Redis crashed,2.3.x,2.2.x,how to,overflow
---

<p>The article recommends how to fix Redis.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud 2.2.x., 2.3.x</li>
<li>Magento Commerce 2.2.x., 2.3x</li>
<li>All versions of Redis.</li>
</ul>
<h2>Issue</h2>
<p>Website slowness or outage due to memory overflow in Redis.</p>
<h2>Cause</h2>
<p>Memory overflow can cause the Redis service to crash. During peak time, the Redis service may require more memory than what is currently allocated.</p>
<h2>Solution</h2>
<p>To check current configuration and used memory, run the following command in the CLI. It checks for used memory, maxmemory, evicted keys, and Redis up time in days:</p>
<pre class="line-numbers"><code class="language-clike">redis-cli -p REDIS_PORT -h REDIS_HOST info | egrep --color "(role|used_memory_peak|maxmemory|evicted_keys|uptime_in_days)"</code></pre>
<p>The <em>REDIS_PORT</em> and<em> REDIS_HOST </em>variables can be retrieved from <code>app/etc/env.php</code>.</p>
<p>If the output from running the above query shows that the percentage of free memory is less than 40%, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a ticket to Magento Support</a> requesting an increase of the <code>maxmemory</code> setting in Redis Server. If the evicted keys value is not "0" or the Redis up time in days equals 0 (indicating Redis has crashed today), you should also <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a ticket to Magento Support</a> requesting an investigation and a fix for this issue.</p>
<h2>Related Reading</h2>
<p>To learn more about Redis memory refer to <a href="https://redis.io/topics/memory-optimization">Redis Memory Optimization</a>.</p>