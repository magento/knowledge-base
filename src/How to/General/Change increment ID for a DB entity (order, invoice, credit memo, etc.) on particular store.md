---
title: Change increment ID for a DB entity (order, invoice, credit memo, etc.) on particular store
link: https://support.magento.com/hc/en-us/articles/360004002914-Change-increment-ID-for-a-DB-entity-order-invoice-credit-memo-etc-on-particular-store
labels: Magento Commerce Cloud,Magento Commerce,order,invoice,increment,id,credit,memo,MySQL,database,2.x.x,store,how to,sql
---

<p>This article discusses how to change the increment ID for a Magento database (DB) entity (order, invoice, credit memo, etc.) on a particular Magento store using the <code>ALTER TABLE</code> SQL statement.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce: 2.x.x  </li>
<li>Magento Commerce (Cloud): 2.x.x</li>
<li>MySQL: any <a href="https://devdocs.magento.com/guides/v2.2/install-gde/system-requirements-tech.html#database">supported version</a>
</li>
</ul>
<h2>When would you need to change increment ID (cases)</h2>
<p>You might need to change the increment ID for new DB entities in these cases:</p>
<ul>
<li>After a hard backup restore on a Live site</li>
<li>Some order records have been lost, but their ID's are already being used by payment gateways (like PayPal) for your current Merchant account. Such being the case, the payment  gateways stop processing new orders that have the same ID's, returning the "Duplicate invoice id" error</li>
</ul>
<p class="info">You may also fix the payment gateway issue for PayPal by allowing multiple payments per invoice ID in PayPal's Payment Receiving Preferences. See the Knowledge Base article: <a href="https://support.magento.com/hc/en-us/articles/115002457473">PayPal gateway rejected request - duplicate invoice issue </a>.</p>
<h2>Prerequisite steps</h2>
<ol>
<li>Find stores and entities for which the new increment ID should be changed.</li>
<li>
<a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html">Connect</a> to your MySQL DB. <br/>For Magento Commerce (Cloud), at first, you need to <a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment</a>.</li>
<li>Check the current auto_increment value for the entity sequence table using the following query:<br/>
<pre><code class="language-sql">SHOW TABLE STATUS FROM `{database_name}` WHERE `name` LIKE 'sequence_{entity_type}_{store_id}';
</code></pre>
</li>
</ol>
<h3>Example</h3>
<p>If you are checking an auto increment for an order on the store with <em>ID=1</em>, the table name would be:</p>
<pre><code class="language-sql">'sequence_order_1'</code></pre>
<p>If the value of the <code>auto_increment</code> column is <em>1234</em>, the next order placed at the store with <em>ID=1</em> will have the <em>ID #100001234</em>.</p>
<h3>Related documentation on DevDocs</h3>
<ul>
<li><a href="https://devdocs.magento.com/guides/v2.2/install-gde/prereq/mysql_remote.html">Set up a remote MySQL database connection</a></li>
</ul>
<h2>Update entity to change increment ID</h2>
<p>Update the entity using the following query:</p>
<pre><code class="language-sql">ALTER TABLE sequence_{entity_type}_{store_id} AUTO_INCREMENT = {new_increment_value};</code></pre>
<p class="warning">Important: The new increment value must be greater than the current one, not less!</p>
<h3>Example</h3>
<p>After executing the following query:</p>
<pre><code class="language-sql">ALTER TABLE sequence_order_1 AUTO_INCREMENT = 2000;</code></pre>
<p>the next order placed at the store with <em>ID=1</em> will have the <em>ID #100002000</em>.</p>
<h2>Additional recommended steps on Production environment (Cloud) </h2>
<p>Before executing the <code>ALTER TABLE</code> query on the Production environment of Magento Commerce (Cloud), we strongly recommend performing these steps:</p>
<ul>
<li>Test the entire procedure of changing the increment ID on your Staging environment</li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360003254334">Create</a> a DB backup to restore your Production DB in case of failure</li>
</ul>
<h2>Related documentation</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360003254334">Create database dump on Cloud</a></li>
<li><a href="http://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment</a></li>
</ul>