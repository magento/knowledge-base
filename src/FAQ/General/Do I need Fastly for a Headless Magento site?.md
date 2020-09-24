## <span class="wysiwyg-color-black">__Question__</span>

I am developing a headless implementation of Magento. Do I still need to use Fastly as a CDN service for it?

## <span class="wysiwyg-color-black">__Answer__</span>

No, you don't. In this&nbsp;situation, you may skip using Fastly — at least, in the beginning of development.

<blockquote cite="http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html">
<p>"The only situation you may not want to enable is for a headless deployment."</p>
<p><a href="http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html"><em>Fastly on Magento DevDocs</em></a></p>
</blockquote>

Still, most probably, you will need Fastly for using its SSL certificate.

All Magento Commerce (Cloud) Customers get a shared SSL certificate from Fastly as a part of the Cloud subscription plan. Adding own SSL certificate to Fastly is a separate and rather expensive paid option. Thus, we strongly recommend to enable Fastly and, at least, test it on Staging and Production environments before going live — even for your headless Magento website.

## More information

*   [Headless Websites: What's the Big Deal with Decoupled Architecture?](https://pantheon.io/blog/headless-websites-whats-big-deal-decoupled-architecture) by [Josh Koenig](https://pantheon.io/team/josh-koenig)
*   [Fastly on DevDocs](http://devdocs.magento.com/guides/v2.2/cloud/basic-information/cloud-fastly.html)