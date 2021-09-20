---
title: Adobe Commerce 2.4.0 B2B Admin can't add configurable product to quote
labels: 2.4.0,B2B,Magento Commerce,Magento Commerce Cloud,SKU,add product,known issues,products,quote,shopping cart,Adobe Commerce,on-premises,cloud infrastructure,troubleshooting
---

This article talks about a known issue in Commerce Admin when managing a B2B Quote, it is not possible to add a configurable product by **SKU** to the quote. When clicking the **Add to Quote** button, the **Quote** edit page is stuck loading, and you cannot configure the product and save changes. This issue also occurs in Admin when adding a product by **SKU** to an order, or adding a product by **SKU** in **Advanced Checkout** (**Admin** > **Customers** > **All Customers** > **Customer Edit** > **Manage Shopping Cart**). This issue will be resolved in a patch for Adobe Commerce 2.4.1.

## Affected products and versions

* Adobe Commerce on-premises 2.4.0
* Adobe Commerce on cloud infrastructure 2.4.0

## Issue

 <span class="wysiwyg-underline">Preconditions</span>

* Adobe Commerce 2.4.0 is installed.
* B2B is installed.
* Set B2B features to **Enable Company =**  *Yes* , **Enable Shared Catalog =**  *No* , and **Enable B2B Quote =**  *Yes*.
* Create a customer account.
* Create a company account with the previously created customer as the company admin.
* Create a simple product (Example: name & **SKU** = TEST SIMPLE 1) that is not assigned to **Default (General)**.
* Have the company admin request a quote using the simple product created above (Example: TEST SIMPLE 1).

 <span class="wysiwyg-underline">Steps to reproduce</span>

1. Go to Commerce Admin panel.
1. Go to **Sales > Quotes**.
1. Open the **Quote**.
1. Click the **Add Product By SKU** button.
1. Enter the **SKU** of another (Example: TEST SIMPLE 2) product into the **Enter SKU** input field.
1. Enter some valid quantity into the **Qty** input field.
1. Click the **Add to Quote** button.

 <span class="wysiwyg-underline">Expected results</span>

* The **Products Not Added to the Quote** grid, containing the name and **SKU** of the created product, appears as expected.
* After the product is configured, Admin is able to add it to the **Quote** by clicking the **Add Products to Quote** button, as expected.

 <span class="wysiwyg-underline">Actual results</span>

* The **Products Not Added to the Quote** grid, containing the name and **SKU** of the created product, does not appear.
* The **Quote** page is stuck loading.

## Recommendation

Currently, there is no workaround for this issue with B2B Quote editing, but for Order and Shopping Cart management, it is possible to select products from the **Products List** instead of adding them by **SKU**. A patch to resolve the issue will be available for Adobe Commerce 2.4.1, which is scheduled for release in Q4 2020.

## Related reading

* [Adobe Commerce 2.4.0 known issue: refresh on Customer's Activities does not work](https://support.magento.com/hc/en-us/articles/360046091332)
* [Adobe Commerce 2.4.0 Known Issue: Raw message data display on Storefront](https://support.magento.com/hc/en-us/articles/360045804332)
* [Adobe Commerce 2.4.0 Known Issue: Export Tax Rates does not work](https://support.magento.com/hc/en-us/articles/360045850032)
* [Adobe Commerce 2.4.0 known issue: Orders display error](https://support.magento.com/hc/en-us/articles/360046802271)
