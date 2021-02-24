---
title: Redis deployment error on Cloud (Already in pipeline mode)
link: https://support.magento.com/hc/en-us/articles/115002451014-Redis-deployment-error-on-Cloud-Already-in-pipeline-mode-
labels: Magento Commerce Cloud,deploy,Redis,pipeline,mode,troubleshooting
---

<p>This article provides a solution for the <code>Redis::pipeline(): Already in pipeline mode...</code> error which you might encounter during deployment.</p>
<p>The error occurs due to inconsistencies between the newer Redis versions and older code in the <code>colinmollenhour/credis</code> module.</p>
<p>To resolve the issue, apply newer versions of <code>magento/magento-cloud-configuration</code> (MCC) deployment scripts.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce Cloud, all versions</li>
<li>Redis, PHP-Redis 3.1.3</li>
</ul>
<h2>Issue</h2>
<p>When deploying your Magento Commerce (Cloud) application, you may encounter the following Redis error:</p>
<pre><code class="language-clike">Redis::pipeline(): Already in pipeline mode in /var/www/html/magento2ce/vendor/colinmollenhour/credis/Client.php on line 1037</code></pre>
<p>After the error, the deployment cannot be completed.</p>
<h2>Cause</h2>
<p>At a certain moment, the newer Redis versions (3.1.3 and later) were not compatible with the <code>colinmollenhour/credis</code> module, which caused an exception and failure to deploy the Magento application.</p>
<h2>Solution</h2>
<p>Follow the steps in the <a href="http://devdocs.magento.com/guides/v2.2/cloud/trouble/redis-troubleshooting.html#update">Redis error on deploy</a> DevDocs topic to apply newer versions of <code>magento/magento-cloud-configuration</code> (MCC) deployment scripts.</p>
<p>Fixing the issue varies in various Magento versions because of the different Cloud packages, so it is critical to strictly follow the steps in the <a href="http://devdocs.magento.com/guides/v2.2/cloud/trouble/redis-troubleshooting.html#update">Redis error on deploy</a> topic.</p>
<p>In brief, the following applies to the Magento versions below:</p>
<ul>
<li>
2.2.1 and later: the issue does not occur since the fix has been included into Magento Commerce (Cloud) code starting from that version</li>
<li>
2.1.4 - 2.2.0: the fix has been included into the MCC packages, so you just need to get the latest deployment scripts</li>
<li>
2.1.3 and earlier: apply the patch manually (see the Redis error on deploy topic)</li>
</ul>
<h2>More information</h2>
<p>Links to related documentation: </p>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/reference/cloud-composer.html">Composer for 2.1.X</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/reference/cloud-composer.html">Composer for 2.2.X</a></li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-patch.html">Patch and upgrade</a>, select the version for your Magento version docs</li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_services-redis.html">Redis setup</a></li>
</ul>