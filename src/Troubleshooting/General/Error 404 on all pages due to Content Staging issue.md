---
title: Error 404 on all pages due to Content Staging issue
link: https://support.magento.com/hc/en-us/articles/360000262174-Error-404-on-all-pages-due-to-Content-Staging-issue
labels: staging,Magento Commerce Cloud,Magento Commerce,content,log,404,troubleshooting
---

<p>This article provides a fix for the Magento Commerce and Commerce Cloud issue, where you get 404 error when accessing any storefront page or Magento Admin.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Commerce Cloud 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Accessing any storefront page or Magento Admin results in the 404 error (the "Whoops, our bad..." page), after performing operations with scheduled updates for store content assets using <a href="http://docs.magento.com/m2/ee/user_guide/cms/content-staging.html">Content Staging</a> (updates for store content assets scheduled using the <a href="http://devdocs.magento.com/guides/v2.2/mrg/ee/Staging.html">Magento_Staging module</a>). For example, you may have deleted a Product with a scheduled update, or removed the end date for the scheduled update.</p>
<p>A store content asset includes:</p>
<ul>
<li>Product</li>
<li>Category</li>
<li>Catalog Price Rule</li>
<li>Cart Price Rule</li>
<li>CMS Page</li>
<li>CMS Block</li>
<li>Widget</li>
</ul>
<p>Some scenarios are discussed in the Cause section below.</p>
<h2>Cause</h2>
<p>The <code>flag</code> table in the database (DB) contains invalid links to the <code>staging_update</code> table.</p>
<p>The problem is related to Content Staging. Below are two particular scenarios; please note there might be more situations that trigger the issue.</p>
<p>Scenario 1: Deleting a store content asset which:</p>
<ul>
<li>has an update scheduled with Content Staging</li>
<li>the update has an end date (meaning the expiry date after which the updated asset reverts to its previous version)</li>
<li>the end date of the update is in the past</li>
</ul>
<p>At the same time, the issue might not occur if a deleted asset has no end date for the scheduled update.</p>
<p>Scenario 2: Removing the end date/time of a scheduled update.</p>
<h3>Identify if your issue is related </h3>
<p>To identify, if the issue you are experiencing is the one described in this article, run the following DB query:</p>
<pre class="c-mrkdwn__pre" data-stringify-type="pre">SELECT f.flag_data-&gt;&gt;'$.current_version' as flag_version, (su.id IS NOT NULL) as update_exists FROM flag f LEFT JOIN staging_update su ON su.id = f.flag_data-&gt;&gt;'$.current_version' WHERE flag_code = 'staging';</pre>
<p>If the query returns a table where <code>update_exists</code> value is "0", then an invalid link to the <code>staging_update</code> table exists in your database and the steps described in the <a href="#solution">Solution section</a> will help to solve the issue. The following is an example of the query result with <code>update_exists</code> value equal to "0":</p>
<p><img alt="issue_exists.png" src="https://support.magento.com/hc/article_attachments/360057617492/issue_exists.png"/></p>
<p>If the query returns a table where <code>update_exists</code> value is "1" or an empty result, it means your issue is not related to staging updates. The following is an example of the query result with <code>update_exists</code> value equal to "1":</p>
<p><img alt="issue_is_different.png" src="https://support.magento.com/hc/article_attachments/360057773131/issue_is_different.png"/></p>
<p>In this case you might refer to <a href="https://support.magento.com/hc/en-us/articles/360029351531">Site Down Troubleshooter</a> for troubleshooting ideas.</p>
<h2>Solution</h2>
<ol>
<li>Run the following query to delete the invalid link to the <code>staging_update</code> table: <br/><code class="language-sql" style="white-space: pre;">  DELETE FROM flag WHERE flag_code = 'staging';</code>
</li>
<li>Wait for the cron job to be run (runs in up to 5 minutes if set up properly) or run it manually if you do not have cron set up.</li>
</ol>
<p>The problem should be solved straight after fixing the invalid link. If the problem persists, <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket.</a>.  </p>