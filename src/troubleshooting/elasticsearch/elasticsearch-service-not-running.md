---
title: Elasticsearch service not running
labels: 2.2.3,2.2.4,2.2.5,2.2.6,2.2.7,2.2.8,2.2.9,2.3.0,2.3.1,Elasticsearch,Elasticsearch 2.x,Elasticsearch 5.x,Elasticsearch 6.x,Elasticsearch errors,End of Life,Magento Commerce,Magento Commerce Cloud,PHP,exception,how to,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides solutions for errors you can experience when the Elasticsearch (ES) service is not running (usually as a result of crashing). Symptoms can include errors when running health checks using curl, reindexing using the command line, Exception and PHP errors, and errors on product pages. The table lists errors and links to resources to attempt to solve them. One symptom can have a range of different causes.

## Elasticsearch version compatibility with Adobe Commerce

* Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure:
    * v2.2.3+ supports ES 5.x
    * v2.2.8+ and v2.3.1+ support ES 6.x
    * ES v2.x and v5.x are not recommended because of [End of Life](https://www.elastic.co/support/eol). However, if you have Adobe Commerce v2.3.1 and want to use ES 2.x or ES 5.x, you must [Change the Elasticsearch php Client](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html).
* Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).

<table>
<tr>
<th>Symptoms when ES service is not running</th>
<th>Details</th>
<th>Resources</th>
</tr>
<tr>
<td rowspan="3">Exception errors</td>
<td><i>Limit of total fields [1000] in index [index_name] has been
          exceeded" Under product attributes just <code>number</code></i> </td>
<td>
<a href="https://support.magento.com/hc/en-us/articles/360003290654">Exception on category page with Elasticsearch 5.0: Limit of total fields [1000] in index has been exceeded</a> in our support knowledge base.
</td>
</tr>
<tr>
<td>
<i>{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}]</i>
</td>
<td>
<a href="https://support.magento.com/hc/en-us/articles/360027356612">Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error</a> in our support knowledge base.
</td>
</tr>
<tr>
<td>
<i>Elasticsearch\Common\Exceptions\NoNodesAvailableException: Noticed exception 'Elasticsearch\Common\Exceptions\NoNodesAvailableException' with message 'No alive nodes found in your cluster' in /app/<projectid>/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php:51</i>
</td>
<td>
Elasticsuite indices not being deleted.  See <a href="https://support.magento.com/hc/en-us/articles/360035266131">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a> and <a href="https://support.magento.com/hc/en-us/articles/360034921492">ElasticSuite tracking indices causes problems with Elasticsearch</a> in our support knowledge base.
 </td>
</tr>
<tr>
<td>PHP error</td>
<td>
<i>No alive nodes found in your cluster","1":"#0 /app/<code>projectid</code>/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Transport.php</i>
</td>
<td rowspan="4">
<ul>
<li>Resources for insufficient disk space:<ul>
<li><a href="http://www.cyberciti.biz/datacenter/linux-unix-bsd-osx-cannot-write-to-hard-disk">8 Tips to Solve Linux & Unix Systems Hard Disk Problems Like Disk Full Or Can’t Write to the Disk</a></li>
<li><a href="http://serverfault.com/questions/315181/df-says-disk-is-full-but-it-is-not">serverfault: df says disk is full, but it is not</a></li>
<li><a href="http://unix.stackexchange.com/questions/125429/tracking-down-where-disk-space-has-gone-on-linux">unix.stackexchange.com: Tracking down where disk space has gone on Linux?</a></li>
<li>Log files are not archived regularly enough. See <a href="https://docs.magento.com/m2/ee/user_guide/system/action-log-archive.html#configure-the-log-archive">Configure the Log Archive</a> in our developer documentation.</li>
<li>Files system directories are not optimized. See <a href="https://docs.magento.com/m2/ee/user_guide/system/file-optimization.html">File Optimization</a> in our developer documentation.</li>
<li>If the solutions in the above documentation do not solve the issue consider contacting your CSM to request additional storage.</li>
</ul>
</li>
<li>If your disk has not run out of storage but you are still getting the error messages in the left column, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</li>
</ul>
<ul>
<li>Elasticsuite indices not being deleted. See <a href="https://support.magento.com/hc/en-us/articles/360035266131">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a> and <a href="https://support.magento.com/hc/en-us/articles/360034921492">ElasticSuite tracking indices causes problems with Elasticsearch</a> in our support knowledge base.
</li>
</ul>
</td>
</tr>
<tr>
<td><code>Curl</code> error</td>
<td>Running the <code>curl</code> command to check Elasticsearch health:<code>curl -m1 localhost:9200/_cluster/health?pretty</code>(or<code>curl -m1 elasticsearch.internal:9200/_cluster/health?pretty</code>for Starter accounts) produces this error: <i>Error: curl: (7) Failed to connect to localhost port 9200: Connection refused</i> </td>
</tr>
<tr>
<td>Command-line error</td>
<td>Running <code>$ bin/magento indexer:reindex catalogsearch_fulltext</code> produces this error <i>Catalog Search indexer process unknown error:
        No alive nodes found in your cluster</i>
</td>
</tr>
<tr>
<td>Error on product pages
</td>
<td><i>There has been an error processing your request.
      Exception printing is disabled by default for security reasons</code></i>
</tr>
</table>
