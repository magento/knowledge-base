---
title: MBI: Reauthenticating integrations
link: https://support.magento.com/hc/en-us/articles/360016733151-MBI-Reauthenticating-integrations
labels: API,MBI,integrations,authentication,analysis,database,data,third-party extensions,Magento Business Intelligence,how to
---

<p>This article provides solutions for re-authorizing an integration to grant Magento BI the required privileges to pull data from a third-party service. Re-authorization is required when these privileges are revoked.</p>
<h2>DATABASE INTEGRATIONS</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360016730931-Connecting-Amazon-RDS">Amazon RDS</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016505972-Connecting-Microsoft-SQL">Microsoft SQL</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016732571-Connecting-MongoDB">MongoDB</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016506672-Connecting-MySQL-via-SSH-tunnel">MySQL</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016506812-Connecting-PostgreSQL">PostgreSQL</a></li>
</ul>
<h2>SAAS INTEGRATIONS</h2>
<ul>
<li><a href="https://support.magento.com/hc/en-us/articles/360016507392-Connecting-Desk-com">Desk.com</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016505452-Connecting-Facebook-Ads">Facebook Ads</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016732531-Connecting-Google-Adwords">Google Adwords</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016732851-Connecting-Google-Analytics">Google Analytics</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016732951-Connecting-Google-ECommerce">Google ECommerce</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016505852-Connecting-Magento">Magento</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733071-Connecting-Mixpanel">Mixpanel</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733131-Connecting-Pardot">Pardot</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016507152-Connecting-PrestaShop">PrestaShop</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016504252-Connecting-Quickbooks">Quickbooks</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016507372-Connecting-Salesforce">Salesforce</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016730531-Connecting-Segment">Segment</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733191-Connecting-Shopify">Shopify</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733011-Connecting-Spree">Spree</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733211-Connecting-Stripe">Stripe</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016507372-Connecting-Salesforce">Trello</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733111-Connecting-WooCommerce">WooCommerce</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016733251-Connecting-Zendesk">Zendesk</a></li>
<li><a href="https://support.magento.com/hc/en-us/articles/360016503972">Zuora</a></li>
</ul>
<p>Having connection issues? Authorizing an integration grants Magento BI the required privileges to pull data from a third party service. Re-authorization is required when these privileges are revoked.</p>
<p>This could happen due to a number of reasons:</p>
<ul>
<li>an issue with the third party service</li>
<li>authentication token expiration</li>
<li>a change made on your administrative account</li>
<li>or an internal issue within Magento BI</li>
</ul>
<p>The status of all integrations is on the Integrations page (Manage Data &gt; Integrations):</p>
<p><img alt="Integrations_page.png" src="https://support.magento.com/hc/article_attachments/360014035232/Integrations_page.png"/></p>
<p>To re-authenticate, you may have to re-enter your account credentials. In some cases, you may be required to generate new API keys for the problem integration. Click the name of the problem integration to begin the reauthorization process.</p>
<p>If the problem persists, please <a href="https://support.magento.com/hc/en-us/articles/360019088251">submit a support ticket</a>.</p>