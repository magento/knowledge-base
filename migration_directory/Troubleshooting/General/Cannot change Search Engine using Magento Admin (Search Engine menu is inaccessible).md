This article discusses how to change the Magento Search Engine using the Magento Admin if the __Search Engine__ field is not displayed or the __Use system value__&nbsp;checkbox is greyed out and not accessible.

In this article:

*   [Affected versions](#affected-versions)
*   [Change Search Engine using Magento Admin (steps)](#change-search-engine-using-magento-admin-steps)
*   [Issues with Magento Commerce (On-Premise)](#magento-commerce-on-premise)
*   [Magento Commerce (Cloud)](#magento-commerce-cloud)

<h2 id="affected-versions">Affected versions</h2>

*   Magento Commerce (On-Premise): 2.X.X
*   Magento Commerce (Cloud):
    
    *   Version: 2.X.X
    *   Plan: Starter, Pro
    
    
    
*   MySQL, Elasticsearch: all supported versions

<h2 id="change-search-engine-using-magento-admin-steps">Change Search Engine using Magento Admin (steps)</h2>

<ol><li>Log in to Magento Admin as an Administrator.</li><li>On the left-side Admin sidebar, click <strong>Stores</strong>. Then, under <strong>Settings</strong>, choose <strong>Configuration</strong>.</li><li>In the panel on the left under&nbsp;<strong class="Command">Catalog,&nbsp;</strong>choose&nbsp;<strong class="Command">Catalog</strong>.</li><li>Expand the <strong>Catalog Search</strong> section.<br/><img alt="catalog_menu.png" height="269" src="https://support.magento.com/hc/article_attachments/360004663913/catalog_menu.png" width="400"/>
</li><li>Go to the <strong>Search Engine</strong> field and remove selection from the <strong>Use system value</strong> checkbox.</li><li>Click the <strong>Search Engine</strong> menu and select one of the available options.<br/><img alt="search_engine_menu.png" height="176" src="https://support.magento.com/hc/article_attachments/360004634314/search_engine_menu.png" width="551"/>
</li><li>Click <strong>Save Config</strong> in the top-right corner of the page.</li></ol>

<h2 id="magento-commerce-on-premise">Issues with Magento Commerce (On-Premise)</h2>

### Issue 1: Search Engine field is not displayed

When you access the __Catalog Search__ section, the __Search Engine__ menu is not displayed at all.

<img alt="search_engine_not_displayed.png" height="282" src="https://support.magento.com/hc/article_attachments/360004686014/search_engine_not_displayed.png" width="649"/>

### Cause: Store View is not Default Config

The Store View for Magento Admin has been set to any value other&nbsp;than _Default Config_.

The search engine is a global configuration set on the application level, not on the Store Scope. Stores within a Magento application cannot use different search engines.

### Solution: Set Store View to Default Config

1.   Log in to Magento Admin as an Administrator.
2.   On the left-side Admin sidebar, click __Stores__. Then, under __Settings__, choose __Configuration__.
3.   In the upper-left corner, click the __Store View__ selector and choose _Default Config_.
4.   Click __OK__ in the confirmation dialog to approve store view change.

<img alt="change_store_view.png" height="298" src="https://support.magento.com/hc/article_attachments/360004723573/change_store_view.png" width="500"/>

__Related documentation:__&nbsp;[Changing Scope](http://docs.magento.com/m2/ee/user_guide/configuration/scope-change.html) (Magento User Guide).

### Issue 2: Cannot uncheck "Use system value"

When you access the __Catalog Search__ section of Magento Admin, the __Use system value__&nbsp;checkbox is greyed out so you cannot remove selection from the checkbox to later change the search engine.

### Cause

The default search engine has been configured on the application configuration level in the&nbsp;`` app/etc/env.php ``&nbsp;or&nbsp;`` app/etc/config.php ``&nbsp;files and thus cannot be changed using Magento Admin.

Example of the section with default search engine configuration:

<pre><code class="language-php">'system'&nbsp;=&gt;&nbsp;
&nbsp;&nbsp;array (
&nbsp;&nbsp;&nbsp;&nbsp;'default'&nbsp;=&gt;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;array (
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'catalog'&nbsp;=&gt;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array (
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'search'&nbsp;=&gt;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array (
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'engine'&nbsp;=&gt;&nbsp;'mysql',
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;
&nbsp;&nbsp;),
</code></pre>

### Solution

Remove the section with default search engine configuration from the&nbsp;`` app/etc/env.php ``&nbsp;or&nbsp;the&nbsp;`` app/etc/config.php ``&nbsp;configuration files.

### Related documentation on DevDocs

[Magento configuration files](https://devdocs.magento.com/guides/v2.2/config-guide/config/config-magento.html) (Magento Configuration Guide)

<h2 id="magento-commerce-cloud">Magento Commerce (Cloud)</h2>

Switching search engines using Magento Admin is not available in&nbsp;Magento Commerce (Cloud) due to the way the Cloud infrastructure has been organized.

During the deployment process, the Magento Cloud deployment scripts check if Elasticsearch has been declared in the `` MAGENTO_CLOUD_RELATIONSHIPS `` variable. If declared, Elasticsearch is selected as the active search engine and configured automatically; the MySQL search engine becomes inaccessible in Magento Admin. If the Elasticsearch relationship has not been declared, MySQL is set to active, and Elasticsearch becomes inaccessible.

It is not recommended to edit the&nbsp;`` app/etc/env.php ``&nbsp;or&nbsp;the&nbsp;`` app/etc/config.php ``&nbsp;configuration files directly&nbsp;on your Cloud environment, that is why changing these files to make the Elasticsearch engine to be displayed in Magento Admin (the solution we recommend in the previous section) is not applicable for your Cloud project.

### Change search engine on Staging and Production environments

Before switching search engine from MySQL to Elasticsearch on your Staging and Production environments, make sure you have previously [submitted a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to enable Elasticsearch on the environment and the ticket has been resolved successfully.

To change the search engine used on your Staging and Production environments, change the `` SEARCH_CONFIGURATION `` environment variable in your `` .magento.env.yaml ``&nbsp;file on your local environment, then push&nbsp;changes to the Integration and Staging/Production environments for the changes to take effect.

If you switch from MySQL to Elasticsearch, the SEARCH\_CONFIGURATION variable in the resulting&nbsp;`` .magento.env.yaml ``&nbsp;file might look as follows:

<pre><code class="language-yaml">stage:
  deploy:
   SEARCH_CONFIGURATION:
     engine: elasticsearch
     elasticsearch_server_hostname: hostname
     elasticsearch_server_port: '123456'
     elasticsearch_index_prefix: magento
     elasticsearch_server_timeout: '15'</code></pre>

### Related documentation

#### Knowledge Base

*   [Enable Elasticsearch on Cloud](https://support.magento.com/hc/en-us/articles/115004905874)

#### DevDocs

*   [Set up Elasticsearch service](http://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_services-elastic.html)
*   [Build and deploy](http://devdocs.magento.com/guides/v2.2/cloud/project/magento-env-yaml.html) (documentation about the&nbsp;`` .magento.env.yaml `` configuration file)
*   [Deploy variables](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html) ([SEARCH\_CONFIGURATION section](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#searchconfiguration))
*   [Services](http://devdocs.magento.com/guides/v2.2/cloud/project/project-conf-files_services.html) (documentation about the `` .magento/services.yaml ``&nbsp;configuration file)