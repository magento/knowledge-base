---
title: Site in maintenance mode but available to customers
link: https://support.magento.com/hc/en-us/articles/360031680851-Site-in-maintenance-mode-but-available-to-customers
labels: Magento Commerce Cloud,troubleshooting,maintenance mode
---

<p>This article provides a fix for when maintenance mode is enabled (a Magento Commerce Cloud issue) but the store front is still available for customers.</p>
<h3>Affected products/versions</h3>
<ul>
<li>Magento Commerce Cloud, all versions</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce</p>
<ol>
<li>Enable the maintenance mode for the site.</li>
<li>Navigate to the store front.</li>
</ol>
<p>Expected result</p>
<p>The maintenance page is displayed.</p>
<p>Actual result</p>
<p>Store front pages are displayed as usual. </p>
<h2>Cause</h2>
<p>Pages are still cached so the maintenance page does not show.</p>
<h2>Solution to site visible despite being in maintenance mode</h2>
<ol>
<li>SSH to your environment. </li>
<li>Run the <code>php bin/magento cache:clean</code> command.</li>
</ol>
<h2>Related reading</h2>
<p><a href="https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/install-cli-subcommands-maint.html">Enable or disable maintenance mode</a></p>