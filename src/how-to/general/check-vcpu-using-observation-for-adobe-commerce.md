---
title: View number of vCPUs in your cluster on Adobe Commerce
labels: Adobe Commerce,cloud infrastructure,Observation for Adobe Commerce,CPU,Magento,how to,New Relic
---

This article explains how to check your vCPU usage using the New Relic Infra tab on Observation for Adobe Commerce. Observation for Adobe Commerce is a New Relic nerdlet which shows the state of your Adobe Commerce site, current and past time views.

## Affected products and versions:

* Adobe Commerce on cloud infrastructure, 2.3.0-2.3.7-p1, 2.4.0-2.4.3

## Check vCPU usage with Observation for Adobe Commerce:

To access and log in to the New Relic Observation for Adobe Commerce nerdlet:

1. From the New Relic home page, click **Apps**.
1. Click **Observation for Adobe Commerce**.
1. The Observation for Adobe Commerce nerdlet opens.
1. Click on the **Select an account** dropdown and select an account. 
1. You can paste the project_id, type in the New Relic account number or account name or browse through the list of accounts.
1. Click on the light blue dropdown menu with the clock icon (toward the top right of the nerdlet window).
1. If you are trying to identify the cause of an event/issue, select a time prior to the ticket date and time to see if there were any preceding events/data. You can use the preset time frames or set a custom time frame by selecting **Set custom**.
1. On the focus tabs click **Infra**. See two vCPU graphs:
    * One is the **vCPU view over timeline (need to select a timeline > than 24 hours)** graph. This frame shows the vCPU view across the selected timeframe for more than 24 hours. This frame looks at the number of vCPUs assigned to the New Relic application name shown. It shows cluster upsizes and downsizes.
    * The other graph shows the **vCPU view over timeline BY NODE**. This graph displays vCPU views across the selected timeframe by node. This graph is helpful in detecting loss of node(s) or when nodes are upsized or downsized.

## Related reading

* [Observation for Adobe Commerce overview](https://support.magento.com/hc/en-us/articles/4406549696781) in our support knowledge base.
