---
title: Login redirect when trying to login to Commerce Admin
labels: Magento Commerce,Magento Commerce Cloud,admin,login,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

This article gives the possible solutions for the Commerce Admin login issue, where you are redirected back to the login form when trying to log in to the Admin, and no error message is displayed. These include correcting the server timezone settings and clearing the cookies settings in Adobe Commerce.

## Affected editions and versions:

All Adobe Commerce versions and editions.

## Issue

<ins>Steps to reproduce</ins>:

1. Go to your Commerce Admin page.
1. Enter your credentials and click Sign in.

<ins>Expected results</ins>:

You get logged in to the Commerce Admin.

<ins>Actual results</ins>:

You are redirected back to the login form with no error messages.

## Cause

There are a couple of possible reasons for the issue:

* Incorrect timezone set on browser level (which leads to the admin session being considered expired even if its actual lifetime hasn't yet expired).
* Incorrect cookies settings, which leads to the established session not being used by Adobe Commerce.

See the next paragraphs for solutions in each case.

## Solutions

### Admin session lifetime issue

Try to use a different browser and increase the admin session lifetime if it is less than one hour.

To increase the admin session lifetime, take the following steps:

1. Create a database backup.
1. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin), or access the DB manually from the command line to run the following SQL query:    

    ```sql
    UPDATE core_config_data SET value = 7200 WHERE path = 'admin/security/session_lifetime';
    ```    
1. Clean the configuration cache by running the following command:   

    ```bash
    php <your_magento_install_dir>/bin/magento cache:clean config
    ```    

### Incorrect cookies settings

To check the cookies settings values and clear them, take the following steps:

1. Create a database backup.
1. Use a database tool such as [phpMyAdmin](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/optional.html#install-optional-phpmyadmin), or access the DB manually from the command line to run the following SQL query:    

    ```sql
    SELECT * FROM core_config_data WHERE (path = "web/cookie/cookie_domain" OR path = "web/cookie/cookie_path");
    ```

1. If the values' responses are not empty, set them to NULL by running:  

    ```sql
    UPDATE core_config_data SET value = NULL WHERE (path = "web/cookie/cookie_domain" OR path = "web/cookie/cookie_path");
    ```  

1. Clean the configuration cache by running the following command:

    ```bash
    php <your_magento_install_dir>/bin/magento cache:clean config
    ```    

## Related articles

* [Redirect back to the Admin login form with "Your account is temporarily disabled" error](https://support.magento.com/hc/en-us/articles/360028606831) in our support knowledge base.
* [Redirect back to the Admin login form with "Your current session has been expired" error](https://support.magento.com/hc/en-us/articles/360028441671) in our support knowledge base.
