---
title: Elasticsearch with ElasticSuite crashes or out of memory
link: https://support.magento.com/hc/en-us/articles/360035266131-Elasticsearch-with-ElasticSuite-crashes-or-out-of-memory
labels: Magento Commerce Cloud,Magento Commerce,out of memory,elasticsuite,elasticsearch crashes,elasticsuite tracking indices,plugin,2.3.x,2.2.x,2.1.x,how to,ElasticSuite 2.8.0
---

<p class="info">NOTE: ElasticSuite and its affiliated applications are third-party tools not currently supported by Magento. This content is being presented as informational only and not as an indication of what is enabled for Support coverage.</p>
<p>This article talks about the issue of Elasticsearch crashing or having memory problems if the ElasticSuite plugin is installed.</p>
<h2>Affected Products and Versions</h2>
<p>It is not confirmed what versions of ElasticSuite have this issue, but the 2.8.0 version contains a fix.</p>
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
<p>If the ElasticSuite third-party plugin is installed, you might experience Elasticsearch memory issues, and the Elasticsearch service might crash.</p>
<h2>Cause</h2>
<p>The errors are caused by tracking indices created and stored by the ElasticSuite Search Analytics Dashboards feature which is enabled by default. These tracking indices record which search terms are the most used, which terms generate the most turnover, and which terms are leading to a no results page so merchants can create synonyms to fix them. The tracking indices eventually use up all resources allocated to Elasticsearch.</p>
<h2>Solution</h2>
<p>There are two solutions to prevent these out-of-memory issues; upgrade the ElasticSuite plugin to version 2.8.0, or disable the Search Analytics dashboard which stops the ElasticSuite plugin from collecting navigation data. The rest of the module continues to work properly even if tracking is disabled.  </p>
<p>Choose the solution based on what version of Magento you have.</p>
<h2>Magento 2.3x or later</h2>
<p>Use the following command to upgrade the ElasticSuite plugin to version 2.8.0 or later. In these versions, a fix was added to clear the indices:</p>
<ol>
<li>Change to the root directory in your project environment.</li>
<li>Enter the following command to upgrade the ElasticSuite module:<br/><code>$ composer update smile/elasticsuite ~2.8.0</code>
</li>
<li>Wait for project dependencies to update.</li>
<li>Enter the following command to commit your changes:<br/>
<pre class="line-numbers"><code class="language-clike">git add -A &amp;&amp; git commit . -m "Upgrade ElasticSuite plugin version" &amp;&amp; git push origin &lt;branch-name&gt;</code></pre>
</li>
<li>Once you have upgraded the ElasticSuite plugin to version 2.8.0, you can configure a periodical cleaning of indices. Go to Stores &gt; Configuration &gt; Tracking &gt; Global Configuration &gt; Retention Delay - The default retention period is 365 days. Change to <em>30</em> or <em>15</em> days.</li>
</ol>
<h2>Magento 2.1.x or 2.2.x </h2>
<p>Use either of the following methods to disable the Search Analytics Dashboards feature:</p>
<p>From the Magento Admin UI:</p>
<ol>
<li>Log in to the Magento Admin UI.</li>
<li>Go to Stores &gt; Configuration &gt; Tracking &gt; Global Configuration.</li>
<li>Set Enable to <em>No</em>.</li>
<li>Save your changes.<code></code>
</li>
</ol>
<p>Commit configuration in the shared configuration file (these steps are for cloud merchants):</p>
<ol>
<li>Change to the root directory in your project environment.</li>
<li>Copy <code>app/etc/config.php file</code> from the cloud environment.</li>
<li>Enter the following command to disable the Search Analytics Dashboard:<br/><code>$ bin/magento config:set smile_elasticsuite_tracker/general/enabled 0</code>
</li>
<li>
<code></code>Wait for project dependencies to update.</li>
<li>Enter the following command to commit your changes:<br/>
<pre class="line-numbers"><code class="language-clike">git add -A &amp;&amp; git commit . -m "Disable the ElasticSuite Search Analytics Dashboard" &amp;&amp; git push origin &lt;branch-name&gt;  </code></pre>
</li>
</ol>
<p>If you cannot upgrade to ElasticSuite 2.8.0 or disable the Search Analytics Dashboard feature in the ElasticSuite plugin, you can also create a cron to delete the tracking indices. Follow the steps in <a href="https://support.magento.com/hc/en-us/articles/360034921492">ElasticSuite tracking indices causes problems with Elasticsearch</a>.</p>
<h2>Related reading</h2>
<p>To learn more about Elasticsearch installation and configuration see <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=elasticsearch">Set up Elasticsearch service</a>. </p>