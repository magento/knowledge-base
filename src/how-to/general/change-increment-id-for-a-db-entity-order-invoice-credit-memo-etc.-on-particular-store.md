---
title: Change increment ID for a DB entity (order, invoice, credit memo, etc.) on particular store
labels: 2.x.x,Magento Commerce,Magento Commerce Cloud,MySQL,credit,database,how to,id,increment,invoice,memo,order,sql,store,Adobe Commerce,on-premises,cloud infrastructure
---

This article discusses how to change the increment ID for an Adobe Commerce database (DB) entity (order, invoice, credit memo, etc.) on a particular Adobe Commerce store using the `ALTER TABLE` SQL statement.

## Affected versions

* Adobe Commerce on-premises: 2.x.x
* Adobe Commerce on cloud infrastructure: 2.x.x
* MySQL: any [supported version](https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements-tech.html#database)

## When would you need to change increment ID (cases)

You might need to change the increment ID for new DB entities in these cases:

* After a hard backup restore on a Live site
* Some order records have been lost, but their IDs are already being used by payment gateways (like PayPal) for your current Merchant account. Such being the case, the payment gateways stop processing new orders that have the same ID's, returning the "Duplicate invoice id" error

>![info]
>
>You may also fix the payment gateway issue for PayPal by allowing multiple payments per invoice ID in PayPal's Payment Receiving Preferences. See [PayPal gateway rejected request - duplicate invoice issue](https://support.magento.com/hc/en-us/articles/115002457473) in our support knowledge base.

## Prerequisite steps

1. Find stores and entities for which the new increment ID should be changed.
1. [Connect](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html) to your MySQL DB. For Adobe Commerce on cloud infrastructure, at first, you need to [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).
1. Check the current auto\_increment value for the entity sequence table using the following query:    

```sql
SHOW TABLE STATUS FROM `{database_name}` WHERE `name` LIKE 'sequence_{entity_type}_{store_id}';
```    

### Example

If you are checking an auto-increment for an order on the store with *ID=1*, the table name would be:

```sql
'sequence_order_1'
```

If the value of the `auto_increment` column is *1234*, the next order placed at the store with *ID=1* will have the *ID \#100001234*.

### Related documentation

* [Set up a remote MySQL database connection](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html) in our developer documentation.

## Update entity to change increment ID

Update the entity using the following query:

```sql
ALTER TABLE sequence_{entity_type}_{store_id} AUTO_INCREMENT = {new_increment_value};
```

>![warning]
>
>Important: The new increment value must be greater than the current one, not less!

### Example

After executing the following query:

```sql
ALTER TABLE sequence_order_1 AUTO_INCREMENT = 2000;
```

the next order placed at the store with *ID=1* will have the *ID \#100002000*.

## Additional recommended steps on Production environment (Cloud)

Before executing the `ALTER TABLE` query on the Production environment of Adobe Commerce on cloud infrastructure, we strongly recommend performing these steps:

* Test the entire procedure of changing the increment ID on your Staging environment
* [Create](https://support.magento.com/hc/en-us/articles/360003254334) a DB backup to restore your Production DB in case of failure

## Related documentation

* [Create database dump on Cloud](https://support.magento.com/hc/en-us/articles/360003254334) in our support knowledge base.
* [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh) in our developer documentation.
