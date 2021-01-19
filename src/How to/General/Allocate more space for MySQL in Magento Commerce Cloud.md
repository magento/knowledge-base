---
title: Allocate more space for MySQL in Magento Commerce Cloud
link: https://support.magento.com/hc/en-us/articles/360038761511-Allocate-more-space-for-MySQL-in-Magento-Commerce-Cloud
labels: Magento Commerce Cloud,Pro,MySQL,space,mysql disk space,Magento Pro,Magento Starter,how to,Starter
---

For all Starter plan environments and Pro plan Integration environment, you can allocate more space for MySQL in the .magento/services.yaml file, by increasing the mysql: disk: parameter. For example:

mysql:
 type: mysql:10.0
 disk: 2048

See the [Set up MySQL service](https://devdocs.magento.com/guides/v2.3/cloud/project/project-conf-files_services-mysql.html) article for reference.

To make these changes for the Staging or Production environment of the Pro plan, you must create a [Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket). But typically, you will not have to deal with this on Staging/Production of the Pro plan, cause Magento monitors these parameters for you, and alerts you and/or takes actions, according to the contract.

#### Applying the changes

Once you change the .magento/services.yaml file, you need to commit and push your changes, for them to be applied. The push will trigger the deployment process.

