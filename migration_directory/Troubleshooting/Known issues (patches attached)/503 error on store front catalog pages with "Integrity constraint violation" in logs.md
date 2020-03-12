<p class="info">This article provides a patch as a workaround, but the issue was permanently fixed in Magento Commerce Cloud v2.3.3 release, and it is recommended that you upgrade to v2.3.3. Follow the steps in&nbsp;<a href="https://devdocs.magento.com/cloud/project/project-upgrade.html" rel="noopener" target="_blank">Upgrade Magento Version</a>.</p>

This article provides a patch for the known Magento Commerce Cloud 2.2.0 issue related to store front catalog pages being inaccessible, with the error message similar to the following in log: _"Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO \`search\_tmp\_%number%"_.

## Issue

Store front catalog pages become inaccessible unexpectedly. The error log&nbsp;has an error description similar to the following: _"Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO \`search\_tmp\_%number%"_.

The issue is related to searching and caused by the existence of the outdated index along with the new one after reindex.

## Solution

To fix the problem, you&nbsp;need to remove outdated indexes from elasticsearch and apply the patch to prevent them appearing.

To remove the outdated indexes, you need to find the them in the database and then use the following command:

<pre><code class="language-bash">curl -X DELETE %elasticsearch_domain%:%elasticsearch_port%/%product_id%_v%outdated_version%</code></pre>

Example:

<pre><code class="language-bash">curl -X DELETE 127.0.0.1:9200/magento2_product_8_v332</code></pre>

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:

<a href="https://support.magento.com/hc/en-us/article_attachments/360024553632/MDVA-9590_EE_2.2.0_COMPOSER_v2.patch" rel="noopener" target="_blank">Download MDVA-9590\_EE\_2.2.0\_COMPOSER\_v2.patch</a>

<a href="https://support.magento.com/hc/en-us/article_attachments/360024929111/MDVA-13203_EE_2.2.4_V1_COMPOSER.patch" rel="noopener" target="_blank">Download MDVA-13203\_EE\_2.2.4\_V1\_COMPOSER.patch</a>

### Compatible Magento versions

The patches were created for the following editions and versions:

*   Magento Commerce Cloud 2.2.0 (`` MDVA-9590_EE_2.2.0_COMPOSER_v2.patch ``)
*   Magento Commerce Cloud 2.2.4 (`` MDVA-13203_EE_2.2.4_V1_COMPOSER.patch ``)

The `` MDVA-9590_EE_2.2.0_COMPOSER_v2 ``&nbsp;patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3
*   Magento Commerce 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3

The `` MDVA-13203_EE_2.2.4_V1_COMPOSER `` patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3
*   Magento Commerce 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Useful links

*   <a href="https://support.magento.com/hc/en-us/articles/360020127552" target="_self">Log files location for Magento Commerce Cloud Starter plan</a>
*   <a href="https://support.magento.com/hc/en-us/articles/360000318834" target="_self">Log files location for Magento Commerce Cloud Pro plan</a>
*   <a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html" target="_self">Log files location for Magento Commerce</a>

## Attached Files