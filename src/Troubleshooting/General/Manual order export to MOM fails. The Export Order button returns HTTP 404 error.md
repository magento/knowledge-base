---
title: Manual order export to MOM fails. The Export Order button returns HTTP 404 error
link: https://support.magento.com/hc/en-us/articles/360041354911-Manual-order-export-to-MOM-fails-The-Export-Order-button-returns-HTTP-404-error
labels: Magento Commerce,MOM,404 error,connector,export order,2.3.x,2.2.x,button,how to
---

<p>This article discusses how to fix an issue, where trying to export an order to Magento Order Management (MOM) by clicking the Export Order button on the order view in the Magento Admin returns a "<em>404 Page Not Found</em>" error. </p>
<h3>Affected products and versions</h3>
<ul>
<li>Magento Commerce 2.2.x, 2.3.x</li>
<li>MOM Connector 2.3.0, 2.4.0, 3.2.0, 3.3.0</li>
</ul>
<h2>Issue</h2>
<p>Steps to reproduce:<br/> 1. In the Magento Commerce Admin click Sales &gt; Orders.<br/> 2. Click the Create New Order button.<br/> 3. Select a user, add an item(s), select payment and shipping methods, and then click the Submit Order button.<br/> 4. Click the Export Order button and then OK.</p>
<p>Expected result:</p>
<p>The order is sent to MOM.</p>
<p>Actual result:</p>
<p>A  "<em>404 Error: Page Not Found</em>" page is displayed. </p>
<h2>Solution</h2>
<ul>
<li>Upgrade the MOM Connector to 3.4.0 for Magento Commerce 2.3.x or MOM Connector 2.5 for Magento Commerce 2.2.x.</li>
<li>If upgrading the MOM Connector is not an option, you can export the order to Magento Order Management using the CLI command:<br/> <code class="language-bash">$bin/magento oms:orders:sync</code>
</li>
</ul>
<h2>Related reading </h2>
<p><a href="https://omsdocs.magento.com/en/">Magento Order Management technical documentation</a></p>