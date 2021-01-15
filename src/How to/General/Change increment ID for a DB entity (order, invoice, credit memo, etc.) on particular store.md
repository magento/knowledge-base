---
title: Change increment ID for a DB entity (order, invoice, credit memo, etc.) on particular store
link: https://support.magento.com/hc/en-us/articles/360004002914-Change-increment-ID-for-a-DB-entity-order-invoice-credit-memo-etc-on-particular-store
labels: Magento Commerce Cloud,Magento Commerce,order,invoice,increment,id,credit,memo,MySQL,database,2.x.x,store,how to,sql
---

This article discusses how to change the increment ID for a Magento database (DB) entity (order, invoice, credit memo, etc.) on a particular Magento store using the ALTER TABLE SQL statement.

 Affected versions
-----------------

 
 * Magento Commerce: 2.x.x 
 * Magento Commerce (Cloud): 2.x.x
 * MySQL: any [supported version](https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements-tech.html#database) 
 
 When would you need to change increment ID (cases)
--------------------------------------------------

 You might need to change the increment ID for new DB entities in these cases:

 
 * After a hard backup restore on a Live site
 * Some order records have been lost, but their ID's are already being used by payment gateways (like PayPal) for your current Merchant account. Such being the case, the payment gateways stop processing new orders that have the same ID's, returning the "Duplicate invoice id" error
 
 You may also fix the payment gateway issue for PayPal by allowing multiple payments per invoice ID in PayPal's Payment Receiving Preferences. See the Knowledge Base article: [PayPal gateway rejected request - duplicate invoice issue](https://support.magento.com/hc/en-us/articles/115002457473) .

 Prerequisite steps
------------------

 
 2. Find stores and entities for which the new increment ID should be changed.
 4.  [Connect](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html) to your MySQL DB.   
For Magento Commerce (Cloud), at first, you need to [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).
 6. Check the current auto\_increment value for the entity sequence table using the following query:  
 SHOW TABLE STATUS FROM `{database\_name}` WHERE `name` LIKE 'sequence\_{entity\_type}\_{store\_id}';  
 
 ### Example

 If you are checking an auto increment for an order on the store with *ID=1*, the table name would be:

 'sequence\_order\_1' If the value of the auto\_increment column is *1234*, the next order placed at the store with *ID=1* will have the *ID #100001234*.

 ### Related documentation on DevDocs

 
 * [Set up a remote MySQL database connection](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html)
 
 Update entity to change increment ID
------------------------------------

 Update the entity using the following query:

 ALTER TABLE sequence\_{entity\_type}\_{store\_id} AUTO\_INCREMENT = {new\_increment\_value}; Important: The new increment value must be greater than the current one, not less!

 ### Example

 After executing the following query:

 ALTER TABLE sequence\_order\_1 AUTO\_INCREMENT = 2000; the next order placed at the store with *ID=1* will have the *ID #100002000*.

 Additional recommended steps on Production environment (Cloud)
--------------------------------------------------------------

 Before executing the ALTER TABLE query on the Production environment of Magento Commerce (Cloud), we strongly recommend performing these steps:

 
 * Test the entire procedure of changing the increment ID on your Staging environment
 *  [Create](https://support.magento.com/hc/en-us/articles/360003254334) a DB backup to restore your Production DB in case of failure
 
 Related documentation
---------------------

 
 * [Create database dump on Cloud](https://support.magento.com/hc/en-us/articles/360003254334)
 * [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh)
 
