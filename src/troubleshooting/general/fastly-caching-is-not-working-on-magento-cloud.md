---
title: Fastly caching is not working on Adobe Commerce on cloud infrastructure
labels: Fastly,Magento Commerce Cloud,caching,headers,troubleshooting,x-cache,Adobe Commerce,cloud infrastructure
---

This article provides a fix for Fastly caching not working on your site. Fastly is a CDN and caching service included with Adobe Commerce on cloud infrastructure plans and implementations. To verify the Fastly extension is working or to debug the Fastly extension, you can use the curl command to display certain response headers. The values of these response headers indicate whether or not Fastly is enabled and functioning properly. You can further investigate issues based on the values of headers and caching behavior.

This information helps you verify and test Fastly headers for your live site and origin servers.

## Affected versions

* Adobe Commerce on cloud infrastructure
* Fastly 1.2.27 and later

## Issue

Caching may not be working for your live site, Production, or Staging environments.

## Cause

Typically, configurations, incorrect credentials, or unsupported Adobe Commerce extensions are the issue for Fastly caching not working. If you set up Fastly incorrectly, or use an unsupported extension that strips headers, Fastly caching won't work.

## Test with commands and check response headers

### Test with dig command

First, check for headers with a dig command to the URL. In a terminal application, enter dig <url> to verify Fastly services display in the headers. For additional dig tests, see Fastly’s [Testing before changing DNS](https://docs.fastly.com/guides/basic-configuration/testing-setup-before-changing-domains).

For example:

* Live site: `dig http[s]://<your domain>`
* Staging: `dig http[s]://staging.<your domain>.c.<instanceid>.ent.magento.cloud`
* Production: `dig http[s]://<your domain>.{1|2|3}.<project ID>.ent.magento.cloud`

### Test with curl command

Next, use a curl command to verify X-Magento-Tags exist and additional header information. The command format differs for Staging and Production.

For more information on these commands, you bypass Fastly when you inject `-H "host:URL"`, replace with origin to connecting location (CNAME information from your OneDrive Spreadsheet), `-k` ignores SSL, and `-v` provides verbose responses. If headers display correctly, check the live site and verify headers again.

* If header issues occur when directly hitting the origin servers bypassing Fastly, you may have issues in your code, with extensions, or with the infrastructure.
* If you encounter no errors directly hitting the origin servers, but headers are missing hitting the live domain through Fastly, you may have Fastly errors.

First, check your **live site** to verify the response headers. The command goes through the Fastly extension to receive responses. If you don’t receive the correct headers, then you should test the origin servers directly. This command returns the values of the `Fastly-Magento-VCL-Uploaded` and `X-Cache` headers.

1. In a terminal, enter the following command to test your live site URL:
    ```clike
    curl http://<live URL> -vo /dev/null -HFastly-Debug:1 [--resolve]
    ```
    Use `--resolve` only if your live URL isn’t set up with DNS and you don’t have a static route set. For example:
    ```clike
    curl http://www.mymagento.biz -vo /dev/null -HFastly-Debug:1
    ```    
1. Verify the response headers to ensure Fastly is working. The output for this command is similar to curl Staging and Production. For example, you should see the returned unique headers by this command:
    ```clike
    < Fastly-Magento-VCL-Uploaded: yes    < X-Cache: HIT, MISS
    ```    

To test **Staging** :

```clike
curl http[s]://staging.<your domain>.c.<instanceid>.ent.magento.cloud -H "host: <url>" -k -vo /dev/null -HFastly-Debug:1
```

To test **Production load balancer** :

```clike
curl http[s]://<your domain>.c.<project ID>.ent.magento.cloud -H "host: <url>" -k -vo /dev/null -HFastly-Debug:1
```

To test **Production Origin node** :

```clike
curl http[s]://<your domain>.{1|2|3}.<project ID>.ent.magento.cloud -H "host: <url>" -k -vo /dev/null -HFastly-Debug:1
```

A direct Origin node:

```clike
curl http[s]://<your domain>.{1|2|3}.<project ID>.ent.magento.cloud -H "host: <url>" -k -vo /dev/null -HFastly-Debug:1
```

For example, if you have a public URL www.mymagento.biz, enter a command similar to the following to test the production site:

```clike
curl -k https://www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud -H 'Host: www.mymagento.biz' -vo /dev/null -HFastly-Debug:1
```

### Check response headers

* Check the returned response headers and values:
* Fastly-Magento-VCL-Uploaded should be present
* X-Magento-Tags should be returned
* Fastly-Module-Enabled should be either Yes or the Fastly extension version number
* X-Cache should be either HIT or HIT, HIT
* x-cache-hits should be 1,1
* Cache-Control: max-age should be greater than 0
* Pragma should be cache

The following example shows the correct values for Pragma, X-Magento-Tags, and Fastly-Module-Enabled.

The output for curl commands can be lengthy. The following is a summary only:

```clike
* STATE: INIT => CONNECT handle 0x600057800; line 1402 (connection #-5000)
* Rebuilt URL to: https://www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud/
* Added connection 0. The cache now contains 1 members
* Trying 192.0.2.31...
* STATE: CONNECT => WAITCONNECT handle 0x600057800; line 1455 (connection #0)
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                             Dload  Upload   Total   Spent    Left  Speed
  0     0    0     0    0     0      0      0 --:--:-- --:--:-- --:--:--     0* Connected to www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud (54.229.163.31) port 443 (#0)
* STATE: WAITCONNECT => SENDPROTOCONNECT handle 0x600057800; line 1562 (connection #0)
  0     0    0     0    0     0      0      0 --:--:-- --:--:-- --:--:--     0* ALPN, offering h2

  ... portion omitted for brevity ...

< Set-Cookie: mage-messages=%5B%5D; expires=Wed, 22-Nov-2017 17:39:58 GMT; Max-Age=31536000; path=/
< Pragma: cache
< Expires: Wed, 23 Nov 2016 17:39:56 GMT
< Cache-Control: max-age=86400, public, s-maxage=86400, stale-if-error=5, stale-while-revalidate=5
< X-Magento-Tags: cb_welcome_popup store cb cb_store_info_mobile cb_header_promotional_bar cb_store_info cb_discount-promo-bar cpg_2 cb_83 cb_81 cb_84 cb_85 cb_86 cb_87 cb_88 cb_89 p5646 catalog_product p5915 p6040 p6197 p6227 p7095 p6109 p6122 p6331 p7592 p7651 p7690
< Fastly-Module-Enabled: yes
< Strict-Transport-Security: max-age=31536000
    < Content-Security-Policy: upgrade-insecure-requests
< X-Content-Type-Options: nosniff
< X-XSS-Protection: 1; mode=block
< X-Frame-Options: SAMEORIGIN
< X-Platform-Server: i-dff64b52
<
* STATE: PERFORM => DONE handle 0x600057800; line 1955 (connection #0)
* multi_done
  0     0    0     0    0     0      0      0 --:--:--  0:00:02 --:--:--     0
* Connection #0 to host www.mymagento.biz.c.sv7gVom4qrpek.ent.magento.cloud left intact
```

## Resolve

### Fastly-Module-Enabled is not present

If you don’t receive a “yes” for the Fastly-Module-Enabled in the response headers, you need to verify the Fasty module is installed and selected.

To verify Fastly is enabled in Staging and Production, check the configuration in the Commerce Admin for each environment:

1. Log into the Admin console for Staging and Production using the URL with /admin (or the changed Admin URL).
1. Navigate to Stores > Configuration > Advanced > System. Scroll and click Full Page Cache.
1. Ensure Fastly CDN is selected.
1. Click on Fastly Configuration. Ensure the Fastly Service ID and Fastly API token are entered (your Fastly credentials). Verify you have the correct credentials entered for the Staging and Production environment. Click Test credentials to help.
1. Edit your composer.json and ensure the Fasty module is included with version. This file has all modules listed with versions.
    * In the “require” section, you should have "fastly/magento2": <version number>
    * In the “repositories” section, you should have:
    ```clike
    "fastly-magento2": {    "type": "vcs",    "url": "https://github.com/fastly/fastly-magento2.git"    }
    ```    
1. If you use Configuration Management, you should have a configuration file. Edit the app/etc/config.app.php (2.0, 2.1) or app/etc/config.php (2.2) file and make sure the setting `'Fastly_Cdn' => 1` is correct. The setting should not be `'Fastly_Cdn' => 0` (meaning disabled).If you enabled Fastly, delete the configuration file and run the bin/magento magento-cloud:scd-dump command to update. For a walk-through of this file, see [Example of managing system-specific settings](http://devdocs.magento.com/guides/v2.2/cloud/live/sens-data-initial.html) in our developer documentation.

If the module is not installed, you need to install in an [Integration environment](https://support.magento.com/hc/en-us/articles/360043032152-Integration-Environment-enhancement-request-Pro-and-Starter) branch and deployed to Staging and Production. See [Set up Fastly](http://devdocs.magento.com/guides/v2.1/cloud/access-acct/fastly.html) for instructions in our developer documentation.

### Fastly-Magento-VCL-Uploaded is not present

During installation and configuration, you should have uploaded the Fastly VCL. These are the base VCL snippets provided by the Fastly module, not custom VCL snippets you create. For instructions, see [Upload Fastly VCL snippets](http://devdocs.magento.com/guides/v2.2/cloud/access-acct/fastly.html#upload-vcl-snippets) in our developer documentation.

### X-Cache includes MISS

If X-Cache is either HIT, MISS or MISS, MISS, enter the same curl command again to make sure the page wasn’t recently evicted from the cache.

If you get the same result, use the curl commands and verify the response headers:

* Pragma is cache
* X-Magento-Tags exists
* Cache-Control: max-age is greater than 0

If the issue persists, another extension is likely resetting these headers. Repeat the following procedure in Staging to disable extensions to find which one is causing the issue. After you locate the extension(s) causes issues, you will need to disable the extension(s) in Production.

1. Log in to the Commerce Admin on your Staging or Production site.
1. Navigate to Stores > Settings > Configuration > Advanced > Advanced.
1. In the Disable Modules Output section in the right pane, locate and disable all of your extensions\*.
1. Click Save Config.
1. Click System > Tools > Cache Management.
1. Click Flush Magento Cache.
1. Now enable one extension at a time, saving the configuration and flushing the cache.
1. Try the curl commands and verify the response headers.
1. Repeat steps 8 and 9 to enable and test the curl commands. When the Fastly headers no longer display, you have found the extension causing issues with Fastly.

When you isolate the extension that is resetting Fastly headers, contact the extension developer for additional assistance. We cannot provide fixes or updates for third-party extension developers to work with Fastly caching.

## More information in our developer documentation:

* [About Fastly](https://devdocs.magento.com/cloud/cdn/cloud-fastly.html)
* [Set up Fastly](http://devdocs.magento.com/guides/v2.1/cloud/access-acct/fastly.html)
* [Custom Fastly VCL snippets](http://devdocs.magento.com/guides/v2.1/cloud/configure/cloud-vcl-custom-snippets.html)
