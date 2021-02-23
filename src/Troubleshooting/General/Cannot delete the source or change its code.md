---
title: Cannot delete the source or change its code
link: https://support.magento.com/hc/en-us/articles/360032441632-Cannot-delete-the-source-or-change-its-code
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,Inventory,2.3.x,inventory source
---

<p>This article provides a fix for when you can not completely remove a source and/or change its code.</p>
<h2>Issue</h2>
<p>Sources can not be deleted regardless of product assignment.</p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce Cloud all versions, with Magento Inventory installed </li>
<li>Magento Commerce 2.3.0 and later, with Magento Inventory installed </li>
<li>Magento Open Source 2.3.0 and later, with Magento Inventory installed </li>
</ul>
<h2>Cause</h2>
<p>By design, it is not possible to completely remove a source and/or change its code.</p>
<p>Removing a source entirely would cause order data issues, because sources are part of product inventories, orders, shipment data, and much more.  </p>
<p>The code is vital for connecting the source to orders. This is a unique ID for the source and is disabled from editing.</p>
<h2>Solution</h2>
<p>You can remove a source from a product by transferring the inventory or dropping the product from all shipments at a location.</p>
<p>If you need to remove a source from <a href="https://devdocs.magento.com/guides/v2.3/inventory/source-selection-algorithms.html">SSA</a> calculations and Magento Inventory order processing, you can disable the source. Disabled sources retain all data, assigned products, and inventory quantities, and may be re-enabled any time to begin shipping again.</p>
<p>See the <a href="https://github.com/magento/inventory/wiki/Create-Sources#disable-sources">Create Sources guide</a> on details how to disable a source. </p>