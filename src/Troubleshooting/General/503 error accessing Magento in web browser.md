---
title: 503 error accessing Magento in web browser
link: https://support.magento.com/hc/en-us/articles/360033432371-503-error-accessing-Magento-in-web-browser
labels: Magento Commerce,troubleshooting,2.3.5-p1,2.3.1,2.3.4-p2,2.3.4,2.3.0,2.3.3,2.3.2,2.3.6,2.3.5-p2,2.3.3-p1,Apache,2.3.2-p2,503 error
---

<p>This article provides a possible solution for the issue where you get 503 error when trying to access Magento storefront and/or Admin.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.3.x</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>(Prerequisites: make sure the store is not in <a href="https://devdocs.magento.com/guides/v2.3/config-guide/cli/config-cli-subcommands-mode.html#config-mode-show">maintenance mode</a>.)</p>
<p>Navigate to your Magento Admin or storefront in a web browser.</p>
<p>Expected result</p>
<p>The page loads.</p>
<p>Actual result</p>
<p>You get the HTTP 503 (Service Unavailable) error. The Apache <code>error.log</code> includes the following message: </p>
<p><em>Invalid command 'Order', perhaps misspelled or defined by a module not included in the server configuration.</em></p>
<h2>Cause</h2>
<p>Apache 2.4 compatibility module <code>mod_access_compat</code> is disabled, which results in Magento URL rewrites not working properly.</p>
<h2>Solution</h2>
<p>Enable the <code>mod_access_compat</code> Apache module and restart Apache, by running the following as a user with 'root' privileges: </p>
<pre><code class="language-bash">a2enmod access_compat
service &lt;name&gt; restart</code></pre>
<p>On CentOS, <code class="language-bash">&lt;name&gt;</code> is <code class="language-bash">httpd</code>. On Ubuntu, <code class="language-bash">&lt;name&gt;</code> is <code class="language-bash">apache2</code>.</p>
<h2>Related reading</h2>
<ul>
<li><a href="http://httpd.apache.org/docs/current/mod/mod_access_compat.html">Apache documentation about mod_access_compat</a></li>
<li><a href="http://httpd.apache.org/docs/current/mod/mod_authz_host.html">Apache documentation about mod_authz_host</a></li>
<li><a href="http://docstore.mik.ua/orelly/linux/apache/ch05_06.htm">Order, Allow, Deny from the Apache Definitive Guide</a></li>
<li><a href="http://askubuntu.com/questions/335228/changes-in-apache-config-between-12-04-2-and-12-04-3-lts">askubuntu.com</a></li>
</ul>