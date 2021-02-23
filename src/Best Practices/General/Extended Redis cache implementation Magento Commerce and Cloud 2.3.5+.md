---
title: Extended Redis cache implementation Magento Commerce and Cloud 2.3.5+
link: https://support.magento.com/hc/en-us/articles/360049292532-Extended-Redis-cache-implementation-Magento-Commerce-and-Cloud-2-3-5-
labels: Magento Commerce Cloud,Magento Commerce,configuration,Redis,cache,2.3.5,best practices
---

<p>As of Magento Commerce Cloud and Magento Commerce v2.3.5 or higher, it is recommended that you use the extended Redis cache implementation.</p>
<p>The enhancements minimize the number of queries to Redis that are performed on each Magento request.</p>
<p>These optimizations include: </p>
<ul>
<li>Decrease in the size of network data transfers between Redis and Magento.</li>
<li>Reduction in Redis consumption of CPU cycles by improving the adapter’s ability to automatically determine what needs to be loaded.</li>
<li>Reduce race conditions on Redis write operations.</li>
</ul>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud and Magento Commerce 2.3.5+</li>
</ul>
<h2>Best practices</h2>
<p>As of Magento v2.3.5 and higher, it is recommended to use the extended Redis cache implementation.</p>
<pre><code>\Magento\Framework\Cache\Backend\Redis</code></pre>
<pre><code>'cache' =&gt; [<br/>    'frontend' =&gt; [<br/>        'default' =&gt; [<br/>            'backend' =&gt; '\\Magento\\Framework\\Cache\\Backend\Redis',<br/>            'backend_options' =&gt; [<br/>                'server' =&gt; '127.0.0.1',<br/>                'database' =&gt; '0',<br/>                'port' =&gt; '6379'<br/>            ],<br/>        ],<br/>],</code></pre>
<p>To implement, upgrade the ece-tools to the <a href="https://devdocs.magento.com/guides/v2.2/cloud/release-notes/cloud-tools.html">latest release</a>. The configuration will be done automatically with the new ece-tools version.</p>
<h2>Related reading</h2>
<ul>
<li>Magento DevDocs <a href="https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#performance-boosts">Magento Commerce Release v2.3.5</a>
</li>
<li>Magento DevDocs <a href="https://devdocs.magento.com/guides/v2.3/config-guide/redis/redis-pg-cache.html">Redis Page Cache</a>
</li>
</ul>
<p>If assistance is required or if there are questions or concerns, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">submit a Magento Support ticket</a>.</p>