---
title: Error after logging in to the Magento Admin
link: https://support.magento.com/hc/en-us/articles/360033771391-Error-after-logging-in-to-the-Magento-Admin
labels: Magento Commerce Cloud,Magento Commerce,error,admin,base_url,slash,2.x.x,how to,base URL
---

This article provides a solution for the issue where you receive an error message saying that the requested URL was not found on this server.

### Details

The requested URL /magento2index.php/admin/admin/dashboard/index/key/0c81957145a968b697c32a846598dc2e/ was not found on this server.

Note the lack of a slash character between magento2 and index.php in the URL.

### Solution

The base URL is not correct. The base URL must:

* Start with http:// or https://

* End with a slash (/)

* Match the case of the web/unsecure/base\_url record in the core\_config\_data database table

Re-run the installation using a valid value.

