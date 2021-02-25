---
title: Deployment issues relating to account permissions and access keys
link: https://support.magento.com/hc/en-us/articles/360031380671-Deployment-issues-relating-to-account-permissions-and-access-keys
labels: Magento Commerce Cloud,deployment,troubleshooting,access key
---

This article provides a solution for issues with deploying Magento Cloud caused by access key ownership conflict.

### Affected products and versions

* Magento Commerce Cloud, all supported versions

## Issue

Steps to reproduce

Prerequisites: The Cloud license is associated with Contact A (email address: _<u>first@e.mail</u>_)

1. Contact A created Magento Commerce access keys on their account (Key X) and installs it on the Cloud.
1. Contact B (email address: _<u>second@e.mail</u>_) purchased an extension using his account and created the access keys for installing the extension (Key Y).
1. Contact A then left the company, and the license (ownership) was then transferred to Contact B.
1. System integrator tries to install the extension on the Cloud environment using Key X.

Expected result

Extension is successfully installed.

Actual result

Extension is not installed, because deployment fails.

## Cause

Both keys were are seen to be assigned to the contact role, which causes a conflict.

## Solution

If a deployment failed after a change was made to the Primary Contact on the account (with both the original account and the new account each having their own access keys), and the keys have been transferred from the original account to the new account, you need to disable the keys from the original account. In the terms of the example above, the key X should be disabled.

### How to disable the access key

If you do not have access to the [Magento Marketplace](https://marketplace.magento.com/) account associated with the old key, [contact Magento Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) to have the key disabled.

If you have access to the Marketplace account associated with the old key, take the following steps to disable the key: 

1. Log in to the [Magento Marketplace](https://marketplace.magento.com/) using the credentials from the old account.
1. Click the account name in the top-right of the page and select My Profile.
    
    
1. Click Access Keys in the Marketplace tab.  
      
    
    
    ![magento_products_access_keys_2.4.1.png](https://support.magento.com/hc/article_attachments/360086270131/magento_products_access_keys_2.4.1.png)  
      
    
1. Click Disable next to the access key. 

## Related reading

* [Get your authentication keys](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/connect-auth.html)

 