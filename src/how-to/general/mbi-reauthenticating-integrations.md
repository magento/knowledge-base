---
title: MBI: Reauthenticating integrations
labels: API,MBI,Magento Business Intelligence,analysis,authentication,data,database,how to,integrations,third-party extensions
---

This article provides solutions for re-authorizing an integration to grant Magento BI the required privileges to pull data from a third-party service. Re-authorization is required when these privileges are revoked.

## DATABASE INTEGRATIONS

* [Amazon RDS](https://support.magento.com/hc/en-us/articles/360016730931-Connecting-Amazon-RDS)
* [Microsoft SQL](https://support.magento.com/hc/en-us/articles/360016505972-Connecting-Microsoft-SQL)
* [MongoDB](https://support.magento.com/hc/en-us/articles/360016732571-Connecting-MongoDB)
* [MySQL](https://support.magento.com/hc/en-us/articles/360016506672-Connecting-MySQL-via-SSH-tunnel)
* [PostgreSQL](https://support.magento.com/hc/en-us/articles/360016506812-Connecting-PostgreSQL)

## SAAS INTEGRATIONS

* [Desk.com](https://support.magento.com/hc/en-us/articles/360016507392-Connecting-Desk-com)
* [Facebook Ads](https://support.magento.com/hc/en-us/articles/360016505452-Connecting-Facebook-Ads)
* [Google Adwords](https://support.magento.com/hc/en-us/articles/360016732531-Connecting-Google-Adwords)
* [Google Analytics](https://support.magento.com/hc/en-us/articles/360016732851-Connecting-Google-Analytics)
* [Google ECommerce](https://support.magento.com/hc/en-us/articles/360016732951-Connecting-Google-ECommerce)
* [Magento](https://support.magento.com/hc/en-us/articles/360016505852-Connecting-Magento)
* [Mixpanel](https://support.magento.com/hc/en-us/articles/360016733071-Connecting-Mixpanel)
* [Pardot](https://support.magento.com/hc/en-us/articles/360016733131-Connecting-Pardot)
* [PrestaShop](https://support.magento.com/hc/en-us/articles/360016507152-Connecting-PrestaShop)
* [Quickbooks](https://support.magento.com/hc/en-us/articles/360016504252-Connecting-Quickbooks)
* [Salesforce](https://support.magento.com/hc/en-us/articles/360016507372-Connecting-Salesforce)
* [Segment](https://support.magento.com/hc/en-us/articles/360016730531-Connecting-Segment)
* [Shopify](https://support.magento.com/hc/en-us/articles/360016733191-Connecting-Shopify)
* [Spree](https://support.magento.com/hc/en-us/articles/360016733011-Connecting-Spree)
* [Stripe](https://support.magento.com/hc/en-us/articles/360016733211-Connecting-Stripe)
* [Trello](https://support.magento.com/hc/en-us/articles/360016507372-Connecting-Salesforce)
* [WooCommerce](https://support.magento.com/hc/en-us/articles/360016733111-Connecting-WooCommerce)
* [Zendesk](https://support.magento.com/hc/en-us/articles/360016733251-Connecting-Zendesk)
* [Zuora](https://support.magento.com/hc/en-us/articles/360016503972)

 **Having connection issues?** Authorizing an integration grants Magento BI the required privileges to pull data from a third party service. Re-authorization is required when these privileges are revoked.

This could happen due to a number of reasons:

* an issue with the third party service
* authentication token expiration
* a change made on your administrative account
* or an internal issue within Magento BI

The status of all integrations is on the Integrations page ( **Manage D**  **ata > Integrations** ):

![Integrations_page.png](assets/Integrations_page.png)

To re-authenticate, you may have to re-enter your account credentials. In some cases, you may be required to generate new API keys for the problem integration. Click the name of the problem integration to begin the reauthorization process.

If the problem persists, please [submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) .