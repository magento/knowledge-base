---
title: Cache warming up and site unavailable on Magento
link: https://support.magento.com/hc/en-us/articles/360051308371-Cache-warming-up-and-site-unavailable-on-Magento
labels: Magento Commerce Cloud,cache,troubleshooting,2.3,site,stuck deployment,2.3.x,2.4,site down,2.4.x
---

<p>This article provides a solution for when the page cache is warming up and there is a stuck deployment or site down.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce Cloud, all <a href="https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf">supported versions</a>.</li>
</ul>
<h2>Issue</h2>
<p>The cache warm up script, at the end of the post-deploy phase, sends requests at such a high rate that certain instances, like 4-cpu ones, cannot cope. Their nginx exhausts the number of workers.</p>
<p>Steps to reproduce</p>
<p>Start cache warm up operations.</p>
<p>Expected result</p>
<p>Pages or whole site loads.</p>
<p>Actual result</p>
<p>The site is unavailable or the response time is too high.</p>
<h2>Solution</h2>
<p>Limit the number of concurrent connections during the cache warm up. This requires adding the <code>WARM_UP_CONCURRENCY</code> post-deploy variable, to specify the number of warm-up requests that the cache warm up script can send concurrently. Setting this option can help manage load on Magento Cloud infrastructure. For steps, refer to Magento <a href="https://devdocs.magento.com/cloud/env/variables-post-deploy.html#warm_up_concurrency">DevDocs &gt; Post-deploy variables &gt; WARM_UP_CONCURRENCY</a>.</p>
<h2>Related reading</h2>
<p><a href="https://docs.magento.com/user-guide/system/cache-full-page.html">Magento User Guide &gt; Full-Page Cache</a></p>