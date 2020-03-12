This article talks about issues caused by incorrect Elasticsearch (ES) installation and configuration.

## Elasticsearch version compatibility with Magento

*   Magento Commerce and Magento Commerce Cloud:
    
    *   v2.2.3+ supports ES 5.x
    *   v2.2.8+ and v2.3.1+ support ES 6.x
    *   ES v2.x and v5.x are not recommended because of <a href="https://www.elastic.co/support/eol" rel="noopener" target="_blank">End of Life</a>. However, if you have Magento v2.3.1 and want to use ES 2.x or ES 5.x, you must&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html" rel="noopener" target="_blank">Change the Elasticsearch php Client</a>.
    
    
    
*   Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).

## Issue

The following symptoms indicate Elasticsearch is not configured correctly:

<ul><li>
<code>Error: No alive nodes in your cluster </code>- this error can appear in Magento logs:
<ul>
<li><code>var/log/system.log</code></li>
<li><code>var/log/support_report.log</code></li>
<li><code>var/log/cron.log</code></li>
<li><code>var/log/exception.log</code></li>
<li>or&nbsp;in the prompt (when you run a reindex, for example)</li>
</ul>
</li><li>Errors indicating that the Elasticsearch version is not compatible with your current version of Magento (this is a Magento Commerce Cloud specific error):
<pre class="language-clike"><code class="language-clike"><span class="token punctuation">[</span>YYYY<span class="token operator">-</span>MM<span class="token operator">-</span>DD HH<span class="token punctuation">:</span>MM<span class="token punctuation">:</span>SS<span class="token punctuation">]</span> CRITICAL<span class="token punctuation">:</span> Fix configuration with given suggestions<span class="token punctuation">:</span>
<span class="token operator">-</span> Elasticsearch version <em>#&lt;version&gt;</em> is not compatible with current version of magento
Upgrade elasticsearch version to <span class="token operator">~</span><span class="token number">5.0</span>
</code></pre>
<p><em>version</em>&nbsp;is the Elasticsearch Service running on the Cloud environment.</p>
</li></ul>

## Cause

Elasticsearch is not installed properly. This could be due to:

<ul><li>A typo in the configuration file.</li><li>A version in the configuration file that does not match any version of Elasticsearch that is installed for the environment.</li><li class="p1">A version that is correctly installed in the environment, correctly configured in the configuration file, but is not a supported version for the currently installed version of Magento.</li></ul>

## Solution

To correctly set up Elasticsearch:

*   Merchants on Magento Commerce Cloud can follow the steps in DevDocs&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html" rel="noopener" target="_blank">Set up Elasticsearch service</a>.
*   Merchants on Magento Commerce and Magento Open Source can follow the steps in DevDocs&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html" rel="noopener" target="_blank">Install and configure Elasticsearch</a>.

After you have set up Elasticsearch, check that it's configured correctly:

1.   Log in to your server.
2.   Check the version number of Elasticsearch (2.x, 5.x, or 6.x) in the output of running the command:  
     <code>curl -XGET &lt;Elasticsearch hostname&gt;:&lt;Elasticsearch server port&gt;<br/></code> For example, in Magento Cloud Commerce:  
     `` curl -XGET localhost:9200 ``
3.   Check what is configured in Magento Configuration by running the command:  
     ``   php bin/magento config:show catalog/search ``
4.   Check ``  catalog/search/engine `` and ensure it matches with the Elasticsearch version number. For example, in Magento Cloud Commerce:
    
    *   ElasticSearch 5.X - elasticsearch5
    *   ElasticSearch 6.X - elasticsearch6
    *   ElasticSearch 2.X - elasticsearch
    
    
    
5.   Check `` index_prefix ``. If you have several environments, make sure you have different&nbsp;`` index_prefix `` values for them.