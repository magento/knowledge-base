---
title: Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error
link: https://support.magento.com/hc/en-us/articles/360027356612-Elasticsearch-5-is-configured-but-search-page-does-not-load-with-Fielddata-is-disabled-error
labels: Magento Commerce,elasticsearch,troubleshooting,search,2.2.x
---

This topic describes how to fix the issue with Elasticsearch 5, where the search page does not load, and the exception similar to the following is thrown:

<pre class="language-bash">{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}].</pre>

### Affected versions

* Magento 2.2.x  
* ElasticSearch v.5

<p class="info">ElasticSearch v.5 is deprecated for Magento Commerce 2.3.x</p>

## Issue

Pre-conditions: Elasticsearch 5 is configured.

On search request the following exception is generated in logs:

<pre class="language-bash">{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}].</pre>

## Cause

By default, only certain types of product attributes can be used in Layered Navigation. They are Yes/No, Dropdown, Multipleselect, and Price. That is why in Magento Admin, you cannot set an attribute of any other type as Use in Layered Navigation = _Filterable_ or Use in Search Results Layered Navigation = _Yes_. But there is a technical possibility to get around this limitation by directly changing the `` is_filterable `` and `` is_filterable_in_search `` values in the database. If this happens, and any other attribute type, like Date, Text, etc., is set to be used in Layered Navigation, Elasticsearch 5 throws an exception.

To make sure this is the case, you need to find out if there are any other attributes other than Dropdown, Multipleselect, and Price, that are set to be used in Layered Navigation. Run the following query to search for these attributes:

<pre><code class="language-sql">SELECT ea.attribute_code, ea.frontend_input, cea.is_filterable, cea.is_filterable_in_search FROM eav_attribute AS ea
    -> INNER JOIN catalog_eav_attribute AS cea ON ea.attribute_id = cea.`attribute_id`
    -> WHERE (is_filterable = 1 OR is_filterable_in_search = 1) AND frontend_input NOT IN ('boolean', 'multiselect', 'select', 'price');</code></pre>

The result will contain a list of attributes used for Layered Navigation, whose type does not allow this. Take the steps described in the following section to fix this.

## Solution

To fix the issue, you need to set `` is_filterable `` (that is, used in Layered Navigation) and `` filterable_in_search `` (that is, used in search results Layered Navigation) to "0" (not used). To do this, take the following steps:

1. Create a database backup.
1. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin), or access the DB manually from the command line to run the following SQL query:
    
    <pre><code class="language-sql">UPDATE catalog_eav_attribute AS cea
	INNER JOIN eav_attribute AS ea
		ON ea.attribute_id = cea.attribute_id
SET cea.is_filterable = 0, cea.is_filterable_in_search = 0
WHERE (cea.is_filterable = 1 OR cea.is_filterable_in_search = 1) 
	AND frontend_input NOT IN ('boolean', 'multiselect', 'select', 'price');</code></pre>
    
    
1. Run the Catalog Search full reindex using the following command:
    
    <pre><code class="language-bash">bin/magento indexer:reindex catalogsearch_fulltext</code></pre>
    
    
1. Clean cache by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin under System > Tools > Cache Management.

Now you should be able to perform catalog searches with no issues.