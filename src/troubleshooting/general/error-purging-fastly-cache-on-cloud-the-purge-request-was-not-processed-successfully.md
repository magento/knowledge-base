---
title: Error purging Fastly cache on Cloud (The purge request was not processed successfully)
labels: API,Fastly,Magento Commerce Cloud,VCL,purge,troubleshooting,Adobe Commerce,cloud infrastructure
---

This article provides a fix for when you use a Fastly purge option, and you receive the error: *The purge request was not processed successfully*. Fastly is a CDN and caching service included with Adobe Commerce on cloud infrastructure plans and implementations. If you attempt to use a Fastly purge option, and it does not process, you may have incorrect Fastly credentials in your environment or may have encountered an issue.

This information helps you verify and test Fastly headers for your live site and origin servers.

## Affected versions

* Adobe Commerce on cloud infrastructure 2.1.X and later
* Fastly 1.2.27 and later

## Issue

Caching is working, but when you try to purge, you receive an error or it doesn't work. The error includes: “The purge request was not processed successfully.”

## Cause

You may have incorrect credentials set in your environment or need to upload VCL snippets.

## Resolve

### Check Fastly credentials

Verify if you have the correct Fastly Service ID and API token in your environment. If you have Staging credentials in Production, the purges may not process or process incorrectly.

1. Log in to your local Commerce Admin as an administrator.
1. Click **Stores** > Settings > **Configuration** > **Advanced** > **System** and expand **Full Page Cache**.    ![magento_full_page_cache_2.4.1.png](assets/magento_full_page_cache_2.4.1.png)    
1. Expand Fastly Configuration and verify the Fastly Service ID and API token for your environment.
1. If you modify the values, click Test Credentials.

### Check VCL snippets

If the credentials are correct, you may have issues with your VCLs. To list and review your VCLs per service, enter the following API call in a terminal:

```clike
curl -X GET -s https://api.fastly.com/service/<Service ID>/version/<Editable Version #>/snippet/ -H "Fastly-Key:FASTLY_API_TOKEN"
```

Review the list of VCLs. If you have issues with the default VCLs from Fastly, you can upload again or verify the content per the [Fastly default VCLs](https://github.com/fastly/fastly-magento2/tree/master/etc/vcl_snippets). For editing your custom VCLs, see [Custom Fastly VCL snippets](http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html) in our developer documentation.

## More information

In our developer documentation:

* [About Fastly](https://devdocs.magento.com/cloud/cdn/cloud-fastly.html)
* [Set up Fastly](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html)
* [Custom Fastly VCL snippets](http://devdocs.magento.com/guides/v2.2/cloud/configure/cloud-vcl-custom-snippets.html)
