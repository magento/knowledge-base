---
title: "MBI: Re-authenticating integrations"
labels: API,MBI,Magento Business Intelligence,analysis,authentication,data,database,how to,integrations,third-party extensions,Adobe Commerce
---

This article provides solutions for re-authorizing an integration to grant Magento Business Intelligence (MBI) the required privileges to pull data from a third-party service. Re-authorization is required when these privileges are revoked.

## Database and SaaS integrations

For lists of Database and SaaS integrations, refer to [Connecting External Data Using an Integration](https://docs.magento.com/mbi/data-analyst/importing-data/integrations/integrations.html) in our developer documentation. (When opening the page, use the table of contents on the left for navigation).

## Having connection issues?
Authorizing an integration grants MBI the required privileges to pull data from a third party service. Re-authorization is required when these privileges are revoked.

This could happen due to a number of reasons:

* an issue with the third party service
* authentication token expiration
* a change made on your administrative account
* or an internal issue within MBI

The status of all integrations is on the Integrations page ( **Manage Data > Integrations** ):

![Integrations_page.png](assets/Integrations_page.png)

To re-authenticate, you may have to re-enter your account credentials. In some cases, you may be required to generate new API keys for the problem integration. Click the name of the problem integration to begin the re-authorization process.

If the problem persists, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).
