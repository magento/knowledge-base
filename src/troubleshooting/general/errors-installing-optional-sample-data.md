---
title: Errors installing optional sample data
labels: Magento Commerce,Magento Commerce Cloud,PHP,data,error,how to,sample,setup,wizard,Adobe Commerce,cloud infrastructure
---

This topic discusses solutions to errors you might encounter installing optional sample data.

## Symptom (file system permissions)

Error in the console log during sample data installation using the Setup Wizard:

```php
Module 'Magento_CatalogRuleSampleData':
[ERROR] exception 'Magento\Framework\Exception\LocalizedException' with message 'Can't create directory /var/www/html/magento2/generated/code/Magento/CatalogRule/Model/.' in /var/www/html/magento2/lib/internal/Magento/Framework/Code/Generator.php:103

(more)

Next exception 'ReflectionException' with message 'Class Magento\CatalogRule\Model\RuleFactory does not exist' in /var/www/html/magento2/lib/internal/Magento/Framework/Code/Reader/ClassReader.php:29

(more)
```

These exceptions result from file system permissions settings.

### Solution

 [Set file system ownership and permissions again](https://devdocs.magento.com/guides/v2.3/config-guide/prod/prod_file-sys-perms.html) as a user with `root` privileges.

## Symptom (production mode)

If you're currently set for [production mode](https://devdocs.magento.com/guides/v2.3/config-guide/bootstrap/magento-modes.html#production-mode), sample data installation fails if you use the [magento sampledata:deploy](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-sample-data-composer.html) command:

```php
PHP Fatal error: Uncaught TypeError: Argument 1 passed to Symfony\Component\Console\Input\ArrayInput::__construct() must be of the type array, object given, called in /<path>/vendor/magento/framework/ObjectManager/Factory/AbstractFactory.php on line 97 and defined in /<path>/vendor/symfony/console/Symfony/Component/Console/Input/ArrayInput.php:37
```

### Solution

Don't install sample data in production mode. Switch to developer mode and clear some `var` directories and try again.

Enter the following commands in the order shown as the [Adobe Commerce file system owner](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html):

```php
cd <magento_root>
bin/magento deploy:mode:set developer
rm -rf generated/code/* generated/metadata/*
bin/magento sampledata:deploy
```

## Symptom (security)

During installation of optional sample data, a message similar to the following displays:

```php
PHP Fatal error: Call to undefined method Magento\Catalog\Model\Resource\Product\Interceptor::getWriteConnection() in /var/www/magento2/app/code/Magento/SampleData/Module/Catalog/Setup/Product/Gallery.php on line 144
```

### Solution

During sample data installation, disable SELinux using a resource such as:

* [crypt.gen.nz](http://www.crypt.gen.nz/selinux/disable_selinux.html#DIS2)
* [CentOS documentation](https://docs.centos.org/en-US/docs/)

## Symptom (develop branch)

Other errors display, such as:

```php
[Magento\Setup\SampleDataException] Error during sample data installation: Class Magento\Sales\Model\Service\OrderFactory does not exist
```

### Solution

There are known issues with using sample data with the Adobe Commerce develop branch. Use the master branch instead. You can switch to the master branch as follows:

```php
cd <magento_root>
git checkout master
git pull origin master
```

## Symptom (max_execution_time)

The installation stops before the sample data installation finishes. An example follows:

```php
(more)

Module 'Magento_CustomerSampleData':
Installing data...
```

Sample data installation does not finish.

This error occurs when the maximum configured execution time of your PHP scripts is exceeded. Because sample data can take a long time to load, you can increase the value during your installation.

### Solution

As a user with `root` privileges, modify `php.ini` to increase the value of `max_execution_time` to 600 or more. (600 seconds is 10 minutes. You can increase the value to whatever you want.) You should change `max_execution_time` back to its previous value after the installation is successful.

If you're not sure where `php.ini` is located, enter the following command:

```php
php --ini
```

The value of `Loaded Configuration File` is the `php.ini` you must modify.

>![info]
>
>We are aware that this article may still contain industry-standard software terms that some may find racist, sexist, or oppressive and which may make the reader feel hurt, traumatized, or unwelcome. Adobe is working to remove these terms from our code, documentation, and user experiences.
