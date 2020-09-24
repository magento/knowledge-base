__Issue:__&nbsp;Exception (error) on a category page on storefront: "Limit of total fields \[1000\] in index \[index\_name\] has been exceeded". The issue occurs if you have Elasticsearch 5.x.x used in your store.

__Cause:__&nbsp;You have more than 1000 fields in your Catalog Search index. 1000 is the new allowed number of fields in the default Elasticsearch 5.x.x configuration.

__Solution:__&nbsp;Decrease the number of fields in your search index or increase the limit using the&nbsp;`` index.mapping.total_fields.limit `` setting (create a new Elasticsearch template with an increased setting).

## Affected versions

*   Magento Commerce Cloud: 2.2.3 and later
*   Elasticsearch: 5.x.x

## Issue

Accessing a category page on your Magento Commerce Cloud storefront causes the following exception:

>  "Limit of total fields \[1000\] in index \[index\_name\] has been exceeded"  
>  Under product attributes just "&lt;number&gt;"

The exception occurs after rebuilding the Catalog Search index.

## Cause

The limit of defined fields in a Catalog Search index, processed by Elasticsearch, has been exceeded.

Starting from Elasticsearch 5.0, the default limit for total fields has been set to 1000.&nbsp;According to the Elasticsearch&nbsp;[documentation](https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings), the limit has been set to avoid mappings explosion:

>  
> Defining too many fields in an index is a condition that can lead to a mapping explosion, which can cause out of memory errors and difficult situations to recover from. This problem may be more common than expected. As an example, consider a situation in which every new document inserted introduces new fields. This is quite common with dynamic mappings. Every time a document contains new fields, those will end up in the index’s mappings. This isn’t worrying for a small amount of data, but it can become a problem as the mapping grows. The following settings allow you to limit the number of field mappings that can be created manually or dynamically, in order to prevent bad documents from causing a mapping explosion:
> 
> `` index.mapping.total_fields.limit ``
> 
> [Settings to prevent mappings explosion](https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings); Elasticsearch Reference \[6.4\]
> 

## Solutions

Do one of the following:

1.   Decrease the number of fields in the search index,&nbsp;or
2.   Increase the field limit: create a new template for the Elasticsearch index (to be used by default) with an increased `` index.mapping.total_fields.limit `` setting.

### Create template with increased field limit

Below is an example of the `` curl `` command to create an Elasticsearch template:

<pre><code class="language-php">curl -XPUT elasticsearch:9200/_template/template_name -d '{"template": "*", "order": 0, "settings": {"index": {"mapping": {"total_fields": {"limit": &lt;number_of_fields&gt;}}}}, "version": 1}'
</code></pre>

After making changes, rebuild the Catalog Search index.

## Related Elasticsearch documentation

*   <a href="https://www.elastic.co/guide/en/elasticsearch/reference/5.5/breaking-changes-5.0.html" rel="noopener">Breaking changes in 5.0</a>
*   [Settings to prevent mappings explosion](https://www.elastic.co/guide/en/elasticsearch/reference/current/mapping.html#mapping-limit-settings)
*   <a href="https://www.elastic.co/guide/en/elasticsearch/reference/5.5/breaking_50_mapping_changes.html" rel="noopener">Mapping Changes</a>