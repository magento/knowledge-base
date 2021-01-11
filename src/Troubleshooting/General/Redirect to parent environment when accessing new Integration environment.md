---
title: Redirect to parent environment when accessing new Integration environment 
link: https://support.magento.com/hc/en-us/articles/360018610112-Redirect-to-parent-environment-when-accessing-new-Integration-environment-
labels: Magento Commerce Cloud,troubleshooting,redirect,base_url,2.x.x
---

This article provides troubleshooting instructions for the Magento Cloud issue where trying to access the newly created Integration environment takes you to the parent environment instead.

 To fix this, you need to correct the base\_url value in the database and make sure that the UPDATE\_URLS variable value is set to true. Find more details in the sections below.

 Affected versions and editions:

 
 * Magento Commerce Cloud 2.X.X
 
 Issue
-----

 Steps to reproduce:

 
 2. Clone the existing Integration branch.
 4. Click the URL for accessing the new environment.
 
 Expected result:

 You get to the newly created environment.

 Actual result:

 You get redirected to the environment on the parent branch.

 Solution
--------

 To fix the issue, you need to correct the base\_url values (secure and unsecure) in the custom environment database and set the UPDATE\_URL variable in the .magento.env.yaml file.

 ### Correct base\_url values in database

 Changes in the database can be done either manually or using the Magento CLI, if you are on version 2.2.0 and later.

 #### Correct the values in the DB manually

 
 2. Connect to the database 
 4. Run the following commands UPDATE core\_config\_data SET value = %your\_new\_environment\_unsecure\_url% WHERE path="web/unsecure/base\_url" update core\_config\_data set value = %your\_new\_environment\_secure\_url% where path="web/secure/base\_url" 
 
 #### Correct the database using Magento CLI (available for versions 2.2.X)

 
 2. Log in as, or switch to, the [Magento file system owner.](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/apache-user.html) 
 4. Run the following commands: php <your\_magento\_install\_dir>/bin/magento config:set web/unsecure/base\_url http://example.com php <your\_magento\_install\_dir>/bin/magento config:set web/secure/base\_url https://example.com 
 
 ### Set the UPDATE\_URLS variable

 In your local codebase, in the .magento.env.yaml file set:

 stage: deploy: UPDATE\_URLS: true ###  Clear configuration cache

 For the changes to be applied, clean the configuration cache by running the following command:

 php <your\_magento\_install\_dir>/bin/magento cache:clean config Related documentation:
----------------------

 [Deploy variables](https://devdocs.magento.com/guides/v2.2/cloud/env/variables-deploy.html#update_urls)

