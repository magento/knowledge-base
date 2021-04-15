---
title: Missing or altered configuration file
labels: Cloud,configuration
---

This article talks about how to solve the issue where your configuration files got altered or are missing. 

### Affected products and versions

* Magento Commerce Cloud, all versions

## Issue

Configuration files `` config.php `` and/or `` env.php `` were changed wrongly or are missing.

## Solution

The deployment process creates a backup file for each configuration file:

* `` app/etc/config.php.bak ``—contains system-specific settings and is auto-generated during build if it does not exist
* `` app/etc/env.php.bak ``—contains sensitive configuration data

You can restore them using the ECE tools `` backup:restore `` command.

<p class="info">The BAK files are a product of the deployment process. If you manually change a configuration file after the deployment, your changes are not reflected in the existing BAK files.</p>

To restore the configuration files:

1. Log in to your remote repository using [SSH](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh).
1. List the available backup files.
    
    
    
    <pre><code class="language-shell">./vendor/bin/ece-tools backup:list</code></pre>
    
    
    
    <pre><code class="language-shell">The list of backup files:
app/etc/env.php
app/etc/config.php</code></pre>
    
    
1. Restore the configuration files.
    
    
    
    <pre><code class="language-shell">./vendor/bin/ece-tools backup:restore</code></pre>
    
    
    
    You receive a list of the existing configuration files affected by the restore.
    
    
    
    <pre><code class="language-shell">app/etc/env.php file exists! If you want to rewrite existed files use --force
app/etc/config.php file exists! If you want to rewrite existed files use --force</code></pre>
    
    
1. Use the <code class="language-shell">--force</code> option to overwrite all files.
    
    
    
    <pre><code class="language-shell">./vendor/bin/ece-tools backup:restore --force</code></pre>
    
    
    
    <pre><code class="language-shell">Command backup:restore with option --force will rewrite your existed files. Do you want to continue [y/N]?y
Backup file app/etc/env.php was restored.
Backup file app/etc/config.php was restored.</code></pre>
    
    
1. Optionally, you can restore a specific configuration file.
    
    
    
    <pre><code class="language-shell">./vendor/bin/ece-tools backup:restore --force --file=app/etc/config.php</code></pre>
    
    
    
    <pre><code class="language-shell">Command backup:restore with option --force will rewrite your existed files. Do you want to continue [y/N]?y
Backup file app/etc/config.php was restored.</code></pre>
    
    