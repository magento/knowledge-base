---
title: Store credit issue during checkout in Magento 2.3.5
link: https://support.magento.com/hc/en-us/articles/360044427031-Store-credit-issue-during-checkout-in-Magento-2-3-5
labels: Magento Commerce Cloud,Magento Commerce,credit,troubleshooting,checkout,known issues,2.3.5,Order Summary
---

This article provides a workaround for the known store credit related issue during checkout in Magento 2.3.5, where shoppers get errors during checkout, after selecting and later removing store credit usage. A permanent fix will be available in Magento 2.3.6.

## Affected products and versions

* Magento Commerce 2.3.5

* Magento Commerce Cloud 2.3.5

## Issue

Steps to reproduce

1. Customer adds products to the cart and proceeds to checkout.

1. Customer specifies store credit as payment method.

1. Customer removes store credit and changes the payment method.

1. Customer proceeds through checkout.

Expected result

All order information is displayed correctly.

Actual result

Magento throws an error on the Order Summary section of the Order page.

## Solution

Customers can refresh the Order page and the information in the Order Summary will load correctly. A fix will be available in Magento 2.3.6, which is scheduled for release in Q4 2020.

## Related reading

* Magento Support Knowledge Base articles for Magento 2.3.5 known issues:

	
	* 
	[Multi-shipping orders with a virtual product not processed correctly in Magento 2.3.5](https://support.magento.com/hc/en-us/articles/360044461831)
	
	
	
	
	* 
	[Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360043955991)
	
	
	
	
	* 
	[Magento prompts customers to log in but provides invalid link](https://support.magento.com/hc/en-us/articles/360043857372)
	
	
	
	
	* [Bulk action product count known issue in Magento 2.3.5](https://support.magento.com/hc/en-us/articles/360044839691)
	
	* 
	[Patch for Amazon Pay checkout issue in Magento 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360042646332)
	
	
	
	
	* 
	[Product comparison issue in Magento 2.3.5](https://support.magento.com/hc/en-us/articles/360043970452)

* [Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues)

