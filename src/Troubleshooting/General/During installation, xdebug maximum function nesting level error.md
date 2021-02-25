---
title: During installation, xdebug maximum function nesting level error
link: https://support.magento.com/hc/en-us/articles/360034238512-During-installation-xdebug-maximum-function-nesting-level-error
labels: Magento Commerce Cloud,Magento Commerce,PHP Fatal Error,xdebug,nesting,level,how to
---

This article provides a fix for the xdebug maximum function nesting level error, during installation.

## Details

During Magento installation, a message similar to the following displays:

<pre><code class="language-text">PHP Fatal error: Maximum function nesting level of '100' reached, aborting! in &lt;path>/ClassLoader.php</code></pre>

 

<p class="warning">It is strongly recommended that you DO NOT USE <code>xdebug</code> on a Production environment!</p>

## Solution

There is a known issue with `` xdebug `` that can affect Magento installations or access to the storefront or Magento Admin after installation.

For details, see [Known issue with xdebug](https://support.magento.com/hc/en-us/articles/360034242212).