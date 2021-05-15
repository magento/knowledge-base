---
title: Known issues that affect installation
labels: Apache,PHP,exception,extension,fatal error,how to,xdebug
---

This article provides a solution for when you experience an exception error when you use the optional PHP extension `xdebug` .

* During installation
* Accessing either the Magento Admin or storefront after a successful installation

Sample exception:

```php
Fatal error: Maximum function nesting level of '100' reached, aborting!
```

To resolve this issue, you can:

* Disable the `xdebug` extension.
* Set the value of `xdebug.max_nesting_level` to a value of 200 or more. For more information, see [xdebug documentation](http://xdebug.org/docs/basic#max_nesting_level) .

After you change the configuration of or disable `xdebug` , restart Apache:

* CentOS: `sudo service httpd restart` 
* Ubuntu: `sudo service apache2 restart` 

