---
title: 404 Error on store front once catalog price rule schedules update is performed
link: https://support.magento.com/hc/en-us/articles/360025522891-404-Error-on-store-front-once-catalog-price-rule-schedules-update-is-performed
labels: Magento Commerce,patch,2.2.1,troubleshooting,schedule update,known issues,404 error
---

<p>This article provides a patch and required steps to fix the known Magento Commerce 2.2.1 issue related to getting a 404 error on all store front pages, after a catalog price rule update was created and its starting time was edited later. To fix the issue you need to apply the patch.</p>
<h2>Issue</h2>
<p>Storefront pages become unavailable, returning 404 error. The issue appears after the active catalog price rule update becomes due, providing that the starting date of this update was edited after initial creation.</p>
<p>Steps to reproduce:</p>
<ol>
<li>In the Magento Admin, create a new Catalog Price Rule under Marketing &gt; Promotions &gt; Catalog Price Rule.</li>
<li>In the Catalog Price Rule grid, click Edit, schedule a new Update and set Status to <em>Active.</em>
</li>
<li>Navigate to Content &gt; Content Staging &gt; Dashboard.
</li>
<li>Select the recently created update and change its starting time.</li>
<li>Save the changes.</li>
</ol>
<p>Expected result:<br/> When the Update start date becomes effective, the catalog price rule is applied successfully.</p>
<p>Actual result:<br/> When the Update start date becomes effective, all catalog and products on the storefront become unavailable returning the 404 error.</p>
<h2>Solution</h2>
<p>To restore catalog pages and be able to fully use the catalog price rules updates functionality, you need to install the patch, delete the rule both manually and in the admin, and fix the invalid links in the database. You will also need to recreate the catalog price rule.</p>
<p>Following is the detailed description of the required steps:</p>
<ol>
<li>
<a href="#patch">Apply the patch</a>.</li>
<li>In the Magento Amin, delete the catalog price rule related to the issue (where the start time was updated). To do this, open the rule page under Marketing &gt; Promotions &gt; Catalog Price Rule, and click Delete Rule.</li>
<li>Accessing the database, manually delete the related record from the <code>catalogrule</code> table.</li>
<li>Fix the invalid links in the database. See the <a href="#fix_links">related paragraph</a> for details.</li>
<li>In the Admin under Marketing &gt; Promotions &gt; Catalog Price Rule, create the new rule with the required configuration.</li>
<li>Clear the browser cache under System &gt; Cache Management.</li>
<li>Make sure the cron jobs are configured properly and may be executed successfully.</li>
</ol>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360024181571/MDVA-7392_EE_2.2.1_COMPOSER_v2.patch">Download MDVA-7392_EE_2.2.1_COMPOSER_v2.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.1</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) from 2.2.0 to 2.2.4</li>
<li>Magento Commerce 2.2.0, and from 2.2.2 to 2.2.4</li>
</ul>
<p> </p>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Fix the invalid links to staging in DB</h2>
<p class="warning">We strongly recommend creating a database backup before any database manipulations. We also recommend testing queries on development environment first.</p>
<p>Take the following steps to fix the rows with invalid links to the <code>staging_update</code> table.</p>
<ol>
<li>Check if the invalid links to the <code>staging_update</code> table exist in the <code>flag</code> table. These would be records where <code>flag_code=staging</code>.</li>
<li>Identify the invalid version from the <code>flag</code> table using the following query:
<pre><code class="language-sql">SELECT flag_data FROM flag WHERE flag_code = 'staging';</code></pre>
</li>
<li>
<p>From the <code>staging_update</code> table select the existing version that is less than the current (invalid) version and get the version value that is two numbers back. You take it, not the preceding version, to avoid the situation when the previous version is the maximum version in the <code>staging_update</code> table that could be applied and we still need to re-apply it.</p>
<pre><code class="language-sql">SELECT id FROM staging_update WHERE id &lt; %current_id% ORDER BY id DESC LIMIT 1, 1 </code></pre>
The version you get in response is your valid version <code>id</code>.</li>
<li>
<p>For the rows with invalid links in the <code>flag</code> table, set the <code>flag_data</code> values to data which will contain a valid version id. This helps to save performance on reindex step and allows to avoid reindexing all entities.</p>
<pre><code class="language-sql">UPDATE flag SET flag_data=REPLACE(flag_data, '%invalid_id%', '%new_valid_id%') WHERE flag_code='staging';</code></pre>
</li>
</ol>
<p> </p>
<p>Example:</p>
<pre><code class="language-sql">SELECT flag_data FROM flag WHERE flag_code = 'staging';</code> <br/><code class="language-bash">Response &lt; 2.2 version</code></pre>
<div><code class="language-bash">+-------------------------------------------------+</code></div>
<div><code class="language-bash">| flag_data                                       | </code></div>
<div><code class="language-bash">+-------------------------------------------------+</code></div>
<div><code class="language-bash">| a:1:{s:15:"current_version";s:10:"1490005140";} |</code></div>
<div><code class="language-bash">+-------------------------------------------------+</code></div>
<div><code class="language-bash">Response from 2.2 version</code></div>
<div><code class="language-bash">+-------------------------------------------------+</code></div>
<div><code class="language-bash">| flag_data                                       | </code></div>
<div><code class="language-bash">+-------------------------------------------------+</code></div>
<div><code class="language-bash">| {"current_version":"1490005140"} |</code></div>
<div><code class="language-bash">+-------------------------------------------------+</code></div>
<pre><code class="language-sql">SELECT id FROM staging_update WHERE id &lt; 1490005140</code> <code class="language-sql">ORDER BY id DESC LIMIT 1, 1</code>;</pre>
<div><code class="language-bash">Response:</code></div>
<p><code class="language-bash">1490005138</code></p>
<pre><code class="language-sql">UPDATE flag SET flag_data=REPLACE(flag_data, '1490005140', '1490005138') WHERE flag_code='staging';</code></pre>
<h2>Attached Files</h2>