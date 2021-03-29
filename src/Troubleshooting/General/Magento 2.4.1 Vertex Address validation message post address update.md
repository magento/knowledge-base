---
title: Magento 2.4.1 Vertex Address validation message post address update
labels: Magento Commerce Cloud,Magento Commerce,troubleshooting,shipping,Vertex,2.4.1,billing
---

This article describes a Magento 2.4.1 known issue where Vertex address validation is not working during Payment step when a shipping address is used that is different to the billing address. The issue is scheduled to be fixed in Magento 2.4.1. ## Affected products and versions

* Magento Commerce 2.4.1 with Vertex integration enabled
* Magento Commerce Cloud 2.4.1 with Vertex integration enabled

## Issue

Prerequisites:

Enable Vertex Address Cleansing. For steps, refer to Magento User Guide [Configuring Storefront Address Cleansing](https://docs.magento.com/user-guide/tax/vertex-configure-address.html).

Steps to reproduce:

1. Create an account and log in.
1. Add an item to cart by clicking Add to Cart. Click on the Cart icon and then click Proceed to Checkout. 
1. Enter a valid address in the Shipping Address field.
1. Check one of the options under Shipping Methods. Then click Next.
1. If the Address Validation suggests different address information, click Update address and click Next.
1. Uncheck the My billing and shipping address are the same checkbox.

First scenario:  

Follow the [above six steps](https://support.magento.com/hc/en-us/articles/360050139631#first_sixth) and then:

1. Enter a new valid billing address. 
1. Click on the Update button. It will show the message/suggestion like - "_The address is not valid._". This will follow with an address suggestion like - "_Postcode : XXXXX- XXXX Street : XXX City street XXX_"
1. Click on the Update button (do not click on the Update address button of Vertex address suggestion).
1. Click on the Edit button of the updated billing address.
1. Select the address from address dropdown.
1. Click on the Update button.

Expected result:

The old validation message/suggestion message is removed.

Actual result:

The validation message/suggestion _"We did not find a valid address Postcode : XXXXX-XXXX Street : XXX City street XXX"_ message is NOT removed. The same issue occurs if you enter an invalid address in the form.

Second scenario:  

Follow the [above six steps](https://support.magento.com/hc/en-us/articles/360050139631#first_sixth) and then:

1. Fill the address form with a valid address. 
1. Click on the Update button. It will show the message/suggestion like - "_The address is not valid._" This will follow with an address suggestion like - "_Postcode : XXXXX-XXXX Street : XXX City street XXX_".
1. Click on the Update button (do not click on the Update address button of vertex address suggestion).
1. Check the “_My billing and shipping address are the same_” drop-down.

Expected result:

The old validation message/suggestion message is removed.

Actual result:

The validation message/suggestion _"We did not find a valid address Postcode : XXXXX-XXXX Street  XXX City street XXX"_ message is NOT removed. The same issue occurs if you enter an invalid address in the form.

## Related reading

[Magento 2.3.6, 2.4.0-p1 and 2.4.1 known issue: cannot log in to dotdigital when account enabled](https://support.magento.com/hc/en-us/articles/360050092291)