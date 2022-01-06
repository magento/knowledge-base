---
title: PHP mcrypt extension not installed properly
labels: Magento Commerce,Magento Commerce Cloud,PHP,deprecated,extension,how to,mcrypt,Adobe Commerce,cloud infrastructure,on-premises
---

>![warning]
>
>PLEASE NOTE: The mcrypt library feature was [deprecated from PHP 7.1 and was removed from PHP 7.2](https://www.php.net/manual/en/intro.mcrypt.php).

## Detail

Errors can include the following:

```php
exception 'Exception' with message 'PHP Warning: [PHP](https://glossary.magento.com/php) Startup: Unable to load dynamic [library](https://glossary.magento.com/library) '/usr/lib/php5/20121212/mcrypt.so' - /usr/lib/php5/20121212/mcrypt.so: cannot open shared object file: No such file or directory
```

```php
Installing data fixtures:
/usr/bin/php -f '/Users/username/www/magento/dev/shell/run_data_fixtures.php' -- --bootstrap='MAGE_DIRS[base][path]=/Users/username/www/magento' 2>&1
[ERROR] [exception](https://glossary.magento.com/exception) 'Exception' with message '
Fatal error: Uncaught exception 'Exception' with message 'Module 'Magento_Core' depends on 'mcrypt' PHP [extension](https://glossary.magento.com/extension) that is not loaded.'
```

```php
======================================================================
   The application has thrown an exception!
======================================================================
 Magento\Framework\Exception
 Command returned non-zero exit code:
`/usr/bin/php5 -f '/var/www/magento2/dev/shell/run_data_fixtures.php' -- --bootstrap='MAGE_DIRS[base][path]=/var/www/magento2' 2>&1`
```

## Description

Particularly on developer systems that include a Linux/Apache/MySQL/PHP (LAMP) "stack" that is separate from the operating system, it's possible that mcrypt is either not installed at all or it's installed in the LAMP stack's path but not the operating system's path.

As a result, the Adobe Commerce installer cannot locate the extension and the installation fails.

## Suggestion

Determine if the mcrypt extension is loaded in any of the following ways:

* Set up a [phpinfo.php](http://kb.mediatemple.net/questions/764/How+can+I+create+a+phpinfo.php+page%3F#gs) file in the web server's root directory and examine the output in a web browser.
* Run the following command:    `$ php -r "phpinfo();" | grep mcrypt`

If mcrypt is *not* installed, messages similar to the following display:

```php
PHP Warning:  PHP Startup: Unable to load dynamic library '/usr/lib/php5/20121212/mcrypt.so' - /usr/lib/php5/20121212/mcrypt.so: cannot open shared object file: No such file or directory in Unknown on line 0
```    

In some cases, you might need to install the Adobe Commerce software from the [command line](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html) and specify the full path to the LAMP stack that has mcrypt installed.
