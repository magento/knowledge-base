---
title: Elasticsearch troubleshooter
link: https://support.magento.com/hc/en-us/articles/360040757112-Elasticsearch-troubleshooter
labels: Magento Commerce Cloud,Magento Commerce,Troubleshooter,elasticsuite,Elasticsearch problems,missing products,Elastic,how to,crash
---

Elasticsearch issues can be solved using the Elasticsearch troubleshooter tool. Click on each question to reveal the answer in each step of the troubleshooter.

On Magento Cloud please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) detailing your required service upgrade and stating the time when you want the upgrade process to start.

-------This is one whole accordion panel.-------------

##### Step 1

Could your problem relate to Elasticsearch? Elasticsearch issues indicated by error messages, "*No alive nodes found in your cluster",*missing products, and the display of old product information. 
a. YES – Proceed to [Step 2](#zd-accordion-2).  
b. NO – Search again on relevant search terms in the [Magento Help Center Knowledge Base](https://support.magento.com/hc).

-------This is one whole accordion panel.-------------

##### Step 2

Is it a new installation of Elasticsearch?
a. YES – [Ensure Elasticsearch is installed properly.](https://support.magento.com/hc/en-us/articles/360034939312) Also check whether you are on Magento Commerce Cloud 2.3.1 or later. Merchants that have upgraded to Magento Commerce Cloud (versions 2.3.1 and onwards) and are on a version of Elasticsearch prior to 6.x can experience errors when deploying. To solve this issue the Elasticsearch client module and Elasticsearch service need to be on the latest recommended versions. For steps refer to [Elasticsearch issues after Magento Commerce Cloud 2.3.1+ upgrade](https://support.magento.com/hc/en-us/articles/360042538511).  
b. NO – Check the health of your cluster. If you are on a Pro staging or production environment run this command: curl -m1 localhost:9200/\_cluster/health?pretty. If you are on an integration environment (that includes all the Starter branches) run  
curl -m1 elasticsearch.internal:9200/\_cluster/health?pretty. Proceed to [Step 3](#zd-accordion-3).

-------This is one whole accordion panel.-------------

##### Step 3

Did you get a Service response?
a. YES – Proceed to [Step 4](#zd-accordion-4).  
b. NO – Proceed to [Step 9](#zd-accordion-9).

-------This is one whole accordion panel.-------------

##### Step 4

Response green? 
a. YES – Elasticsearch is available for processing data and reindexing should work. Proceed to [Step 5](#zd-accordion-5).  
b. NO – Yellow or red means there are problems with connections between nodes, and some data may not be available. If yellow run the command:  
 php bin/magento config:show catalog/search/engine to check your search engine. Proceed to [Step 6](#zd-accordion-6). If red response [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

##### Step 5

Search issue? Symptoms might include no products, empty categories or no updates to products or products categories are not correct.  
a. YES – Run this command to check the status of catalog search:  
 php bin/magento indexer:status. Proceed to [Step 8](#zd-accordion-8).  
b. NO – Run command: php bin/magento config:show catalog/search/engine. Proceed to [Step 6](#zd-accordion-6).

-------This is one whole accordion panel.-------------

##### Step 6

ElasticSuite in use?
a. YES – Check if ElasticSuite is at the current version by running this command:  
 cat composer.lock | grep -A 1 elasticsuite | grep '"version"'   
To check if this version is depreciated or recommended, refer to [Github: Smile-SA/elaticsuite](https://github.com/Smile-SA/elasticsuite). If ElasticSuite is up to date proceed to [Step 10](#zd-accordion-10).  
b. NO – proceed to [Step 7](#zd-accordion-7).

-------This is one whole accordion panel.-------------

##### Step 7

Run the command: php ./vendor/bin/ece-tools -V and check ECE-tools version. Is it the [latest version of ECE-tools](https://github.com/magento/ece-tools/releases)?
a. YES – Proceed to [Step 5a](#zd-accordion-5).  
b. NO – Upgrade ECE-tools to the most current version. Run the command php bin/magento config: show catalog/search/engine to check your search engine. Proceed to [Step 6](#zd-accordion-6).

-------This is one whole accordion panel.-------------

##### Step 8

Is catalog search status in *Processing*?
a. YES –  You need to wait until processing is done and then check if product categories updated. If they have not, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).   
b. NO –  If the status of catalog search is *Reindex required* run in CLI/Terminal:  
 php bin/magento cron:run. If this does not work, run:  
 php bin/magento indexer:reindex. If this does not solve the issue,  [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

##### Step 9

.yaml file recently updated?
a. YES – Check .yaml Elasticsearch configuration by referring to DevDocs [Set up Elasticsearch: To enable Elasticsearch](https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=elastic%20search%20yaml).  
b. NO – [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

##### Step 10

Run curl elasticsearch.internal:9200/\_cat/indices (if you are on an integration environment that includes all the Starter branches). If you are on Pro staging or production environment run curl
 localhost:9200/\_cat/indices. Are there tracking indices listed? Check the output for  <index
 name>\_tracking\_log\_.

a. YES –  If you are on a version of ElasticSuite prior to version 2.8.0 it is recommended that you [upgrade to ElasticSuite 2.8.0 to adjust tracking indices retention or disable tracking](https://support.magento.com/hc/en-us/articles/360035266131?). If you cannot immediately upgrade you can [create a cron to remove tracking indices](https://support.magento.com/hc/en-us/articles/360034921492). However, this could cause performance issues. Once you have upgraded to ElasticSuite 2.8.0 or removed tracking indices run the command (if you are on Pro staging or production environments): localhost:9200/\_cat/allocation?v to check available space. If you are on one of the integration environments (that includes all the Starter branches) run elasticsearch.internal:9200/\_cat/allocation?v. Proceed to [Step 11](#zd-accordion-11).  
b. NO – If you are on Pro staging or production environments run localhost:9200/\_cat/allocation?v and check available space. If you are on one of the integration environments (that includes all the Starter branches) run elasticsearch.internal:9200/\_cat/allocation?v. Proceed to [Step 11](#zd-accordion-11).

-------This is one whole accordion panel.-------------

##### Step 11

Specific error? Magento and ES logs, extensions and custom code.
a. YES – Review the Magento Help Center Troubleshooting article [Ensure Elasticsearch is installed properly](https://support.magento.com/hc/en-us/articles/360034939312) or [Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin](https://support.magento.com/hc/en-us/articles/360035266131).  
b. NO – Proceed to [Step 12](#zd-accordion-12).

-------This is one whole accordion panel.-------------

##### Step 12

Storage usage > 85%?
a.  YES – You need to increase available storage. Refer to DevDocs [Set up Elasticsearch: To enable Elasticsearch](https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=elastic%20search%20yaml). Then run: localhost:9200/\_cat/allocation?v (if you are on Pro staging or production environments). If you are on one of the integration environments (that includes all the Starter branches) run: elasticsearch.internal:9200/\_cat/allocation?v.   Proceed to [Step 11](#zd-accordion-11).  
b. NO – [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251).

-------This is one whole accordion panel.-------------

 [Back to Step 1](#zd-accordion-1)

