This article discusses how to change the increment ID for a Magento database (DB) entity (order, invoice, credit memo, etc.) on a particular Magento store using the `` ALTER TABLE `` SQL statement.

## Affected versions

*   Magento Commerce: 2.x.x&nbsp; (on premise)
*   Magento Commerce (Cloud): 2.x.x
*   MySQL: any [supported version](https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements-tech.html#database)

## When would you need to change increment ID (cases)

You might need to change the increment ID for new DB entities in these cases:

*   After a hard backup restore on a Live site
*   Some order records have been lost, but their ID's are already being used by payment gateways (like PayPal) for your current Merchant account. Such being the case, the payment &nbsp;gateways stop processing new orders that have the same ID's, returning the&nbsp;"Duplicate invoice id" error

<p class="info">You may also fix the payment gateway issue for PayPal by&nbsp;allowing multiple payments per invoice ID in PayPal's Payment Receiving Preferences. See the Knowledge Base article:&nbsp;<a href="https://support.magento.com/hc/en-us/articles/115002457473">PayPal gateway rejected request - duplicate invoice issue </a>.</p>

## Prerequisite steps

1.   Find stores and entities for which the new increment ID should be changed.
2.   [Connect](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html) to your MySQL DB.   
    For Magento Commerce (Cloud), at first, you need to [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh).
3.   Check the current auto\_increment value for the entity sequence table using the following query:  
    
    
    <pre><code class="language-sql">SHOW TABLE STATUS FROM `{database_name}` WHERE `name` LIKE 'sequence_{entity_type}_{store_id}';
</code></pre>
    
    

### Example

If you are checking an auto increment for an order on the store with _ID=1_, the table name would be:

<pre><code class="language-sql">'sequence_order_1'</code></pre>

If the value of the `` auto_increment `` column is _1234_, the next order placed at the store with _ID=1_ will have the _ID \#100001234_.

### Related documentation on DevDocs

*   [Set up a remote MySQL database connection](https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html)

## Update entity to change increment ID

Update the entity using the following query:

<pre><code class="language-sql">ALTER TABLE sequence_{entity_type}_{store_id} AUTO_INCREMENT = {new_increment_value};</code></pre>

<p class="warning">Important: The new increment value must be greater than the current one, not less!</p>

### Example

After executing the following query:

<pre><code class="language-sql">ALTER TABLE sequence_order_1 AUTO_INCREMENT = 2000;</code></pre>

the next order placed at the store with _ID=1_ will have the&nbsp;_ID&nbsp;\#100002000_.

## Additional recommended steps on Production environment (Cloud)&nbsp;

Before executing the `` ALTER TABLE `` query on the Production environment of Magento Commerce (Cloud), we strongly recommend performing these steps:

*   Test the entire procedure of changing the increment ID on your Staging environment
*   [Create](https://support.magento.com/hc/en-us/articles/360003254334) a DB backup to restore your Production DB in case of failure

## Related documentation

*   [Create database dump on Cloud](https://support.magento.com/hc/en-us/articles/360003254334)
*   [SSH to your environment](http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh)