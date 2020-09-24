This article provides a patch and required steps to fix the known Magento Commerce 2.2.1 issue related to getting a 404 error on all store front pages, after a catalog price rule update was created and its starting time was edited later. To fix the issue you need to apply the patch.

## Issue

Storefront pages become unavailable, returning 404 error. The issue appears after the active catalog price rule update becomes due, providing that the starting date of this update was edited after initial creation.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   In the Magento Admin, create a new Catalog Price Rule under __Marketing__ &gt; __Promotions__ &gt; __Catalog Price Rule__.
2.   In the __Catalog Price Rule__ grid, click __Edit, __schedule a new Update&nbsp;and&nbsp;set&nbsp;__Status__ to _Active._
3.   Navigate to __Content__ &gt; __Content Staging__ &gt;__ Dashboard.__
4.   Select the recently created update and change its starting time.
5.   Save the changes.

<span class="wysiwyg-underline">Expected result</span>:  
 When the Update start date becomes effective, the catalog price rule is applied successfully.

<span class="wysiwyg-underline">Actual result</span>:  
 When the Update start date becomes effective, all catalog and products on the storefront become unavailable returning the 404 error.

## Solution

To restore catalog pages and be able to fully use the catalog price rules updates functionality, you need to install the patch, delete the rule both manually and in the admin, and fix the invalid links in the database. You will also need to recreate the catalog price rule.

Following is the detailed description of the required steps:

1.   <a href="#patch" target="_self">Apply the patch</a>.
2.   In the Magento Amin, delete the catalog price rule related to the issue (where the start time was updated). To do this, open the rule page under __Marketing__ &gt; __Promotions__ &gt; __Catalog Price Rule__, and click__&nbsp;Delete Rule__.
3.   Accessing the database, manually delete the related record from the `` catalogrule `` table.
4.   Fix the invalid links in the database. See the <a href="#fix_links" target="_self">related paragraph</a> for details.
5.   In the Admin under __Marketing__ &gt; __Promotions__ &gt; __Catalog Price Rule__, create the new rule with the required configuration.
6.   Clear the browser cache under&nbsp;__System__&nbsp;&gt;&nbsp;__Cache Management__.
7.   Make sure the cron jobs are configured properly and may be&nbsp;executed successfully.

<h2 id="patch">Patch</h2>

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360024181571/MDVA-7392_EE_2.2.1_COMPOSER_v2.patch" rel="noopener" target="_blank">Download MDVA-7392\_EE\_2.2.1\_COMPOSER\_v2.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce 2.2.1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) from 2.2.0 to 2.2.4
*   Magento Commerce 2.2.0, and from 2.2.2 to 2.2.4

&nbsp;

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

<h2 id="fix_links">Fix the invalid links to staging in DB</h2>

<p class="warning">We strongly recommend creating a database backup before any database manipulations. We also recommend testing queries on development environment first.</p>

Take the following steps to fix the rows with invalid links to the `` staging_update `` table.

1.   Check if the invalid links&nbsp;to the `` staging_update `` table exist in the `` flag `` table. These would be records where `` flag_code=staging ``.
2.   Identify the invalid version from the `` flag `` table using the following query:
    
    <pre><code class="language-sql">SELECT flag_data FROM flag WHERE flag_code = 'staging';</code></pre>
    
    
3.   
    
    From the `` staging_update `` table select the existing version that is less than the current (invalid) version and get the version value that is two numbers back. You take it, not the preceding version, to avoid the situation when the previous version is the maximum version in the&nbsp;`` staging_update `` table that could be applied and we still need to re-apply it.
    
    
    
    <pre><code class="language-sql">SELECT id FROM staging_update WHERE id &lt; %current_id% ORDER BY id DESC LIMIT 1, 1 </code></pre>
    
    The version you get in response is your valid version `` id ``.
4.   
    
    For the rows with invalid links in the `` flag `` table, set the `` flag_data `` values to data which will contain a valid version id. This helps to save performance on reindex step and allows to avoid reindexing all entities.
    
    
    
    <pre><code class="language-sql">UPDATE flag SET flag_data=REPLACE(flag_data, '%invalid_id%', '%new_valid_id%') WHERE flag_code='staging';</code></pre>
    
    

&nbsp;

<span class="wysiwyg-underline">Example:</span>

<pre><code class="language-sql">SELECT flag_data FROM flag WHERE flag_code = 'staging';</code> <br/><code class="language-bash">Response &lt; 2.2 version</code></pre>

<div class="line number3 index2 alt2"><code class="language-bash">+-------------------------------------------------+</code></div>

<div class="line number4 index3 alt1"><code class="language-bash">| flag_data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | </code></div>

<div class="line number5 index4 alt2"><code class="language-bash">+-------------------------------------------------+</code></div>

<div class="line number6 index5 alt1"><code class="language-bash">| a:1:{s:15:"current_version";s:10:"1490005140";} |</code></div>

<div class="line number7 index6 alt2"><code class="language-bash">+-------------------------------------------------+</code></div>

<div class="line number9 index8 alt2"><code class="language-bash">Response from 2.2 version</code></div>

<div class="line number10 index9 alt1"><code class="language-bash">+-------------------------------------------------+</code></div>

<div class="line number11 index10 alt2"><code class="language-bash">| flag_data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | </code></div>

<div class="line number12 index11 alt1"><code class="language-bash">+-------------------------------------------------+</code></div>

<div class="line number13 index12 alt2"><code class="language-bash">| {"current_version":"1490005140"} |</code></div>

<div class="line number14 index13 alt1"><code class="language-bash">+-------------------------------------------------+</code></div>

<pre><code class="language-sql">SELECT id FROM staging_update WHERE id &lt; 1490005140</code> <code class="language-sql">ORDER BY id DESC LIMIT 1, 1</code>;</pre>

<div class="line number3 index2 alt2"><code class="language-bash">Response:</code></div>

<code class="language-bash">1490005138</code>

<pre><code class="language-sql">UPDATE flag SET flag_data=REPLACE(flag_data, '1490005140', '1490005138') WHERE flag_code='staging';</code></pre>

## Attached Files