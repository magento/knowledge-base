---
title: Change Magento Admin URL on Cloud
link: https://support.magento.com/hc/en-us/articles/115005084874-Change-Magento-Admin-URL-on-Cloud
labels: production,Magento Commerce Cloud,magento_admin,ADMIN_URL,URL,Staging,how to
---

<p>By default, <a href="http://docs.magento.com/m2/ee/user_guide/stores/admin.html">Magento Admin</a> URL is set to <em>&lt;domain_name&gt;/admin</em>. This article shows how to change the URL.</p>
<h2>Method 1: Change using Magento Admin</h2>
<p>Read the steps: <a href="http://docs.magento.com/m2/ee/user_guide/stores/store-urls-custom-admin.html">Using a Custom Admin URL</a> &gt; Change from the Magento Admin (Magento User Guide).</p>
<h2>Method 2: Add ADMIN_URL environment variable</h2>
<h3>Integration environment</h3>
<p>From your <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html">Project Web Interface</a>, add a new variable with:</p>
<p>Name: ADMIN_URL<br/>Value: new Admin URL</p>
<p>Read on DevDocs:</p>
<ul>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#env">add environment variables</a> (detailed steps)</li>
<li>
<a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html">Magento environment variables</a> (reference)</li>
</ul>
<h3>When Staging and Production are not available in Project Web Interface</h3>
<p><a href="https://support.magento.com/hc/en-us/articles/360019088251">Submit a support ticket</a> requesting to add the ADMIN_URL variable for your Staging or Production environment.</p>
<p>If Staging and Production are accessible from your Project Web Interface, add the Environment Variable as described in the <em>Integration environment</em> section above.</p>
<h3>Add variables using Cloud CLI</h3>
<p>See <a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environment-vars_magento.html#addvariables">Add environment variables</a> (DevDocs) for detailed steps.</p>
<p>We don't recommend adding global variables via Cloud CLI (the <code>magento-cloud project:variable:set &lt;name&gt; &lt;value&gt;</code> command) since such global variables:</p>
<ul>
<li>get inherited by your Staging/Production environments (if these are included in your Project Web Interface)</li>
<li>trigger the undesired redeploy process on all branches/environments of your project</li>
</ul>
<p>We recommend adding environment variables for every branch/environment using the <code>magento-cloud variable:set</code> command.</p>