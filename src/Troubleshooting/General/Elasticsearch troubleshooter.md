<p class="p1">Elasticsearch issues can be solved using the Elasticsearch troubleshooter tool. Click on each question to reveal the answer in each step of the troubleshooter.</p>

<p class="warning">On Magento Cloud please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment.&nbsp;So 48 hours prior to when your changes need to be on production <a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a> detailing your required service upgrade and stating the time when you want the upgrade process to start.</p>

<div class="zd-accordion">
<span class="wysiwyg-color-green110"><!---------This is one whole accordion panel.---------------></span>
<div class="zd-accordion-panel" id="zd-accordion-1">
<h5>Step 1</h5>
<div class="zd-accordion-section">Could your problem relate to Elasticsearch? Elasticsearch issues indicated by error messages, "<em>No alive nodes found in your cluster",&nbsp;</em>missing products, and the display of old product information.&nbsp;</div>
<p class="zd-accordion-text">a. YES – Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.<br/> b. NO – Search again on relevant search terms in the <a href="https://support.magento.com/hc" rel="noopener" target="_blank">Magento Help Center Knowledge Base</a>.</p>
</div>
<span class="wysiwyg-color-green110"><!---------This is one whole accordion panel.---------------></span>
<div class="zd-accordion-panel" id="zd-accordion-2">
<h5>Step 2</h5>
<div class="zd-accordion-section">Is it a new installation of Elasticsearch?</div>
<p class="zd-accordion-text">a. YES – <a href="https://support.magento.com/hc/en-us/articles/360034939312" rel="noopener" target="_blank">Ensure Elasticsearch is installed properly.</a>&nbsp;Also check whether you are on Magento Commerce Cloud 2.3.1 or later.&nbsp;Merchants that have upgraded to Magento Commerce Cloud (versions 2.3.1 and onwards) and are on a version of Elasticsearch prior to 6.x can experience errors when deploying. To solve this issue the Elasticsearch client module and Elasticsearch service need to be on the latest recommended versions. For steps refer to <a href="https://support.magento.com/hc/en-us/articles/360042538511" rel="noopener" target="_blank">Elasticsearch issues after Magento Commerce Cloud 2.3.1+ upgrade</a>.<br/> b. NO – Check the health of your cluster.&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">If you are on a Pro staging or production environment run this command:</span> <code>curl -m1 localhost:9200/_cluster/health?pretty</code>.&nbsp;If you are on an integration environment (that includes all the Starter branches) run<br/> <code>curl -m1 elasticsearch.internal:9200/_cluster/health?pretty</code>.&nbsp;Proceed to <a class="accordion-anchor" href="#zd-accordion-3">Step 3</a>.</p>
</div>
<span class="wysiwyg-color-green110"><!---------This is one whole accordion panel.---------------></span>
<div class="zd-accordion-panel" id="zd-accordion-3">
<h5>Step 3</h5>
<div class="zd-accordion-section">Did you get a Service response?</div>
<p class="zd-accordion-text">a. YES –&nbsp;Proceed to <a class="accordion-anchor" href="#zd-accordion-4">Step 4</a>.<br/> b. NO –&nbsp;Proceed to <a class="accordion-anchor" href="#zd-accordion-9">Step 9</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-4">
<h5>Step 4</h5>
<div class="zd-accordion-section">Response green?&nbsp;</div>
<p class="zd-accordion-text">a. YES – Elasticsearch is available for processing data and reindexing should work. Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5</a>.<br/> b. NO&nbsp;– Yellow or red means there are problems with connections between nodes, and some data may not be available.&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">If yellow run the command:<br/> </span><code style="font-size: 15px;"> php bin/magento config:show catalog/search/engine</code><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">&nbsp;to check your search engine. Proceed to </span><a class="accordion-anchor" href="#zd-accordion-6" style="background-color: #ffffff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">Step 6</a><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">.&nbsp;</span><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">If red response </span><a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" style="background-color: #ffffff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;" target="_blank">submit a support ticket</a><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">.&nbsp;</span></p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-5">
<h5>Step 5</h5>
<div class="zd-accordion-section">Search issue? Symptoms might include no products, empty categories or no updates to products or products categories are not correct.&nbsp;&nbsp;</div>
<p class="zd-accordion-text">a. YES – Run this command to check the status of catalog search:<br/> &nbsp;<code>php bin/magento indexer:status</code>. Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-8">Step 8</a>.<br/> b. NO&nbsp;– Run command:&nbsp;<code>php bin/magento config:show catalog/search/engine</code>. Proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-6">
<h5>Step 6</h5>
<div class="zd-accordion-section">ElasticSuite in use?</div>
<p class="zd-accordion-text">a. YES – Check if ElasticSuite is at the current version by running this command:<br/> &nbsp;<code class="c-mrkdwn__code" data-stringify-type="code">cat composer.lock | grep -A 1 elasticsuite | grep '"version"'</code>&nbsp;<br/> To check if this version is depreciated or recommended, refer to <a href="https://github.com/Smile-SA/elasticsuite" rel="noopener" target="_blank">Github: Smile-SA/elaticsuite</a>. If ElasticSuite is up to date proceed to&nbsp;<a class="accordion-anchor" href="#zd-accordion-10">Step 10</a>.<br/> b. NO – proceed to <a class="accordion-anchor" href="#zd-accordion-7">Step 7</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-7">
<h5>Step 7</h5>
<div class="zd-accordion-section">Run the command: <code>php ./vendor/bin/ece-tools -V </code>and check ECE-tools version. Is it the <a href="https://github.com/magento/ece-tools/releases" rel="noopener" target="_blank">latest version of ECE-tools</a>?</div>
<p class="zd-accordion-text">a. YES – Proceed to <a class="accordion-anchor" href="#zd-accordion-5">Step 5a</a>.<br/> b. NO&nbsp;– Upgrade ECE-tools to the most current version. Run the command <code>php bin/magento config: show catalog/search/engine</code> to check your search engine. Proceed to <a class="accordion-anchor" href="#zd-accordion-6">Step 6</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-8">
<h5>Step 8</h5>
<div class="zd-accordion-section">Is catalog search status in <em>Processing</em>?</div>
<p class="zd-accordion-text">a. YES –&nbsp; You need to wait until processing is done and then check if product categories updated. If they have not,&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">submit a support ticket</a>.&nbsp;<br/> b.&nbsp;NO –&nbsp; If the status of catalogue search is <em>Reindex required</em>&nbsp;run in CLI/Terminal:<br/> &nbsp;<code>php bin/magento cron:run</code>. If this does not work, run:<br/> &nbsp;<code>php bin/magento indexer:reindex</code>. If this does not solve the issue, <a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank"> submit a support ticket</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-9">
<h5>Step 9</h5>
<div class="zd-accordion-section">
<code>.yaml</code> file recently updated?</div>
<p class="zd-accordion-text">a. YES – Check <code>.yaml</code> Elasticsearch configuration by referring to DevDocs <a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=elastic%20search%20yaml" rel="noopener" target="_blank">Set up Elasticsearch: To enable Elasticsearch</a>.<br/> b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">Submit a support ticket</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-10">
<h5>Step 10</h5>
<div class="zd-accordion-section">Run <code>curl elasticsearch.internal:9200/_cat/indices</code> (if you are on an integration environment that includes all the Starter branches). If you are on Pro staging or production environment run&nbsp;<code>curl
      localhost:9200/_cat/indices</code>.&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">Are there tracking indices listed?&nbsp;Check the output for <code style="font-size: 15px;"> &lt;index
      name&gt;_tracking_log_</code><span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">. </span></span>
