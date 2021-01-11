---
title: Elasticsearch service not running 
link: https://support.magento.com/hc/en-us/articles/360035960491-Elasticsearch-service-not-running-
labels: Magento Commerce Cloud,Magento Commerce,2.2.4,PHP,exception,Elasticsearch,Elasticsearch errors,2.2.6,2.2.3,2.2.5,End of Life,2.3.1,2.3.0,Elasticsearch 6.x,how to,Elasticsearch 2.x,Elasticsearch 5.x,2.2.7,2.2.8,2.2.9
---

This article provides solutions for errors you can experience when the Elasticsearch (ES) service is not running (usually as a result of crashing). Symptoms can include errors when running health checks using curl, reindexing using the command line, Exception and PHP errors, and errors on product pages. The table lists errors and links to resources to attempt to solve them. One symptom can have a range of different causes.

 Elasticsearch version compatibility with Magento
------------------------------------------------

 
 * Magento Commerce and Magento Commerce Cloud: 
	 + v2.2.3+ supports ES 5.x
	 + v2.2.8+ and v2.3.1+ support ES 6.x
	 + ES v2.x and v5.x are not recommended because of [End of Life](https://www.elastic.co/support/eol). However, if you have Magento v2.3.1 and want to use ES 2.x or ES 5.x, you must [Change the Elasticsearch php Client](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html). 
 * Magento Open Source v2.3.0+ supports ES 5.x and 6.x (but 6.x is recommended).
 
    Symptoms when ES service is not running Details Resources   Exception Errors  "Limit of total fields [1000] in index [index\_name] has been exceeded"  
 Under product attributes just "<number>"   
 * [Exception on category page with Elasticsearch 5.0: Limit of total fields [1000] in index has been exceeded](https://support.magento.com/hc/en-us/articles/360003290654)
 
     {"0":"{\"error\":{\"root\_cause\":[{\"type\":\"illegal\_argument\_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute\_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}]    
 * [Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error"](https://support.magento.com/hc/en-us/articles/360027356612)
 
     Elasticsearch\Common\Exceptions\NoNodesAvailableException: Noticed exception 'Elasticsearch\Common\Exceptions\NoNodesAvailableException' with message 'No alive nodes found in your cluster' in /app/<projectid>/vendor/elasticsearch/elasticsearch/src/Elasticsearch/ConnectionPool/StaticNoPingConnectionPool.php:51   
 * Elasticsuite indices not being deleted. See [Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin](https://support.magento.com/hc/en-us/articles/360035266131) and [ElasticSuite tracking indices causes problems with Elasticsearch](https://support.magento.com/hc/en-us/articles/360034921492).
 
    PHP Error   No alive nodes found in your cluster","1":"#0 \/app\/<projectid>\/vendor\/elasticsearch\/elasticsearch\/src\/Elasticsearch\/Transport.php    

 
 
 
 - Resources for insufficient disk space: 
	 * [8 Tips to Solve Linux & Unix Systems Hard Disk Problems Like Disk Full Or Can’t Write to the Disk](http://www.cyberciti.biz/datacenter/linux-unix-bsd-osx-cannot-write-to-hard-disk)
	 * [serverfault: df says disk is full, but it is not](http://serverfault.com/questions/315181/df-says-disk-is-full-but-it-is-not)
	 * [unix.stackexchange.com: Tracking down where disk space has gone on Linux?](http://unix.stackexchange.com/questions/125429/tracking-down-where-disk-space-has-gone-on-linux)
	 * Log files are not archived regularly enough. See DevDocs [Configure the Log Archive](https://docs.magento.com/m2/ee/user_guide/system/action-log-archive.html#configure-the-log-archive).
	 * Files system directories are not optimized. See [DevDocs File Optimization](https://docs.magento.com/m2/ee/user_guide/system/file-optimization.html).
	 * If the solutions in the above documentation do not solve the issue consider contacting your CSM to request additional storage. 
 - If your disk has not run out of storage but you are still getting the error messages in the left column, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).
 
 
 
 
 * Elasticsuite indices not being deleted. See [Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin](https://support.magento.com/hc/en-us/articles/360035266131) and [ElasticSuite tracking indices causes problems with Elasticsearch](https://support.magento.com/hc/en-us/articles/360034921492) 
 
    Curl Error Running the curl command to check Elasticsearch health:  curl -m1 localhost:9200/\_cluster/health?pretty (or curl -m1 elasticsearch.internal:9200/\_cluster/health?pretty for Starter accounts) produces this error: Error: curl: (7) Failed to connect to localhost port 9200: Connection refused    Command-line error Running $ bin/magento indexer:reindex catalogsearch\_fulltext produces this error  "Catalog Search indexer process unknown error:  
 No alive nodes found in your cluster"     Error on product pages

   There has been an error processing your request. Exception printing is disabled by default for security reasons    