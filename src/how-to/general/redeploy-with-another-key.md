---
title: "Adobe Commerce on cloud: change authentication keys and redeploy"
labels: Adobe Commerce,cloud infrastructure,deployment,how to,authentication key,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1-p1,2.4.2,2.4.2-p1,2.3.7-p1,2.3.7-p2,2.4.1,2.4.2-p2,2.4.3,2.4.3-p1
---

This article provides instructions on how to redeploy Adobe Commerce on cloud infrastructure with different authentication keys. For example, you might have used the keys for another account or you might have used Magento Open Source keys instead of Adobe Commerce keys.

If you used the incorrect keys, deployment fails. To recover, you must clone the project, add the correct keys to `auth.json`, and push the change to the master branch.

In this article, we assume that your project has a `master` branch only (`master` is the default branch when you first create a project).

To redeploy with the correct authentication keys:

1. Log in to the machine that has your Adobe Commerce on cloud infrastructure SSH keys.
1. Log in to the project:
    ```
    magento-cloud login
    ```
1. Create a branch to update code with the name `auth`:
    ```
    magento-cloud environment:branch auth master
    ```
1. Change to the project root directory.
1. Open `auth.json` in a text editor.
    ```json
    {
       "http-basic": {
          "repo.magento.com": {
             "username": "<your public key>",
             "password": "<your private key>"
          }
       }
    }
    ```
1. Add the correct authentication keys.
1. Save your changes and exit the text editor.
1. Commit and merge your changes.
    ```
    git add -A
    ```
    ```
    git commit -m "<description of change>"
    ```
    ```
    git push origin master
    ```
1. Wait for the deployment to complete.

Messages indicate whether deployment was successful. You can confirm a successful deployment by going to one of the **Environment routes** displayed on your screen.
