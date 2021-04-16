---
title: Magento prompts customers log in invalid link
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,confirmation link,known issues,patch,troubleshooting
---

The article provides a link to the patch for a known Magento 2.3.5 issue, where customers are prompted to log in, but the link to resend a confirmation email does not work.

## Affected products and versions

* Magento Commerce 2.3.5
* Magento Commerce Cloud 2.3.5

## Issue

Magento prompts customers to log in by displaying this message: _"This account is not confirmed. Click here to resend confirmation email"_. The Click here link should open the Send confirmation link page, but is inactive.

## Solution

A patch for this issue is available in Magento Technical Resources: [Resend account confirmation email link issue patch for Magento 2.3.5](https://magento.com/tech-resources/download?_ga=2.193540264.409362045.1590506265-807369446.1578680711#download2368). A permanent fix will be available in Magento 2.3.6, which is scheduled for release in Q4 1. See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions on how to apply a composer patch.

## Related reading

* Magento Support Knowledge Base articles for Magento 2.3.5 known issues: 
    
    * [Multi-shipping orders with a virtual product not processed correctly in Magento 2.3.5](https://support.magento.com/hc/en-us/articles/360044461831)
        
        
    * [Product comparison known issue in Magento 2.3.5](https://support.magento.com/hc/en-us/articles/360043970452)
    * [Country payment method issue in Magento Commerce Cloud and Magento Commerce 2.3.5 and 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360043955991)
        
        
    * [Bulk action product count known issue in Magento 2.3.5](https://support.magento.com/hc/en-us/articles/360044839691)
        
        
    * [Patch for Amazon Pay checkout issue in Magento 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360042646332)
        
        
    
    
    
* [Magento Commerce 2.3.5 Known Issues in Magento Developer Documentation](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues)