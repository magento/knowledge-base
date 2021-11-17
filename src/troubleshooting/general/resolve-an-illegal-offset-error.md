---
title: Resolve an illegal offset error
labels: Apache,Magento Commerce,Magento Commerce Cloud,OPcache,PHP,error,how to,illegal,offset,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides a solution for when in Adobe Commerce 2.1 or later, you receive a Resolve an illegal offset error when creating a new product in the Commerce Admin.

In Adobe Commerce 2.1 or later, when creating a new product in the Commerce Admin, the following error might display:

```text
Warning: Illegal string offset 'is_in_stock' in [...]/vendor/
magento/module-catalog-inventory/Ui/DataProvider/Product/Form/
Modifier/AdvancedInventory.php on line 87
```

## Detail

Adobe Commerce 2.1 and later use PHP code comments in the `getDocComment` validation call in the [ `getExtensionAttributes` ](https://github.com/magento/magento2/blob/2.3/lib/internal/Magento/Framework/Api/ExtensionAttributesFactory.php#L64-L73) method in `Magento\Framework\Api\ExtensionAttributesFactory.php`.

If you enabled the PHP OPcache (which we recommend), this error displays because by default, the OPcache setting [ `opcache.save_comments` ](http://php.net/manual/en/opcache.configuration.php#ini.opcache.save_comments) is disabled.

## Workaround

To solve the issue, locate your OPcache configuration settings and enable `opcache.save_comments` as follows:

### Step 1: Locate your OPcache configuration

#### To find OPcache configuration settings:

PHP OPcache settings are typically located either in `php.ini` or `opcache.ini`. The location might depend on your operating system and PHP version. The OPcache configuration file might have an `[opcache]` section or settings like `opcache.enable`.

Use the following guidelines to find it:

* Apache web server:<br>

For Ubuntu with Apache, OPcache settings are typically located in `php.ini`.<br>
For CentOS with Apache or nginx, OPcache settings are typically located in `/etc/php.d/opcache.ini`.<br>
If not, use the following command to locate it:    
```bash
    $ sudo find / -name 'opcache.ini'
```    

* nginx web server with PHP-FPM: `/etc/php5/fpm/php.ini`.    

If you have more than one `opcache.ini`, modify all of them.


### Step 2: Enable `opcache.save_comments`

1. Open your OPcache configuration file in a text editor.
1. Locate `opcache.save_comments` and uncomment it, if necessary.
1. Make sure its value is set to `1`.
1. Save your changes and exit the text editor.
1. Restart your web server:    

    * Apache, Ubuntu: `service apache2 restart`
    * Apache, CentOS: `service httpd restart`
    * nginx, Ubuntu, and CentOS: `service nginx restart`

1. Regenerate DI configuration and all missing classes that can be auto-generated:

```bash
    $ bin/magento setup:di:compile`
```    
