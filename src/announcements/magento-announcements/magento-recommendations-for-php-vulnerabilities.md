---
title: Magento Recommendations for PHP Vulnerabilities
labels: 1.x,2.0,2.1.x,2.2.x,Magento Commerce,Magento Commerce Cloud,PCI,PHP,PHP 7.0,PHP 7.1,PHP 7.2,PHP 7.3,announcements,security
---

On September 3, Multi-State Information Sharing and Analysis Center (MS-ISAC) has issued an alert related to multiple vulnerabilities that could allow for arbitrary code execution and a recommendation that all sites using PHP should update to the latest PHP version ASAP ( [full alert is available here](https://www.cisecurity.org/advisory/multiple-vulnerabilities-in-php-could-allow-for-arbitrary-code-execution_2019-087/) ).

>![warning]
>
>On Magento Cloud please note that service upgrades cannot be pushed to the production environment without 48 business hours ' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) detailing your required service upgrade and stating the time when you want the upgrade process to start.

Read on for impacts and steps for Magento Commerce sites:

 **Magento Commerce hosted on our Cloud product** 

If you are using Magento Commerce on our cloud infrastructure, please work with your technology team to redeploy Magento Commerce starting at any time\* in order to take advantage of the update. We recommend that Merchants complete this redeployment by September 30 in order to avoid PCI compliance issues that may go into effect as a result of these vulnerabilities at the end of the month.

Additional notes on redeploying your Cloud site for this update:

* If your site is still using PHP version 7.0, you will need to upgrade to a supported PHP version first before redeploying in order to take advantage of these security updates.
* For 2.1.x/2.2.x, more information on upgrading PHP can be found [here](https://devdocs.magento.com/guides/v2.2/cloud/project/project-upgrade.html) .

\* *Previous versions of this article and our messaging stated September 19, but our teams have finished their work ahead of schedule.* 

 **Magento Commerce on all other hosting solutions** 

Since Magento Commerce relies on PHP, we recommend that all Merchants using Magento Commerce review necessary updates for PHP with their hosting provider. We also recommend that Merchants complete this review and any updates by September 30 in order to avoid PCI compliance issues that may go into effect as a result of these vulnerabilities at the end of the month.

Please note some additional details for Magento Commerce on other hosting solutions:

* Magento Commerce versions 2.0 or 1.x that utilize PHP versions prior to 7.1 or above have no official PHP patch available. The recommended path is to upgrade PHP to a supported PHP version.

Per the alert, recommended patches for this vulnerability include:

* PHP 7.1: [https://www.php.net/ChangeLog-7.php\#7.1.32](https://www.php.net/ChangeLog-7.php#7.1.32) 
* PHP 7.2: [https://www.php.net/ChangeLog-7.php\#7.2.22](https://www.php.net/ChangeLog-7.php#7.2.22) 
* PHP 7.3: [https://www.php.net/ChangeLog-7.php\#7.3.9](https://www.php.net/ChangeLog-7.php#7.3.9) 

If you would like more information on PHP and recent releases, you can visit [PHP’s site](https://www.php.net/) . And if you have questions or would like more information on best practices for security, please check out our [DevBlog article on Security](https://docs.magento.com/m2/ee/user_guide/magento/magento-security-best-practices.html) .