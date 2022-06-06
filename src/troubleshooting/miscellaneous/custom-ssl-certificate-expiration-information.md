---
title: Custom SSL certificate expiration information
labels: ssl,certificate,Adobe Commerce,cloud infrastructure,custom,button,troubleshooting,security,Magento,2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.4.0,2.4.0-p1,2.4.1-p1,2.4.2,2.4.2-p1,2.3.7-p1,2.3.7-p2,2.4.1,2.4.2-p2,2.4.3,2.4.3-p1
---

This article provides a solution for when a custom SSL certificate was updated with an Adobe provided SSL certificate.

## Affected products and versions

Adobe Commerce on cloud infrastructure, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Issue

Adobe Commerce automatically updates SSL certificates 30 days prior to expiration. This automation does not check if the certificate being replaced is an internal SSL or a custom third-party SSL and will replace it with a valid internal SSL upon detection of expiration. This can cause confusion for site owners and operators that expect to have the custom certificate on the site, as well as the potential for other functionality issues including, but not limited to, a site outage. 

<ins>Steps to reproduce</ins>

1. Custom SSL certificate installed for the website.
1. Automation detects the custom SSL certificate is 30 days away from expiring.
1. Adobe Commerce automatically replaces the custom certificate with our internal certificate.

<ins>Expected results</ins>

Adobe Commerce skips custom certificates when running its automated SSL certificate update.

<ins>Actual results</ins>

Adobe Commerce updates any certificate when it is 30 days from expiration.

## Solution

When a merchant elects to use their own custom SSL certificate, it must be updated more than 30 days prior to the certificate expiration to ensure it will not be replaced by an internal Adobe Commerce SSL certificate.

If you are in a situation where your custom SSL was replaced by our internal SSL and you want to replace it with your updated custom SSL certificate, please [submit a support request](https://support.magento.com/hc/en-us/articles/360019088251) with the location you uploaded your new certificate files. Please include the start date of the new SSL. Once we have this information, we can move forward with installing the new SSL certificate.

## Related reading

* [SSL (TLS) certificates for Magento Commerce Cloud: FAQ](https://support.magento.com/hc/en-us/articles/360048061192) in our support knowledge base.
* [Command-line tools reference: magento-cloud certiificate:add](https://devdocs.magento.com/guides/v2.4/reference/cli/magento-cloud.html#certificateadd) in our developer documentation.
* [Launch checklist](https://devdocs.magento.com/cloud/live/site-launch-checklist.html)in our developer documentation.
* [Access Site-Wide Analysis Tool](https://docs.magento.com/user-guide/reports/site-wide-analysis-tool.html#step-2-access-site-wide-analysis-tool) in our user guide.
