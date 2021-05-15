---
title: Magento 2.4.0: refresh on Customer's Activities does not work
labels: 2.4.0,Magento Commerce,Magento Commerce Cloud,button,known issues,order,product,refresh,troubleshooting
---

This article provides a solution for a Magento 2.4.0 known issue when an admin user creates an order for a customer and the refresh buttons on the Customer's Activities side panel does not work.

## Affected products and versions

* Magento Commerce version 2.4.0
* Magento Commerce Cloud version 2.4.0

## Issue

 <span class="wysiwyg-underline">Steps to reproduce:</span> 

1. Go to Magento admin panel > **Sales** > **Orders** .
1. Click the **Create New Order** button.
1. Select the created customer.
1. Go to the storefront as the created customer.
1. Go to the **Product** page. Click the **Refresh** button on the **Recently Viewed Products** section of **Customer's Activities** .
1. Go back to the storefront.
1. Place an order using the created products.
1. Go back to the Magento admin panel and click the **Refresh** button of the **Last Ordered Items** section of **Customer's Activities** .
1. Go back to the storefront. Add the created product to the **Comparison List** .
1. Go back to the Magento admin panel. Click the **Refresh** button of the **Products in Comparison List** section of **Customer's Activities** .
1. Go back to the storefront.
1. Remove the created product from the **Comparison List** .
1. Go back to the Magento admin panel.
1. Click the **Refresh** button of the **Recently Compared Products** section of **Customer's Activities** .
1. Go back to the storefront.

 <span class="wysiwyg-underline">Expected result</span> : 1. The name of the product should appear in the **Recently Viewed Products** section. 2. The name of the product should appear in the **Last Ordered Items** section. 3. The name of the product should appear in the **Products in Comparison List** section. 4. The name of the product should appear in the **Recently Compared Products** section.

 <span class="wysiwyg-underline">Actual result</span> : The page is scrolled up every time a **Refresh** button is clicked. The name of the product does not appear in the proper section.

## Solution

A workaround is the Admin user can update **Customer's Activities** by clicking the **Update Changes** button at the bottom of the sidebar. The issue is planned to be resolved in a Magento 2.4.1 patch.
![mceclip0.png](assets/mceclip0.png)

## Related reading

<ul><li>KB<a href="https://support.magento.com/hc/en-us/articles/360046354992">Magento 2.4.0 known issue: Braintree payment methods do not show up in Multiple Addresses checkout</a>
</li><li>KB<a href="https://support.magento.com/hc/en-us/articles/360046750171-Shipping-labels-creation-known-issue-in-Magento-2-4-0">Shipping labels creation known issue in Magento 2.4.0</a>
</li><li>KB<a href="https://support.magento.com/hc/en-us/articles/360045804332">Magento 2.4.0 known issue: raw message data display on storefront</a>
</li><li>KB<a href="https://support.magento.com/hc/en-us/articles/360045850032">Magento 2.4.0 known issue - Export Tax Rates does not work</a>
</li><li>KB<a href="https://support.magento.com/hc/en-us/articles/360045838312-Magento-2-4-0-known-issue-Add-selections-to-my-cart-button-does-not-work">Magento 2.4.0 known issue: “Add selections to my cart” button does not work</a>
<div> </div>
</li></ul>