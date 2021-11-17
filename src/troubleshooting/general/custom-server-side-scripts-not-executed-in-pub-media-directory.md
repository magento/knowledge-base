---
title: Custom server-side scripts not executed in pub media directory
labels: 2.1.x,2.2.x,2.3.x,2.4.x,Adobe Commerce,cloud infrastructure,executable,scripts,troubleshooting,Magento
---

This article provides a fix for when custom server-side scripts are not executed if placed in the `./pub/media/` directory of your Adobe Commerce application on cloud infrastructure. This is an expected security limitation, since the `./pub/media/` directory is writable. To make scripts executable, place them in non-writable directories, such as `./app/code/` or `./pub/`.

## Affected versions

* Adobe Commerce on cloud infrastructure: 2.1.x and later, Starter and Pro plans architecture, Wings and Legacy architectures

## Issue: scripts not executed

Custom server-side scripts cannot be executed when initiated.

For example, when the end user (Adobe Commerce shopper) clicks the link that leads to the `\*.php` file with the script (like *domain.com/media/directory/script.php* ), the script is being downloaded instead of executing.

## Cause: incorrect location of script file

The issue occurs when the script files are located in the `./pub/media/` directory of Adobe Commerce application on cloud infrastructure. This is an expected behavior: due to security limitations, files from the writable directories (`./pub/media/`) are never executed.

## Solution: place scripts in non-writable directories

Store the server-side scripts in non-writable directories, such as `./app/code/` or `./pub/`  ``

## Related documentation

* [Cloud for Adobe Commerce > Project structure > Writable directories](https://devdocs.magento.com/guides/v2.3/cloud/project/project-start.html#write-dir) in our developer documentation.
