---
title: During installation, fatal PDO error displays
labels: Magento Commerce,Magento Commerce Cloud,PDO,PHP,extensions,fatal error,how to,installation,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a fix for an exception fatal PDO error during installation.

### Issue

```php
PHP Fatal error:  Class 'PDO' not found in /var/www/html/magento2/setup/module/Magento/Setup/src/Module/Setup/ConnectionFactory.php on line 44
```

### Solution

Make sure you install all the [required PHP extensions](https://devdocs.magento.com/guides/v2.4/install-gde/prereq/php-settings.html).
