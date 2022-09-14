---
title: Troubleshooting Best Practices for Adobe Commerce on cloud infrastructure
labels: Elasticsearch,Magento Commerce Cloud,best practices,configuration,database,deploy,deployment,deployment error,extension,index,query,search,site down,storage,Adobe Commerce,cloud infrastructure
---

Follow these best practices for effective troubleshooting of Adobe Commerce on cloud infrastructure issues.

<table style="width: 1028px;">
<tbody>
<tr>
<th style="width: 179px;">Issue Type</th>
<th style="width: 523px;">Best Practices</th>
<th style="width: 327px;">Resource</th>
</tr>
<tr>
<td style="width: 179px;">Deployment Issues</td>
<td style="width: 523px;">
<strong>Follow deployment best practices.</strong> 13% of support tickets involve deployment issues. The best practices have been updated to include ways to prevent many of these causes.</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/reference/discover-deploy.html#best-practices">Best practices for builds and deployment</a> in our developer documentation.</td>
</tr>
<tr>
<td style="width: 179px;">Site Down Issues</td>
<td style="width: 523px;">
<strong>Use the Site Down Troubleshooter.</strong> Crons can be long running and can overrun each other. They are the source of many outages and performance issues.</td>
<td style="width: 327px;">
<a href="https://support.magento.com/hc/en-us/articles/360029351531-Site-Down-Troubleshooter">Site Down Troubleshooter</a> in our support knowledge base; <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/reset-cron-jobs.html"> How to reset cron jobs</a> in our developer documentation.
</td>
</tr>
<tr>
<td style="width: 179px;">Performance Issues</td>
<td style="width: 523px;">
<strong>If you're not using Adobe Commerce banner, disable it.</strong> When the banner is enabled but not used, resources are used to do lookups to the database when they are not required, and it will cause performance issues.</td>
<td style="width: 327px;"><a href="https://support.magento.com/hc/en-us/articles/360035285852-Disable-Adobe-Commerce-Banner-output-to-improve-site-performance">Disable Adobe Commerce Banner output to improve performance</a> in our support knowledge base.</td>
</tr>
<tr>
<td style="width: 179px;">Search Issues</td>
<td style="width: 523px;">
<div class="warning"><blockquote><a href="https://support.magento.com/hc/en-us/articles/360043144271-MySQL-catalog-search-engine-will-be-removed-in-all-versions-of-Magento-2-4-0">MySQL catalog search engine will be removed in Adobe Commerce 2.4.0</a>. You must have Elasticsearch host setup and configured prior to installing version 2.4.0. Refer to <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a> in our developer documentation.</blockquote></div>
</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-elastic.html">Set up Elasticsearch service</a> in our developer documentation.</td>
</tr>
<tr>
<td style="width: 179px;">Custom Errors</td>
<td style="width: 523px;">
<strong>Don't deploy during peak times. </strong>Adding and removing users will trigger a deployment.</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/cloud/deploy/reduce-downtime.html">Zero downtime deployment</a> in our developer documentation.</td>
</tr>
<tr>
<td style="width: 179px;">Database Errors and Issues</td>
<td style="width: 523px;">
<strong>Database issues cause deployment</strong> (post hook issues),<strong> performance and site down situations</strong>. Many involve errors or insufficient database space allocation.</td>
<td style="width: 327px;">
<a href="https://mariadb.com/kb/en/library/mariadb-error-codes/#mariadb-specific-error-codes">MariaDB Error Codes;</a> <a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=database%20space">Manage Storage Space, including database</a> in our developer documentation.
</td>
</tr>
<tr>
<td style="width: 179px;">Configuration Issues</td>
<td style="width: 523px;">
<strong>Index by Schedule instead of Index at Save.</strong> This is the most efficient indexing configuration. Index on Save will cause full reindexing.</td>
<td style="width: 327px;"><a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-index.html?itm_source=devdocs&itm_medium=quick_search&itm_campaign=federated_search&itm_term=index%20by%20schedul#configure-indexers">Configure indexers</a> in our developer documentation.</td>
</tr>
<tr>
<td style="width: 179px;">Custom Code Issues</td>
<td style="width: 523px;">
<strong>Check your slow query logs for opportunities</strong> to identify and possibly kill processes taking too much time to complete. Slow queries can cause database deadlocks resulting in site downs and performance issues.</td>
<td style="width: 327px;"><a href="https://support.magento.com/hc/en-us/articles/360030903091">Checking Slow queries and Processes taking too long in MySQL</a></td>
</tr>
<tr>
<td style="width: 179px;">Extension Issues</td>
<td style="width: 523px;"><strong>Only use verified extensions currently on the Commerce Marketplace.</strong></td>
<td style="width: 327px;"><a href="https://marketplace.magento.com/extensions.html">Extensions for Adobe Commerce</a></td>
</tr>
<tr>
<td style="width: 179px;">Resource Issues</td>
<td style="width: 523px;">
<strong>Monitor available memory and space and optimize storage.</strong> You may have available space prior to an action that consumes significant resources (deployment, for example). Poor optimization of file storage (too many large, rich images, for example) can also contribute to insufficient space. Low resources cause performance issues, site down, stuck deployments, and deployment failures.</td>
<td>
<a href="https://devdocs.magento.com/guides/v2.3/cloud/project/manage-disk-space.html">Manage disk space</a> in our developer documentation; <a href="https://support.magento.com/hc/en-us/articles/360034626052">File storage low/exhausted, specific page loads are slow</a> in our support knowledge base.
</td>
</tr>
</tbody>
</table>
