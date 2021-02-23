---
title: Troubleshoot Product Recommendations module in Magento Commerce
link: https://support.magento.com/hc/en-us/articles/360042224851-Troubleshoot-Product-Recommendations-module-in-Magento-Commerce
labels: Magento Commerce,commerce,product,module,product-recommendations,recommendations,saas-export,magento/product-recommendations,2.3.x,how to,2.4.x
---

<p>This article talks about troubleshooting suggestions for the <code class="language-php">magento/product-recommendations</code> module and its dependency <code class="language-php">saas-export</code> module since you need both modules operating in order to use the Product Recommendations tool in Magento Commerce.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.3.x</li>
<li>Magento Commerce 2.4.x</li>
</ul>
<h2>Troubleshoot product-recommendations module</h2>
<p>If you have configured the <code class="language-php">magento/product-recommendations</code> module correctly (Check <a href="https://devdocs.magento.com/recommendations/install-configure.html">Product Recommendations - Install and Configure Recommendations</a>), but you are not seeing any recommendations, try the following:</p>
<ul>
<li>It is possible that the module has not had enough time to collect behavioral data. Allow the system to run for 24 hours so it can start collecting data. Consider deploying a recommendation type that does not require any behavioral data, such as "More like this".</li>
</ul>
<ul>
<li>If you are not seeing the recommendations that you configured, it is possible there is not yet sufficient data to build recommendations for the user.</li>
</ul>
<ul>
<li>Ensure the SaaS Environment ID or API Key are valid. If you get an error after specifying your SaaS Environment ID or your API key during the product recommendations initialization, check to make sure you have entered the <a href="https://docs.magento.com/m2/ce/user_guide/configuration/services/saas.html">SaaS Environment ID and API key</a> correctly. To ensure the MageID and API key are linked, the user who owns the MageID, typically the user who owns the Magento license, needs to be the same user who generates the API key. If you must change the MageID that was used, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a Support ticket</a>.</li>
</ul>
<p class="info">If <a href="https://docs.magento.com/m2/ce/user_guide/stores/compliance-cookie-restriction-mode.html">Cookie Restriction Mode</a> is enabled, Magento does not collect behavioral data until the shopper consents. If Cookie Restriction Mode is disabled, Magento collects behavioral data by default.</p>
<h2>Catalog SaaS Export module</h2>
<p>For issues related to the Catalog SaaS Export (<code class="language-php">saas-export</code>) module:</p>
<ol>
<li>Confirm the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-cron.html">cron</a> jobs are running.</li>
<li>Confirm the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html">indexers</a> are running and the <code class="language-php">Product Feed</code> indexer is set to <code class="language-php">Update by Schedule</code>.</li>
<li>Confirm the modules are enabled. The <code class="language-php">saas-export</code> metapackage installs the following modules, all of which must be enabled:
<pre><code class="language-php">  "magento/module-catalog-data-exporter"<br/>
  "magento/module-catalog-inventory-data-exporter"<br/>
  "magento/module-catalog-url-rewrite-data-exporter"<br/>
  "magento/module-configurable-product-data-exporter"<br/>
  "magento/module-data-exporter"<br/>
  "magento/module-saas-catalog"<br/>
</code></pre>
</li>
<li>Check the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html">logs</a>. Make sure there are no errors associated with the above modules.</li>
<li>Refresh Configuration cache. Go to System &gt; Tools &gt; Cache Management, and clear the configuration cache.</li>
<li>Confirm there is data in the <code class="language-php">catalog_data_exporter_products</code> database table.</li>
</ol>
<h2>Events</h2>
<p><a href="https://devdocs.magento.com/recommendations/verify.html">Recommendation Events</a> describes the behavioral events that are sent to Magento.</p>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://devdocs.magento.com/recommendations/product-recs.html">Product Recommendations - Overview</a> </li>
<li>
<a href="https://devdocs.magento.com/recommendations/install-configure.html">Product Recommendations - Install and Configure Recommendations</a> </li>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/marketing/product-recommendations.html">Marketing - Product Recommendations</a> </li>
<li>
<a href="https://docs.magento.com/m2/ee/user_guide/marketing/create-new-rec.html">Create Product Recommendations</a> </li>
</ul>