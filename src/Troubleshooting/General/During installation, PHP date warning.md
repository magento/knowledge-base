---
title: During installation, PHP date warning
labels: PHP,date,warning,how to,timezone
---

This article provides a fix for a PHP date warning during installation.

## Details

During the installation, the following message displays:

<pre><code class="language-text">PHP Warning:  date(): It is not safe to rely on the system's timezone settings. [more]</code></pre>

### Solution

Set the [PHP timezone](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/php-settings.html) properly.