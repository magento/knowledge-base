---
title: Stock status incorrect after Magento Inventory install
link: https://support.magento.com/hc/en-us/articles/360032440152-Stock-status-incorrect-after-Magento-Inventory-install
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,Inventory,2.3.x,stock status
---

<p>This article provides a fix for stock status being incorrect after Magento Inventory install/upgrade.</p>
<h2>Stock status incorrect on some sites</h2>
<p>After first installing or upgrading to have Magento Inventory in the multi-website Magento environment, not all websites have the correct stock statuses for products. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud all versions,  with Magento Inventory installed </li>
<li>Magento Commerce 2.3.0 and later, with Magento Inventory installed </li>
<li>Magento Open Source 2.3.0 and later,  with Magento Inventory installed </li>
</ul>
<h2>Cause</h2>
<p>When you first install/upgrade, all of your products are assigned to the default source, associating all quantities to that source. The Default Source is assigned to the Default Stock, with the Default website associated. </p>
<h2>Solution</h2>
<p>If you have more than one website, you need to add these websites as Sales Channels to the Default Stock, or other custom stocks. </p>
<p>See the <a href="https://docs.magento.com/m2/ce/user_guide/catalog/inventory-stock.html">Stock section of the wiki/user guide</a> for details on how to do this. </p>