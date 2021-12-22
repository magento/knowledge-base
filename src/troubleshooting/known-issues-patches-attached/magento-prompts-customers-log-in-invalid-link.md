---
title: Adobe Commerce prompts customers log in invalid link
labels: 2.3.5,Magento Commerce,Magento Commerce Cloud,confirmation link,known issues,patch,troubleshooting,Adobe Commerce,cloud infrastructure,on-premises
---

The article provides a link to the patch for a known Adobe Commerce 2.3.5 issue, where customers are prompted to log in, but the link to resend a confirmation email does not work.

## Affected products and versions

* Adobe Commerce (all deployment methods) 2.3.5

## Issue

Adobe Commerce prompts customers to log in by displaying this message: *"This account is not confirmed. Click here to resend confirmation email"*. The **Click here** link should open the Send confirmation link page, but is inactive.

## Solution

A patch for this issue is available in Adobe Commerce Technical Resources: [Resend account confirmation email link issue patch for Adobe Commerce 2.3.5](https://magento.com/tech-resources/download?_ga=2.193540264.409362045.1590506265-807369446.1578680711#download2368). A permanent fix will be available in Adobe Commerce 2.3.6, which is scheduled for release in Q4 2020.

See [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) for instructions on how to apply a composer patch.

## Related reading

Articles in our support knowledge base and developer documentation for Adobe Commerce 2.3.5 known issues:

* [Adobe Commerce 2.3.5 known issue: virtual product multi-ship orders](https://support.magento.com/hc/en-us/articles/360044461831)
* [Product comparison known issue in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360043970452)
* [Adobe Commerce 2.3.5, 2.3.5-p1 patch: country payment issue](https://support.magento.com/hc/en-us/articles/360043955991)
* [Adobe Commerce prompts customers log in invalid link](https://support.magento.com/hc/en-us/articles/360043857372)
* [Bulk action product count known issue in Adobe Commerce 2.3.5](https://support.magento.com/hc/en-us/articles/360044839691)
* [Patch for Amazon Pay checkout issue in Adobe Commerce 2.3.5-p1](https://support.magento.com/hc/en-us/articles/360042646332)
* [Adobe Commerce 2.3.5 Known Issues](https://devdocs.magento.com/guides/v2.3/release-notes/release-notes-2-3-5-commerce.html#known-issues)
