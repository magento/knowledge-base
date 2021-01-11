---
title: Blank page or redirect loop error when accessing storefront or Magento Admin
link: https://support.magento.com/hc/en-us/articles/360032342371-Blank-page-or-redirect-loop-error-when-accessing-storefront-or-Magento-Admin
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,redirect,blank,Magento Admin
---

This article provides a solution for the issue when you access Magento store front or backend and you get a blank page or redirect loop.

 ### Affected products and versions

 
 * Magento Commerce Cloud, all versions
 * Magento Commerce, all versions
 * Magento Open Source, all versions
 
 Issue
-----

 Steps to reproduce

 Open a store front or Admin page.

 Expected result

 The page opens.

 Actual result

 The page is blank or displays the *"This webpage has a redirect loop"* error message. 

 Cause
-----

 One of most probable reasons for the issue is that Magento is set to redirect from unsecure URL to secure URL, but an unsecure URL is given as the value for the secure URL setting.

 To fix the issue, you need to correct the value of the secure link.

 Solution
--------

 To make sure this is the cause of the problem, take the following steps:

 
 2. Check the web/secure/enable\_upgrade\_insecure, web/secure/use\_in\_adminhtml (if you have the blank/loop redirect issue in Admin) or web/secure/use\_in\_frontend (if you have the blank/loop redirect issue on the store front) value in the 'core\_config\_data' DB table. 
	 * If web/secure/enable\_upgrade\_insecure is set to "1', then Magento is setup to add the response header Content-Security-Policy: upgrade-insecure-requests, thus instructing browsers to use HTTPS, redirecting all queries that come over HTTP to HTTPS, for both Admin and store front.
	 * If web/secure/use\_in\_adminhtml is set to "1", Magento returns HTTPS redirects for all HTTP requests for the Admin pages.
	 * If web/secure/use\_in\_frontend is set to "1", Magento returns HTTPS redirects for all HTTP requests for the store front pages. 
 4. Check the web/secure/base\_url and web/unsecure/base\_url values in the 'core\_config\_data' table. If they both start with http, then you need to correct the "secure" value.
 
 Fixing the issue:

 
 2. Set the value starting with https for web/secure/base\_url.  
 4. For the changes to be applied, clean the configuration cache by running the following command: php <your\_magento\_install\_dir>/bin/magento cache:clean config 
 
  

