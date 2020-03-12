This article talks about errors you can experience when the Elasticsearch (ES) service is not running (usually as a result of crashing) and provides links to resources to help. Symptoms can include errors when running health checks using curl, reindexing using the command line, Exception and PHP errors, and errors on product pages. The table lists errors and links to resources to attempt to solve them. One symptom can have a range of different causes.

## Elasticsearch version compatibility with Magento

*   Magento Commerce and Magento Commerce Cloud:
    
    *   v2.2.3+ supports ES 5.x
    *   v2.2.8+ and v2.3.1+ support ES 6.x
    *   ES v2.x and v5.x are not recommended because of <a href="https://www.elastic.co/support/eol" rel="noopener" target="_blank">End of Life</a>. However, if you have Magento v2.3.1 and want to use ES 2.x or ES 5.x, you must&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html" rel="noopener" target="_blank">Change the Elasticsearch php Client</a>.
    
    
    
*   Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).

<table style="height: 354px; width: 3055px;">
<tbody>
<tr>
<td style="width: 800px;">Symptoms when ES service is not running</td>
<td style="width: 4000px;">Details</td>
<td style="width: 2637px;">Resources</td>
</tr>
<tr>
<td rowspan="3">Exception Errors</td>
<td style="width: 2637px;"><code>
          "Limit of total fields [1000] in index [index_name] has been
          exceeded"<br/>
          Under product attributes just "&lt;number&gt;"
        </code></td>
<td>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360003290654" rel="noopener" target="_blank">Exception on category page with Elasticsearch 5.0: Limit of total fields [1000] in index has been exceeded</a></li>
</ul>
</td>
</tr>
<tr>
<td style="width: 2637px;">
<pre class="line-numbers"><code class="language-clike">{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}] </code></pre>
</td>
<td style="width: 2637px;">&nbsp;
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360027356612" rel="noopener" target="_blank">Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error"</a></li>
</ul>
</td>
</tr>
<tr>
<td style="width: 110px;">
<pre class="line-numbers"><code class="language-clike">Elasticsearch\Common\Exceptions\NoNodesAvailableException: Noticed exception 'Elasticsearch\Common\Exceptions\NoNodesAvailableException' with message 'No alive nodes found in your cluster' in /app/&lt;projectid&gt;/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php:51</code></pre>
</td>
<td style="width: 2637px;">
<ul>
<li>Elasticsuite indices not being deleted.&nbsp; See <a href="https://support.magento.com/hc/en-us/articles/360035266131" rel="noopener" target="_blank">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a>&nbsp;and <a href="https://support.magento.com/hc/en-us/articles/360034921492" rel="noopener" style="background-color: #ffffff;" target="_blank">ElasticSuite tracking indices causes problems with Elasticsearch</a>.</li>
</ul>
&nbsp;</td>
</tr>
<tr>
<td style="width: 110px;">PHP Error</td>
<td style="width: 2637px;">
<pre class="line-numbers"><code class="language-clike"> No alive nodes found in your cluster","1":"#0 \/app\/&lt;projectid&gt;\/vendor\/elasticsearch\/elasticsearch\/src\/Elasticsearch\/Transport.php</code></pre>
</td>
<td rowspan="4">
<p>&nbsp;</p>
<ul>
<ul>
<ul>
<li>Resources for insufficient disk space:
<ul>
<li><a href="http://www.cyberciti.biz/datacenter/linux-unix-bsd-osx-cannot-write-to-hard-disk" rel="noopener" target="_blank">8 Tips to Solve Linux &amp; Unix Systems Hard Disk Problems Like Disk Full Or Can’t Write to the Disk</a></li>
<li><a href="http://serverfault.com/questions/315181/df-says-disk-is-full-but-it-is-not" rel="noopener" target="_blank">serverfault: df says disk is full, but it is not</a></li>
<li><a href="http://unix.stackexchange.com/questions/125429/tracking-down-where-disk-space-has-gone-on-linux" rel="noopener" target="_blank">unix.stackexchange.com: Tracking down where disk space has gone on Linux?</a></li>
<li>Log files are not archived regularly enough. See DevDocs&nbsp;<a href="https://docs.magento.com/m2/ee/user_guide/system/action-log-archive.html#configure-the-log-archive" rel="noopener" target="_blank">Configure the Log Archive</a>.</li>
<li>Files system directories are not optimized. See <a href="https://docs.magento.com/m2/ee/user_guide/system/file-optimization.html" rel="noopener" target="_blank">DevDocs File Optimization</a>.</li>
<li>If the solutions in the above documentation do not solve the issue consider contacting your CSM to request additional storage.</li>
</ul>
</li>
<li>If your disk has not run out of storage but you are still getting the error messages in the left column, <a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a>.</li>
</ul>
</ul>
</ul>
<ul>
<li>Elasticsuite indices not being deleted. See <a href="https://support.magento.com/hc/en-us/articles/360035266131" rel="noopener" target="_blank">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a>&nbsp;and <a href="https://support.magento.com/hc/en-us/articles/360034921492" rel="noopener" style="background-color: #ffffff;" target="_blank">ElasticSuite tracking indices causes problems with Elasticsearch</a>
</li>
</ul>
</td>
</tr>
<tr>
<td style="width: 110px;">Curl Error</td>
<td style="width: 2637px;">Running the curl command to check Elasticsearch health: <code>  curl -m1 localhost:9200/_cluster/health?pretty</code> (or <code>curl -m1 elasticsearch.internal:9200/_cluster/health?pretty</code> for Starter accounts)&nbsp;produces this error:&nbsp;<code>Error: curl: (7) Failed to connect to localhost port 9200: Connection refused</code>&nbsp;</td>
</tr>
<tr>
<td style="width: 110px;">Command-line error</td>
<td style="width: 2637px;">Running <code>$ bin/magento indexer:reindex catalogsearch_fulltext</code> produces this error <code> "Catalog Search indexer process unknown error:<br/>
        No alive nodes found in your cluster"</code>
</td>
</tr>
<tr>
<td style="width: 110px;">
<p>Error on product pages</p>
</td>
<td style="width: 2637px;"><code> There has been an error processing your request.
    
      Exception printing is disabled by default for security reasons
          </code></td>
</tr>
</tbody>
</table>