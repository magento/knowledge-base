This article provides a patch for the known Magento Commerce 2.2.1 issue related to the orders not being displayed in the Orders grid in Magento Admin.

## Issue

In the Magento Commerce 2.2.1 with B2B extension installed, orders created on the storefront by a registered customer, are not displayed in the list of orders in the customer's account in the Admin. In the debug log (`` ./var/log/debug.log ``) the following error is logged:

<div class="code panel">
<div class="codeContent panelContent">
<pre class="code-java">report.CRITICAL: You cannot define a correlation name ‘company_order’ more than once</pre>
</div>
</div>

<span class="wysiwyg-underline">Steps to reproduce</span>:

Prerequisites: Your store catalog contains products, not Magento sample data, and the B2B extension is installed.

1.   Navigate to the store front and create a customer account.&nbsp;
2.   Add a product to the shopping cart, complete checkout and submit an order.
3.   Log in to the Admin.
4.   Navigate to __Customers, __then choose&nbsp;__All Customers__.
5.   For the newly created customer click __Edit__.
6.   Click __Orders__ in the panel on the left.

<span class="wysiwyg-underline">Expected result</span>:  
 The recently submitter order is listed in the grid.

<span class="wysiwyg-underline">Actual result</span>:

The Orders grid does not display. A blank page displays instead.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360024291991/MDVA-7868_EE_2.2.1_v1_composer.patch" rel="noopener" target="_blank">Download MDVA-7868\_EE\_2.2.1\_v1\_composer.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce 2.2.1

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) from 2.2.0 to 2.2.3
*   Magento Commerce 2.2.0, and from 2.2.2 to 2.2.3

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files