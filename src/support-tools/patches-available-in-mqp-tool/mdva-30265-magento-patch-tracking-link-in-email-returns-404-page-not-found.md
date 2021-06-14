---
title: "MDVA-30265 Magento patch: tracking link in email returns 404 Page not Found"
labels: "2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5,2.3.5-p1,2.4.0,2.4.1,404,404 error,MQP 1.0.5,MQP patches,Magento Commerce,Magento Commerce Cloud,Magento Quality Patches,invoice,support tools"
---

The MDVA-30265 patch solves the issue of the "404 Page not Found" error when the customer clicks on the shipment tracking link in the order confirmation email. This patch is available when the [Magento Quality Patch (MQP) tool](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) v.1.0.5 is installed. Please note that the issue was scheduled to be fixed in Magento version 2.4.2.

## Affected products and versions

* The patch was created and tested on Magento Commerce, v2.3.5-p1 only.
* The patch could also be compatible ( **but might not solve the issue** ) with the following Magento versions and editions, Magento Commerce and Magento Commerce Cloud, v2.3.3 to v2.4.1.

>![info]
>
>Note: the patch can be applicable to other versions with new MQP tool releases. To check if the patch is compatible with your Magento version, run `./vendor/bin/magento-patches
    status` 

## Issue

After the shipment is created for an order placed, an email is sent to the customer with tracking information and a link to track the order. However, when the customer clicks on the shipment tracking link in the email this returns a "404 Page not Found" error.

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Install Magento v2.4. For steps, refer to [Install Magento using Composer](https://devdocs.magento.com/guides/v2.4/install-gde/composer.html) .
1. Place an order.
1. Go to the Admin panel > **Sales** > **Orders** . Look for the order you just created and open it. ** ** 
1. Create a shipment and add a tracking number (Carrier = Custom Value). For steps, refer to the Magento User Guide > [Order Management > Creating a Shipment](https://docs.magento.com/user-guide/sales/shipments-create.html) .
1. You receive an email. Click on the tracking link to check it is working.
1. Create an invoice. For steps, refer to Magento User Guide > [Order Management > Creating an invoice](https://docs.magento.com/user-guide/sales/invoice-create.html) . Then click again on the tracking link above.

 <span class="wysiwyg-underline">Expected result:</span>  

The tracking link should work even after creating the invoice. <span class="wysiwyg-underline">Actual result:</span> After creating the invoice, the tracking link is not working and returns a "404 Page not Found" error page.

## Apply the patch

For instructions on how to apply an MQP patch, use the following links depending on your Magento product:

* Magento Commerce: DevDocs [Software Update Guide > Apply patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) .
* Magento Commerce Cloud: DevDocs [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) .

## Related reading

To learn more about Magento Quality Patches, refer to:

* KB [Magento Quality Patches released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) .
* KB [Check if patch is available for your Magento issue using Magento Quality Patches](https://support.magento.com/hc/en-us/articles/360047125252) .

<section>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>
<div>For info about other patches available in MQP tool, refer to the<a href="https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-MQP-tool-">Patches available in MQP tool</a>section.</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div> </div>
</div>
</section>

<footer></footer>

 