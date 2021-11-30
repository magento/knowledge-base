---
title: 'MDVA-41631: Error retrieving order information without optional "telephone" value'
labels: 2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3,2.4.3-p1,2.4.4,QPT 1.1.7,QPT patches,Magento Commerce,Magento Commerce Cloud,Quality Patches Tool,GraphQL,error,order,Adobe Commerce,cloud infrastructure,on-premises
---

The MDVA-41631 patch fixes the issue where users get an error retrieving order information without optional "telephone" value through GraphQL. This patch is available when the [Quality Patches Tool (QPT)](https://support.magento.com/hc/en-us/articles/360047139492) 1.1.7 is installed. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.4.2-p1

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.4.1 - 2.4.3-p1

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users get an error retrieving order information without optional "telephone" value through GraphQL.

<ins>Steps to reproduce</ins>:

1. Go to **Store** > **Configuration** > **Customers** > **Customer Configuration** > **Name and Address Options** > **Show Telephone** and set the phone number as optional.
1. Place an order using GraphQL API as a logged-in customer.
    * Do not set the telephone number when setting the billing and shipping addresses. Follow the instructions given in [GraphQL Checkout Tutorial](https://devdocs.magento.com/guides/v2.4/graphql/tutorials/checkout/checkout-customer.html) in our developer documentation.
1. Retrieve the order using the GraphQL [customerOrders query](https://devdocs.magento.com/guides/v2.4/graphql/queries/customer-orders.html).

<pre>
<code class="language-graphql">
{
  customer {
    firstname
    lastname
    suffix
    email

    orders(filter:{number:{eq:"000000001"}}){
        items{
          billing_address {
firstname
lastname
street
city
region
region_id
postcode
telephone
country_code
}
shipping_address {
firstname
lastname
street
city
region
region_id
postcode
telephone
country_code
}
        }
    }
  }
}
</code>
</pre>

<ins>Expected results</ins>:

Users get order information.

<ins>Actual results</ins>:

Users get the following error: *"message": "Internal server error",*

## Apply the patch

To apply individual patches, use the following links depending on your deployment method:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about Quality Patches Tool, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492) in our support knowledge base.
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252) in our support knowledge base.

For info about other patches available in QPT, refer to [Patches available in QPT](https://devdocs.magento.com/quality-patches/tool.html#patch-grid) in our developer documentation.
