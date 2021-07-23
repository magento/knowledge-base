---
title: Best practices for Magento robots.txt
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,best practices,robots.txt,search engine robots,security,seo
---

This article provides best practices for using `robots.txt` in Magento. This includes configuration and security. The `robots.txt` file is a text file that instructs web robots (typically search engine robots) how to crawl pages on their website.

## Affected products and versions

* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)  
* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Best practices

 **<u>Configuration:</u>**

* By not configuring the `robots.txt` file, site performance can be negatively impacted leading to a potential for site outages.
* Configure the `robots.txt` file to avoid unnecessary Bots scanning and indexing the wrong content. For steps, refer to Magento User Guide [Search Engine Robots](https://docs.magento.com/user-guide/marketing/search-engine-robots.html) .

 <span class="wysiwyg-underline"> **Security:** </span>

Do not expose your Magento Admin path in your `robots.txt` file. Having the Admin path exposed is a vulnerability for site hacking and potential loss of data. Remove the Admin path from the `robots.txt` file.

For steps to edit the `robots.txt` file and remove all entries of the admin path, refer to Magento [Marketing User Guide > SEO and Search > Search Engine Robots](https://docs.magento.com/user-guide/marketing/search-engine-robots.html) .

If assistance is required or if there are questions or concerns, [submit a Magento Support ticket](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket) . [None](https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket)

## Related reading

* KB [How to block malicious traffic for Magento Commerce Cloud on Fastly level](https://support.magento.com/hc/en-us/articles/360039447892)
* KB [robots.txt gives a 404 error in Magento Commerce Cloud 2.3.x](https://support.magento.com/hc/en-us/articles/360040594911)
