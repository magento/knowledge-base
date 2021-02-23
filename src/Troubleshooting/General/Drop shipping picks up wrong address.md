---
title: Drop shipping picks up wrong address 
link: https://support.magento.com/hc/en-us/articles/360032285372-Drop-shipping-picks-up-wrong-address-
labels: Magento Commerce Cloud,Magento Commerce,Inventory,2.3.x,shipping
---

<h2>Issue</h2>
<p>The shippping solution does not pick up the address of the product's source.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud all versions, with Magento Inventory installed </li>
<li>Magento Commerce 2.3.0 and later, with Magento Inventory installed </li>
<li>Magento Open Source 2.3.0 and later, with Magento Inventory installed </li>
</ul>
<h3>Cause</h3>
<p>Magento Inventory does not currently support using drop shipping rates calculation based on source address during checkout. Instead the default store address from the config is used in all cases.</p>
<h2>Related Reading</h2>
<ul>
<li><a href="https://github.com/magento/inventory/wiki/MSI-FAQs">Magento Inventory FAQ</a></li>
</ul>