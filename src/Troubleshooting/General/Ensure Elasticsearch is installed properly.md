---
title: Ensure Elasticsearch is installed properly
link: https://support.magento.com/hc/en-us/articles/360034939312-Ensure-Elasticsearch-is-installed-properly
labels: Magento Commerce Cloud,Magento Commerce,2.2.4,Elasticsearch version,Elasticsearch configuration,2.2.6,2.2.3,2.2.5,2.3.1,2.3.0,Elasticsearch 6.x,how to,Elasticsearch 2.x,Elasticsearch 5.x,2.2.7,2.2.8,2.2.9
---

<p>This article talks about solutions for issues caused by incorrect Elasticsearch (ES) installation and configuration.</p>
<p class="warning">On Magento Cloud please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> detailing your required service upgrade and stating the time when you want the upgrade process to start.</p>
<h2>Elasticsearch version compatibility with Magento</h2>
<ul>
<li>Magento Commerce and Magento Commerce Cloud:
<ul>
<li>v2.2.3+ supports ES 5.x</li>
<li>v2.2.8+ and v2.3.1+ support ES 6.x</li>
<li>ES v2.x and v5.x are not recommended because of <a href="https://www.elastic.co/support/eol">End of Life</a>. However, if you have Magento v2.3.1 and want to use ES 2.x or ES 5.x, you must <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html">Change the Elasticsearch php Client</a>.</li>
</ul>
</li>
<li>Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).</li>
</ul>
<h2>Issue</h2>
<p>The following symptoms indicate Elasticsearch is not configured correctly:</p>
<ul>
<li>
<code>Error: No alive nodes in your cluster </code>- this error can appear in Magento logs:
<ul>
<li><code>var/log/system.log</code></li>
<li><code>var/log/support_report.log</code></li>
<li><code>var/log/cron.log</code></li>
<li><code>var/log/exception.log</code></li>
<li>or in the prompt (when you run a reindex, for example)</li>
</ul>
</li>
<li>Errors indicating that the Elasticsearch version is not compatible with your current version of Magento (this is a Magento Commerce Cloud specific error):
<pre class="language-clike"><code class="language-clike">[YYYY-MM-DD HH:MM:SS] CRITICAL: Fix configuration with given suggestions:
- Elasticsearch version <em>#&lt;version&gt;</em> is not compatible with current version of magento
Upgrade elasticsearch version to ~5.0
</code></pre>
<p><em>version</em> is the Elasticsearch Service running on the Cloud environment.</p>
</li>
</ul>
<h2>Cause</h2>
<p>Elasticsearch is not installed properly. This could be due to:</p>
<ul>
<li>A typo in the configuration file.</li>
<li>A version in the configuration file that does not match any version of Elasticsearch that is installed for the environment.</li>
<li>A version that is correctly installed in the environment, correctly configured in the configuration file, but is not a supported version for the currently installed version of Magento.</li>
</ul>
<h2>Solution</h2>
<p>To correctly set up Elasticsearch:</p>
<ul>
<li>Merchants on Magento Commerce Cloud can follow the steps in DevDocs <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html">Set up Elasticsearch service</a>.</li>
<li>Merchants on Magento Commerce and Magento Open Source can follow the steps in DevDocs <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</li>
</ul>
<p>After you have set up Elasticsearch, check that it's configured correctly:</p>
<ol>
<li>Log in to your server.</li>
<li>Check the version number of Elasticsearch (2.x, 5.x, or 6.x) in the output of running the command:<br/> <code>curl -XGET &lt;Elasticsearch hostname&gt;:&lt;Elasticsearch server port&gt;<br/></code> For example, in Magento Cloud Commerce:<br/> <code>curl -XGET localhost:9200</code>
</li>
<li>Check what is configured in Magento Configuration by running the command:<br/> <code>  php bin/magento config:show catalog/search</code>
</li>
<li>Check <code> catalog/search/engine</code> and ensure it matches with the Elasticsearch version number. For example, in Magento Cloud Commerce:
<ul>
<li>ElasticSearch 5.X - elasticsearch5</li>
<li>ElasticSearch 6.X - elasticsearch6</li>
<li>ElasticSearch 2.X - elasticsearch</li>
</ul>
</li>
<li>Check <code>index_prefix</code>. If you have several environments, make sure you have different <code>index_prefix</code> values for them.</li>
</ol>