</div>
<p class="zd-accordion-text">a. YES&nbsp;–&nbsp; If you are on a version of ElasticSuite prior to version 2.8.0 it is&nbsp;recommended that you <a href="https://support.magento.com/hc/en-us/articles/360035266131?" rel="noopener" target="_blank">upgrade to ElasticSuite 2.8.0 to adjust tracking indices retention or disable tracking</a>. If you cannot immediately upgrade you can&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360034921492" rel="noopener" target="_blank">create a cron to remove tracking indices</a>. However, this could cause performance issues.&nbsp;Once you have upgraded to ElasticSuite 2.8.0 or removed tracking indices run the command (if you are on Pro staging or production environments):&nbsp;<code>localhost:9200/_cat/allocation?v</code>&nbsp;to check available space. If you are on one of the integration environments (that includes all the Starter branches) run&nbsp;<code>elasticsearch.internal:9200/_cat/allocation?v</code>.&nbsp;Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.<br/> b. NO&nbsp;– If you are on Pro staging or production environments run&nbsp;<code>localhost:9200/_cat/allocation?v</code>&nbsp;and check available space. If you are on one of the integration environments (that includes all the Starter branches)&nbsp;run&nbsp;<code>elasticsearch.internal:9200/_cat/allocation?v</code>. Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.</p>
</div>
<span class="wysiwyg-color-red90 wysiwyg-color-red80"><!---------This is one whole accordion panel.---------------></span>
<div class="zd-accordion-panel" id="zd-accordion-11">
<h5>Step 11</h5>
<div class="zd-accordion-section">Specific error? Magento and ES logs, extensions and custom code.</div>
<p class="zd-accordion-text">a. YES – Review the Magento Help Center Troubleshooting article <a href="https://support.magento.com/hc/en-us/articles/360034939312" rel="noopener" target="_blank">Ensure Elasticsearch is installed properly</a> or <a href="https://support.magento.com/hc/en-us/articles/360035266131" rel="noopener" target="_blank">Elasticsearch crashes or has out of memory issues when using ElasticSuite plugin</a>.<br/> b. NO&nbsp;– Proceed to <a class="accordion-anchor" href="#zd-accordion-12">Step 12</a>.</p>
</div>
<!---------This is one whole accordion panel.--------------->
<div class="zd-accordion-panel" id="zd-accordion-12">
<h5>Step 12</h5>
<div class="zd-accordion-section">Storage usage &gt; 85%?</div>
<p class="zd-accordion-text">a.&nbsp; YES&nbsp;– You need to increase available storage. Refer to&nbsp;DevDocs <a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=elastic%20search%20yaml" rel="noopener" target="_blank">Set up Elasticsearch: To enable Elasticsearch</a>. Then run:&nbsp;<code>localhost:9200/_cat/allocation?v</code> (if you are on Pro staging or production environments). If you are on one of the integration environments (that includes all the Starter branches) run:&nbsp;<code>elasticsearch.internal:9200/_cat/allocation?v</code> <font face="monospace, monospace"> <span style="background-color: #bfe6ff;">.&nbsp;</span> </font> Proceed to <a class="accordion-anchor" href="#zd-accordion-11">Step 11</a>.<br/> b. NO – <a href="https://support.magento.com/hc/en-us/articles/360019088251" rel="noopener" target="_blank">Submit a support ticket</a>.</p>
</div>
<p><span class="wysiwyg-color-red90"><!---------This is one whole accordion panel.---------------></span></p>
<p><a class="accordion-back-to-step-1" href="#zd-accordion-1"><br/>Back to Step 1</a></p>
</div>