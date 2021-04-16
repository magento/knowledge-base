---
title: Component dependency readiness check issues
labels: Magento Commerce,Magento Commerce Cloud,check,conflict,dependency,how to,readiness
---

This article provides solutions for component dependency conflicts.

## Resolve component dependency conflicts

We suggest you try the following solutions in the order shown:

1. [Conflicting dependencies](#trouble-depend-conflict)
1. [File system permissions issues](#trouble-depend-permission)
1. [The Component Dependency Check status never changes](#trouble-depend-state)

### Conflicting dependencies

The message `` We found conflicting component dependencies `` displays if Composer cannot determine which components to install or update. To resolve component dependency issues, you should be a technical person who thoroughly understands how Composer works.

Following is a sample failure message:

<pre><code class="language-terminal"> We found conflicting component dependencies.
 You are trying to update package(s) magento/module-sample-data to 1.0.0-beta
 We've detected conflicts with the following packages:
 - magento/sample-data version 0.74.0-beta1. Please try to update it to one of the following package versions: 0.74.0-beta16, 0.74.0-beta14, 0.74.0-beta13, 0.74.0-beta12, 0.74.0-beta11, 0.74.0-beta10, 0.74.0-beta9, 0.74.0-beta8, 0.74.0-beta7</code></pre>

<p class="info">The message you see will likely be different.</p>

Refer to [Conflicting component dependencies for a solution](https://support.magento.com/hc/en-us/articles/360033204651).

## File system permissions issues

If the Magento file system owner doesn't have permissions to write to directories on the Magento file system, a message similar to the following displays:

<pre><code class="language-terminal">file_put_contents(/var/www/html/magento2/var/composer_home/cache/repo/https---
packagist.org/provider-doctrine$instantiator.json): failed to open stream: Permission denied</code></pre>

Make sure you set file system permissions as discussed in DevDocs' [Overview of ownership and permissions](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/file-sys-perms-over.html).

## The Component Dependency Check status never changes

In some cases, the status of the Component Dependency Check doesn't change, even after you try to correct issues. In that case, you can either delete or rename files named `` &lt;magento_root>/var/.update_cronjob_status `` and `` &lt;magento_root>/var/.setup_cronjob_status `` and try running the Component Manager again.

Renaming or removing these files forces the Component Manager to run the checks again.