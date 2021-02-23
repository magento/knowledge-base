---
title: Top navigation panel does not load on storefront
link: https://support.magento.com/hc/en-us/articles/360028757791-Top-navigation-panel-does-not-load-on-storefront
labels: Magento Commerce,troubleshooting,varnish,2.x.x,Edge Side
---

<p>This article provides configuration solutions to the Varnish Edge Side Includes (ESI) issues, where certain pages' content, usually the top navigation panel, is not displayed on the store front, if Varnish is used for caching.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento 2.X.X Commerce </li>
<li>All Varnish versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<p>Prerequisites: Install and configure Varnish for your Magento store.</p>
<ol>
<li>Go to the store front.</li>
<li>Browse through the store pages.</li>
</ol>
<p>Actual result:</p>
<p>Observe that some content blocks, like the top navigation panel with categories, are not loading. Blank space is displayed instead.</p>
<p>Expected result:</p>
<p>All content and all page blocks load successfully. </p>
<h2>Cause</h2>
<p>The possible reasons for the issue are the following:</p>
<ul>
<li>ESI include tags are generated with HTTPS access protocol, while Varnish only works with HTTP.</li>
<li>Varnish does not process ESI inside JSON. </li>
<li>Response headers are too big for Varnish; it cannot process them.</li>
</ul>
<h2>Solution</h2>
<p>To resolve the issues, you need to perform additional Varnish configuration and restart Varnish.</p>
<ol>
<li>As a user with <code class="highlighter-rouge">root</code> privileges, open your Vanish configuration file in a text editor. See the <a href="https://devdocs.magento.com/guides/v2.3/config-guide/varnish/config-varnish-configure.html#config-varnish-config-sysvcl">Modify the Varnish system configuration</a> section for info on where this file might be located for different operating systems.</li>
<li>In the <code>DAEMON_OPTS variable</code>, add <code>-p feature=+esi_ignore_https</code>,  <code>-p  feature=+esi_ignore_other_elements</code>, <code>-p  feature=+esi_disable_xml_check</code>. This would look like:
<pre><code class="language-bash">DAEMON_OPTS="-a :6081 \
-p feature=+esi_ignore_other_elements \
-p feature=+esi_disable_xml_check \
-p feature=+esi_ignore_https \
-T localhost:6082 \
-f /etc/varnish/default.vcl \
-S /etc/varnish/secret \
-s malloc,256m"
</code></pre>
</li>
<li>Save your changes and exit the text editor.</li>
<li>In the VCL configuration file, increase the response headers by increasing the values of the these parameters: <code>http_resp_hdr_len</code>, <code>http_resp_size</code>, <code>workspace_backend</code>.<br/> Make sure that the last two of them have similar values.</li>
<li>When you change this, you need to run <code class="docutils literal">service varnish restart</code> for the changes to take effect.</li>
</ol>
<h2>Related reading</h2>
<ul>
<li>
<a href="https://devdocs.magento.com/guides/v2.3/config-guide/varnish/config-varnish-configure.html#config-varnish-config-sysvcl">Configure Varnish and your web server</a> on Magento Devdocs</li>
<li><a href="https://varnish-cache.org/docs/5.1/reference/index.html">Varnish documentation</a></li>
</ul>
<p> </p>