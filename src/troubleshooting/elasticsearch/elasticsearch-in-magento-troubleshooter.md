---
title: Elasticsearch in Adobe Commerce troubleshooter
labels: Elastic,Elasticsearch problems,Magento Commerce,Magento Commerce Cloud,Troubleshooter,crash,elasticsuite,how to,missing products,Adobe Commerce,on-premises,cloud infrastructure
---

Elasticsearch issues on Adobe Commerce can be solved using the Elasticsearch troubleshooter tool. Click on each question to reveal the answer in each step of the troubleshooter.

>![warning]
>
>On Adobe Commerce on cloud infrastructure please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) detailing your required service upgrade and stating the time when you want the upgrade process to start.

<div class="zd-accordion">
<div id="zd-accordion-1" class="zd-accordion-panel">
<h5>Step 1</h5>
<div class="zd-accordion-section">Could your problem relate to Elasticsearch? Elasticsearch issues indicated by error messages, "<em>No alive nodes found in your cluster",</em> missing products, and the display of old product information.</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br>
b. NO – Search again on relevant search terms in the <a href="https://support.magento.com/hc">Adobe Commerce Help Center Knowledge Base</a>.</p>
</div>
<div id="zd-accordion-2" class="zd-accordion-panel">
<h5>Step 2</h5>
<div class="zd-accordion-section">Is it a new installation of Elasticsearch?</div>
<p class="zd-accordion-text">a. YES – <a href="https://support.magento.com/hc/en-us/articles/360034939312">Ensure Elasticsearch is installed properly.</a> Also check whether you are on Adobe Commerce on cloud infrastructure 2.3.1 or later. Merchants that have upgraded to Adobe Commerce on cloud infrastructure (versions 2.3.1 and onwards) and are on a version of Elasticsearch prior to 6.x can experience errors when deploying. To solve this issue the Elasticsearch client module and Elasticsearch service need to be on the latest recommended versions. For steps refer to <a href="https://support.magento.com/hc/en-us/articles/360042538511">Elasticsearch issues after Adobe Commerce on cloud infrastructure 2.3.1+ upgrade</a>.<br>
b. NO – Check the health of your cluster. If you are on a Pro staging or production environment run this command: <code>curl -m1 localhost:9200/_cluster/health?pretty</code>. If you are on an integration environment (that includes all the Starter branches) run <code>curl -m1 elasticsearch.internal:9200/_cluster/health?pretty</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<div id="zd-accordion-3" class="zd-accordion-panel">
<h5>Step 3</h5>
<div class="zd-accordion-section">Did you get a Service response?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.</p>
</div>
<div id="zd-accordion-4" class="zd-accordion-panel">
<h5>Step 4</h5>
<div class="zd-accordion-section">Response green?</div>
<p class="zd-accordion-text">a. YES – Elasticsearch is available for processing data and reindexing should work. Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.<br>
b. NO – Yellow or red means there are problems with connections between nodes, and some data may not be available. If yellow, run the command: <code>php bin/magento config:show catalog/search/engine</code> to check your search engine. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>. If red, <a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">submit a support ticket</a>.</p>
</div>
<div id="zd-accordion-5" class="zd-accordion-panel">
<h5>Step 5</h5>
<div class="zd-accordion-section">Search issue? Symptoms might include no products, empty categories or no updates to products or products categories are not correct.</div>
<p class="zd-accordion-text">a. YES – Run this command to check the status of catalog search: <code>php bin/magento indexer:status</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.<br>
b. NO – Run command: <code>php bin/magento config:show catalog/search/engine</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<div id="zd-accordion-6" class="zd-accordion-panel">
<h5>Step 6</h5>
<div class="zd-accordion-section">ElasticSuite in use?</div>
<p class="zd-accordion-text">a. YES – Check if ElasticSuite is at the current version by running this command: <code>cat composer.lock | grep -A 1 elasticsuite | grep '"version"'</code> To check if this version is depreciated or recommended, refer to <a href="https://github.com/Smile-SA/elasticsuite">Github: Smile-SA/elaticsuite</a>. If ElasticSuite is up to date proceed to <a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.<br>
b. NO – proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.</p>
</div>
<div id="zd-accordion-7" class="zd-accordion-panel">
<h5>Step 7</h5>
<div class="zd-accordion-section">Run the command: <code>php ./vendor/bin/ece-tools -V</code> and check ECE-tools version. Is it the <a href="https://github.com/magento/ece-tools/releases">latest version of ECE-tools</a>?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5a</a>.<br>
b. NO – Upgrade ECE-tools to the most current version. Run the command <code>php bin/magento config: show catalog/search/engine</code> to check your search engine. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<div id="zd-accordion-8" class="zd-accordion-panel">
<h5>Step 8</h5>
<div class="zd-accordion-section">Is catalog search status in <em>Processing</em>?</div>
<p class="zd-accordion-text">a. YES – You need to wait until processing is done and then check if product categories updated. If they have not, <a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">submit a support ticket</a>.<br>b. NO – If the status of catalog search is <em>Reindex required</em> run in CLI/Terminal: <code>php bin/magento cron:run</code>. If this does not work, run: <code>php bin/magento indexer:reindex</code>. If this does not solve the issue, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</p>
</div>
<div id="zd-accordion-9" class="zd-accordion-panel">
<h5>Step 9</h5>
<div class="zd-accordion-section">
<code>.yaml</code> file recently updated?</div>
<p class="zd-accordion-text">a. YES – Check <code>.yaml</code> Elasticsearch configuration by referring to DevDocs <a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=elastic%20search%20yaml">Set up Elasticsearch: To enable Elasticsearch</a>.<br>
b. NO – <a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">Submit a support ticket</a>.</p>
</div>
<div id="zd-accordion-10" class="zd-accordion-panel">
<h5>Step 10</h5>
<div class="zd-accordion-section">Run <code>curl elasticsearch.internal:9200/_cat/indices</code> (if you are on an integration environment that includes all the Starter branches). If you are on Pro staging or production environment run<code> curl
      localhost:9200/_cat/indices</code>. Are there tracking indices listed? Check the output for<code><index
      name>_tracking_log_</code>.</div>
