This article talks about the solutions for the PHP version issues you might face when installing/upgrading Magento on-premise using the Web Setup Wizard.&nbsp;

### Affected products and versions

*   Magento Commerce 2.2.x, 2.3.x
*   Magento Open Source 2.2.x, 2.3.x

## Unsupported PHP version

### Issue

The check fails because you are using an unsupported PHP version.

### Solution

To solve this issue, use one of the supported versions listed in our <a href="https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html" target="_self">2.3.x System Requirements</a>&nbsp;and <a href="https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements.html" target="_self">2.2.x System Requirements</a>.

## PHP readiness check does not display

### Issue

The PHP readiness check doesn't display the PHP version as the following figure shows. ![upgr-tshoot-no-cron.png](https://support.magento.com/hc/article_attachments/360038012132/upgr-tshoot-no-cron.png)

### Solution

This is a symptom of incorrect cron job setup. For more information, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron" target="_self">Set up cron jobs</a>.

## Incorrect PHP version

### Issue

The check reports the incorrect PHP version.  
 Typically, this happens only to advanced users who have multiple PHP versions installed. In some cases, the readiness check fails; in other cases, it might pass.

If the PHP version reported by the readiness check is incorrect, it's the result of a mismatch of PHP versions between the PHP CLI and the web server plug-in. Magento requires you to use _one version_ of PHP for both the CLI (which runs cron) and the web server (which runs the Magento Admin, Component Manager, and System Upgrade).

### Solution

We assume that if you have this issue, you're an advanced user who has likely installed multiple versions of PHP on your system.

To resolve the issue, try the following:

*   Restart your web server or php-fm.
*   Check the `` $PATH `` environment variable for multiple paths to PHP.
*   Use the `` which php `` command to locate the first PHP executable in your path; if it's not correct, remove it or create a symlink to the correct PHP version.
*   Use a <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo" target="_self">`` phpinfo.php ``</a>&nbsp;page to collect more information.
*   
    
    Make sure you're running a supported PHP version according to our system requirements:
    
    
    
    *   <a href="https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html" target="_self">Magento 2.3.x System Requirements</a>
    *   <a href="https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements.html" target="_self">Magento 2.2.x System Requirements</a>
    
    
    
*   
    
    Set the same PHP settings for both the PHP command line and the PHP web server plug-in as discussed in <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-centos-ubuntu.html" target="_self">PHP configuration options</a>.
    
    