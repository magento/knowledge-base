---
title: Blank page or redirect loop error when accessing storefront or Commerce Admin
labels: Magento Admin,Magento Commerce,Magento Commerce Cloud,blank,redirect,troubleshooting,Commerce Admin,Adobe Commerce,cloud infrastructure,on-premises,Magento Open Source
---

This article provides a solution for the issue when you access Adobe Commerce storefront or backend and you get a blank page or redirect loop.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all versions
* Adobe Commerce on-premises, all versions
* Magento Open Source, all versions

## Issue

 <span class="wysiwyg-underline">Steps to reproduce</span>

Open a storefront or Admin page.

 <span class="wysiwyg-underline">Expected result</span>

The page opens.

 <span class="wysiwyg-underline">Actual result</span>

The page is blank or displays the *"This webpage has a redirect loop"* error message.

## Cause

One of most probable reasons for the issue is that Adobe Commerce is set to redirect from unsecure URL to secure URL, but an unsecure URL is given as the value for the secure URL setting.

To fix the issue, you need to correct the value of the secure link.

## Solution

To make sure this is the cause of the problem, take the following steps:

1. Check the `web/secure/enable_upgrade_insecure` , `web/secure/use_in_adminhtml` (if you have the blank/loop redirect issue in Admin) or `web/secure/use_in_frontend` (if you have the blank/loop redirect issue on the store front) value in the `'core_config_data'` DB table.
    * If `web/secure/enable_upgrade_insecure` is set to "1", then Adobe Commerce is set up to add the response header `Content-Security-Policy: upgrade-insecure-requests`, thus instructing browsers to use HTTPS, redirecting all queries that come over HTTP
    to HTTPS, for both Admin and storefront.
    * If `web/secure/use_in_adminhtml` is set to "1", Adobe Commerce returns HTTPS redirects for all HTTP requests for the Admin pages.
    * If `web/secure/use_in_frontend` is set to "1", Adobe Commerce returns HTTPS redirects for all HTTP requests for the store front pages.
1. Check the `web/secure/base_url` and `web/unsecure/base_url` values in the `'core_config_data'` table. If they both start with    `http`, then you need to correct the "secure" value.

Fixing the issue:

1. Set the value starting with `https` for `web/secure/base_url.`
1. For the changes to be applied, clean the configuration cache by running the following command:
    ```bash
    php <your_magento_install_dir>/bin/magento cache:clean config
    ```