<p class="zd-accordion-text">a. YES –  If you are on a version of ElasticSuite prior to version 2.8.0 it is recommended that you <a href="https://support.magento.com/hc/en-us/articles/360035266131?">upgrade to ElasticSuite 2.8.0 to adjust tracking indices retention or disable tracking</a>. If you cannot immediately upgrade you can <a href="https://support.magento.com/hc/en-us/articles/360034921492">create a cron to remove tracking indices</a>. However, this could cause performance issues. Once you have upgraded to ElasticSuite 2.8.0 or removed tracking indices run the command (if you are on Pro staging or production environments):<code>localhost:9200/_cat/allocation?v</code> to check available space. If you are on one of the integration environments (that includes all the Starter branches) run <code>elasticsearch.internal:9200/_cat/allocation?v</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.<br>
b. NO – If you are on Pro staging or production environments run <code>localhost:9200/_cat/allocation?v</code> and check available space. If you are on one of the integration environments (that includes all the Starter branches) run <code>elasticsearch.internal:9200/_cat/allocation?v</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.</p>
</div>
<div id="zd-accordion-11" class="zd-accordion-panel">
<h5>Step 11</h5>
<div class="zd-accordion-section">Specific error? Adobe Commerce and ES logs, extensions and custom code.</div>
<p class="zd-accordion-text">a. YES – Review the Adobe Commerce Help Center Troubleshooting article <a href="https://support.magento.com/hc/en-us/articles/360034939312">Ensure Elasticsearch is installed properly</a> or <a href="https://support.magento.com/hc/en-us/articles/360035266131">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a>.<br>
b. NO – Proceed to <a class="accordion-anchor" href="#zd-accordion-12">Step 12</a>.</p>
</div>
<div id="zd-accordion-12" class="zd-accordion-panel">
<h5>Step 12</h5>
<div class="zd-accordion-section">Storage usage > 85%?</div>
<p class="zd-accordion-text">a.  YES – You need to increase available storage. Refer to DevDocs<a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=elastic%20search%20yaml">Set up Elasticsearch: To enable Elasticsearch</a>. Then run: <code>localhost:9200/_cat/allocation?v</code> (if you are on Pro staging or production environments). If you are on one of the integration environments (that includes all the Starter branches) run: <code>elasticsearch.internal:9200/_cat/allocation?v</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.<br>
b. NO – <a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">Submit a support ticket</a>.</p>
</div>
<!---------This closes the main level that holds everything.--------------->
  <p>
    <a class="accordion-back-to-step-1" href="#zd-accordion-1">Back to Step 1</a>
  </p>
</div>
