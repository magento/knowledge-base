---
title: Troubleshooting Best Practices for Magento Commerce Cloud
labels: Elasticsearch,Magento Commerce Cloud,best practices,configuration,database,deploy,deployment,deployment error,extension,index,query,search,site down,storage
---

Follow these best practices for effective troubleshooting of Magento Commerce Cloud issues. 

<table>
<tbody>
<tr>
<th>Issue Type</th>
<th>Best Practices</th>
<th>Resource</th>
</tr>
<tr>
<td>Deployment Issues</td>
<td>
Follow deployment best practices. 13% of support tickets involve deployment issues. The best practices have been updated to include ways to prevent many of these causes.</td>
<td><a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#best-practices">Best practices for builds and deployment</a></td>
</tr>
<tr>
<td>Site Down Issues</td>
<td>
Use the Site Down Troubleshooter. Crons can be long running and can overrun each other. They are the source of many outages and performance issues. </td>
<td>
<a href="https://support.magento.com/hc/en-us/articles/360029351531-Site-Down-Troubleshooter">Site Down Troubleshooter<br/></a><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html">How to reset cron jobs</a>
</td>
</tr>
<tr>
<td>Performance Issues</td>
<td>
If you're not using Magento banner disable it. When the banner is enabled but not used, resources are used to do lookups to the database when they are not required, and it will cause performance issues. </td>
<td><a href="https://learn.newrelic.com">Welcome to the New Relic University Learning Portal</a></td>
</tr>
<tr>
<td>Search Issues</td>
<td>
<p class="warning"><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Magento 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.1. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a>.</p>
</td>
<td><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html">Set up Elasticsearch service</a></td>
</tr>
<tr>
<td>Custom Errors</td>
<td>
Don't deploy during peak times. Adding and removing users will trigger a deployment.</td>
<td><a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html">Zero downtime deployment</a></td>
</tr>
<tr>
<td>Database Errors and Issues</td>
<td>
Database issues cause deployment (post hook issues), performance and site down situations. Many involve errors or insufficient database space allocation.</td>
<td>
<a href="https://mariadb.com/kb/en/library/mariadb-error-codes/#mariadb-specific-error-codes">MariaDB Error Codes<br/></a><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html?itm_source=devdocs&amp;itm_medium=search_page&amp;itm_campaign=federated_search&amp;itm_term=database%20space">Manage Storage Space, including database</a>
</td>
</tr>
<tr>
<td>Configuration Issues</td>
<td>
Index by Schedule instead of Index at Save. This is the most efficient indexing configuration. Index on Save will cause full reindexing. </td>
<td><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html?itm_source=devdocs&amp;itm_medium=quick_search&amp;itm_campaign=federated_search&amp;itm_term=index%20by%20schedul#configure-indexers">Configure indexers</a></td>
</tr>
<tr>
<td>Custom Code Issues</td>
<td>
Check your slow query logs for opportunities to identify and possibly kill processes taking too much time to complete. Slow queries can cause database deadlocks resulting in site downs and performance issues. </td>
<td><a href="https://support.magento.com/hc/en-us/articles/360030903091">Checking Slow queries and Processes taking too long in MySQL</a></td>
</tr>
<tr>
<td>Extension Issues</td>
<td>Only use verified extensions currently on the Magento Marketplace.</td>
<td><a href="https://marketplace.magento.com/extensions.html">Extensions for Magento</a></td>
</tr>
<tr>
<td>Resource Issues</td>
<td>
Monitor available memory and space, and optimize storage. You may have available space prior to an action that consumes significant resources (deployment for example). Poor optimization of file storage, (too many large rich images, for example) can also contribute to insufficient space. Low resources cause performance issues, site down, stuck deployments, and deployment failures. </td>
<td>
<a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html">Manage disk space<br/></a><a href="https://support.magento.com/hc/en-us/articles/360034626052">File storage low/exhausted, specific page loads are slow</a>
</td>
</tr>
</tbody>
</table>