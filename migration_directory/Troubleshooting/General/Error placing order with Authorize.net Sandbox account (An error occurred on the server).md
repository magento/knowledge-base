## Issue

Placing an order using [Authorize.Net Direct Post](http://docs.magento.com/m2/ce/user_guide/payment/authorize-net-direct-post.html) Sandbox account causes an error message:

>  
> "An error occurred on the server. Please try to place order again"
> 

## Cause 1: Testing Mode is enabled

It does not&nbsp;seem obvious, but the Authorize.net's __Testing Mode__ setting must be set to __No__ even when testing with the Sandbox account.

## Solution 1: disable Testing Mode

1.   Go to __Stores__ &gt; __Configuration__ &gt; __Sales__ &gt; __Payment Methods__ &gt; __Other Payment Methods__ &gt; __Authorize.net Direct Post__.
2.   Set __Test Mode__ to "No" (uncheck __Use system value__, then select "No" in the menu).
3.   Click __Save Config__.

![authorize-net_test-mode_setting.png](https://support.magento.com/hc/article_attachments/360000616793/authorize-net_test-mode_setting.png)

## Cause 2: Incorrect URL's

The Authorize.net settings might contain incorrect URL addresses for the critical Authorize.Net resources.

## Solution 2: Provide correct URL's

*   __Gateway URL:__&nbsp;`` https://test.authorize.net/gateway/transact.dll ``
*   __Transaction Details URL:__ `` https://apitest.authorize.net/xml/v1/request.api ``
*   __API Reference:__ `` https://developer.authorize.net/api/reference/ ``

## If nothing helped: get debug info

If placing an order with Authorize.net fails with a non-informative "Something went wrong" error, check the Magento `` debug.log ``.

### Transact.dll

In case the `` debug.log `` is empty, check the __transact.dll__ response in your web browser's console:

1.   Open the console.
2.   Before placing an order, go to the __Network__ tab and select __Preserve log__.  
      
    ![web-console_network_preserve-log.png](https://support.magento.com/hc/article_attachments/360000616873/web-console_network_preserve-log.png)  
      
    
3.   Filter responses by __transact.dll__ to see a response message&nbsp;with a possible error.  
      
    ![transact-dll_web-console_response.png](https://support.magento.com/hc/article_attachments/360000616933/transact-dll_web-console_response.png)