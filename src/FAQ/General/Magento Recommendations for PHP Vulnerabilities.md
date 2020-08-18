On September 3, Multi-State Information Sharing and Analysis Center (MS-ISAC) has issued an alert related to multiple vulnerabilities that could allow for arbitrary code execution and a recommendation that all sites using PHP should update to the latest PHP version ASAP (<a class="external-link" href="https://www.cisecurity.org/advisory/multiple-vulnerabilities-in-php-could-allow-for-arbitrary-code-execution_2019-087/" rel="nofollow" title="Follow link">full alert is available here</a>).

Read on for impacts and steps for Magento Commerce sites:

__Magento Commerce hosted on our Cloud product__

If you are using Magento Commerce on our cloud infrastructure, please work with your technology team to redeploy Magento Commerce starting at any time\* in order to take advantage of the update. We recommend that Merchants complete this redeployment by September 30 in order to avoid PCI compliance issues that may go into effect as a result of these vulnerabilities at the end of the month.

Additional notes on redeploying your Cloud site for this update:

*   If your site is still using PHP version 7.0, you will need to upgrade to a supported PHP version first before redeploying in order to take advantage of these security updates.
*   For 2.1.x/2.2.x, more information on upgrading PHP can be found [here](https://devdocs.magento.com/guides/v2.2/cloud/project/project-upgrade.html "Follow link").

\*_Previous versions of this article and our messaging stated September 19, but our teams have finished their work ahead of schedule._

__Magento Commerce on all other hosting solutions__

Since Magento Commerce relies on PHP, we recommend that all Merchants using Magento Commerce review necessary updates for PHP with their hosting provider. We also recommend that Merchants complete this review and any updates by September 30 in order to avoid PCI compliance issues that may go into effect as a result of these vulnerabilities at the end of the month.

Please note some additional details for Magento Commerce on other hosting solutions:

*   Magento Commerce versions 2.0 or 1.x that utilize PHP versions prior to 7.1 or above have no official PHP patch available. The recommended path is to upgrade PHP to a supported PHP version.

Per the alert, recommended patches for this vulnerability include:

*   PHP 7.1: <a class="external-link" href="https://www.php.net/ChangeLog-7.php#7.1.32" rel="nofollow" title="Follow link">https://www.php.net/ChangeLog-7.php\#7.1.32</a>
*   PHP 7.2: <a class="external-link" href="https://www.php.net/ChangeLog-7.php#7.2.22" rel="nofollow" title="Follow link">https://www.php.net/ChangeLog-7.php\#7.2.22</a>
*   PHP 7.3: <a class="external-link" href="https://www.php.net/ChangeLog-7.php#7.3.9" rel="nofollow" title="Follow link">https://www.php.net/ChangeLog-7.php\#7.3.9</a>

If you would like more information on PHP and recent releases, you can visit <a class="external-link" href="https://www.php.net/" rel="nofollow" title="Follow link">PHP’s site</a>. And if you have questions or would like more information on best practices for security, please check out our <a class="external-link" href="https://docs.magento.com/m2/ee/user_guide/magento/magento-security-best-practices.html" rel="nofollow" title="Follow link">DevBlog article on Security</a>.