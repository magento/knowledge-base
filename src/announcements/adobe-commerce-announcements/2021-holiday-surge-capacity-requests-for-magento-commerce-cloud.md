---
title: Holiday Surge Capacity Requests for Adobe Commerce on our cloud infrastructure
labels: 2.3,2.4,Magento Commerce,Magento Commerce Cloud,announcements,capacity,infrastructure,performance,request,Adobe Commerce,cloud infrastructure,Black Friday,Cyber Monday
---

During the peak holiday sales season (approximately Mid-November through Mid-January), Adobe recommends that all Adobe Commerce merchants hosted on our cloud infrastructure prepare for increased traffic.

 **Planning and Estimating Traffic**  

We recommend that all Adobe Commerce merchants on our cloud infrastructure [utilize this set of recommendations on how to estimate peak season traffic](https://magento.com/blog/best-practices/five-ps-peak-season-performance-guide-preparing-your-infrastructure-high) for the peak holiday sales season each year.

Once you have completed the recommended estimation, if your team has identified any dates where you feel you will need additional capacity, continue on to the next step for information on how to request surge capacity.

**View the history of your upsizes**

You can view the history of requested resizes in your [Project Portal (Onboarding UI)](https://devdocs.magento.com/cloud/onboarding/onboarding-tasks.html), under **Project** > **Services** > **CPU Usage Tracking**.
The following information is available for each resize request:

* **Size Start Date**: date of upsize request.
* **Size End Date**: date when the cluster was returned to the previous size.
* **vCPU Size**: the size of the cluster after the upsize.
* **Days Usage**: for how many days the cluster stayed upsized.
* **Period vCPU**: changed vCPU size by the number of days it was used. (for example, vCPU size 192 by 25 days equals 4,800).

 **Requesting Surge Capacity**

Adobe Commerce merchants on our cloud infrastructure that anticipate a need for additional capacity during the holiday season should [submit a Surge Capacity Support Ticket](https://support.magento.com/hc/en-us/articles/360041138511-How-to-request-temporary-additional-cloud-capacity-for-Magento-Commerce-Cloud) via our [Help Center](https://support.magento.com/hc/en-us), indicating the dates and expected capacity needs within the ticket. Please note that increased capacity will require usage of your licensed overage capacity.

**We recommend submitting these tickets at least 48 business hours in advance of when the capacity is needed; and additionally recommend that requests for the Black Friday / Cyber Monday period be placed as far in advance as possible, as capacity during this period is limited.**


 **More Help?**  

Need more guidance on preparing for peak season traffic? Adobe Commerce merchants on our cloud infrastructure can contact their Customer Success Manager for help, strategy, and planning tips for preparing for a successful peak season. We also recommend checking out the [Magento Blog](https://magento.com/blog) for strategy tips year-round.

## Resources on reviewing your capacity

In our support knowledge base:

* [CPU allocation calculation for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058551232)
* [Check if upsize for host’s instances is needed for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058506772)
* [Check host’s CPU configuration for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058507012O)
* [Identify and measure outages for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/4409500578957)
