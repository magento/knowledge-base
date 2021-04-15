---
title: During installation, fatal PDO error displays
labels: Magento Commerce Cloud,Magento Commerce,installation,PHP,PDO,fatal error,extensions,how to
---

This article provides a fix for an exception fatal PDO error during installation.

### Issue

<pre><code class="language-php">PHP Fatal error:  Class 'PDO' not found in /var/www/html/magento2/setup/module/Magento/Setup/src/Module/Setup/ConnectionFactory.php on line 44</code></pre>

### Solution

Make sure you installed all [required PHP extensions](https://devdocs.magento.com/guides/v2.4/install-gde/prereq/php-settings.html).