---
title: Elasticsearch 5 is configured, but search page does not load with "Fielddata is disabled..." error
link: https://support.magento.com/hc/en-us/articles/360027356612-Elasticsearch-5-is-configured-but-search-page-does-not-load-with-Fielddata-is-disabled-error
labels: Magento Commerce,elasticsearch,troubleshooting,search,2.2.x
---

This topic describes how to fix the issue with Elasticsearch 5, where the search page does not load, and the exception similar to the following is thrown:

 {"0":"{\"error\":{\"root\_cause\":[{\"type\":\"illegal\_argument\_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute\_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}]. ### Affected versions

 
 * Magento 2.2.x 
 * ElasticSearch v.5
 
 ElasticSearch v.5 is deprecated for Magento Commerce 2.3.x

 Issue
-----

 Pre-conditions: Elasticsearch 5 is configured.

 On search request the following exception is generated in logs:

 {"0":"{\"error\":{\"root\_cause\":[{\"type\":\"illegal\_argument\_exception\",\"reason\":\"Fielddata is disabled on text fields by default. Set fielddata=true on [%attribute\_code%]] in order to load fielddata in memory by uninverting the inverted index. Note that this can however use significant memory.\"}]. Cause
-----

 By default, only certain types of product attributes can be used in Layered Navigation. They are Yes/No, Dropdown, Multipleselect, and Price. That is why in Magento Admin, you cannot set an attribute of any other type as **Use in Layered Navigation** = *Filterable* or **Use in** **Search Results Layered Navigation** = *Yes*. But there is a technical possibility to get around this limitation by directly changing the is\_filterable and is\_filterable\_in\_search values in the database. If this happens, and any other attribute type, like Date, Text, etc., is set to be used in Layered Navigation, Elasticsearch 5 throws an exception.

 To make sure this is the case, you need to find out if there are any other attributes other than Dropdown, Multipleselect, and Price, that are set to be used in Layered Navigation. Run the following query to search for these attributes:

 SELECT ea.attribute\_code, ea.frontend\_input, cea.is\_filterable, cea.is\_filterable\_in\_search FROM eav\_attribute AS ea -> INNER JOIN catalog\_eav\_attribute AS cea ON ea.attribute\_id = cea.`attribute\_id` -> WHERE (is\_filterable = 1 OR is\_filterable\_in\_search = 1) AND frontend\_input NOT IN ('boolean', 'multiselect', 'select', 'price'); The result will contain a list of attributes used for Layered Navigation, whose type does not allow this. Take the steps described in the following section to fix this.

 Solution
--------

 To fix the issue, you need to set is\_filterable (that is, used in Layered Navigation) and filterable\_in\_search (that is, used in search results Layered Navigation) to "0" (not used). To do this, take the following steps:

 
 2. Create a database backup.
 4. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin), or access the DB manually from the command line to run the following SQL query: UPDATE catalog\_eav\_attribute AS cea INNER JOIN eav\_attribute AS ea ON ea.attribute\_id = cea.attribute\_id SET cea.is\_filterable = 0, cea.is\_filterable\_in\_search = 0 WHERE (cea.is\_filterable = 1 OR cea.is\_filterable\_in\_search = 1) AND frontend\_input NOT IN ('boolean', 'multiselect', 'select', 'price'); 
 6. Run the Catalog Search full reindex using the following command: bin/magento indexer:reindex catalogsearch\_fulltext 
 8. Clean cache by running bin/magento cache:clean or in Magento Admin under **System** > **Tools** > **Cache Management**.
 
 Now you should be able to perform catalog searches with no issues.

