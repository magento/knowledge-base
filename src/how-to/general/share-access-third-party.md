---
title: Third-party testing tips for Adobe Commerce on cloud infrastructure
labels: Adobe Commerce,cloud,test,extensions,shared access,third-pary,2.3.0,2.31,2.3.2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.3.5-p2,2.3.6,2.3.7.2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
---

This article provides options for sharing access with a third party for testing/validation when you are having an issue with an extension for Adobe Commerce on cloud infrastructure.
Proper internal data security procedures and requirements should be followed on your part when deciding the way to provide access to a third party.

## Affected products and versions:

* Adobe Commerce on cloud infrastructure 2.3.0-2.3.7-p1, 2.4.0-2.4.3

## What environments to use for testing

Depending on your internal security standards, you may choose to have the third party troubleshoot on a local environment. If the issue cannot be reproduced locally, you may wish to provide access to your cloud environment. If you elect to do so, please be sure to work within your internal security standards. If providing access to any of your cloud environments, be sure that your third-party is clear on what can be done and what approval is required for things such as replication only or allowing for code changes. This is especially important for Production environments.

## Providing third party with access and data

<ul>
<li>Provide your third-party vendor access to the cloud environment. Related articles:
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360000913794#shared-access">Adobe Commerce Help Center User Guide> SHARED ACCESS: GRANT PRIVILEGES FOR OTHER USERS TO ACCESS YOUR ACCOUNT</a> in our support knowledge base.</li>
<li><a href="https://docs.magento.com/user-guide/magento/magento-account-share.html">Sharing Your Commerce Account</a> in our user guide.</li>
</ul>   
</li>
<li>Create a database dump (or give third-party vendor access to do this). It can be done using the CLI or in the Adobe Commerce Admin. This DB dump will obfuscate customer data, so all they get is code and product SKU’s etc., o proprietary / customer data.
For reference use <a href="https://support.magento.com/hc/en-us/articles/360003254334">Create database dump on Adobe Commerce on our cloud architecture</a>.</li>
<li>Once testing is complete, make sure to revoke the shared access to your cloud environment, as described in <a href="https://support.magento.com/hc/en-us/articles/360000913794#revoke-shared-access">Adobe Commerce Help Center User Guide > Revoke (delete shared access)</a>.</li>
</ul>

## Testing best practice

Standard practice is to troubleshoot on a local environment. If the issue cannot be reproduced locally, go to Staging. Third party might need to check on Production. Ensure that your third party is aware that they are only to try to reproduce the issue on Production and Staging and to not make any code changes; and if they need to make code changes, they must first get your permission.


## Related reading

* [Best Practices for using third-party extensions in Adobe Commerce](https://support.magento.com/hc/en-us/articles/360042361152-Best-Practices-for-using-third-party-extensions-in-Magento) in our support knowledge base.
