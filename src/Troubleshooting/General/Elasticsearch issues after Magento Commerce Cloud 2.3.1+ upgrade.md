---
title: Elasticsearch issues after Magento Commerce Cloud 2.3.1+ upgrade
link: https://support.magento.com/hc/en-us/articles/360042538511-Elasticsearch-issues-after-Magento-Commerce-Cloud-2-3-1-upgrade
labels: upgrade,Magento Commerce Cloud,Elasticsearch problems,Elasticsearch,End of Life,Elasticsearch service version not compatible,Elasticsearch 6.x,how to,Elasticsearch 2.x,Elasticsearch 5.x
---

<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
<p class="warning">Please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> detailing your required service upgrade and stating the time when you want the upgrade process to start.</p>
<p>This article discusses a fix for problems during deployment after upgrading to Magento Commerce Cloud versions 2.3.1+, if you are on Elasticsearch versions 2.x and 5.x. </p>
<h2>Affected Products and Versions:</h2>
<ul>
<li>Magento Commerce Cloud 2.3.1+</li>
<li>Elasticsearch 2.x and 5.x </li>
</ul>
<h2>Cause</h2>
<p>Merchants that have upgraded to Magento Commerce Cloud (versions 2.3.1 and onwards) and are on a version of Elasticsearch prior to 6.x can experience errors when deploying. This is because Elasticsearch versions 2.x and 5.x are <a href="https://www.elastic.co/support/eol">End of Life</a> and are no longer supported in Magento. The Elasticsearch client has to be up to date, or running a deployment risks triggering an error. To learn more refer to DevDocs <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html">Change the Elasticsearch client</a>. </p>
<h2>Issue</h2>
<p>When deploying you see an error message similar to the following, indicating that your Elasticsearch version is not compatible:<br/><br/><em>Elasticsearch service version 5.2.2 on infrastructure layer is not compatible with current version of elasticsearch/elasticsearch module (6.7.0.0), used by your Magento application.</em><br/><em>You can fix this issue by upgrading the Elasticsearch service on your Magento Cloud infrastructure to version 6.x</em>.<br/><br/>Other symptoms of this issue may be missing images and problems with filters in your environment. </p>
<h2>Solution</h2>
<p class="warning">If you have a shared environment, ensure staging and production are ready to be upgraded.</p>
<p>To solve this issue, the Elasticsearch client module and Elasticsearch service need to be on the latest recommended versions:<br/><br/>1. Follow the DevDocs instructions to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-downgrade.html">change the Elasticsearch module</a> so you have the latest recommended version of the Elasticsearch client module.<br/>2. <a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a> and request an Elasticsearch service update to 6.x on staging and production. Please note that an upgrade to the Elasticsearch service may take some time to complete. </p>
<h2>Related reading</h2>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements-tech.html">Magento 2.3 technology stack requirements</a></li>
<li><a href="https://devdocs.magento.com/cloud/project/project-conf-files_services-elastic.html">Set up Elasticsearch service</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360034939312">Ensure Elasticsearch is installed properly</a></li>
</ul>