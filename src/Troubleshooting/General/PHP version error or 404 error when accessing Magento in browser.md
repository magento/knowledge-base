---
title: PHP version error or 404 error when accessing Magento in browser
labels: Magento Commerce,troubleshooting,2.3.5-p1,2.3.1,2.3.4-p2,2.3.4,2.3.0,2.3.3,2.3.2,2.3.6,2.3.5-p2,2.3.3-p1,2.3.2-p2
---

This article provides solutions for the issues where you cannot access your Magento instance in a web browser and get 404 error or "unsupported PHP version" error.

### Affected products and versions:

* Magento Commerce 2.3.x

## Issue: not supported PHP version

The following message displays when you try to access Magento storefront or Admin:

<code class="bash">Magento supports PHP 7.1.3 or later. Please read Magento System Requirements.</code>

### Solution

Try the following:

* Upgrade PHP to version 7.1. For more information see [Magento 2.3 technology stack requirements](https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html#php) in Magento Developer Documentation. 
* Restart Apache, since it might not be using the same PHP version as is on the file system. 
    
    To restart Apache, use the following commands:
    
    
    
    * Ubuntu: `` service apache2 restart ``
    * CentOS: `` service httpd restart ``
    
    
    

## Issue: error 404

A 404 (Not Found) error displays when you try to access Magento storefront or Admin.

### Solution

Try the following:

* Make sure [Apache server rewrites](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/apache.html) are enabled. If Apache server rewrites are set incorrectly, static files aren't served from the correct location.
* There might be an issue with the base URL you entered during the installation. You specify the base URL as the value of `` --base-url= `` when installing Magento from the command line or as the value of the Your Store Address field on the Web Configuration page of the web installer.
    
    The base URL _must_ start with the scheme (such as `` http:// ``) and end with a trailing slash (/). Run the installer again with a valid value and try accessing Magento afterward.
    
    