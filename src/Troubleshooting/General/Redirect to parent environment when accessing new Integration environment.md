---
title: Redirect to parent environment when accessing new Integration environment 
link: https://support.magento.com/hc/en-us/articles/360018610112-Redirect-to-parent-environment-when-accessing-new-Integration-environment-
labels: Magento Commerce Cloud,troubleshooting,redirect,base_url,2.x.x
---

<p>This article provides troubleshooting instructions for the Magento Cloud issue where trying to access the newly created Integration environment takes you to the parent environment instead.</p>
<p>To fix this, you need to correct the base_url value in the database and make sure that the <code>UPDATE_URLS</code> variable value is set to <code>true</code>. Find more details in the sections below.</p>
<p>Affected versions and editions:</p>
<ul>
<li>Magento Commerce Cloud 2.X.X</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:</p>
<ol>
<li>Clone the existing Integration branch.</li>
<li>Click the URL for accessing the new environment.</li>
</ol>
<p>Expected result:</p>
<p>You get to the newly created environment.</p>
<p>Actual result:</p>
<p>You get redirected to the environment on the parent branch.</p>
<h2>Solution</h2>
<p>To fix the issue, you need to correct the <code>base_url</code> values (secure and unsecure) in the custom environment database and set the <code>UPDATE_URL</code> variable in the <code>.magento.env.yaml</code> file.</p>
<h3>Correct base_url values in database</h3>
<p>Changes in the database can be done either manually or using the Magento CLI, if you are on version 2.2.0 and later.</p>
<h4>Correct the values in the DB manually</h4>
<ol>
<li>Connect to the database </li>
<li>Run the following commands
<pre><code class="language-sql">UPDATE core_config_data SET value = %your_new_environment_unsecure_url% WHERE path="web/unsecure/base_url"</code></pre>
<pre><code class="language-sql">update core_config_data set value = %your_new_environment_secure_url% where path="web/secure/base_url"<code></code></code></pre>
</li>
</ol>
<h4>Correct the database using Magento CLI (available for versions 2.2.X)</h4>
<ol>
<li>Log in as, or switch to, the <a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/apache-user.html">Magento file system owner.</a>
</li>
<li>Run the following commands:
<pre><code class="language-bash">php &lt;your_magento_install_dir&gt;/bin/magento config:set web/unsecure/base_url http://example.com
php &lt;your_magento_install_dir&gt;/bin/magento config:set web/secure/base_url https://example.com</code></pre>
</li>
</ol>
<h3>Set the <code>UPDATE_URLS</code> variable</h3>
<p>In your local codebase, in the <code class="highlighter-rouge">.magento.env.yaml</code> file set:</p>
<pre><code>stage:
    deploy:
        UPDATE_URLS: true</code></pre>
<h3> Clear configuration cache</h3>
<p>For the changes to be applied, clean the configuration cache by running the following command:</p>
<pre><code class="language-bash">php &lt;your_magento_install_dir&gt;/bin/magento cache:clean config</code></pre>
<h2>Related documentation:</h2>
<p><a href="https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#update_urls">Deploy variables</a></p>