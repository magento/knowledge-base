---
title: PHP version readiness check issues
labels: 2.2.x,2.3.x,Magento Commerce,Magento Commerce Cloud,PHP version,how to,web setup wizard
---

This article talks about the solutions for the PHP version issues you might face when installing/upgrading Magento on-premise using the Web Setup Wizard. 

<p class="warning">On Magento Cloud please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> detailing your required service upgrade and stating the time when you want the upgrade process to start.</p>

### Affected products and versions

* Magento Commerce 2.2.x, 2.3.x
* Magento Open Source 2.2.x, 2.3.x

## Unsupported PHP version

### Issue

The check fails because you are using an unsupported PHP version.

### Solution

To solve this issue, use one of the supported versions listed in our [2.3.x System Requirements](https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html) and [2.2.x System Requirements](https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements.html).

## PHP readiness check does not display

### Issue

The PHP readiness check doesn't display the PHP version as the following figure shows. ![upgr-tshoot-no-cron.png](https://support.magento.com/hc/article_attachments/360038012132/upgr-tshoot-no-cron.png)

### Solution

This is a symptom of incorrect cron job setup. For more information, see [Set up cron jobs](https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron).

## Incorrect PHP version

### Issue

The check reports the incorrect PHP version.  
 Typically, this happens only to advanced users who have multiple PHP versions installed. In some cases, the readiness check fails; in other cases, it might pass.

If the PHP version reported by the readiness check is incorrect, it's the result of a mismatch of PHP versions between the PHP CLI and the web server plug-in. Magento requires you to use _one version_ of PHP for both the CLI (which runs cron) and the web server (which runs the Magento Admin, Component Manager, and System Upgrade).

### Solution

We assume that if you have this issue, you're an advanced user who has likely installed multiple versions of PHP on your system.

To resolve the issue, try the following:

* Restart your web server or php-fm.
* Check the `` $PATH `` environment variable for multiple paths to PHP.
* Use the `` which php `` command to locate the first PHP executable in your path; if it's not correct, remove it or create a symlink to the correct PHP version.
* Use a [`` phpinfo.php ``](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo) page to collect more information.
* Make sure you're running a supported PHP version according to our system requirements:
    
    
    
    * [Magento 2.3.x System Requirements](https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html)
    * [Magento 2.2.x System Requirements](https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements.html)
    
    
    
* Set the same PHP settings for both the PHP command line and the PHP web server plug-in as discussed in [PHP configuration options](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-centos-ubuntu.html).
    
    