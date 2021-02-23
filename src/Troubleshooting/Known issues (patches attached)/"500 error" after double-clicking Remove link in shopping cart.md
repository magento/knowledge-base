---
title: "500 error" after double-clicking Remove link in shopping cart 
link: https://support.magento.com/hc/en-us/articles/360025045492--500-error-after-double-clicking-Remove-link-in-shopping-cart-
labels: Magento Commerce Cloud,patch,troubleshooting,known issues,2.2.0,500 error,shopping cart
---

<p>This article provides a patch for the known Magento Commerce Cloud 2.2.0 issue related to customers getting error when trying to remove twice a shopping cart item (by double-clicking the <em>Remove</em> link or by clicking it in different tabs).</p>
<h2>Issue</h2>
<p>When customers double-click the <em>Remove</em> link in the shopping cart, trying to remove a product from the shopping cart, they get a blank page with the following error message: <em>"This page isn’t working. HTTP ERROR 500". </em>The same issue happens if a customer opens two browser tabs with the shopping cart page and removes the product first in one tab, then in the second one.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Add a product to shopping cart on the storefront.</li>
<li>Navigate to the shopping cart page.</li>
<li>Double-click the Remove link.</li>
</ol>
<p>OR </p>
<ol>
<li>Add a product to shopping cart on the storefront.</li>
<li>Navigate to the shopping cart page.</li>
<li>Open a new browser tab and navigate to the shopping cart page (same product).</li>
<li>Remove the product from the cart.</li>
<li>Open the second tab and remove the product again. </li>
</ol>
<p>Expected result:<br/> The product is removed from the cart without errors.</p>
<p>Actual result:<br/> The product is removed with the error: <em>"This page isn’t working. HTTP ERROR 500"</em> error message.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023828792/MDVA-8623_EE_2.2.0_v1.composer.patch">Download MDVA-8623_EE_2.2.0_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce (Cloud) 2.2.0</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) versions from 2.2.1 to 2.2.5</li>
<li>Magento Commerce versions from 2.2.0 to 2.2.5</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>