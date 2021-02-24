---
title: Exception on category page with Elasticsearch 5.0: Limit of total fields [1000] in index has been exceeded
link: https://support.magento.com/hc/en-us/articles/360003290654-Exception-on-category-page-with-Elasticsearch-5-0-Limit-of-total-fields-1000-in-index-has-been-exceeded
labels: Magento Commerce Cloud,2.2.4,exception,Elasticsearch,2.2.6,2.2.3,2.2.5
---

<p>This article provides a solution for when you receive the Exception (error) on a category page on storefront: "Limit of total fields [1000] in index [index_name] has been exceeded". The issue occurs if you have Elasticsearch 5.x.x used in your store. This is caused when you have more than 1000 fields in your Catalog Search index. 1000 is the new allowed number of fields in the default Elasticsearch 5.x.x configuration. Decrease the number of fields in your search index or increase the limit using the <code>index.mapping.total_fields.limit</code> setting (create a new Elasticsearch template with an increased setting).</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce Cloud 2.2.x and later, starting from 2.2.3</li>
<li>Elasticsearch: 5.x</li>
</ul>
<p class="info">ElasticSearch v.5 is deprecated for Magento Commerce Cloud 2.3.x</p>
<h2>Issue</h2>
<p>Accessing a category page on your Magento Commerce Cloud storefront causes the following exception:</p>
<blockquote>"Limit of total fields [1000] in index [index_name] has been exceeded"<br/> Under product attributes just "&lt;number&gt;"</blockquote>
<p>The exception occurs after rebuilding the Catalog Search index.</p>
<h2>Cause</h2>
<p>The limit of defined fields in a Catalog Search index, processed by Elasticsearch, has been exceeded.</p>
<p>Starting from Elasticsearch 5.0, the default limit for total fields has been set to 1000. According to the Elasticsearch <a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings">documentation</a>, the limit has been set to avoid mappings explosion:</p>
<blockquote>
<p>Defining too many fields in an index is a condition that can lead to a mapping explosion, which can cause out of memory errors and difficult situations to recover from. This problem may be more common than expected. As an example, consider a situation in which every new document inserted introduces new fields. This is quite common with dynamic mappings. Every time a document contains new fields, those will end up in the index’s mappings. This isn’t worrying for a small amount of data, but it can become a problem as the mapping grows. The following settings allow you to limit the number of field mappings that can be created manually or dynamically, in order to prevent bad documents from causing a mapping explosion:</p>
<p><code>index.mapping.total_fields.limit</code></p>
<p><a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings">Settings to prevent mappings explosion</a>; Elasticsearch Reference [6.4]</p>
</blockquote>
<h2>Solutions</h2>
<p>Do one of the following:</p>
<ol>
<li>Decrease the number of fields in the search index, or</li>
<li>Increase the field limit: create a new template for the Elasticsearch index (to be used by default) with an increased <code>index.mapping.total_fields.limit</code> setting.</li>
</ol>
<h3>Create template with increased field limit</h3>
<p>Below is an example of the <code>curl</code> command to create an Elasticsearch template:</p>
<pre><code class="language-php">curl -XPUT elasticsearch:9200/_template/template_name -d '{"template": "*", "order": 0, "settings": {"index": {"mapping": {"total_fields": {"limit": &lt;number_of_fields&gt;}}}}, "version": 1}'
</code></pre>
<p>After making changes, rebuild the Catalog Search index.</p>
<h2>Related Elasticsearch documentation</h2>
<ul>
<li><a href="https://www.elastic.co/guide/en/elasticsearch/reference/5.5/breaking-changes-5.0.html">Breaking changes in 5.0</a></li>
<li><a href="https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings">Settings to prevent mappings explosion</a></li>
<li><a href="https://www.elastic.co/guide/en/elasticsearch/reference/5.5/breaking_50_mapping_changes.html">Mapping Changes</a></li>
</ul>