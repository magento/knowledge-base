---
title: Exception on category page with Elasticsearch 5.0: Limit of total fields [1000] in index has been exceeded
link: https://support.magento.com/hc/en-us/articles/360003290654-Exception-on-category-page-with-Elasticsearch-5-0-Limit-of-total-fields-1000-in-index-has-been-exceeded
labels: Magento Commerce Cloud,2.2.4,exception,Elasticsearch,2.2.6,2.2.3,2.2.5
---

This article provides a solution for when you receive the Exception (error) on a category page on storefront: "Limit of total fields [1000] in index [index\_name] has been exceeded". The issue occurs if you have Elasticsearch 5.x.x used in your store. This is caused when you have more than 1000 fields in your Catalog Search index. 1000 is the new allowed number of fields in the default Elasticsearch 5.x.x configuration. Decrease the number of fields in your search index or increase the limit using the index.mapping.total\_fields.limit setting (create a new Elasticsearch template with an increased setting).

 Affected versions
-----------------

 
 * Magento Commerce Cloud 2.2.x and later, starting from 2.2.3
 * Elasticsearch: 5.x
 
 ElasticSearch v.5 is deprecated for Magento Commerce Cloud 2.3.x

 Issue
-----

 Accessing a category page on your Magento Commerce Cloud storefront causes the following exception:

 
> "Limit of total fields [1000] in index [index\_name] has been exceeded"  
>  Under product attributes just "<number>" The exception occurs after rebuilding the Catalog Search index.

 Cause
-----

 The limit of defined fields in a Catalog Search index, processed by Elasticsearch, has been exceeded.

 Starting from Elasticsearch 5.0, the default limit for total fields has been set to 1000. According to the Elasticsearch [documentation](https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings), the limit has been set to avoid mappings explosion:

 
>  Defining too many fields in an index is a condition that can lead to a mapping explosion, which can cause out of memory errors and difficult situations to recover from. This problem may be more common than expected. As an example, consider a situation in which every new document inserted introduces new fields. This is quite common with dynamic mappings. Every time a document contains new fields, those will end up in the index’s mappings. This isn’t worrying for a small amount of data, but it can become a problem as the mapping grows. The following settings allow you to limit the number of field mappings that can be created manually or dynamically, in order to prevent bad documents from causing a mapping explosion:
> 
>  index.mapping.total\_fields.limit
> 
>  [Settings to prevent mappings explosion](https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings); Elasticsearch Reference [6.4]
> 
>   Solutions
---------

 Do one of the following:

 
 2. Decrease the number of fields in the search index, or
 4. Increase the field limit: create a new template for the Elasticsearch index (to be used by default) with an increased index.mapping.total\_fields.limit setting.
 
 ### Create template with increased field limit

 Below is an example of the curl command to create an Elasticsearch template:

 curl -XPUT elasticsearch:9200/\_template/template\_name -d '{"template": "*", "order": 0, "settings": {"index": {"mapping": {"total\_fields": {"limit": <number\_of\_fields>}}}}, "version": 1}'  After making changes, rebuild the Catalog Search index.

 Related Elasticsearch documentation
-----------------------------------

 
 * [Breaking changes in 5.0](https://www.elastic.co/guide/en/elasticsearch/reference/5.5/breaking-changes-5.0.html)
 * [Settings to prevent mappings explosion](https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings)
 * [Mapping Changes](https://www.elastic.co/guide/en/elasticsearch/reference/5.5/breaking_50_mapping_changes.html)
 
