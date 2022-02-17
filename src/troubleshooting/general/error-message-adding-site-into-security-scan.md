---
title: Unable to add sites to Security Scan
labels: troubleshooting,site,security scan,error,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides possible solutions for the issue when the Admin user is unable to add sites into the Commerce Security Scan.

## Affected products and versions

* Adobe Commerce (all versions)

## Issue

Admin user is unable to add sites into the Commerce Security Scan. The following error message appears when trying to add a site: *Unable to submit site for scanning.*

## Cause


## Solution

1. Make sure that 52.72.230.169, 52.87.98.44, 52.86.204.1, 54.82.212.126, 52.23.56.133, 34.196.167.176, 3.218.25.102 and 8.39.228.138 are not blocked at 80 and 443 ports.
1. The confirmation code is time-sensitive. If more than 30 minutes have passed after the **Add site** is pressed, the code has probably expired.
1. Don't forget to clean the cache and make sure the validation code appears in the home page source body. The confirmation code should be injected according to the HTML markup specs: HTML comment can be injected in the page body (we suggest putting it in the footer section); META tag should be in the head section only.
1. Before pressing **Verify Confirmation code**, open the browser's developer console, click the **Network** tab and check the response from magento.com. It should be HTTP 200 (OK) and the response body should contain a JSON object.
1. If the response code is HTTP 200 and the response body is a JSON object and the `verified:false`, the code is not found on the page indeed. The **Details** should contain the explanation. For example, if the store uses self-signed SSL certificate, there will probably be a connection error. (Please check the example screenshot attached.)
1. If none of the above helps:
    * Place another HTML comment on the page:
    <!-- MAGEID:Your magento.com ID, EMAIL:your email address -->
    * Submit a support ticket and provide the following information:
        * Magento store URL
        *  MAGEID + Magento.com account email
        * First name + Last name
        * Company name
        * Store URL
        * Comma separated notification email list

## Related Reading

* [Security Scan](https://docs.magento.com/user-guide/magento/security-scan.html) in our developer documentation.
