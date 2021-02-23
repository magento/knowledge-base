---
title: Enable Magento cache to avoid performance degradation
link: https://support.magento.com/hc/en-us/articles/360039248971-Enable-Magento-cache-to-avoid-performance-degradation
labels: Magento Commerce Cloud,Magento Commerce,cache,slow performance,New Relic,2.3.x,2.2.x,Apdex,how to
---

<p>This article explains how to solve a slow site issue caused by certain Magento cache types being disabled. </p>
<p>AFFECTED PRODUCTS AND VERSIONS</p>
<ul>
<li>Magento Commerce Cloud v.2.2.x, 2.3.x</li>
<li>Magento Commerce v.2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>You notice performance degradation. For example, the Checkout page is loading slowly, or the Apdex value decrease in New Relic.</p>
<h2>Cause</h2>
<p>One reason for performance degradation might be certain Magento cache types being disabled. </p>
<h2>Solution </h2>
<ol>
<li>First, check the status of your Magento cache, to see if this is the issue. For this, <br/> <a href="https://devdocs.magento.com/cloud/env/environments-ssh.html#ssh">SSH to your environment</a> and run the following command: <code class="language-bash">php bin/magento cache:status</code>. This would display the status of each cache type ("0" for disabled, "1" for enabled).<br/> Or you can get this information in the <code>app/etc/env.php</code> file.</li>
<li>Investigate the disabled cache types. All Magento cache types should be enabled, unless you received alternative guidance from Magento. Third party extensions must not require disabling Magento cache. </li>
<li>If the investigation confirms that some cache types are disabled by mistake, enable them by running the following command for each cache type:<br/> <code>php bin/magento cache:enable &lt;your_disabled_cache_type&gt;</code>
</li>
</ol>
<p>If there are concerns and/or questions whether a certain Magento cache type can or should be disabled, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">contact Magento Support</a> asking for recommendations.   </p>
<h2>Related reading</h2>
<p>Magento cache documentation:</p>
<ul>
<li>
<p><a href="https://devdocs.magento.com/guides/v2.3/frontend-dev-guide/cache_for_frontdevs.html">Magento cache overview</a></p>
</li>
<li>
<p><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cache.html">Manage the cache</a></p>
</li>
</ul>
<p>Other possible reasons for performance issues and solutions for them:</p>
<ul>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360035285852">Disable Magento Banner output to improve site performance  </a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360038862691">MySQL tables are too large</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360034631192">Slow performance, slow and long running crons</a></p>
</li>
<li>
<p><a href="https://support.magento.com/hc/en-us/articles/360036323211">Restricted admin access causing performance issues</a></p>
</li>
</ul>
<p> </p>