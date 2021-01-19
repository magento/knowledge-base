---
title: Error placing order with Authorize.net Sandbox account (An error occurred on the server)
link: https://support.magento.com/hc/en-us/articles/360000570793-Error-placing-order-with-Authorize-net-Sandbox-account-An-error-occurred-on-the-server-
labels: Magento Commerce,payments,Authorize.net,troubleshooting,sandbox
---

This article provides a fix for "*An error occurred on the server*" error message when placing an order using Authorize.Net Direct Post.

## Issue

Placing an order using [Authorize.Net Direct Post](http://docs.magento.com/m2/ce/user_guide/payment/authorize-net-direct-post.html) Sandbox account causes an error message:

> 
> "An error occurred on the server. Please try to place order again"
> 
> 
> 
## Cause 1: Testing Mode is enabled

It does not seem obvious, but the Authorize.net's **Testing Mode** setting must be set to **No** even when testing with the Sandbox account.

## Solution 1: disable Testing Mode

1. Go to **Stores** > **Configuration** > **Sales** > **Payment Methods** > **Other Payment Methods** > **Authorize.net Direct Post**.

1. Set **Test Mode** to "No" (uncheck **Use system value**, then select "No" in the menu).

1. Click **Save Config**.

![authorize-net_test-mode_setting.png](https://support.magento.com/hc/article_attachments/360000616793/authorize-net_test-mode_setting.png)

## Cause 2: Incorrect URL's

The Authorize.net settings might contain incorrect URL addresses for the critical Authorize.Net resources.

## Solution 2: Provide correct URL's

* 
**Gateway URL:** https://test.authorize.net/gateway/transact.dll

* 
**Transaction Details URL:** https://apitest.authorize.net/xml/v1/request.api

* 
**API Reference:** https://developer.authorize.net/api/reference/

## If nothing helped: get debug info

If placing an order with Authorize.net fails with a non-informative "Something went wrong" error, check the Magento debug.log.

### Transact.dll

In case the debug.log is empty, check the **transact.dll** response in your web browser's console:

1. Open the console.

1. Before placing an order, go to the **Network** tab and select **Preserve log**.  
   
 ![web-console_network_preserve-log.png](https://support.magento.com/hc/article_attachments/360000616873/web-console_network_preserve-log.png)

1. Filter responses by **transact.dll** to see a response message with a possible error.  
   
 ![transact-dll_web-console_response.png](https://support.magento.com/hc/article_attachments/360000616933/transact-dll_web-console_response.png)

