---
title: Environment redeployment failed or MySQL server gone away
labels: Magento Commerce,Magento Commerce Cloud,deployment,mysql,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises,Pro,Starter
---

This article provides a solution for Adobe Commerce (all deployment methods) issues, where the outage of space allocated for MySQL causes stuck deployment or database connection errors.

## Affected products and versions

* Adobe Commerce on-premises and Adobe Commerce on cloud infrastructure (all versions)

## Issue

* Deploy process fails with the following error in the deploy log (command line and UI log):  ```bash    Re-deploying environment abcdefghijklm-master-7rqtwti         E: Environment redeployment failed    ```    
* Adobe Commerce responds with 503 error, and the following error message is displayed in application logs:    ```bash    SQLSTATE[HY000] [2006] MySQL server has gone away    ```    and the following error appears when you connect to a MySQL server:    ```bash    ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"    ```    

## Cause

The most probable cause of the issues is the MySQL database allocated space being too low. To make sure this is the case, check the space available for MySQL as described further.

### Check if there's enough space for MySQL

For all Adobe Commerce on cloud infrastructure Starter plan architecture environments, and [Integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter) of the Adobe Commerce on cloud infrastructure Pro plan architecture, [SSH to the environment](https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh) and run the command:

```bash
magento-cloud db:size
```

For the Staging or Production environment of the Pro architecture, [SSH to the environment](https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh), and run the `df -h`   `| grep mysql` command. The result will look similar to the following:

```bash
sxpe7gigd5ok2@i-00baa9e24f31dba41:~$ df -h | grep mysql
/dev/xvdj                            40G  7.4G   32G  19% /data/mysql
```

## Solution

### To solve the issue, you need to allocate more space for MySQL.

For all Starter architecture and Pro architecture Integration environments, this is done in the `.magento/services.yaml` file, by increasing the `mysql: disk:` parameter. For example:

```yaml
mysql:
    type: mysql:10.0
    disk: 2048
```

See the [Set up MySQL service](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-mysql.html) article for reference.

To make these changes for the Staging or Production environment of the Pro architecture, you must create a [Support ticket](http://support.magento.com/). But typically, you will not have to deal with this on Staging/Production of the Pro architecture as Adobe Commerce monitors these parameters for you and alerts you and/or takes actions according to the contract.

### Applying the changes

Once you change the `.magento/services.yaml` file, you need to commit and push your changes for them to be applied. The push will trigger the deployment process.
