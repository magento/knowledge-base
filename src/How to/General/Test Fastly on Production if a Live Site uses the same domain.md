---
title: Test Fastly on Production if a Live Site uses the same domain
link: https://support.magento.com/hc/en-us/articles/360003581393-Test-Fastly-on-Production-if-a-Live-Site-uses-the-same-domain
labels: test,production,Magento Commerce Cloud,Fastly,domain,DNS,how to
---

If you have a live site up-and-running on your production domain (example.com) and you need to test your new store on Magento Cloud's Production environment with Fastly CDN enabled, we recommend using the subdomain (like prod.example.com), having previously added it to Fastly, for any pre-launch testing activities. This article discusses the details and provides useful links to the related Magento documentation resources. 

 Issue
-----

 Your current store that uses the example.com production domain is live and operating. However, you need to test your new store, built with Magento Commerce (Cloud) and deployed to the Production environment, with the Fastly full page cache service enabled.

 The problem is that the Production environment of your Magento Cloud project uses the same live domain (example.com), and you cannot switch your new site to this domain, simultaneously having your current live store running — on the same domain.

 ### Why use Fastly for testing on Production environment?

 In theory, you could skip using Fastly CDN and test your Magento Cloud store on the Production environment without full page cache enabled.

 However, with full page cache enabled, your store performs differently; you never know the real live performance of your site if you have not tested it with CDN before launching. Testing your store on Production with Fastly CDN enabled is the official Magento recommendation.

 Solution: use production subdomain
----------------------------------

 Use the first-level subdomain (prod.example.com) for your new Magento Cloud store on the Production environment while keeping the current live site on the base domain (example.com).

 When planning your Magento Cloud project, you may specify such a production subdomain and request the Cloud Infrastructure Team to point the subdomain to the Fastly service.

 Follow these steps to process the subdomain within your Magento Cloud project:

 
 *  [Submit a support ticket](https://support.magento.com/hc/en-us/articles/360019088251) requesting to add the subdomain to the Fastly service / Nginx configuration (for Pro plan).
 * Configure the corresponding DNS settings on your side.
 
 After performing the steps for subdomain configuration, you must also take these steps to validate your production domain for the SSL certificate:

 
 * Upload the DNS TXT record for SSL validation of your production domain.
 * Submit a support ticket requesting to validate the production domain for the SSL certificate.
 
 Using the subdomain allows you to perform a "soft launch" of your store in future — since such launch only requires updating the corresponding DNS settings.

 Related documentation
---------------------

 ### Knowledge Base

 
 * [Configure Fastly DNS settings on Staging and Production environments](https://support.magento.com/hc/en-us/articles/115004685913)
 * [Set up Fastly for Starter plan on Cloud](https://support.magento.com/hc/en-us/articles/360002491773)
 * [Potential blockers for launching on Magento Commerce (Cloud)](https://support.magento.com/hc/en-us/articles/115002517274)
 
 ### DevDocs

 
 * [Fastly Overview](http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html)
 * [Go live checklist: DNS configurations for Fastly](http://devdocs.magento.com/guides/v2.2/cloud/live/go-live-checklist.html#dns)
 
