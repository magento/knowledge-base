---
title: SSL (TLS) certificates for Magento Commerce Cloud: FAQ
link: https://support.magento.com/hc/en-us/articles/115004685333-SSL-TLS-certificates-for-Magento-Commerce-Cloud-FAQ
labels: staging,production,Magento Commerce Cloud,Fastly,SSL,certificate,domain,DNS,FAQ
---


This article provides quick answers to questions about getting SSL (TLS) certificates for your Magento Commerce Cloud site. 

## 
What certificate is provided for Cloud customers?

As a part of the Magento Commerce Cloud contract, dedicated SSL certificates are provided for both Pro and Starter customers.

## What does a certificate cover?

For Magento Commerce Cloud Pro, both Staging and Production dedicated environments will have a SSL certificate created. Each dedicated environment outside of the Platform-as-a-Service (PaaS) Integration environments will have this certificate for the URLs that are assigned to that environment.

For Magento Commerce Cloud Starter and PaaS Integration environments, there will be a default technical domain that is provisioned with the environment and secured by a separate certificate. 

## How to add a new domain for the existing certificate?

To add the domain to the service in Fastly:

1. 
Point your domain in DNS to prod.magentocloud.map.fastly.net and wait up to 6 hours.

1. 
[Submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) requesting to add this domain in the Nginx configuration (if you haven't done it earlier).

## 
How to request a certificate?

Case 1

If you have not launched a website yet, you may have received ACME Challenge CNAME from your Customer Technical Advisor (CTA). You only need an ACME challenge if you cannot immediately point your DNS to you production URL and need to get the SSL сertificates created in advance. 

Once you add them to your DNS panel, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket). We will validate that the CNAME has been added and apply the SSL certificate in response. 

Case 2

If your site is already live and/or you can point the URLs that will be used for your live site right away, you do not need to request a ACME CNAME. Once you add the URLs as necessary to your Magento Commerce Cloud site and point your DNS at Fastly, HTTP validation will work and either create your SSL сertificate for the first time or update your certificate with additional URLs.

## 
Can I use my own certificates?

Yes.

If you already own a certificate, upload it using an SFTP (SSH File Transfer Protocol) client to a web inaccessible file location on your server and [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket) letting them know the file path.  

It is important that you do not upload the certificate files directly to the ticket. Otherwise, the certificates will be considered compromised and Adobe will need to request a new certificate.

## The name of your certificate

The name of the SSL certificate only matters for the primary URL and it is the primary host name named by the first URL and must match to be validated and created. If you have a few URLs they will be added as subject alternate name entries to the certificate. If you have several URLs pointing to one Magento Commerce Cloud site, you will only have one common name URL certification that will then have appended subject alternative names to secure your site with SSL.   

## What domain will be displayed in the Common Name field of the certificate?

The domain displayed on the certificate is just the first domain added to the TLS certificate, it populates the **Common Name** (**CN**) field, and browsers display this name first. The **Subject Alternative Name** (**SAN**) field contains all of the DNS names for the TLS certificate. There is no way to change or request the Common Name displayed.

## Related reading

[Provision SSL/TLS certificates](https://devdocs.magento.com/cloud/cdn/configure-fastly.html#provision-ssltls-certificates) in Magento Cloud Docs
