---
title: Adobe Commerce: share access with a third-party for testing
labels: Adobe Commerce,cloud
---

This article provides best practices for sharing access with a third party for testing/validation when you are having an issue with an extension for Adobe Commerce on cloud infrastructure.

## Affected products and versions:

* Adobe Commerce on cloud infrastructure 2.3.0-2.3.7, 2.4.0-2.4.2-p1

##  Providing 3rd party with access and data

* Provide your 3rd party vendor access to the Cloud environment. Related articles:
    * [Adobe Commerce Help Center User Guide > SHARED ACCESS: GRANT PRIVILEGES FOR OTHER USERS TO ACCESS YOUR ACCOUNT](https://support.magento.com/hc/en-us/articles/360000913794#shared-access) in Support Knowledge Base.
    * [Sharing Your Commerce Account](https://docs.magento.com/user-guide/magento/magento-account-share.html) in Commerce User Guide.
    We add our professional services team members also when they do customization.
* You can have the System Integrator collect a DB dump:
[Create database dump on Adobe Commerce on our cloud architecture](https://support.magento.com/hc/en-us/articles/360003254334)
* You can have the System Integrator collect a code dump: https://devdocs.magento.com/guides/v2.4/reference/cli/magento-commerce.html?itm_source=devdocs&itm_medium=search_page&itm_campaign=federated_search&itm_term=code%20dump#supportbackupcode
* Give the 3rd party vendor access to your Commerce Admin and they can run the DB dump themselves from the Admin.  This DB dump will obfuscate customer data, so all they get is code and product SKU’s etc.  No proprietary / customer data.
* Your developers can run a DB dump via command line and also run code collection via command line and provide the code to your 3rd party vendor to build in their environments.

## Testing best practice

Standard practice is to troubleshoot on a local environment. If the issue cannot be reproduced locally, go to Staging. Third party might need to check on Production. Ensure that your 3rd party is aware that they are only to try to reproduce the issue on Production and Staging and to not make any code changes; and if they need to make code changes, they must first get your permission.


## Related reading

* (Best Practices for using third-party extensions in Adobe Commerce)[https://support.magento.com/hc/en-us/articles/360042361152-Best-Practices-for-using-third-party-extensions-in-Magento]
