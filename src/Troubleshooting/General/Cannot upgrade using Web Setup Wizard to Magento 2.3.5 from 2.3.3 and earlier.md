---
title: Cannot upgrade using Web Setup Wizard to Magento 2.3.5 from 2.3.3 and earlier
link: https://support.magento.com/hc/en-us/articles/360044370051-Cannot-upgrade-using-Web-Setup-Wizard-to-Magento-2-3-5-from-2-3-3-and-earlier
labels: upgrade,Magento Commerce Cloud,Magento Commerce,troubleshooting,known issues,web setup wizard,2.3.5,2.3.1,2.3.0,2.3.3,2.3.2,PHP 7.3
---

<p>This article provides the steps you need to take to upgrade from Magento version 2.3.5 to versions 2.3.3 and earlier using Web Setup Wizard. Not being able to upgrade without those steps is a known Magento 2.3.5 issue. </p>
<h2>Affected products and version</h2>
<ul>
<li>Magento Commerce 2.3.0-2.3.3</li>
<li>Magento Commerce Cloud 2.3.0-2.3.3</li>
</ul>
<h2>Issue</h2>
<p>When upgrading to Magento 2.3.5 from Magento 2.3.0, 2.3.2 or 2.3.3 using the Web Setup Wizard, you might run into the following issue, where the Process extensions status never gets through "Update pending". The following image provides an illustration of how it looks like:<br/>  <br/> <img alt="wsw_issue.png" src="https://support.magento.com/hc/article_attachments/360059757532/wsw_issue.png"/></p>
<p>Refreshing the page does not solve the issue.  </p>
<p>Logs contain information similar to the following:</p>
<p><em>"Warning: require(/magento2ee/vendor/composer/../temando/module-shipping-m2/registration.php): failed to open stream: No such file or directory in /magento2ee/vendor/composer/autoload_real.php on line 73Fatal error: require(): Failed opening required '/magento2ee/vendor/composer/../temando/module-shipping-m2/registration.php' (include_path='/magento2ee/vendor/magento/zendframework1/library:.:/usr/local/Cellar/php@7.3/7.3.18_1/share/php@7.3/pear') in /magento2ee/vendor/composer/autoload_real.php on line 73"</em></p>
<h2>Solution</h2>
<p>Follow the steps below to restore your Magento installation. All commands should be run in the Magento root directory, run the following commands:</p>
<ol>
<li>Restore the <code>composer.json</code> file, by running the following command in the Magento root directory: <code>composer require magento/product-enterprise-edition={current_version}
    --no-update</code>.<br/> where {current_version} is the version before the upgrade. <br/> If you are not sure what the current version is, run the following command to find out:<br/> <code>composer show magento/product-enterprise-edition | grep ^version</code>.</li>
<li>If you have the B2B extension, restore the B2B version by running<br/> <code>composer require magento/extension-b2b={current_version}
    --no-update</code><br/> If you are not sure what the current version is, run the following command to find out:<br/> <code>composer show magento/extension-b2b | grep ^version</code>.</li>
<li>If you tried to upgrade any custom extensions, restore their versions. You can do it by running the command from the previous step, having replaced <code>magento/extension-b2b</code> with the corresponding custom package name. If you are not sure what the current version is, run the following command to find out:<br/> <code>composer show {vendor/extension-package} | grep ^version</code>.</li>
<li>Restore packages by running the <code>composer install</code> command. </li>
<li>Disable maintenance mode by running <code>bin/magento maintenance:disable</code>. </li>
</ol>
<h2>Avoiding the issue</h2>
<p>If you want to upgrade to Magento 2.3.5 from versions 2.3.0-2.3.3, before proceeding to update, run one of the following sets of commands, depending on your PHP version:</p>
<ul>
<li>For PHP version earlier than 7.3:<br/> <code>cd update &amp;&amp; composer update</code>
</li>
<li>For PHP version 7.3:<br/> <code>cd update/ &amp;&amp; composer update --ignore-platform-reqs</code>
</li>
</ul>
<p class="info">Magento strongly recommends using <a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/cli/cli-upgrade.html">CLI upgrade</a> for all versions of Magento. The Web Setup Wizard is being deprecated in Magento 2.3.6 and will be removed in Magento 2.4.0. After it is removed, you must use the command line to <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli.html">install</a> or <a href="https://devdocs.magento.com/guides/v2.3/comp-mgr/cli/cli-upgrade.html">upgrade</a> Magento.</p>