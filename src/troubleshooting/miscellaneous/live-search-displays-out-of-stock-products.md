---
title: Live Search displays out-of-stock products regardless of stock status settings in admin
labels: 2.4.x,Magento Commerce,Magento Commerce Cloud,Live Search,error,known issues,PLP,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides information on the known issue where the Product Listing Page (PLP) shows the *We can’t find products matching the selection* error while the search popover returns some items.

## Affected products and versions

Adobe Commerce (all deployment methods) 2.4.x

## Issue

Live Search displays search results regardless of the stock status settings in the admin. Even when the **Display Out-of-Stock Products** is set to *No*, the products are displayed. It results in the PLP error *We can’t find products matching the selection*.

<ins>Steps to reproduce</ins>:

1. Create a category, add products. (Example: Category = Jeans, Product1 = Blue Jeans, Product2 = Black Jeans)
1. Make all products in the category out of stock.
1. Set **Display Out-of-Stock Products** to *No*.
1. On the storefront, enter "Jeans" in the search field.
1. Click **View All** in the pop-up.

<ins>Expected result</ins>:

You see the *We can’t find products matching the selection* message on PLP, and no products are displayed on the search pop-up.

<ins>Actual result</ins>:

You see the *We can’t find products matching the selection* message on PLP, and both products are displayed on the search pop-up.

## Solution

There is no solution for this issue at the moment. Our Live Search team will soon provide a setting to configure Live Search to display products correctly.

## Related reading

[Install Live Search](https://docs.magento.com/user-guide/live-search/install.html) in our user guide.
