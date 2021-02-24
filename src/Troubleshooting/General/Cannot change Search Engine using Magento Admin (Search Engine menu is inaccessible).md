---
title: Cannot change Search Engine using Magento Admin (Search Engine menu is inaccessible)
link: https://support.magento.com/hc/en-us/articles/360003689913-Cannot-change-Search-Engine-using-Magento-Admin-Search-Engine-menu-is-inaccessible-
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,change search engine
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
<p>This article provides a solution for changing the Magento Search Engine using the Magento Admin if the Search Engine field is not displayed or the Use system value checkbox is greyed out and not accessible. </p>
<p>In this article:</p>
<ul>
<li><a href="#affected-versions">Affected versions</a></li>
<li><a href="#change-search-engine-using-magento-admin-steps">Change Search Engine using Magento Admin (steps)</a></li>
<li><a href="#magento-commerce-on-premise">Issues with Magento Commerce (On-Premise)</a></li>
<li><a href="#magento-commerce-cloud">Magento Commerce (Cloud)</a></li>
</ul>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce (On-Premise): 2.X.X</li>
<li>Magento Commerce (Cloud):
<ul>
<li>Version: 2.X.X</li>
<li>Plan: Starter, Pro</li>
</ul>
</li>
<li>MySQL, Elasticsearch: all supported versions</li>
</ul>
<h2>Change Search Engine using Magento Admin (steps)</h2>
<ol>
<li>Log in to Magento Admin as an Administrator.</li>
<li>On the left-side Admin sidebar, click Stores. Then, under Settings, choose Configuration.</li>
<li>In the panel on the left under Catalog, choose Catalog.</li>
<li>Expand the Catalog Search section.<br/><img alt="catalog_menu.png" src="https://support.magento.com/hc/article_attachments/360004663913/catalog_menu.png"/>
</li>
<li>Go to the Search Engine field and remove selection from the Use system value checkbox.</li>
<li>Click the Search Engine menu and select one of the available options.<br/><img alt="search_engine_menu.png" src="https://support.magento.com/hc/article_attachments/360004634314/search_engine_menu.png"/>
</li>
<li>Click Save Config in the top-right corner of the page.</li>
</ol>
<h2>Issues with Magento Commerce (On-Premise)</h2>
<h3>Issue 1: Search Engine field is not displayed</h3>
<p>When you access the Catalog Search section, the Search Engine menu is not displayed at all.</p>
<p><img alt="search_engine_not_displayed.png" src="https://support.magento.com/hc/article_attachments/360004686014/search_engine_not_displayed.png"/></p>
<h3>Cause: Store View is not Default Config</h3>
<p>The Store View for Magento Admin has been set to any value other than <em>Default Config</em>.</p>
<p>The search engine is a global configuration set on the application level, not on the Store Scope. Stores within a Magento application cannot use different search engines.</p>
<h3>Solution: Set Store View to Default Config</h3>
<ol>
<li>Log in to Magento Admin as an Administrator.</li>
<li>On the left-side Admin sidebar, click Stores. Then, under Settings, choose Configuration.</li>
<li>In the upper-left corner, click the Store View selector and choose <em>Default Config</em>.</li>
<li>Click OK in the confirmation dialog to approve store view change.</li>
</ol>
<p><img alt="change_store_view.png" src="https://support.magento.com/hc/article_attachments/360004723573/change_store_view.png"/></p>
<p>Related documentation: <a href="http://docs.magento.com/m2/ee/user_guide/configuration/scope-change.html">Changing Scope</a> (Magento User Guide).</p>
<h3>Issue 2: Cannot uncheck "Use system value"</h3>
<p>When you access the Catalog Search section of Magento Admin, the Use system value checkbox is greyed out so you cannot remove selection from the checkbox to later change the search engine.</p>
<h3>Cause</h3>
<p>The default search engine has been configured on the application configuration level in the <code>app/etc/env.php</code> or <code>app/etc/config.php</code> files and thus cannot be changed using Magento Admin.</p>
<p>Example of the section with default search engine configuration:</p>
<pre><code class="language-php">'system' =&gt; 
  array (
    'default' =&gt; 
    array (
      'catalog' =&gt; 
      array (
        'search' =&gt; 
        array (
          'engine' =&gt; 'mysql',
        ), 
      ), 
    ), 
  ),
</code></pre>
<h3>Solution</h3>
<p>Remove the section with default search engine configuration from the <code>app/etc/env.php</code> or the <code>app/etc/config.php</code> configuration files.</p>
<h3>Related documentation on DevDocs</h3>
<p><a href="https://devdocs.magento.com/guides/v2.2/config-guide/config/config-magento.html">Magento configuration files</a> (Magento Configuration Guide)</p>
<h2>Magento Commerce (Cloud)</h2>
<p>Switching search engines using Magento Admin is not available in Magento Commerce (Cloud) due to the way the Cloud infrastructure has been organized.</p>
<p>During the deployment process, the Magento Cloud deployment scripts check if Elasticsearch has been declared in the <code>MAGENTO_CLOUD_RELATIONSHIPS</code> variable. If declared, Elasticsearch is selected as the active search engine and configured automatically; the <a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-Magento-2-4-0">MySQL search engine</a> becomes inaccessible in Magento Admin. If the Elasticsearch relationship has not been declared, MySQL is set to active, and Elasticsearch becomes inaccessible.</p>
<p>It is not recommended to edit the <code>app/etc/env.php</code> or the <code>app/etc/config.php</code> configuration files directly on your Cloud environment, that is why changing these files to make the Elasticsearch engine to be displayed in Magento Admin (the solution we recommend in the previous section) is not applicable for your Cloud project.</p>
<h3>Change search engine on Staging and Production environments</h3>
<p>Before switching search engine from MySQL to Elasticsearch on your Staging and Production environments, make sure you have previously <a href="https://support.magento.com/hc/en-us/articles/360019088251">submitted a support ticket</a> requesting to enable Elasticsearch on the environment and the ticket has been resolved successfully.</p>
<p>To change the search engine used on your Staging and Production environments, change the <code>SEARCH_CONFIGURATION</code> environment variable in your <code>.magento.env.yaml</code> file on your local environment, then push changes to the Integration and Staging/Production environments for the changes to take effect.</p>
<p>If you switch from MySQL to Elasticsearch, the SEARCH_CONFIGURATION variable in the resulting <code>.magento.env.yaml</code> file might look as follows:</p>
<pre><code class="language-yaml">stage:
  deploy:
   SEARCH_CONFIGURATION:
     engine: elasticsearch
     elasticsearch_server_hostname: hostname
     elasticsearch_server_port: '123456'
     elasticsearch_index_prefix: magento
     elasticsearch_server_timeout: '15'</code></pre>
<h3>Related documentation</h3>
<h4>Knowledge Base</h4>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/115004905874">Enable Elasticsearch on Cloud</a></li>
</ul>
<h4>DevDocs</h4>
<ul>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_services-elastic.html">Set up Elasticsearch service</a></li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/magento-env-yaml.html">Build and deploy</a> (documentation about the <code>.magento.env.yaml</code> configuration file)</li>
<li>
<a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html">Deploy variables</a> (<a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#searchconfiguration">SEARCH_CONFIGURATION section</a>)</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_services.html">Services</a> (documentation about the <code>.magento/services.yaml</code> configuration file)</li>
</ul>