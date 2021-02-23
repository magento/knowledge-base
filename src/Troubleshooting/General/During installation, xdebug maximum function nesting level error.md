---
title: During installation, xdebug maximum function nesting level error
link: https://support.magento.com/hc/en-us/articles/360034238512-During-installation-xdebug-maximum-function-nesting-level-error
labels: Magento Commerce Cloud,Magento Commerce,PHP Fatal Error,xdebug,nesting,level,how to
---

<p>This article provides a fix for the xdebug maximum function nesting level error, during installation.</p>
<h2>Details</h2>
<p>During Magento installation, a message similar to the following displays:</p>
<pre><code class="language-text">PHP Fatal error: Maximum function nesting level of '100' reached, aborting! in &lt;path&gt;/ClassLoader.php</code></pre>
<p> </p>
<p class="warning">It is strongly recommended that you DO NOT USE <code>xdebug</code> on a Production environment!</p>
<h2>Solution</h2>
<p>There is a known issue with <code>xdebug</code> that can affect Magento installations or access to the storefront or Magento Admin after installation.</p>
<p>For details, see <a href="https://support.magento.com/hc/en-us/articles/360034242212">Known issue with xdebug</a>.</p>