This article talks about the issue where you get the _"We found conflicting component dependencies"_&nbsp;Composer error message while trying to setup or update Magento on-premise using the Web Setup Wizard.&nbsp;&nbsp;

<h3 id="conflicting-dependencies-trouble-depend-conflict-">Affected products and versions</h3>

*   Magento Commerce 2.2.x, 2.3.x
*   Magento Open Source 2.2.x, 2.3.x

## Issue

An error message similar to the following (actual package names and versions will vary):&nbsp;

<pre><code class="language-terminal"> We found conflicting component dependencies.
 You are trying to update package(s) magento/module-sample-data to 1.0.0-beta
 We've detected conflicts with the following packages:
 - magento/sample-data version 0.74.0-beta15. Please try to update it to one of the following package versions: 0.74.0-beta16, 0.74.0-beta14, 0.74.0-beta13, 0.74.0-beta12, 0.74.0-beta11, 0.74.0-beta10, 0.74.0-beta9, 0.74.0-beta8, 0.74.0-beta7</code></pre>

## Cause

This message is displayed&nbsp;if Composer cannot determine which components to install or update.

## Solution

To resolve component dependency issues, you should be a technical person who thoroughly understands how Composer works.

Typically, component dependency conflicts result from someone manually editing the Magento 2 `` composer.json `` file. It can also be caused by third-party modules that depend on earlier Magento components than the ones you have installed.

In the preceding example, the installed package `` magento/sample-data version 0.74.0-beta15 `` cannot be upgraded to `` 1.0.0-beta ``. However, 0.74.0-beta15 _can_ be upgraded to `` 0.74.0-beta16 `` (or others).

Edit `` composer.json `` to make any of these changes and try the readiness check again.