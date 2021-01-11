---
title: PWA Studio: Venia GraphQL queries to Magento produce validation errors
link: https://support.magento.com/hc/en-us/articles/360044083991-PWA-Studio-Venia-GraphQL-queries-to-Magento-produce-validation-errors
labels: Magento Commerce Cloud,Magento Commerce,PWA,validation,errors,PWA Studio,Venia,2.3.x,GraphQL queries,2.2.x,how to,compatibility report
---

This article provides recommendations on how to solve the issue where Venia storefront GraphQL queries to Magento instance produce validation errors. 

 Affected products and versions
------------------------------

 
 * Magento Commerce 2.2.x, 2.3.x
 * Magento Commerce Cloud 2.2.x, 2.3.x
 * Magento PWA Studio project
 
 Issue
-----

 Venia GraphQL queries to Magento Commerce or Magento Commerce Cloud produce validation errors.

 Cause
-----

 One of the reasons causing the problem, might be Venia and its GraphQL queries being out of sync with the schema of the connected Magento instance. 

 Solution
--------

 To test whether your queries are up to date, run the following command in the project root:

 yarn run validate-queries This will show a compatibility report. If you have incompatibilities, you need to upgrade your PWA Studio or Magento instance. Check the [Magento compatibility matrix](https://pwastudio.io/technologies/magento-compatibility/) to see what exactly versions you need. 

 Reference the following documentation for instructions on how to upgrade:

 
 * For PWA Studio upgrades, search for the "Upgrading from a previous version" section of the [PWA release notes](https://github.com/magento/pwa-studio/releases/) for the version that you need to upgrade to.
 * [Upgrade Magento Commerce Cloud version](https://devdocs.magento.com/cloud/project/project-upgrade.html)
 *  [Upgrade Magento Commerce (installed using "composer create-project" or archive](https://devdocs.magento.com/guides/v2.3/comp-mgr/cli/cli-upgrade.html)) 
 *  [Upgrade Magento Commerce (installed by cloning Magento repo)](https://devdocs.magento.com/guides/v2.3/install-gde/install/cli/dev_update-magento.html) 
 
 Related reading
---------------

 
 * [PWA Studio: Webpack hangs before beginning compilation](https://support.magento.com/hc/en-us/articles/360039475011)
 * [PWA Studio: Validation errors when running developer mode](https://support.magento.com/hc/en-us/articles/360036928811)
 * [PWA Studio: Browser displays “Cannot proxy to“ error](https://support.magento.com/hc/en-us/articles/360036581232)
 * [Configure NPM to be able to use PWA Studio](https://support.magento.com/hc/en-us/articles/360022507012)
 * [Magento PWA Documentation](https://magento.github.io/pwa-studio/)
 
