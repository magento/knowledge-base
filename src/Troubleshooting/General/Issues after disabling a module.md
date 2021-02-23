---
title: Issues after disabling a module
link: https://support.magento.com/hc/en-us/articles/360028721172-Issues-after-disabling-a-module
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,module disable,2.1.x
---

<p>This article provides a solution for module functionality issues after having disabled module output in the Magento Admin.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud, Magento Commerce</li>
<li>2.1.X or earlier</li>
</ul>
<h2>Issue</h2>
<p>Having disabled module output in the Magneto Admin, under Stores &gt; Settings &gt; Configuration &gt; ADVANCED &gt; Advanced, you might start seeing issues related to the module functionality.</p>
<h2>Cause</h2>
<p>Disabling a module output under Stores &gt; Settings &gt; Configuration &gt; ADVANCED &gt; Advanced disables only the output (HTML, JS), but it does not disable the functionality of this module.</p>
<h2>Solution</h2>
<p>If you need to disable module functionality, disable the module as described in the <a href="https://devdocs.magento.com/guides/v2.1/install-gde/install/cli/install-cli-subcommands-enable.html">Enable or disable modules</a> article.</p>
<p>The module output disabling functionality was removed starting from version 2.2.0.</p>