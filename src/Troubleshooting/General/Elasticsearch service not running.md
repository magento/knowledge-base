---
title: Elasticsearch service not running 
link: https://support.magento.com/hc/en-us/articles/360035960491-Elasticsearch-service-not-running-
labels: Magento Commerce Cloud,Magento Commerce,2.2.4,PHP,exception,Elasticsearch,Elasticsearch errors,2.2.6,2.2.3,2.2.5,End of Life,2.3.1,2.3.0,Elasticsearch 6.x,how to,Elasticsearch 2.x,Elasticsearch 5.x,2.2.7,2.2.8,2.2.9
---

<p>This article provides solutions for errors you can experience when the Elasticsearch (ES) service is not running (usually as a result of crashing). Symptoms can include errors when running health checks using curl, reindexing using the command line, Exception and PHP errors, and errors on product pages. The table lists errors and links to resources to attempt to solve them. One symptom can have a range of different causes.</p>
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
<table>
<tbody>
<tr>
<td>Symptoms when ES service is not running</td>
<td>Details</td>
<td>Resources</td>
</tr>
<tr>
<td>Exception Errors</td>
<td><code>
          "Limit of total fields [1000] in index [index_name] has been
          exceeded"<br/>
          Under product attributes just "&lt;number&gt;"
        </code></td>
<td>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360003290654">Exception on category page with Elasticsearch 5.0: Limit of total fields [1000] in index has been exceeded</a></li>
</ul>
</td>
</tr>
<tr>
<td>
<pre class="line-numbers"><code class="language-clike">{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}] </code></pre>
</td>
<td> 
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360027356612">Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error"</a></li>
</ul>
</td>
</tr>
<tr>
<td>
<pre class="line-numbers"><code class="language-clike">Elasticsearch\Common\Exceptions\NoNodesAvailableException: Noticed exception 'Elasticsearch\Common\Exceptions\NoNodesAvailableException' with message 'No alive nodes found in your cluster' in /app/&lt;projectid&gt;/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php:51</code></pre>
</td>
<td>
<ul>
<li>Elasticsuite indices not being deleted.  See <a href="https://support.magento.com/hc/en-us/articles/360035266131">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a> and <a href="https://support.magento.com/hc/en-us/articles/360034921492">ElasticSuite tracking indices causes problems with Elasticsearch</a>.</li>
</ul>
 </td>
</tr>
<tr>
<td>PHP Error</td>
<td>
<pre class="line-numbers"><code class="language-clike"> No alive nodes found in your cluster","1":"#0 \/app\/&lt;projectid&gt;\/vendor\/elasticsearch\/elasticsearch\/src\/Elasticsearch\/Transport.php</code></pre>
</td>
<td>
<p> </p>
<ul>
<ul>
<ul>
<li>Resources for insufficient disk space:
<ul>
<li><a href="http://www.cyberciti.biz/datacenter/linux-unix-bsd-osx-cannot-write-to-hard-disk">8 Tips to Solve Linux &amp; Unix Systems Hard Disk Problems Like Disk Full Or Can’t Write to the Disk</a></li>
<li><a href="http://serverfault.com/questions/315181/df-says-disk-is-full-but-it-is-not">serverfault: df says disk is full, but it is not</a></li>
<li><a href="http://unix.stackexchange.com/questions/125429/tracking-down-where-disk-space-has-gone-on-linux">unix.stackexchange.com: Tracking down where disk space has gone on Linux?</a></li>
<li>Log files are not archived regularly enough. See DevDocs <a href="https://docs.magento.com/m2/ee/user_guide/system/action-log-archive.html#configure-the-log-archive">Configure the Log Archive</a>.</li>
<li>Files system directories are not optimized. See <a href="https://docs.magento.com/m2/ee/user_guide/system/file-optimization.html">DevDocs File Optimization</a>.</li>
<li>If the solutions in the above documentation do not solve the issue consider contacting your CSM to request additional storage.</li>
</ul>
</li>
<li>If your disk has not run out of storage but you are still getting the error messages in the left column, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</li>
</ul>
</ul>
</ul>
<ul>
<li>Elasticsuite indices not being deleted. See <a href="https://support.magento.com/hc/en-us/articles/360035266131">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a> and <a href="https://support.magento.com/hc/en-us/articles/360034921492">ElasticSuite tracking indices causes problems with Elasticsearch</a>
</li>
</ul>
</td>
</tr>
<tr>
<td>Curl Error</td>
<td>Running the curl command to check Elasticsearch health: <code>  curl -m1 localhost:9200/_cluster/health?pretty</code> (or <code>curl -m1 elasticsearch.internal:9200/_cluster/health?pretty</code> for Starter accounts) produces this error: <code>Error: curl: (7) Failed to connect to localhost port 9200: Connection refused</code> </td>
</tr>
<tr>
<td>Command-line error</td>
<td>Running <code>$ bin/magento indexer:reindex catalogsearch_fulltext</code> produces this error <code> "Catalog Search indexer process unknown error:<br/>
        No alive nodes found in your cluster"</code>
</td>
</tr>
<tr>
<td>
<p>Error on product pages</p>
</td>
<td><code> There has been an error processing your request.
    
      Exception printing is disabled by default for security reasons
          </code></td>
</tr>
</tbody>
</table>