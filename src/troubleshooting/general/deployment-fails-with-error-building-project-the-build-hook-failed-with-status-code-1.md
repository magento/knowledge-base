---
title: 'Deployment fails with "Error building project: The build hook failed with status code 1"'
labels: Magento Commerce Cloud,build,deployment,error building,troubleshooting,Adobe Commerce,cloud infrastructure,Pro,Starter
---

This article talks about the causes and solutions for the Adobe Commerce on cloud infrastructure issue, where the build phase of the deployment process fails, and the error message is summarized with: *"Error building project: The build hook failed with status code 1"*.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all versions

## Issue

<ins>Steps to reproduce</ins>:

Trigger the deployment manually or by performing a merge, push, or synchronization of your environment.

<ins>Expected result</ins>:

Deployment is completed successfully.

<ins>Actual result</ins>:

1. The building phase fails, and the whole deployment process gets stuck.
1. In the deployment error log, the error message ends with: *"Error building project: The build hook failed with status code 1. Aborted build".*

## Cause

There are multiple reasons why environment building fails. Usually, in the deployment log, you will see a long error message, where the first part would be more specific regarding the reason, and the conclusion would be *"Error building project: The build hook failed with status code 1. Aborted build".*

Looking closer at the first problem-specific part will help you to identify the issue. Here are the most common ones, and the next section provides solutions for them:

* There is no available storage space.
* Incorrect ECE-Tools configuration.
* The patch you are trying to apply is incompatible with your Adobe Commerce version or has conflicts with other patches applied or your customizations.
* Problems with custom modules code are preventing from building successfully.

## Solution

* Check to ensure that there is enough storage. For information on how to check available space, see the [Check disk space on cloud environment using CLI](https://support.magento.com/hc/en-us/articles/360005932713) article. You can consider cleaning the log directories and/or increasing disk space.
* Ensure ECE-Tools are configured correctly.
* Check if it is the patch that is causing the problem. Resolve the conflict or contact [Adobe Commerce Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket). See below for details.
* Check if it is the custom extension that is causing the problem. Resolve the conflict or contact the extension developers for the solution.

The following paragraphs provide some more details.

### Clean logs and/or increase space

Directories to be considered for clean up:

* `var/log`
* `var/report`
* `var/debug/`
* `var`

For details on how to increase disk space if you are on the Adobe Commerce on cloud infrastructure Starter plan architecture, see the [Increase disk space for Integration environment on cloud](https://support.magento.com/hc/en-us/articles/360005189554-Increase-disk-space-for-Integration-environment-on-Cloud). The same instructions can be used for increasing space of Adobe Commerce on cloud infrastructure Pro plan architecture Integration environment. For Pro Production/Staging, you need to file a ticket to [Adobe Commerce Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket), and request increased disk space. But it is monitored by Platform. But typically, you will not have to deal with this on the Staging/Production of Pro architecture as Adobe Commerce monitors these parameters for you and alerts you and/or takes actions according to the contract.

### Ensure ECE-tools are configured correctly

1. Ensure that build hooks are defined properly in the `magento.app.yaml` file. If you are on Adobe Commerce 2.2.X, building hooks should be defined as follows:
   ```yaml
   # We run build hooks before your application has been packaged.
   build: |
       php ./vendor/bin/ece-tools build
   # We run deploy hook after your application has been deployed and started.
   deploy: |
       php ./vendor/bin/ece-tools deploy
   ```
   Use the [Upgrade to ece-tools](https://devdocs.magento.com/guides/v2.3/cloud/project/ece-tools-upgrade-project.html) article for reference.
1. Ensure that ECE-tools package is present in the `composer.lock` file by running the following command:    <pre><code class="language-bash">grep '<code class="language-yaml">"name": "magento/ece-tools"</code>' composer.lock</code></pre>    If they are specified, the response would look like the following example:    ```bash    "name": "magento/ece-tools",    "version": "2002.0.20",    ```    

See the [Upgrade to ece-tools](https://devdocs.magento.com/guides/v2.3/cloud/project/ece-tools-upgrade-project.html) article for reference.

### Is the patch causing the issue?

If it is the applied patch that is preventing the environment from building successfully, you will see something similar to the following in the deploy log:

```bash
%patch_name%.composer.patch
[2019-02-19 18:12:59] CRITICAL:
....
[2019-02-19 18:12:59] CRITICAL: Command git apply --check --reverse /app/m2-hotfixes/%patch_name%.composer.patch returned code 1
...
W:
W: Command git apply --check --reverse /app/m2-hotfixes/%patch_name%.composer.patch returned code 1
W:
W:
W: build
...
E: Error building project: The build hook failed with status code 1. Aborted build.
```

These error messages mean that the patch you are trying to apply either was created for a different Adobe Commerce version or has conflicts with your customizations or previously applied patches. Try to resolve the conflict or contact [Adobe Commerce Support](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

### Is extension causing the issue?

If it is the custom extension that is preventing the environment to build successfully, you will see the custom module(s) name(s) mentioned in the deployment log, along with the particular conflict caused by this module. Resolve the conflict or contact the extension developers for the solution.

### Make sure changes are applied

Commit and push your changes. This will trigger the deployment automatically.
