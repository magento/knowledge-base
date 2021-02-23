---
title: PHP version readiness check issues
link: https://support.magento.com/hc/en-us/articles/360033546411-PHP-version-readiness-check-issues
labels: Magento Commerce Cloud,Magento Commerce,PHP version,web setup wizard,2.3.x,2.2.x,how to
---

<p>This article talks about the solutions for the PHP version issues you might face when installing/upgrading Magento on-premise using the Web Setup Wizard. </p>
<p class="warning">On Magento Cloud please note that service upgrades cannot be pushed to the production environment without 48 business hours' notice to our infrastructure team. This is required as we need to ensure that we have an infrastructure support engineer available to update your configuration within a desired timeframe with minimal downtime to your production environment. So 48 hours prior to when your changes need to be on production <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a> detailing your required service upgrade and stating the time when you want the upgrade process to start.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>Magento Open Source 2.2.x, 2.3.x</li>
</ul>
<h2>Unsupported PHP version</h2>
<h3>Issue</h3>
<p>The check fails because you are using an unsupported PHP version.</p>
<h3>Solution</h3>
<p>To solve this issue, use one of the supported versions listed in our <a href="https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html">2.3.x System Requirements</a> and <a href="https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements.html">2.2.x System Requirements</a>.</p>
<h2>PHP readiness check does not display</h2>
<h3>Issue</h3>
<p>The PHP readiness check doesn't display the PHP version as the following figure shows. <img alt="upgr-tshoot-no-cron.png" src="https://support.magento.com/hc/article_attachments/360038012132/upgr-tshoot-no-cron.png"/></p>
<h3>Solution</h3>
<p>This is a symptom of incorrect cron job setup. For more information, see <a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/post-install-config.html#post-install-cron">Set up cron jobs</a>.</p>
<h2>Incorrect PHP version</h2>
<h3>Issue</h3>
<p>The check reports the incorrect PHP version.<br/> Typically, this happens only to advanced users who have multiple PHP versions installed. In some cases, the readiness check fails; in other cases, it might pass.</p>
<p>If the PHP version reported by the readiness check is incorrect, it's the result of a mismatch of PHP versions between the PHP CLI and the web server plug-in. Magento requires you to use <em>one version</em> of PHP for both the CLI (which runs cron) and the web server (which runs the Magento Admin, Component Manager, and System Upgrade).</p>
<h3>Solution</h3>
<p>We assume that if you have this issue, you're an advanced user who has likely installed multiple versions of PHP on your system.</p>
<p>To resolve the issue, try the following:</p>
<ul>
<li>Restart your web server or php-fm.</li>
<li>Check the <code>$PATH</code> environment variable for multiple paths to PHP.</li>
<li>Use the <code>which php</code> command to locate the first PHP executable in your path; if it's not correct, remove it or create a symlink to the correct PHP version.</li>
<li>Use a <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/optional.html#install-optional-phpinfo"><code>phpinfo.php</code></a> page to collect more information.</li>
<li>
<p>Make sure you're running a supported PHP version according to our system requirements:</p>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.3/install-gde/system-requirements.html">Magento 2.3.x System Requirements</a></li>
<li><a href="https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements.html">Magento 2.2.x System Requirements</a></li>
</ul>
</li>
<li>
<p>Set the same PHP settings for both the PHP command line and the PHP web server plug-in as discussed in <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-centos-ubuntu.html">PHP configuration options</a>.</p>
</li>
</ul>