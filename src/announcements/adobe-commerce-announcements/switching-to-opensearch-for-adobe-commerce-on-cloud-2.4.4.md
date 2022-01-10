---
title: Switching to OpenSearch for Adobe Commerce on Cloud 2.4.4
labels: 2.4.4,Adobe Commerce,cloud infrastructure,announcements,Elasticsearch 7.10, Elasticsearch 7.16,End of Life,Opensearch 1.2.x,on-premises
promoted: True
---

Adobe Commerce on cloud infrastructure 2.4.4 will not support versions of Elasticsearch after 7.10. You must switch to OpenSearch 1.2.x before upgrading to 2.4.4. Adobe will provide detailed instructions closer to the 2.4.4 GA release.

Adobe Commerce on-premises is adding support for Elasticsearch 7.16 and OpenSearch 1.2 in all March 2022 patch releases (2.4.4, 2.4.3-p2,2.3.7-p3). In 2.4.4, Adobe Commerce on cloud infrastructure will move to OpenSearch as the default search engine, so merchants must use OpenSearch in place of Elasticsearch before upgrading to 2.4.4 or later. Merchants with Adobe Commerce on-premises deployments can use Elasticsearch or OpenSearch because Adobe Commerce will continue to support both.

 **What is OpenSearch?**  

OpenSearch is a fork of Elasticsearch and Kibana. Maintained by AWS instead of Elastic.co. To learn more, review GitHub [opensearch-project/OpenSearch](https://github.com/opensearch-project/OpenSearch).

**Compatibility across versions:**

**Will Adobe Commerce on cloud infrastructure support Elasticsearch 7.10?**

Yes - starting mid-Jan.

For Adobe Commerce on-premises, the latest 7.16.x version is recommended to mitigate Log4j.

**Migration:**

**When can merchants migrate to OpenSearch?**

After Adobe Commerce 2.4.4.

**What can merchants (Adobe Commerce on cloud infrastructure and Adobe Commerce on-premises) who are not on 2.4.4 do? Can they upgrade to a supported version of Elasticsearch (7.10, 7.16.1) or to OpenSearch? Do they have to be on the latest supported version to do so (like 2.3.7-p2, 2.4.3-p1)?**

 If the Adobe Commerce core version they are on supports Elasticsearch 7.10 – they can use it. Review [System Requirements](https://devdocs.magento.com/guides/v2.4/install-gde/system-requirements.html) in our developer documentation for version compatibility. Additionally, Adobe partners can sign up for our beta program [here](https://nam04.safelinks.protection.outlook.com/?url=https%3A%2F%2Fgithub.com%2Fmagento%2Fmagento2%2Fwiki%2FMagento-Beta-Program&data=04%7C01%7Cbarnato%40adobe.com%7C21d4a938e6e04972a55908d9d4676199%7Cfa7b1b5a7b34438794aed2c178decee1%7C0%7C0%7C637774362748904051%7CUnknown%7CTWFpbGZsb3d8eyJWIjoiMC4wLjAwMDAiLCJQIjoiV2luMzIiLCJBTiI6Ik1haWwiLCJXVCI6Mn0%3D%7C3000&sdata=8iXdS%2FrA38u9X4qR4dv7RweSqa7BU5xBOoaVGDmJ%2B54%3D&reserved=0) to get access to our latest beta4 code that has been tested against Elasticsearch 7.16.1 and OpenSearch 1.1.

