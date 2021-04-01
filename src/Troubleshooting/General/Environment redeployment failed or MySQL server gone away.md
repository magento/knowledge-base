---
title: Environment redeployment failed or MySQL server gone away
labels: Magento Commerce Cloud,Magento Commerce,deployment,troubleshooting,mysql
---

This article provides a solution for Magento Commerce and Cloud issues, where the outage of space allocated for MySQL causes stuck deployment or database connection errors.

###  Affected products and versions

* Magento Commerce, Magento Cloud
* all versions

## Issue

* Deploy process fails with the following error in the deploy log (command line and UI log):
    
    <pre><code class="language-bash"> Re-deploying environment abcdefghijklm-master-7rqtwti  
    E: Environment redeployment failed</code></pre>
    
    
* Magento responds with 503 error, and the following error message is displayed in application logs:
    
    
    
    <pre><code class="language-bash">SQLSTATE[HY000] [2006] MySQL server has gone away </code></pre>
    
    
    
    and the following error appears when you connect to a MySQL server:
    
    
    
    <pre><code class="language-bash">ERROR 2013 (HY000): Lost connection to MySQL server at 'reading initial communication packet', system error: 0 "Internal error/check (Not system error)"</code>  </pre>
    
    

## Cause

The most probable cause of the issues is the MySQL database allocated space being too low. To make sure this is the case, check the space available for MySQL as described further.

### Check if there's enough space for MySQL

For the all Starter plan environments, and [Integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter) of the Pro plan, [SSH to the environment](https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh) and run the <code class="language-bash">magento-cloud db:size</code> command.

For Staging or Production environment of the Pro plan, [SSH to the environment](https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh),  and run the `` df -h `` ``  | grep mysql. ``The result will look similar to the following:

<pre><code class="language-bash">sxpe7gigd5ok2@i-00baa9e24f31dba41:~$ df -h | grep mysql
/dev/xvdj                                          40G  7.4G   32G  19% /data/mysql</code></pre>

## Solution

## To solve the issue, you need to allocate more space for MySQL.

For all Starter plan environments and Pro plan Integration environment, this is done in the <code style="font-size: 15px;">.magento/services.yaml</code> file, by increasing the `` mysql: disk: `` parameter. For example:

<pre><code class="language-yaml">mysql:
    type: mysql:10.0
    disk: 2048
</code></pre>

See the  [Set up MySQL service](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-mysql.html) article for reference.

To make these changes for the Staging or Production environment of the Pro plan, you must create a [Support ticket](http://support.magento.com/). But typically, you will not have to deal with this on Staging/Production of the Pro plan, cause Magento monitors these parameters for you, and alerts you and/or takes actions, according to the contract.

### Applying the changes

Once you change the <code style="font-size: 15px;">.magento/services.yaml</code> file, you need to commit and push your changes, for them to be applied. The push will trigger the deployment process.

<code class="language-bash"><code class="language-bash"></code></code>

 