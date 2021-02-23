---
title: SSL (TLS) certificates for Magento Commerce Cloud: FAQ
link: https://support.magento.com/hc/en-us/articles/360048061192-SSL-TLS-certificates-for-Magento-Commerce-Cloud-FAQ
labels: 
---

<div>
<p>This article provides quick answers to questions about getting SSL (TLS) certificates for your Magento Commerce Cloud site.  </p>
<h2>
What certificate is provided for Cloud customers? 
</h2>
<p>As a part of the Magento Commerce Cloud contract, dedicated SSL certificates are provided for both Pro and Starter customers. </p>
<h2>What does a certificate cover?</h2>
<p>For Magento Commerce Cloud Pro, both Staging and Production dedicated environments will have a SSL certificate created. Each dedicated environment outside of the Platform-as-a-Service (PaaS) Integration environments will have this certificate for the URLs that are assigned to that environment.</p>
<p>For Magento Commerce Cloud Starter and PaaS Integration environments, there will be a default technical domain that is provisioned with the environment and secured by a separate certificate.  </p>
<h2>How to add a new domain for the existing certificate?</h2>
<p>To add the domain to the service in Fastly: </p>
<ol>
<li>
Point your domain in DNS to prod.magentocloud.map.fastly.net and wait up to 6 hours.
</li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">Submit a support ticket</a> requesting to add this domain in the Nginx configuration (if you haven't done it earlier). </li>
</ol>
<h2>
How to request a certificate? 
</h2>
<p>Case 1 </p>
<p>If you have not launched a website yet, you may have received ACME Challenge CNAME from your Customer Technical Advisor (CTA). You only need an ACME challenge if you cannot immediately point your DNS to you production URL and need to get the SSL сertificates created in advance.  </p>
<p>Once you add them to your DNS panel, <a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">submit a support ticket</a>. We will validate that the CNAME has been added and apply the SSL certificate in response.  </p>
<p>Case 2</p>
<p>If your site is already live and/or you can point the URLs that will be used for your live site right away, you do not need to request a ACME CNAME. Once you add the URLs as necessary to your Magento Commerce Cloud site and point your DNS at Fastly, HTTP validation will work and either create your SSL сertificate for the first time or update your certificate with additional URLs.</p>
<h2>
Can I use my own certificates? 
</h2>
<p>Yes. </p>
<p>If you already own a certificate, upload it to a web inaccessible file location on your server via an SFTP (SSH File Transfer Protocol) client and <a href="https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket">submit a support ticket</a> letting them know the file path.</p>
<p class="warning">It is important that you do not upload the certificate files directly to the ticket. Otherwise, the certificates will be considered compromised and Adobe will need to request a new certificate.</p>
<h2>The name of your certificate</h2>
<p>The name of the SSL certificate only matters for the primary URL and it is the primary host name named by the first URL and must match to be validated and created. If you have a few URLs they will be added as subject alternate name entries to the certificate. If you have several URLs pointing to one commerce cloud site, you will only have one common name URL certification that will then have appended subject alternative names to secure your site with SSL.    </p>
</div>