---
title: 403 errors when accessing Site-Wide Analysis Tool on Adobe Commerce
labels: 2.4.1,2.4.1+,Magento Commerce Cloud,Site-Wide Analysis Tool,admin,error,permissions,troubleshooting,Magento,Adobe Commerce,cloud infrastructure
---

This article provides a solution for when you receive 403 errors when trying to access the Site-Wide Analysis Tool on Adobe Commerce.

## Affected products and versions

Adobe Commerce on cloud infrastructure 2.4.1+

## Issue

You get a 403 error when trying to access the Site-Wide Analysis Tool.

 <ins>Steps to reproduce:</ins>

Log in to the Commerce Admin panel and click **Reports** > *System Insights* > **Site-Wide Analysis Tool**.

 <ins>Expected result:</ins>

You see the Site-Wide Analysis Tool.

<ins>Actual result:</ins>

You see: *Error 403.*

## Cause

There are two potential causes:

* You may have HTTP access control enabled. The Site-Wide Analysis Tool Dashboard does NOT support customers if they have HTTP Auth enabled.
* Your Commerce administrator account may not have been assigned to the *Site-Wide Analysis Tool* Resource.

## Solution

### Check if the tool is blocked by bot protection software

If you use Cloudflare for bot protection, check if it is blocking Site-Wide Analysis Tool. To do this, run the following command in CLI, having replaced <Admin URL> with your actual URL:

```cURL
curl -sIL -X GET <Admin URL>/swat/key/index | grep HTTP
HTTP/2 403
```
#### Correct 200 response and JSON output

If the response is correct 200 response and JSON output, then Cloudflare is not blocking the tool and you need to [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) to escalate the issue with Site-Wide Analysis Tool access.

#### 403 response

If the response is 403, most likely Cloudflare is blocking Site-Wide Analysis Tool and you need to whitelist its IP's:

* 107.23.33.174
* 3.225.9.244
* 3.88.83.85

#### 500 (Fatal error) response

If a response is 500 (Fatal error), please install the MDVA-38526 patch. Use one of the following links to download the patch, depending on your Adobe Commerce version and type of patch you want:

* Adobe Commerce on cloud infrastructure 2.4.2 patch: [MDVA-38526_EE_2.4.2_v1.patch.zip](assets/MDVA-38526_EE_2.4.2_v1.patch.zip)
* Adobe Commerce on cloud infrastructure 2.4.2 composer patch: [MDVA-38526_EE_2.4.2_v1.composer.patch.zip](assets/MDVA-38526_EE_2.4.2_v1.composer.patch.zip)
* Adobe Commerce on cloud infrastructure 2.4.1-p1 patch: [MDVA-38526_EE_2.4.1-p1_v3.patch.zip](assets/MDVA-38526_EE_2.4.1-p1_v3.patch)
* Adobe Commerce on cloud infrastructure 2.4.1-p1 composer patch: [MDVA-38526_EE_2.4.1-p1_COMPOSER_v3.patch.zip](assets/MDVA-38526_EE_2.4.1-p1_COMPOSER_v3.patch.zip)

#### Response not JSON

If response output is not JSON, it could be because of PWA/Headless implementation. If you are using headless implementation, update the UPWARD configuration to bypass requests to Adobe Commerce Origin. For this, in the Adobe Commerce Admin, under **Stores** > **Configuration** > **General** > **Web** > **UPWARD PWA Configuration** > **Front Name Allowlist**, add *swat*.


If you are still not able to access the Site-Wide Analysis Tool, when you log in next time in to the Commerce Admin panel and navigate to **Reports** > *System Insights* > **Site-Wide Analysis Tool**, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket).

## Related reading

* [Adobe Commerce Site-Wide Analysis Tool report, an introduction video](https://support.magento.com/hc/en-us/articles/360048980691-Magento-Site-Wide-Analysis-Tool-report-an-introduction-video) in our support knowledge base (you need to be logged in to view the article).
* [Adobe Commerce Site-Wide Analysis Tool Report FAQ](https://support.magento.com/hc/en-us/articles/360048646671-Magento-Site-Wide-Analysis-Tool-Report-FAQ) in our support knowledge base.
