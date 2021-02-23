---
title: During installation, PHP date warning
link: https://support.magento.com/hc/en-us/articles/360034610051-During-installation-PHP-date-warning
labels: PHP,date,warning,how to,timezone
---

<p>This article provides a fix for a PHP date warning during installation.</p>
<h2>Details</h2>
<p>During the installation, the following message displays:</p>
<pre><code class="language-text">PHP Warning:  date(): It is not safe to rely on the system's timezone settings. [more]</code></pre>
<h3>Solution</h3>
<p>Set the <a href="https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html">PHP timezone</a> properly.</p>