---
title: Display Magento error report number instead of Fastly's 503 error on Cloud
link: https://support.magento.com/hc/en-us/articles/360018126211-Display-Magento-error-report-number-instead-of-Fastly-s-503-error-on-Cloud
labels: staging,production,Magento Commerce Cloud,Fastly,error,Pro,debug,503,how to,reports
---

By default, Fastly hides all Magento errors behind the **503 Service Unavailable** error. To display the Magento error log report number (to be able to find it in logs and see the error details), open the website omitting Fastly using these steps:

1. Add your application's domain and IP address to your hosts file on your local machine.

1. Clear the browser cache and cookies (or switch to incognito mode).

1. Open your store's website again to see the Magento error.

Once you see the authentic Magento error and the error report number, you may get details in the error report file by following these steps:

1. SSH to the affected environment ([read how](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh)).

1. Locate the ./var/report/{error\_number} file.

## Add application domain and IP address to your hosts file: detailed steps

1. Check the server IP of your store by executing the nslookup command in the command line on your local machine:

* Pro plan users, Staging and Production environments: 

nslookup {your\_project\_id}.ent.magento.cloud

* Starter plan users, all environments; Pro plan users, Integration environment: 

nslookup gw.{your\_region}.magentosite.cloud

* Add your store domain and application server IP to the hosts file on your local machine using the following format: 

{server\_IP} {store\_domain}

