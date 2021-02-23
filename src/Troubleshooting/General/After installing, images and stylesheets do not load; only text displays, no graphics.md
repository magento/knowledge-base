---
title: After installing, images and stylesheets do not load; only text displays, no graphics
link: https://support.magento.com/hc/en-us/articles/360032994352-After-installing-images-and-stylesheets-do-not-load-only-text-displays-no-graphics
labels: Magento Commerce,images,nginx,2.3.x,2.2.x,how to,Apache,stylesheets
---

<p>This article describes the possible reasons and solutions for the issue where stylesheets and images do not load after installing Magento. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Install Magento.</li>
<li>Navigate to the storefront or Admin.</li>
</ol>
<p>Expected result</p>
<p>Styles are applied, no UI element looks like missing styles.</p>
<p>Actual result </p>
<p>Styles are not applied correctly, graphics is missing.  </p>
<h2>Cause</h2>
<p>The path to images and stylesheets is not correct, either because of an incorrect base URL or because server rewrites (CentOS, Ubuntu) are not set up properly.</p>
<p>To confirm this is the case, use a web browser inspector to check the paths to static assets and verify those assets are located on the Magento file system.</p>
<p>Magento static assets are located under <code>&lt;magento_root&gt;/pub/static/</code>, within the <code>frontend</code> and <code>adminhtml</code> directories.</p>
<h2>Solution</h2>
<p>The following are possible solutions depending on the software you use and the cause of the problem:</p>
<ul>
<li>
<p>If you are using the Apache web server, verify your <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/apache.html#apache-help-rewrite">server rewrites</a> setting and your Magento server's base URL and try again. If you set up the Apache <code>AllowOverride</code> directive incorrectly, the static files are not served from the correct location.</p>
</li>
<li>
<p>If you are using the nginx web server, be sure to <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/nginx.html#configure-nginx-ubuntu">configure a virtual host file</a>. The nginx virtual host file must meet the following criteria:</p>
<ul>
<li>
<p>The <code>include</code> directive must point to the sample nginx configuration file in your Magento installation directory. For example:</p>
<pre><code class="language-bash">include /var/www/html/magento2/nginx.conf.sample;</code></pre>
</li>
<li>
<p>The <code>server_name</code> directive must match the base URL you specified when installing Magento. For example:</p>
<pre><code class="language-bash">server_name 192.186.33.10;</code></pre>
</li>
</ul>
</li>
<li>
<p>If the Magento application is in <a href="https://devdocs.magento.com/guides/v2.3/config-guide/bootstrap/magento-modes.html#production-mode">production mode</a>, try deploying static view files using the command <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html">magento setup:static-content:deploy</a>.</p>
</li>
</ul>