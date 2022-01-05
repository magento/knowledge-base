---
title: Switching to OpenSearch for Adobe Commerce on Cloud 2.4.4
labels: 2.4.4,Adobe Commerce,cloud infrastructure,announcements,Elasticsearch 7.10,End of Life,Opensearch 1.2.x
promoted: True
---

Adobe Commerce on cloud infrastructure 2.4.4 will not support versions of ElasticSearch after 7.10. You will need to switch to OpenSearch 1.2.x when upgrading to version 2.4.4. Adobe Commerce will provide detailed instructions closer to the 2.4.4 version release.

Starting Q1 2022, Adobe Commerce is adding support for Elastic Search 7.16 and OpenSearch 1.2 in all Q1 2022 releases (2.4.4, 2.4.3-p2,2.3.7-p3). In 2.4.4, Adobe Commerce hosted in the cloud will move to OpenSearch as their default search engine hence merchants once upgraded to 2.4.4+ will need to use OpenSearch in place of ElasticSearch. Adobe Commerce merchants hosted on-premise have the option to use ElasticSearch or OpenSearch as both will be supported by the Adobe Commerce application.

 **What is OpenSearch?**  

OpenSearch is a fork based on an old version of ElasticSearch and Kibana. Maintained by AWS instead of Elastic.co. To learn more review GitHub [opensearch-project/OpenSearch](https://github.com/opensearch-project/OpenSearch).

**What is the purpose and *benefit* of this change? Does it reduce security risks? Are there cost benefits?**

We cannot use ES anymore due to license changes. However, despite these changes the technology being used remains the same.

**Compatibility across versions**

**Will Adobe Commerce on cloud infrastructure support 7.10?**

Yes - starting mid-Jan.

**For Adobe Commerce on-premises, will we skip 7.10 and go straight to 7.16.1?**

7.10 should already work there but 7.16.1 is the only non-vulnerable release after Log4j, so we recommend 7.16.1.

**Migration**

**When can merchants migrate to OpenSearch?**

After Adobe Commerce 2.4.4.

**What can merchants (Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises) who are not on 2.4.4 do? Can they upgrade to a supported version of Elasticsearch (7.10, 7.16.1) or to OpenSearch? Do they have to be on the latest supported version to do so (like 2.3.7-p2, 2.4.3-p1)?**

 If the Adobe Commerce core version they are on supports ES 7.10 – they can use it. Review [System Requirements](https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html) in our develoepr documentation for version compatibility.
## Resources on reviewing your capacity

In our support knowledge base:

* [CPU allocation calculation for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058551232)
* [Check if upsize for host’s instances is needed for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058506772)
* [Check host’s CPU configuration for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/360058507012O)
* [Identify and measure outages for Adobe Commerce on cloud](https://support.magento.com/hc/en-us/articles/4409500578957)
