---
title: Exported products .csv file does not appear 
link: https://support.magento.com/hc/en-us/articles/360033513352-Exported-products-csv-file-does-not-appear-
labels: Magento Commerce Cloud,export,exported,products,exportProcessor,how to,2.3.2,csv file
---

<p>This article provides a fix for the issue where you try to export products to a .csv file in Magento Admin, but the file does not appear.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud 2.3.2</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Prerequisites: The Add Secret Key to URLs option is set to <em>Yes</em>. The option is configured in the Magento Admin under Stores &gt; Configuration &gt; Advanced &gt; Admin &gt; Security.</p>
<ol>
<li>In the Magento Admin, navigate to System &gt;Data Transfer &gt;Export. <br/><br/><img alt="magento_export_products_2.3.4.png" src="https://support.magento.com/hc/article_attachments/360085657731/magento_export_products_2.3.4.png"/><br/><br/>
</li>
<li>Select
<ul>
<li>
Entity Type: <em>Products</em>
</li>
<li>
Export File Format: <em>CSV</em>
</li>
<li>
Field Enclosure: leave unchecked. </li>
</ul>
</li>
<li>Click Continue.</li>
<li>The following message is displayed: <em>"Message is added to queue, wait to get your file soon"</em>.</li>
</ol>
<p>Expected result</p>
<p>The .csv file with the exported products is displayed in the grid in a couple of minutes.</p>
<p>Actual result</p>
<p>The .csv file with the exported products is not displayed in the grid in 10 minutes or more.</p>
<h2>Cause</h2>
<p>A known issue with the Export functionality in Magento application part version 2.3.2.</p>
<h2>Solution</h2>
<p>There are two possible solutions for the issue:</p>
<ul>
<li>Disable the Add Secret Key to URL option. </li>
<li>Run the the <code>bin/magento queue:consumers:start exportProcessor</code> command manually, and optionally configure it to be run by cron.</li>
</ul>
<p>See details for both options in the following paragraphs. </p>
<h3>Disable the the Add Secret Key to URL option</h3>
<ol>
<li>In the Magento Admin, navigate to Stores &gt; Configuration &gt; Advanced &gt; Admin &gt; Security.
</li>
<li>Set the Add Secret Key to URLs option to <em>No.</em>
</li>
<li>Click Save Config. </li>
<li>Clean cache under System &gt; Tools &gt; Cache Management or by running <code class="language-bash">bin/magento cache:clean</code> or in Magento Admin.</li>
</ol>
<h3>Run the export command manually and optionally add it as cron job</h3>
<p>To get the export file, run the <code>bin/magento queue:consumers:start exportProcessor</code> command. After running this, the file should be displayed in the grid.</p>
<p> </p>
<p>To add the process as a cron job optionally, you must add the <code>CRON_CONSUMERS</code> variable to the <code>.magento.env.yaml</code> file.</p>
<h4>Add process as a cron job (optional)</h4>
<ol>
<li>Make sure your cron is setup and configured. See <a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html">Set up cron jobs</a> for details.</li>
<li>Run the following command to return a list of message queue consumers:
<pre><code>./bin/magento queue:consumers:list</code></pre>
</li>
<li>Add the following to your <code>.magento.env.yaml</code> file in the Magento <code>/app</code> directory, and include the consumers you would like to add. For example, here is the consumer required for export processing:
<pre><code class="language-yaml">stage:
  deploy:
    CRON_CONSUMERS_RUNNER:
      cron_run: true
      max_messages: 1000
      consumers:
        - exportProcessor
</code></pre>
Then push this updated file and redeploy your environment. Also reference <a href="https://devdocs.magento.com/cloud/configure/setup-cron-jobs.html#add-cron">Add custom cron jobs to your project</a>.</li>
</ol>
<p class="info">If you cannot find the <code>.magento.env.yaml</code> file for your environment, and you think it was deleted, you need to create a new <code>.magento.env.yaml</code>. It might be empty initially, you can add info there as required. Reference the following Magento DevDocs articles: <a href="https://devdocs.magento.com/cloud/project/magento-env-yaml.html">Build and deploy</a>, <a href="https://devdocs.magento.com/cloud/env/variables-intro.html">Environment variables</a></p>
<p class="info">On Magento Commerce Pro projects, the <a href="https://devdocs.magento.com/guides/v2.3/cloud/configure/setup-cron-jobs.html#verify-cron-configuration-on-pro-projects">auto-crons feature</a> must be enabled on your Magento Commerce Cloud project before you can add custom cron jobs to Staging and Production environments using <code>.magento.app.yaml</code>. If this feature is not enabled, <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket">create a support ticket</a>, to have the job added for you.</p>
<p> </p>
<p> </p>