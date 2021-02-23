---
title: Magento 2.4.1 Vertex Address validation message post address update
link: https://support.magento.com/hc/en-us/articles/360050139631-Magento-2-4-1-Vertex-Address-validation-message-post-address-update
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,shipping,Vertex,2.4.1,billing
---

<p>This article describes a Magento 2.4.1 known issue where Vertex address validation is not working during Payment step when a shipping address is used that is different to the billing address. The issue is scheduled to be fixed in Magento 2.4.2.</p>
<h2>Affected products and versions</h2>
<ul>
<li>Magento Commerce 2.4.1 with Vertex integration enabled</li>
<li>Magento Commerce Cloud 2.4.1 with Vertex integration enabled</li>
</ul>
<h2>Issue</h2>
<p>Prerequisites:</p>
<p>Enable Vertex Address Cleansing. For steps, refer to Magento User Guide <a href="https://docs.magento.com/user-guide/tax/vertex-configure-address.html">Configuring Storefront Address Cleansing</a>.</p>
<p>Steps to reproduce:</p>
<ol>
<li>Create an account and log in.</li>
<li>Add an item to cart by clicking Add to Cart. Click on the Cart icon and then click Proceed to Checkout. 
</li>
<li>Enter a valid address in the Shipping Address field.</li>
<li>Check one of the options under Shipping Methods. Then click Next.</li>
<li>If the Address Validation suggests different address information, click Update address and click Next.</li>
<li>Uncheck the My billing and shipping address are the same checkbox.</li>
</ol>
<p>First scenario:<br/></p>
<p>Follow the <a href="https://support.magento.com/hc/en-us/articles/360050139631#first_sixth">above six steps</a> and then:</p>
<ol>
<li>Enter a new valid billing address. </li>
<li>Click on the Update button. It will show the message/suggestion like - "<em>The address is not valid.</em>". This will follow with an address suggestion like - "<em>Postcode : XXXXX- XXXX Street : XXX City street XXX</em>"</li>
<li>Click on the Update button (do not click on the Update address button of Vertex address suggestion).</li>
<li>Click on the Edit button of the updated billing address.</li>
<li>Select the address from address dropdown.</li>
<li>Click on the Update button.</li>
</ol>
<p>Expected result:</p>
<p>The old validation message/suggestion message is removed.</p>
<p>Actual result:</p>
<p>The validation message/suggestion <em>"We did not find a valid address Postcode : XXXXX-XXXX Street : XXX City street XXX"</em> message is NOT removed. The same issue occurs if you enter an invalid address in the form.</p>
<p>Second scenario:<br/></p>
<p>Follow the <a href="https://support.magento.com/hc/en-us/articles/360050139631#first_sixth">above six steps</a> and then:</p>
<ol>
<li>Fill the address form with a valid address. </li>
<li>Click on the Update button. It will show the message/suggestion like - "<em>The address is not valid.</em>" This will follow with an address suggestion like - "<em>Postcode : XXXXX-XXXX Street : XXX City street XXX</em>".</li>
<li>Click on the Update button (do not click on the Update address button of vertex address suggestion).</li>
<li>Check the “<em>My billing and shipping address are the same</em>” drop-down.</li>
</ol>
<p>Expected result:</p>
<p>The old validation message/suggestion message is removed.</p>
<p>Actual result:</p>
<p>The validation message/suggestion <em>"We did not find a valid address Postcode : XXXXX-XXXX Street  XXX City street XXX"</em> message is NOT removed. The same issue occurs if you enter an invalid address in the form.</p>
<h2>Related reading</h2>
<p><a href="https://support.magento.com/hc/en-us/articles/360050092291">Magento 2.3.6, 2.4.0-p1 and 2.4.1 known issue: cannot log in to dotdigital when account enabled</a></p>