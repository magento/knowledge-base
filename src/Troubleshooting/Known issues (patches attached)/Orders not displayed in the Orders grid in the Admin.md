---
title: Orders not displayed in the Orders grid in the Admin
link: https://support.magento.com/hc/en-us/articles/360025277272-Orders-not-displayed-in-the-Orders-grid-in-the-Admin
labels: patch,known issue,2.2.1,orders
---

<p>This article provides a patch for the known Magento Commerce 2.2.1 issue related to the orders not being displayed in the Orders grid in Magento Admin.</p>
<h2>Issue</h2>
<p>In the Magento Commerce 2.2.1 with B2B extension installed, orders created on the storefront by a registered customer, are not displayed in the list of orders in the customer's account in the Admin. In the debug log (<code>./var/log/debug.log</code>) the following error is logged:</p>
<div>
<div>
<pre class="code-java">report.CRITICAL: You cannot define a correlation name ‘company_order’ more than once</pre>
</div>
</div>
<p>Steps to reproduce:</p>
<p>Prerequisites: Your store catalog contains products, not Magento sample data, and the B2B extension is installed.</p>
<ol>
<li>Navigate to the store front and create a customer account. </li>
<li>Add a product to the shopping cart, complete checkout and submit an order.</li>
<li>Log in to the Admin.</li>
<li>Navigate to Customers, then choose All Customers.</li>
<li>For the newly created customer click Edit.</li>
<li>Click Orders in the panel on the left.</li>
</ol>
<p>Expected result:<br/> The recently submitter order is listed in the grid.</p>
<p>Actual result:</p>
<p>The Orders grid does not display. A blank page displays instead.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360024291991/MDVA-7868_EE_2.2.1_v1_composer.patch">Download MDVA-7868_EE_2.2.1_v1_composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.1</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) from 2.2.0 to 2.2.3</li>
<li>Magento Commerce 2.2.0, and from 2.2.2 to 2.2.3</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>