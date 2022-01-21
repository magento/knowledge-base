---
title: Redis troubleshooter on Adobe Commerce
labels: Magento Commerce,Magento Commerce Cloud,Redis,cache,caching,database,ece-tools,patches,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article is a troubleshooter tool for Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure merchants having issues with Redis. Click on each question to reveal the answer in each step of the troubleshooter. Depending on your symptoms and configuration, the troubleshooter will explain how to troubleshoot version and memory issues and optimize performance.

<div class="zd-accordion">
<div id="zd-accordion-1" class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">Redis issue?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br>b. NO – Return to <a href="https://support.magento.com/hc/en-us">support.magento.com</a> and search for relevant troubleshooting articles.</p>
</div>
<div id="zd-accordion-2" class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">Current Redis patches installed?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.<br>b. NO – Make sure you have the latest version of the package <code>magento-cloud-patches</code> installed. This package has the necessary patches for Redis. To access go to <a href="https://github.com/magento/magento-cloud-patches/">GitHub magneto-cloud-patches</a>.</p>
</div>
<div id="zd-accordion-3" class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">On Redis versions 3.2 or 5.0? Check by running the following commands in the CLI. Pro or Staging: <code>$
 redis-cli -p %port-number% info | grep redis_version</code>, where <code>%port-number%</code> is the number of the port, which can be found in the <code>app/etc/env.php</code> file or by running one of these commands: <code>$ vendor/bin/ece-tools env:config:show | grep -i redis -A 3</code> or <code>$ cat app/etc/env.php | grep redis -A 3</code>. Starter or Integration: <code>$ redis-cli -h 'redis.internal' info | grep redis_version</code></div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.<br>b. NO – Adobe Commerce supports Redis versions 3.2 and 5.0. If you are running Adobe Commerce on cloud infrastructure 2.3.3 or higher, we recommend upgrading to Redis 5. For setup steps on Adobe Commerce on cloud infrastructure Pro plan architecture, Integration and Starter environments including the master branch, refer to <a href="https://devdocs.magento.com/cloud/project/services-redis.html">Adobe Commerce on cloud infrastructure > Set up Redis service</a> in our developer documentation. <strong>Note: </strong><strong>You must <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> to change the service configuration on Pro architecture Production and Staging environments. </strong>Also, for Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises 2.3.5+, extended Redis cache implementation is recommended. This type of Redis cache implementation provides enhancements that minimize the number of queries to Redis that are performed on each Adobe Commerce request. For steps, refer to <a href="https://support.magento.com/hc/en-us/articles/360049292532">Extended Redis cache implementation Adobe Commerce 2.3.5+</a> in our support knowledge base. For all other Adobe Commerce users, refer to <a href="https://devdocs.magento.com/guides/v2.4/config-guide/redis/config-redis.html">Adobe Commerce Configuration Guide > Configure Redis</a> in our developer documentation, for steps.</p>
</div>
<div id="zd-accordion-4" class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">Do you have the latest version of <a href="https://github.com/magento/ece-tools/releases">ECE Tools > v2002.1.1</a>? Check what version you have by running the command in the CLI/Terminal: <code>$php vendor/bin/composer info magento/ece-tools</code>
</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.<br>b. NO – <a href="https://devdocs.magento.com/cloud/project/ece-tools-update.html">Upgrade ECE-Tools</a> to the latest release.</p>
</div>
<div id="zd-accordion-5" class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Is there a lot of network traffic between the app and Redis?</div>
<p class="zd-accordion-text">a. YES – Try the following: For a non-split architecture, make sure a <a href="https://support.magento.com/hc/en-us/articles/360037391972">secondary connection</a> is used.  For split architecture, the <a href="https://devdocs.magento.com/guides/v2.4/config-guide/cache/two-level-cache.html">L2 cache must be enabled</a>.<br>b. NO – Configure L2 cache configuration by <a href="https://devdocs.magento.com/cloud/env/variables-deploy.html#redis_backend">Updating Redis Backend</a>. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<div id="zd-accordion-6" class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">Is the site still working slowly, after enabling L2 cache?</div>
<p class="zd-accordion-text">a. YES – Check the temp directory <code>/dev/shm</code> to see if you need to increase space. If you need more space, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.<br>b. NO – Enabling L2 cache appears to have solved your Redis issues.</p>
</div>
<p>
    <a href="https://support.magento.com/hc/en-us/articles/360046673932#zd-accordion-1">Back to Step 1</a>
  </p>
</div>
