---
title: Known issues that affect installation
link: https://support.magento.com/hc/en-us/articles/360034242212-Known-issues-that-affect-installation
labels: PHP,exception,fatal error,xdebug,extension,how to,Apache
---

This article provides a solution for when you experience an exception error when you use the optional PHP extension `` xdebug ``.

* During installation
* Accessing either the Magento Admin or storefront after a successful installation

Sample exception:

<pre><code class="language-php">Fatal error: Maximum function nesting level of '100' reached, aborting!</code></pre>

To resolve this issue, you can:

* Disable the `` xdebug `` extension.
* Set the value of `` xdebug.max_nesting_level `` to a value of 200 or more. For more information, see [xdebug documentation](http://xdebug.org/docs/basic#max_nesting_level).

After you change the configuration of or disable `` xdebug ``, restart Apache:

* CentOS: `` sudo service httpd restart ``
* Ubuntu: `` sudo service apache2 restart ``