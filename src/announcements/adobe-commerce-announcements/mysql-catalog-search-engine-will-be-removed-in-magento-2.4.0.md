---
title: MySQL catalog search engine will be removed in Adobe Commerce 2.4.0
labels: 2.4.0,Elasticsearch 6,Elasticsearch 7,Magento Commerce,Magento Commerce Cloud,MySQL,MySQL search engine depreciated,MySQL search engine removed,announcements,search,Adobe Commerce,cloud infrastructure,on-premises
---

Adobe Commerce on-premises, Adobe Commerce on cloud infrastructure, and Magento Open Source 2.4.0 will be released in the coming months. For Adobe Commerce on-premises and Magento Open Source version 2.4.0 Elasticsearch 6.x or 7.x will be a required component, and MySQL search engine will be removed. In Adobe Commerce on cloud infrastructure, Elasticsearch is already required.

>![warning]
>
>Failing to install/configure Elasticsearch 6/7 before trying to upgrade could cause serious problems with Adobe Commerce. Please note that service upgrades on Adobe Commerce on cloud infrastructure cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) detailing your required service upgrade and stating the time when you want the upgrade process to start.

The reason for the removal of MySQL search engine is that Elasticsearch provides superior search capabilities as well as catalog performance optimizations.

## Affected products and versions:

* Adobe Commerce on-premises v2.4.0
* Magento Open Source v2.4.0

## Upgrading:

<table style="height: 164px; width: 632.2px;">
<tbody>
<tr>
<td class="wysiwyg-text-align-center" style="width: 133px;"><strong>Search engine</strong></td>
<td class="wysiwyg-text-align-center" style="width: 478.2px;"><strong>Action</strong></td>
</tr>
<tr>
<td class="wysiwyg-text-align-center" style="width: 133px;">MySQL</td>
<td style="width: 478.2px;">You must install Elasticsearch. See <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html">Install and configure Elasticsearch</a> in our developer documentation.</td>
</tr>
<tr>
<td class="wysiwyg-text-align-center" style="width: 133px;">Elasticsearch (with no version listed)</td>
<td style="width: 478.2px;">You are using Elasticsearch 2 and must update to Elasticsearch 7 (preferred) or 6. See <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html#es-upgrade6">Upgrading Elasticsearch</a> and <a href="https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/configure-magento.html">Configure Commerce to use Elasticsearch</a> in our developer documentation for details.</td>
</tr>
<tr>
<td class="wysiwyg-text-align-center" style="width: 133px;">Elasticsearch 5</td>
<td style="width: 478.2px;">Elasticsearch 5 has reached its <a href="https://www.elastic.co/support/eol">End of Life</a> and has been deprecated in Adobe Commerce 2.4.0. Update to Elasticsearch 7 (preferred) or 6.</td>
</tr>
<tr>
<td class="wysiwyg-text-align-center" style="width: 133px;">Elasticsearch 6 or 7</td>
<td style="width: 478.2px;">You are not required to perform any additional steps before upgrading to Adobe Commerce 2.4.0.</td>
</tr>
<tr>
<td class="wysiwyg-text-align-center" style="width: 133px;">Third-party extension</td>
<td style="width: 478.2px;">You are not required to install Elasticsearch. Adobe Commerce recommends that you contact your search engine vendor to determine whether your extension is fully compatible with Adobe Commerce 2.4.0.</td>
</tr>
</tbody>
</table>

## Installation:

When Adobe Commerce on-premises and Magento Open Source 2.4.0 is released, Elasticsearch will be a required component, so you must have an Elasticsearch host setup and configured prior to installing version 2.4.0.  See [Install and configure Elasticsearch](https://devdocs.magento.com/guides/v2.3/config-guide/elasticsearch/es-overview.html) in our developer documentation.

By default, Adobe Commerce search will use Elasticsearch 7 as the search engine and attempt to connect to a server at localhost:9200. Elasticsearch 6.x is also supported. If your configuration does not match the defaults, you can configure these settings using arguments passed to `setup:install`, in much the same way the database connection is configured.

For example, `setup:install --elasticsearch-host=es.mystore.com`

During installation the Elasticsearch connection will be checked, and installation will fail if Adobe Commerce is unable to connect to an Elasticsearch host. If this occurs, check that your Elasticsearch is up and running, and that you have supplied the correct connection parameters.
