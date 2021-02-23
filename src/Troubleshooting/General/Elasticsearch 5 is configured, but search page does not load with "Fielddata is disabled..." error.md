---
title: Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error
link: https://support.magento.com/hc/en-us/articles/360027356612-Elasticsearch-5-is-configured-but-search-page-does-not-load-with-Fielddata-is-disabled-error
labels: Magento Commerce,elasticsearch,troubleshooting,search,2.2.x
---

<p>This topic describes how to fix the issue with Elasticsearch 5, where the search page does not load, and the exception similar to the following is thrown:</p>
<pre class="language-bash">{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}].</pre>
<h3>Affected versions</h3>
<ul>
<li>Magento 2.2.x  </li>
<li>ElasticSearch v.5</li>
</ul>
<p class="info">ElasticSearch v.5 is deprecated for Magento Commerce 2.3.x</p>
<h2>Issue</h2>
<p>Pre-conditions: Elasticsearch 5 is configured.</p>
<p>On search request the following exception is generated in logs:</p>
<pre class="language-bash">{"0":"{\"error\":{\"root_cause\":[{\"type\":\"illegal_argument_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}].</pre>
<h2>Cause</h2>
<p>By default, only certain types of product attributes can be used in Layered Navigation. They are Yes/No, Dropdown, Multipleselect, and Price. That is why in Magento Admin, you cannot set an attribute of any other type as Use in Layered Navigation = <em>Filterable</em> or Use in Search Results Layered Navigation = <em>Yes</em>. But there is a technical possibility to get around this limitation by directly changing the <code>is_filterable</code> and <code>is_filterable_in_search</code> values in the database. If this happens, and any other attribute type, like Date, Text, etc., is set to be used in Layered Navigation, Elasticsearch 5 throws an exception.</p>
<p>To make sure this is the case, you need to find out if there are any other attributes other than Dropdown, Multipleselect, and Price, that are set to be used in Layered Navigation. Run the following query to search for these attributes:</p>
<pre><code class="language-sql">SELECT ea.attribute_code, ea.frontend_input, cea.is_filterable, cea.is_filterable_in_search FROM eav_attribute AS ea
    -&gt; INNER JOIN catalog_eav_attribute AS cea ON ea.attribute_id = cea.`attribute_id`
    -&gt; WHERE (is_filterable = 1 OR is_filterable_in_search = 1) AND frontend_input NOT IN ('boolean', 'multiselect', 'select', 'price');</code></pre>
<p>The result will contain a list of attributes used for Layered Navigation, whose type does not allow this. Take the steps described in the following section to fix this.</p>
<h2>Solution</h2>
<p>To fix the issue, you need to set <code>is_filterable</code> (that is, used in Layered Navigation) and <code>filterable_in_search</code> (that is, used in search results Layered Navigation) to "0" (not used). To do this, take the following steps:</p>
<ol>
<li>Create a database backup.</li>
<li>Use a database tool such as <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin">phpMyAdmin</a>, or access the DB manually from the command line to run the following SQL query:
<pre><code class="language-sql">UPDATE catalog_eav_attribute AS cea
	INNER JOIN eav_attribute AS ea
		ON ea.attribute_id = cea.attribute_id
SET cea.is_filterable = 0, cea.is_filterable_in_search = 0
WHERE (cea.is_filterable = 1 OR cea.is_filterable_in_search = 1) 
	AND frontend_input NOT IN ('boolean', 'multiselect', 'select', 'price');</code></pre>
</li>
<li>Run the Catalog Search full reindex using the following command:
<pre><code class="language-bash">bin/magento indexer:reindex catalogsearch_fulltext</code></pre>
</li>
<li>Clean cache by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin under System &gt; Tools &gt; Cache Management.</li>
</ol>
<p>Now you should be able to perform catalog searches with no issues.</p>