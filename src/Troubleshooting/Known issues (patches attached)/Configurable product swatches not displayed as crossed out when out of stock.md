---
title: Configurable product swatches not displayed as crossed out when out of stock 
link: https://support.magento.com/hc/en-us/articles/360026168492-Configurable-product-swatches-not-displayed-as-crossed-out-when-out-of-stock-
labels: Magento Commerce Cloud,Magento Commerce,patch,troubleshooting,configurable,known issues,2.2.2
---

<p>This article provides a patch for the known Magento Commerce 2.2.2 issue related to the configurable product swatches being out of stock not displayed as crossed out on the storefront.</p>
<h2>Issue</h2>
<p>When you have a configurable product and for certain combination of options the related simple product is out of stock, the swatch is still available and can be selected on the storefront.</p>
<p>Steps to reproduce:</p>
<ol>
<li>In the Magento Admin, create a configurable product with options for two attributes: color(red, black) and size (S,M,L).</li>
<li>Set Quantity as "1" for each corresponding simple product.</li>
<li>On the storefront, add red,M product to cart and checkout.</li>
<li>In the Admin, process the order so that the item quantity is updated to "0".</li>
<li>Make sure backorders are not allowed.</li>
<li>On the storefront, navigate to the same product page and select the same options: red, M.</li>
</ol>
<p>Expected result:</p>
<p>The red, M swatch has a red slash and cannot be selected.</p>
<p>Actual result:<br/>The red, M swatch can be selected.</p>
<h2>Patch</h2>
<p>The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:</p>
<p><a href="https://support.magento.com/hc/article_attachments/360025640692/MDVA-8215_EE_2.2.2_v1.composer.patch">Download MDVA-8215_EE_2.2.2_v1.composer.patch</a></p>
<h3>Compatible Magento versions:</h3>
<p>The patch was created for:</p>
<ul>
<li>Magento Commerce 2.2.2</li>
</ul>
<p>The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:</p>
<ul>
<li>Magento Commerce, Magento Commerce Cloud</li>
<li>2.2.0-2.2.3</li>
</ul>
<h2>How to apply the patch</h2>
<p>See <a href="https://support.magento.com/hc/en-us/articles/360028367731">How to apply a composer patch provided by Magento</a> for instructions.</p>
<h2>Attached Files</h2>