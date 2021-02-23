---
title: Install latest patches to fix Redis issues for Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360046678631-Install-latest-patches-to-fix-Redis-issues-for-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,patch,Redis,performance,troubleshooting,memory,2.3.4,2.3.3,CPU,Redis 5
---

<p>This article provides information on the latest Redis-related patches available in <a href="https://devdocs.magento.com/cloud/project/project-patch.html">Magento Cloud Patches</a> package. </p>
<h2>Affected products and versions</h2>
<p>Magento Commerce Cloud 2.3.3, 2.3.4</p>
<h2>Issue </h2>
<p>Extra CPU and memory consumption by Redis might decrease the Magento performance and thus the overall performance of your website. </p>
<h2>Solution</h2>
<p>Apply the latest patches provided by Magento Cloud Patches package. For detailed instructions, refer to <a href="https://devdocs.magento.com/cloud/project/project-patch.html">Apply patches</a> in Magento Developer Documentation.</p>
<p>The latest Redis patches delivered by Magento Cloud Patches package, contribute to the following:</p>
<ul>
<li>reducing the size of networking communication for Redis</li>
<li>fixing race conditions that lead to extra memory consumption</li>
<li>changing Cache Adapter to cover eviction cases</li>
<li>decreasing Redis CPU consumption</li>
</ul>
<p>Magento also recommends upgrading to Redis 5, if you are running Magento Commerce Cloud 2.3.3 or higher. </p>