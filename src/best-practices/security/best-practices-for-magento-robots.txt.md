---
title: Best practices for Adobe Commerce robots.txt
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,robots.txt,search engine robots,security,seo,Adobe Commerce,cloud infrastructure,on-premises
---

This article provides best practices for using `robots.txt` in Adobe Commerce. This includes configuration and security. The `robots.txt` file is a text file that instructs web robots (typically search engine robots) how to crawl pages on their website.

## Affected products and versions

* Adobe Commerce on-premises, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Adobe Commerce on cloud infrastructure, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

 **<u>Configuration:</u>**

* By not configuring the `robots.txt` file, site performance can be negatively impacted, leading to a potential for site outages.
* Configure the `robots.txt` file to avoid unnecessary Bots scanning and indexing the wrong content. For steps, refer to [Search Engine Robots](https://docs.magento.com/user-guide/marketing/search-engine-robots.html) in our user guide.

 <span class="wysiwyg-underline"> **Security:** </span>

Do not expose your Commerce Admin path in your `robots.txt` file. Having the Admin path exposed is a vulnerability for site hacking and potential loss of data. Remove the Admin path from the `robots.txt` file.

For steps to edit the `robots.txt` file and remove all entries of the Admin path, refer to [Marketing User Guide > SEO and Search > Search Engine Robots](https://docs.magento.com/user-guide/marketing/search-engine-robots.html) in our user guide.

If assistance is required or if there are questions or concerns, [submit an Adobe Commerce Support ticket](https://support.magento.com/hc/en-us/articles/360000913794#submit-ticket).

## Related reading

In our support knowledge base:

* [How to block malicious traffic for Adobe Commerce on Fastly level](https://support.magento.com/hc/en-us/articles/360039447892)
* [robots.txt gives a 404 error in Adobe Commerce on cloud infrastructure 2.3.x](https://support.magento.com/hc/en-us/articles/360040594911)
