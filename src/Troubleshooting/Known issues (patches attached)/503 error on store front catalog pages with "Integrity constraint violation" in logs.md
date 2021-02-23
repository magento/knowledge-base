---
title: 503 error on store front catalog pages with "Integrity constraint violation" in logs
link: https://support.magento.com/hc/en-us/articles/360025762211-503-error-on-store-front-catalog-pages-with-Integrity-constraint-violation-in-logs
labels: Magento Commerce Cloud,patch,troubleshooting,503,2.2.4,known issues,2.2.0,integrity constraint violation
---

<p class="info">This article provides a patch as a workaround, but the issue was permanently fixed in Magento Commerce Cloud v2.3.3 release, and it is recommended that you upgrade to v2.3.3. Follow the steps in <a href="https://devdocs.magento.com/cloud/project/project-upgrade.html">Upgrade Magento Version</a>.</p>
<p>This article provides a patch for the known Magento Commerce Cloud 2.2.0 issue related to store front catalog pages being inaccessible, with the error message similar to the following in log: <em>"Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO `search_tmp_%number%"</em>.</p>
<h2>Issue</h2>
<p>Store front catalog pages become inaccessible unexpectedly. The error log has an error description similar to the following: <em>"Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO `search_tmp_%number%"</em>.</p>
<p>The issue is related to searching and caused by the existence of the outdated index along with the new one after reindex.</p>
<h2>Solution</h2>
<p>To fix the problem, you need to remove outdated indexes from ElasticSearch and apply the patch to prevent them appearing.</p>
<p>To list all the indexes, use the following command:</p>
<pre class="c-mrkdwn__pre" data-stringify-type="pre">curl -X GET %elasticsearch_domain%:%elasticsearch_port%/_cat/indices</pre>
<p>To remove the outdated indexes, find the them in the database and then use the following command:</p>
<pre><code class="language-bash">curl -X DELETE %elasticsearch_domain%:%elasticsearch_port%/%product_id%_v%outdated_version%</code></pre>
<p>Example:</p>
<pre><code class="language-bash">curl -X DELETE 127.0.0.1:9200/magento2_product_8_v332</code></pre>
<h2>Patch</h2>
<p>The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360024553632/MDVA-9590_EE_2.2.0_COMPOSER_v2.patch">Download MDVA-9590_EE_2.2.0_COMPOSER_v2.patch</a></p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360024929111/MDVA-13203_EE_2.2.4_V1_COMPOSER.patch">Download MDVA-13203_EE_2.2.4_V1_COMPOSER.patch</a></p>
<h3>Compatible Magento versions</h3>
<p>The patches were created for the following editions and versions:</p>
<ul>
<li>Magento Commerce Cloud 2.2.0 (<code>MDVA-9590_EE_2.2.0_COMPOSER_v2.patch</code>)</li>
<li>Magento Commerce Cloud 2.2.4 (<code>MDVA-13203_EE_2.2.4_V1_COMPOSER.patch</code>)</li>
</ul>
<p>The <code>MDVA-9590_EE_2.2.0_COMPOSER_v2</code> patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.0.X, 2.1.X, 2.2.X, from 2.3.0 to 2.3.3
</li>
<li>Magento Commerce 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3
</li>
</ul>
<p>The <code>MDVA-13203_EE_2.2.4_V1_COMPOSER</code> patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) 2.0.X, 2.1.X, 2.2.X, from 2.3.0 to 2.3.3
</li>
<li>Magento Commerce 2.0.X, 2.1.X, 2.2.X, and from 2.3.0 to 2.3.3
</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Useful links</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360020127552">Log files location for Magento Commerce Cloud Starter plan</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360000318834">Log files location for Magento Commerce Cloud Pro plan</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html">Log files location for Magento Commerce</a></li>
</ul>
<h2>Attached Files</h2>