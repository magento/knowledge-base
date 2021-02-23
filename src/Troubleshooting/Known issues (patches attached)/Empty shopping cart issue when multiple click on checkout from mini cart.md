---
title: Empty shopping cart issue when multiple click on checkout from mini cart
link: https://support.magento.com/hc/en-us/articles/360024915931-Empty-shopping-cart-issue-when-multiple-click-on-checkout-from-mini-cart
labels: Magento Commerce,patch,troubleshooting,minicart,empty cart,checkout,known issues,2.2.3,2.2.5
---

<p>This article provides a patch for a known Magento Commerce 2.2.3 issue related to a shopping cart being empty after customers click Go to Checkout multiple times in the mini shopping cart.</p>
<h2>Issue</h2>
<p>Customers add products to the cart, try to checkout by clicking the Go to Checkout button several times, but when they go to the cart, the cart is empty. The mini-cart might still show products.</p>
<p>Steps to reproduce:</p>
<p>1. Open a product page on the store front.</p>
<p>2. Add products to cart.</p>
<p>3. In the mini shopping cart, click Go to Checkout several times.</p>
<p>Expected result:</p>
<p>The cart contains all products you have added.</p>
<p>Actual result:</p>
<p>You have no items in your shopping cart.</p>
<h2>Patch</h2>
<p>The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:</p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023267032/MDVA-10441_EE_2.2.3_v3.composer.patch">Download MDVA-10441_EE_2.2.3_v3.composer.patch</a></p>
<p><a href="https://support.magento.com/hc/en-us/article_attachments/360023768751/MDVA-17078_EE_2.2.5_COMPOSER_v1.patch">Download MDVA-17078_EE_2.2.5_COMPOSER_v1.patch</a></p>
<h3>Compatible Magento versions</h3>
<p>The patches were created for:</p>
<ul>
<li>Magento Commerce 2.2.3 (the <code>MDVA-10441_EE_2.2.3_v3.composer.patch</code> file)</li>
<li>Magento Commerce (Cloud) 2.2.5 (<code>MDVA-17078_EE_2.2.5_COMPOSER_v1.patch</code> file)</li>
</ul>
<p>The <code>MDVA-10441_EE_2.2.3_v3.composer.patch</code> patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce (Cloud) versions from 2.2.1 to to 2.2.5</li>
<li>Magento Commerce versions from 2.2.1 to to 2.2.5</li>
</ul>
<p>The <code>MDVA-17078_EE_2.2.5_COMPOSER_v1.patch</code> patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce 2.2.5</li>
</ul>
<h2>How to apply a patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>
<p> </p>