---
title: Magento SSL/TLS certificate requirements and clean up
labels: DNS,FAQ,Fastly,Magento Commerce Cloud,SSL,certificate,domain,production,staging
---

This article provides answers to questions about the Magento SSL/TLS certificate clean up efforts, how this impacts your certificates, and new certificate requirements on Magento Commerce Cloud.

## What SSL/TLS certificate does Magento provide?

Magento provides a Domain-Validated [Let’s Encrypt SSL/TLS certificate](https://letsencrypt.org/) to serve secure HTTPS traffic from Fastly. Magento provides one certificate for each Pro Production, Staging, and Starter Production environment to secure all domains in that environment.

## How to add a new domain for the existing certificate?

To add the domain to the service in Fastly:

1. Point your domain in DNS to prod.magentocloud.map.fastly.net and wait up to 6 hours.
1. [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) requesting to add this domain in the Nginx configuration (if you haven't done it earlier).

## How to request a certificate?

Case 1

If you have not launched a website yet, you may have received ACME Challenge CNAME from your Customer Technical Advisor (CTA). You only need an ACME challenge if you cannot immediately point your DNS to your production URL and need to get the SSL certificates created in advance.

Once you add them to your DNS panel, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) . We will validate that the CNAME has been added and apply the SSL certificate in response.

Case 2

If your site is already live and/or you can point the URLs that will be used for your live site right away, you do not need to request an ACME CNAME. Once you add the URLs as necessary to your Magento Commerce Cloud site and point your DNS at Fastly, HTTP validation will work and either create your SSL certificate for the first time or update your certificate with additional URLs.

## Can I use my own SSL/TLS certificate?

You can provide your own SSL/TLS certificate instead of using the [Let’s Encrypt certificate](https://letsencrypt.org/) provided by Magento. However, this process requires additional work to set up and maintain. To choose this option, submit a [Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251) or work with your CTA to add custom hosted certificates to your Cloud environments. If the domains are no longer in use, they will be automatically purged from our system and no further action is required.If you already own a certificate, upload it using an SFTP (SSH File Transfer Protocol) client to a web inaccessible file location on your server and [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) letting them know the file path.

>![warning]
>
>It is important that you do not upload the certificate files directly to the ticket. Otherwise, the certificates will be considered compromised and Adobe will need to request a new certificate.

## The name of your certificate

The name of the SSL certificate only matters for the primary URL and it is the primary host name named by the first URL and must match to be validated and created. If you have a few URLs, they will be added as subject alternate name entries to the certificate. If you have several URLs pointing to one Magento Commerce Cloud site, you will only have one common name URL certification that will then have appended subject alternative names to secure your site with SSL.

## What domain will be displayed in the Common Name field of the certificate?

The domain displayed on the certificate is just the first domain added to the TLS certificate, it populates the **Common Name** ( **CN** ) field, and browsers display this name first. The **Subject Alternative Name** ( **SAN** ) field contains all of the DNS names for the TLS certificate. There is no way to change or request the Common Name displayed.

## Can I use wildcard TLS certificates?

No. As part of our TLS optimization, Magento is ending support for wildcard TLS certificates. We are identifying those merchants that use a wildcard certificate and are configured in the Fastly console for Magento, and contacting them, and asking that they be replaced with exact domains to ensure TLS coverage. To replace a wildcard TLS certificate, please visit the [domain section](https://devdocs.magento.com/cloud/cdn/configure-fastly-customize-cache.html#manage-domains) of the Fastly plugin. From here, exact domains can be added, and the wildcard can be removed. Please note, DNS will need to point to Fastly for these new domains to route through the CDN. Once the domains are added and DNS is updated, a matching [Let’s Encrypt](https://letsencrypt.org/) certificate will be provisioned. If you don't remove a domain that is pointing to Fastly using a wildcard, Magento will delete the shared certificate. This may result in a site outage if you do not have the URL FQDN configured and the same URL FQDN set up in your DNS. You should therefore confirm that the URL’s configured also have a one-to-one match in their DNS pointing to Fastly.

## What should I do if my domain is no longer pointing to Magento?

If your domain is no longer pointing to Magento, please remove it from the Fastly/Magento system. See Fastly [Deleting a domain](https://docs.fastly.com/en/guides/working-with-domains#deleting-a-domain) to learn more. While it is not necessary to point your domain to Magento, confirm if a top-level domain TLS certificate is required. If a top-level domain is required, please update your DNS to point to Magento. If it is already pointing to Magento, update your CAA record to include [lets-encrypt](https://letsencrypt.org/) . If you perform these steps, you will see the LE Cert updated with the necessary secondary URL’s that the cert covers.​

## Related reading

 [Provision SSL/TLS certificates](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#provision-ssltls-certificates) in Magento DevDocs
