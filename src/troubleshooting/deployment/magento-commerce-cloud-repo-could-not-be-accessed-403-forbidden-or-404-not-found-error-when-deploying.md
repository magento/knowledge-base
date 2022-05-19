---
title: "Adobe Commerce on cloud repo could not be accessed: 403 Forbidden or 404 Not Found error when deploying"
labels: "2.2.x,2.3.x,Magento Commerce Cloud,URL could not be accessed:HTTP/1.1 403 Forbidden,access,Adobe Commerce,cloud infrastructure,key,authentication,deployment error,how to,update"
---

This article discusses how to resolve the Adobe Commerce on cloud infrastructure failed deployment error similar to the following:

"*The 'https://repo.magento.com/archives/magento/magento-cloud-configuration/magento-magento-cloud-configuration-x.x.x.x.zip' URL could not be accessed: HTTP/1.1 403 Forbidden* ". Or the "*https://repo.magento.com/archives/magento/module-customer-segment/magento-module-customer-segment-102.0.5.0-patch2.zip" file could not be downloaded (HTTP/1.1 404 Not Found)*".

## Affected products and versions

* Adobe Commerce on cloud infrastructure 2.2.x, 2.3.x

## Issue

Error message on deployment indicating the repo URL could not be accessed.

 <span class="wysiwyg-underline">Steps to reproduce</span>

Trigger deployment manually or by performing a merge, push, or synchronization of your environment.

 <span class="wysiwyg-underline">Actual result</span>

Deployment gets stuck. In the deployment error log in the Project UI, an error message similar to the following is displayed:

*"The 'https://repo.magento.com/archives/magento/magento-cloud-configuration/magento-magento-cloud-configuration-x.x.x.x.zip' URL could not be accessed: HTTP/1.1 \[403 Forbidden or 404 Not Found\]"*.

(Click the "Failure" icon in the Project UI to see the log.)

 <span class="wysiwyg-underline">Expected result</span>

Deployment is completed successfully.

## Cause

The error is caused by the authorization keys (access keys) being not valid, not specified or not specified correctly.

Some of the reasons for keys being not valid are:

* You generated the keys using your shared account.
* Your license was previously revoked due to payment issues.

>![info]
>
>If you find this is due to an invoicing or lapsed contract issue, please contact your CSM for guidance to get this resolved. After your license is re-activated, your support and deployment entitlements will be restored.

## Solution

Take the following steps to solve the issue with the authorization keys (see the sections below for more details on each step):

1. Obtain the valid authorization keys (skip this if you are absolutely sure your key is valid).
1. Add the keys value in the `env:COMPOSER_AUTH` variable (or make sure that the correct value is there) and check if the keys are specified consistently in the variable and the `auth.json` file in the project root.
1. Update or delete `auth.json`, to have a single place where the key is configured, if the authorization keys values are not specified or have an other value.

### 1. Obtain valid authorization keys

If you were using the keys created under the shared account, you need to contact the Adobe Commerce license owner who provides you access and request they generate the keys for you.

If your license was previously revoked due to payment issues, and you have resolved those issues and your license was renewed, you need to [generate the new authentication keys](https://devdocs.magento.com/guides/v2.3/install-gde/prereq/connect-auth.html).

### 2. Add the keys value in the env:COMPOSER\_AUTH variable and check if the same keys are specified in auth.json

See the instructions and related information in [Prepare your existing system](https://devdocs.magento.com/cloud/setup/first-time-setup-import-prepare.html#auth-json) and [Add authentication keys](https://devdocs.magento.com/cloud/setup/first-time-setup-import-prepare.html#add-authentication-keys) in our developer documentation.

### 3.  Update or delete auth.json

Following is a step by step description of how to update your authorization keys:

1. Log in to the machine that has your Adobe Commerce on cloud infrastructure SSH keys.
1. Log in to your project: `magento-cloud login`     
1. Create a branch to update the code (in the following example the branch name is `auth` is created from the primary branch):     `magento-cloud environment:branch auth master`     
1. Change to the project root directory.
1. Optional: Delete the `auth.json` if you prefer and continue to [step 9](#step9).
1. Open `auth.json` in a text editor.    
      ```json
              {
                "http-basic":  {          
                    "repo.magento.com": {
                        "username": "<public_key>",  
                        "password": "<private_key>"
                        }       
                      }    
                    }    
      ```    
1. Add the correct authentication keys.
1. Save your changes and exit the text editor.
1. Commit and merge your changes:

    `git add -A`

    `git commit -m "<message>"`

    `git push origin master`     
1. Wait for the project to deploy.
