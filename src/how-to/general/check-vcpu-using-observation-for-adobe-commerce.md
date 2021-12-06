---
title: View environment vCPU tier in your cluster on Adobe Commerce
labels: Adobe Commerce,cloud infrastructure,Observation for Adobe Commerce,CPU,Magento,how to,New Relic,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3
promoted: True

---

This article explains how to check your vCPU tier allocation using the New Relic Infra tab on Observation for Adobe Commerce. Observation for Adobe Commerce is a New Relic nerdlet which shows the state of your Adobe Commerce site, current and past time views.

## Affected products and versions:

Adobe Commerce on cloud infrastructure, 2.3.0-2.3.7-p1, 2.4.0-2.4.3

## Check vCPU tier allocation with Observation for Adobe Commerce:

To access and log in to the New Relic Observation for Adobe Commerce nerdlet:

1. From the New Relic home page, click **Apps**.
1. Click **Observation for Adobe Commerce**.
1. The Observation for Adobe Commerce nerdlet opens.
1. Click on the **Select an account** dropdown and select an account.
1. You can fill in the project id, the New Relic account number or account name, or browse through the list of accounts.
1. Click on the light blue dropdown menu with the clock icon (toward the top right of the nerdlet window).
1. If you are trying to identify the cause of an event/issue, select a time prior to the ticket date and time to see if there were any preceding events/data. You can use the preset time frames or set a custom time frame by selecting **Set custom**.
1. On the tabs click **Infra**. There are three vCPU tier graphs:
    * The first graph shows **vCPU tier view over timeline GREATER 2 weeks (You will need to select a timeline GREATER than 2 weeks). NOTE: The sample rate will be per day. If cluster upsizes/downsizes occur on a day, the ending tier size will be displayed on the following day**.
    * The second graph shows **vCPU tier view over timeline (need to select a timeline GREATER than 24 hours but not greater than 2 weeks)**.
    * The third graph shows the **vCPU tier view over timeline BY NODE, should look at timeline LESS than 24 hours**.

## Related reading

* [Observation for Adobe Commerce overview](https://support.magento.com/hc/en-us/articles/4406549696781) in our support knowledge base.
