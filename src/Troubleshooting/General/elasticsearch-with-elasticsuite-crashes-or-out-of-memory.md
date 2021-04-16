---
title: Elasticsearch with ElasticSuite crashes or out of memory
labels: 2.1.x,2.2.x,2.3.x,ElasticSuite 2.8.0,Magento Commerce,Magento Commerce Cloud,elasticsearch crashes,elasticsuite,elasticsuite tracking indices,how to,out of memory,plugin
---

<p class="info">NOTE: ElasticSuite and its affiliated applications are third-party tools not currently supported by Magento. This content is being presented as informational only and not as an indication of what is enabled for Support coverage.</p>

This article talks about the issue of Elasticsearch crashing or having memory problems if the ElasticSuite plugin is installed.

## Affected Products and Versions

It is not confirmed what versions of ElasticSuite have this issue, but the 2.8.0 version contains a fix.

## Elasticsearch version compatibility with Magento

* Magento Commerce and Magento Commerce Cloud:
    
    * v2.2.3+ supports ES 5.x
    * v2.2.8+ and v2.3.1+ support ES 6.x
    * ES v2.x and v5.x are not recommended because of [End of Life](https://www.elastic.co/support/eol). However, if you have Magento v2.3.1 and want to use ES 2.x or ES 5.x, you must [Change the Elasticsearch php Client](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html).
    
    
    
* Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).

## Issue

If the ElasticSuite third-party plugin is installed, you might experience Elasticsearch memory issues, and the Elasticsearch service might crash.

## Cause

The errors are caused by tracking indices created and stored by the ElasticSuite Search Analytics Dashboards feature which is enabled by default. These tracking indices record which search terms are the most used, which terms generate the most turnover, and which terms are leading to a no results page so merchants can create synonyms to fix them. The tracking indices eventually use up all resources allocated to Elasticsearch.

## Solution

There are two solutions to prevent these out-of-memory issues; upgrade the ElasticSuite plugin to version 2.8.0, or disable the Search Analytics dashboard which stops the ElasticSuite plugin from collecting navigation data. The rest of the module continues to work properly even if tracking is disabled.  

Choose the solution based on what version of Magento you have.

## Magento 2.3x or later

Use the following command to upgrade the ElasticSuite plugin to version 2.8.0 or later. In these versions, a fix was added to clear the indices:

<ol><li>Change to the root directory in your project environment.</li><li>Enter the following command to upgrade the ElasticSuite module:<br/><code>$ composer update smile/elasticsuite ~2.8.0</code>
</li><li>Wait for project dependencies to update.</li><li>Enter the following command to commit your changes:<br/>
<pre class="line-numbers"><code class="language-clike">git add -A &amp;&amp; git commit . -m "Upgrade ElasticSuite plugin version" &amp;&amp; git push origin &lt;branch-name></code></pre>
</li><li>Once you have upgraded the ElasticSuite plugin to version 2.8.0, you can configure a periodical cleaning of indices. Go to Stores > Configuration > Tracking > Global Configuration > Retention Delay - The default retention period is 365 days. Change to <em>30</em> or <em>15</em> days.</li></ol>

## Magento 2.1.x or 2.2.x 

Use either of the following methods to disable the Search Analytics Dashboards feature:

From the Magento Admin UI:

1. Log in to the Magento Admin UI.
1. Go to Stores > Configuration > Tracking > Global Configuration.
1. Set Enable to _No_.
1. Save your changes.``  ``

Commit configuration in the shared configuration file (these steps are for cloud merchants):

<ol><li>Change to the root directory in your project environment.</li><li>Copy <code>app/etc/config.php file</code> from the cloud environment.</li><li>Enter the following command to disable the Search Analytics Dashboard:<br/><code>$ bin/magento config:set smile_elasticsuite_tracker/general/enabled 0</code>
</li><li>
<code></code>Wait for project dependencies to update.</li><li>Enter the following command to commit your changes:<br/>
<pre class="line-numbers"><code class="language-clike">git add -A &amp;&amp; git commit . -m "Disable the ElasticSuite Search Analytics Dashboard" &amp;&amp; git push origin &lt;branch-name>  </code></pre>
</li></ol>

If you cannot upgrade to ElasticSuite 2.8.0 or disable the Search Analytics Dashboard feature in the ElasticSuite plugin, you can also create a cron to delete the tracking indices. Follow the steps in [ElasticSuite tracking indices causes problems with Elasticsearch](https://support.magento.com/hc/en-us/articles/360034921492).

## Related reading

To learn more about Elasticsearch installation and configuration see [Set up Elasticsearch service](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=elasticsearch). 