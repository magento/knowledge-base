---
title: Do I need Fastly for a Headless Magento site?
link: https://support.magento.com/hc/en-us/articles/115005130374-Do-I-need-Fastly-for-a-Headless-Magento-site-
labels: staging,production,Magento Commerce Cloud,Fastly,SSL,Magento,headless,Pro,DDOS,WAF,FAQ,Starter
---

<p class="info">All customers must use Fastly for their production and staging environments. Fastly is a Content Delivery Network (CDN) that provides full page caching, image optimization, and security services (DDoS and WAF) as part of your Magento Commerce Cloud projects. These are core components of the Magento solution, providing increased performance and security. These features are part of Adobe's PCI Compliance. You must set up these Fastly services on your Starter Master, Staging, Pro Staging and Production environments. If you are using Magento Commerce in a headless deployment, all API traffic from the public internet must pass through Fastly and we highly recommend that you use Fastly to cache GraphQL responses. See <a href="https://devdocs.magento.com/guides/v2.3/graphql/caching.html#caching-with-fastly">Caching with Fastly in the GraphQL Developer Guide</a>.</p>

## Question

I am developing a headless implementation of Magento. Do I still need to use Fastly as a CDN service for it?

## Answer

No, you don't. In this situation, you may skip using Fastly — at least, in the beginning of development.

>  
> "The only situation you may not want to enable is for a headless deployment."
> 
> [Fastly on Magento DevDocs](https://devdocs.magento.com/cloud/cdn/cloud-fastly.html)
> 

Still, most probably, you will need Fastly for using its SSL certificate.

All Magento Commerce (Cloud) Customers get a shared SSL certificate from Fastly as a part of the Cloud subscription plan. Adding own SSL certificate to Fastly is a separate and rather expensive paid option. Thus, we strongly recommend to enable Fastly and, at least, test it on Staging and Production environments before going live — even for your headless Magento website.

## More information

* [Headless Websites: What's the Big Deal with Decoupled Architecture?](https://pantheon.io/blog/headless-websites-whats-big-deal-decoupled-architecture) by [Josh Koenig](https://pantheon.io/team/josh-koenig)
* [Fastly on DevDocs](https://devdocs.magento.com/cloud/cdn/cloud-fastly.html)