---
title: Custom server-side scripts not executed in pub media directory
labels: Magento Commerce Cloud,troubleshooting,executable,scripts,2.3.x,2.2.x,2.1.x,2.4.x
---

This article provides a fix for when custom server-side scripts are not executed if placed in the `` ./pub/media/ `` directory of your Magento Commerce Cloud application. This is an expected security limitation, since the `` ./pub/media/ `` directory is writable. To make scripts executable, place them in non-writable directories of your Magento Cloud app, such as `` ./app/code/ `` or `` ./pub/ ``.

## Affected versions

* Magento Commerce Cloud: 2.1.X and later, Starter and Pro plans, Wings and Legacy architectures

## Issue: scripts not executed

Custom server-side scripts cannot be executed when initiated.

For example, when the end user (Magento shopper) clicks the link that leads to the \*.php file with the script (like _domain.com/media/directory/script.php_), the script is being downloaded instead of executing.

## Cause: incorrect location of script file

The issue occurs when the script files are located in the `` ./pub/media/ `` directory of a Magento Commerce Cloud application. This is an expected behavior: due to security limitations, files from the writable directories (`` ./pub/media/ ``) are never executed.

## Solution: place scripts in non-writable directories

Store the server-side scripts in non-writable directories, such as `` ./app/code/ `` or `` ./pub/ ````  ``

## Related documentation

* [Writable directories in Magento Commerce Cloud](https://devdocs.magento.com/guides/v2.3/cloud/project/project-start.html#write-dir) (DevDocs)