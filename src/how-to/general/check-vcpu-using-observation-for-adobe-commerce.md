---
title: View number of vCPU tiers in your cluster on Adobe Commerce
labels: Adobe Commerce,cloud infrastructure,Observation for Adobe Commerce,CPU,Magento,how to,New Relic,2.3.0,2.3.1,2.3.2,2.3.3,2.3.2-p2,2.3.4,2.3.3-p1,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2,2.4.3

---

This article explains how to check your vCPU tier usage using the New Relic Infra tab on Observation for Adobe Commerce. Observation for Adobe Commerce is a New Relic nerdlet which shows the state of your Adobe Commerce site, current and past time views.

Questions:
1) Should the warning be changed to say the vCPU charts provide no or meaningless data for a period longer than a month? Rob says vCPU graphs will produce mealingless or no data for a year period, Spyrou implies this could happen with a month
2) Spyrou says the vCPU graphs also can't provide accurate data? "When NR instances are not set up correctly. It affects ANY reporting attempted by NR. So we need to be careful, otherwise will be accused of slopy work at best.""
3) Rob says someone from marketing wants to use a different term from vCPU, they want to use "vCPU tiers". How would this work with the plural? vCPUs? would it be replaced with vCPU tiers?


>![warning]

> Observation for Adobe Commerce cannot show data or will show graphs with meaningless data if you choose a time range greater than a week. This is because the vCPU tier view uses time charts, which are broken up into 365 buckets maximum. The vCPU tier data is metric data, which is summary data. You can set a timeline back one year, but do not choose a duration longer than one week. For example you could set the date from October 1, 2020 to October 8, 2020 and it will display the vCPU tier data from that date/time range (if it is less than one year).

## Affected products and versions:

* Adobe Commerce on cloud infrastructure, 2.3.0-2.3.7-p1, 2.4.0-2.4.3

## Check vCPU tier usage with Observation for Adobe Commerce:

To access and log in to the New Relic Observation for Adobe Commerce nerdlet:

1. From the New Relic home page, click **Apps**.
1. Click **Observation for Adobe Commerce**.
1. The Observation for Adobe Commerce nerdlet opens.
1. Click on the **Select an account** dropdown and select an account.
1. You can paste the project_id, type in the New Relic account number or account name, or browse through the list of accounts.
1. Click on the light blue dropdown menu with the clock icon (toward the top right of the nerdlet window).
1. If you are trying to identify the cause of an event/issue, select a time prior to the ticket date and time to see if there were any preceding events/data. You can use the preset time frames or set a custom time frame by selecting **Set custom**.
1. On the focus tabs click **Infra**. See two vCPU tier graphs:
    * One is the **vCPU view over timeline (need to select a timeline > than 24 hours)** graph. This frame shows the vCPU view across the selected timeframe for more than 24 hours. This frame looks at the number of vCPU tiers assigned to the New Relic application name shown. It shows cluster upsizes and downsizes.
    * The other graph shows the **vCPU view over timeline BY NODE**. This graph displays vCPU tier views across the selected timeframe by node. This graph is helpful in detecting loss of node(s) or when nodes are upsized or downsized.

## Related reading

* [Observation for Adobe Commerce overview](https://support.magento.com/hc/en-us/articles/4406549696781) in our support knowledge base.
