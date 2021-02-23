---
title: Blank page or redirect loop error when accessing storefront or Magento Admin
link: https://support.magento.com/hc/en-us/articles/360032342371-Blank-page-or-redirect-loop-error-when-accessing-storefront-or-Magento-Admin
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,redirect,blank,Magento Admin
---

<p>This article provides a solution for the issue when you access Magento store front or backend and you get a blank page or redirect loop.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, all versions</li>
<li>Magento Commerce, all versions</li>
<li>Magento Open Source, all versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Open a store front or Admin page.</p>
<p>Expected result</p>
<p>The page opens.</p>
<p>Actual result</p>
<p>The page is blank or displays the <em>"This webpage has a redirect loop"</em> error message. </p>
<h2>Cause</h2>
<p>One of most probable reasons for the issue is that Magento is set to redirect from unsecure URL to secure URL, but an unsecure URL is given as the value for the secure URL setting.</p>
<p>To fix the issue, you need to correct the value of the secure link.</p>
<h2>Solution</h2>
<p>To make sure this is the cause of the problem, take the following steps:</p>
<ol>
<li>Check the <code>web/secure/enable_upgrade_insecure</code>, <code>web/secure/use_in_adminhtml</code> (if you have the blank/loop redirect issue in Admin) or <code>web/secure/use_in_frontend</code> (if you have the blank/loop redirect issue on the store front) value in the <code>'core_config_data'</code> DB table.
<ul>
<li>If <code>web/secure/enable_upgrade_insecure</code> is set to "1', then Magento is setup to add the response header <code class="language-html">Content-Security-Policy: upgrade-insecure-requests</code>, thus instructing browsers to use HTTPS, redirecting all queries that come over HTTP to HTTPS, for both Admin and store front.</li>
<li>If <code>web/secure/use_in_adminhtml</code> is set to "1", Magento returns HTTPS redirects for all HTTP requests for the Admin pages.</li>
<li>If <code>web/secure/use_in_frontend</code> is set to "1", Magento returns HTTPS redirects for all HTTP requests for the store front pages.</li>
</ul>
</li>
<li>Check the <code>web/secure/base_url</code> and <code>web/unsecure/base_url</code> values in the <code>'core_config_data'</code> table. If they both start with <code class="language-html">http</code>, then you need to correct the "secure" value.</li>
</ol>
<p>Fixing the issue:</p>
<ol>
<li>Set the value starting with <code class="language-html">https</code> for <code>web/secure/base_url. </code>
</li>
<li>For the changes to be applied, clean the configuration cache by running the following command:
<pre><code class="language-bash">php &lt;your_magento_install_dir&gt;/bin/magento cache:clean config</code></pre>
</li>
</ol>
<p> </p>