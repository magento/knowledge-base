---
title: Known issues that affect installation
link: https://support.magento.com/hc/en-us/articles/360034242212-Known-issues-that-affect-installation
labels: PHP,exception,fatal error,xdebug,extension,how to,Apache
---

<p>This article provides a solution for when you experience an exception error when you use the optional PHP extension <code>xdebug</code>.</p>
<ul>
<li>During installation</li>
<li>Accessing either the Magento Admin or storefront after a successful installation</li>
</ul>
<p>Sample exception:</p>
<pre><code class="language-php">Fatal error: Maximum function nesting level of '100' reached, aborting!</code></pre>
<p>To resolve this issue, you can:</p>
<ul>
<li>Disable the <code>xdebug</code> extension.</li>
<li>Set the value of <code>xdebug.max_nesting_level</code> to a value of 200 or more. For more information, see <a href="http://xdebug.org/docs/basic#max_nesting_level">xdebug documentation</a>.</li>
</ul>
<p>After you change the configuration of or disable <code>xdebug</code>, restart Apache:</p>
<ul>
<li>CentOS: <code>sudo service httpd restart</code>
</li>
<li>Ubuntu: <code>sudo service apache2 restart</code>
</li>
</ul>