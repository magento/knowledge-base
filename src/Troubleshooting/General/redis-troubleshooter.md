---
title: Redis troubleshooter
labels: Magento Commerce,Magento Commerce Cloud,Redis,cache,caching,database,ece-tools,patches,troubleshooting
---

This article is a troubleshooter tool for Magento Commerce and Magento Commerce Cloud customers having issues with Redis. Click on each question to reveal the answer in each step of the troubleshooter. Depending on your symptoms and configuration, the troubleshooter will explain how to troubleshoot version and memory issues and optimize performance. 

<!---------This opens the main level that holds everything.--------------->

<div class="zd-accordion">
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">Redis issue? </div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br/>b. NO – Return to <a href="https://support.magento.com/hc/en-us">support.magento.com</a> and search for relevant troubleshooting articles. </p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">Current Redis patches installed? </div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>. <br/>b. NO – Make sure you have the latest version of the package  <code>magento-cloud-patches</code> installed. This package has the necessary patches for Redis. To access go to <a href="https://github.com/magento/magento-cloud-patches/">GitHub magneto-cloud-patches</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">On Redis versions 3.2 or 5.0?<br/>Check by running the following command in the CLI: <br/><br/><code class="“language-bash”">$ redis-cli -p 6370 info | grep redis_version </code>// Pro or Staging<br/><br/><code class="“language-bash”">$ redis-cli -h 'redis.internal' info | grep redis_version </code> // Starter or Integration</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>. <br/>b. NO – Magento supports Redis versions <mark>3</mark> .2 and 5.1. If you are running Magento Commerce Cloud 2.3.3 or higher, we recommend upgrading to Redis 1. For setup steps on Magento Commerce Cloud Pro, Integration and Starter environments including the master branch, refer to DevDocs <a href="https://devdocs.magento.com/cloud/project/services-redis.html">Magento Commerce Cloud > Set up Redis service</a>. Note: You must <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> to change the service configuration on Pro Production and Staging environments. Also, for Magento Commerce Cloud and Magento Commerce 2.3.5+, extended Redis cache implementation is recommended. This type of Redis cache implementation provides enhancements that minimize the number of queries to Redis that are performed on each Magento request. For steps, refer to <a href="https://support.magento.com/hc/en-us/articles/360049292532">Extended Redis cache implementation Magento Commerce Cloud and Cloud 2.3.5+.</a><br/>For all other Magento Commerce users, refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.4/config-guide/redis/config-redis.html">Magento Configuration Guide > Configure Redis</a>, for steps.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">Do you have the latest version of <a href="https://github.com/magento/ece-tools/releases">ECE Tools > v2002.1.1</a>? Check what version you have by running the command in the CLI/Terminal: <br/><code class="“language-bash”">  $php vendor/bin/composer info magento/ece-tools</code>
</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>. <br/>b. NO – <a href="https://devdocs.magento.com/cloud/project/ece-tools-update.html">Upgrade ECE-Tools </a>to the latest release.  </p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Is there a lot of network traffic between the app and Redis? </div>
<p class="zd-accordion-text">a. YES – Try the following: For a non-split architecture, make sure a <a href="https://support.magento.com/hc/en-us/articles/360037391972">secondary connection</a> is used.  For split architecture, the <a href="https://devdocs.magento.com/guides/v2.4/config-guide/cache/two-level-cache.html">L2 cache must be enabled</a>. <br/>b. NO – Configure L2 cache configuration by <a href="https://devdocs.magento.com/cloud/env/variables-deploy.html#redis_backend">Updating Redis Backend</a>. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>. </p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">Is the site still working slowly, after enabling L2 cache?</div>
<p class="zd-accordion-text">a. YES – Check the temp directory <code>/dev/shm</code> to see if you need to increase space. If you need more space, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.<br/>b. NO – Enabling L2 cache appears to have solved your Redis issues.</p>
</div>
<!---------This closes the main level that holds everything.--------------->
<p><a href="#zd-accordion-1">Back to Step 1</a></p>
</div>