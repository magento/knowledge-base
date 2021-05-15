---
title: Magento best practice: enable asynchronous orders processing
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce,Magento Commerce Cloud,asynchronous orders,best practices,checkout performance
---

This article provides best practice for configuration settings that can help improve checkout performance in case of large number of simultaneously created orders.

## Affected products and versions

* Magento Commerce Cloud, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 
* Magento Commerce, all [supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf) 

## Best practice

If the number of simultaneously placed orders in your store is large enough and has a negative impact on checkout performance, we recommend enabling asynchronous orders processing.

To enable the setting:

1. Run `php bin/magento config:set dev/grid/async_indexing 1` or enable the **Asynchronous indexing** option in Magento Admin under **Stores** > Settings > **Configuration** > **Advanced** > **Developer** > **Grid Settings** > **Asynchronous indexing** .    ![](https://eastus1-mediap.svc.ms/transform/thumbnail?provider=spo&inputFormat=png&cs=fFNQTw&docid=https%3A%2F%2Fadobe.sharepoint.com%3A443%2F_api%2Fv2.0%2Fdrives%2Fb!hfKDQoVF7kum1foOjQAOKOm1i5CmMC5JihY-UIPZAYUkklNx6pRkR7l6jKbosy4j%2Fitems%2F01GASJMLJXXJM3GTIKHZGIIQFQ3BP3LCPN%3Fversion%3DPublished&access_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJub25lIn0.eyJhdWQiOiIwMDAwMDAwMy0wMDAwLTBmZjEtY2UwMC0wMDAwMDAwMDAwMDAvYWRvYmUuc2hhcmVwb2ludC5jb21AZmE3YjFiNWEtN2IzNC00Mzg3LTk0YWUtZDJjMTc4ZGVjZWUxIiwiaXNzIjoiMDAwMDAwMDMtMDAwMC0wZmYxLWNlMDAtMDAwMDAwMDAwMDAwIiwibmJmIjoiMTYyMDIyNjgwMCIsImV4cCI6IjE2MjAyNDg0MDAiLCJlbmRwb2ludHVybCI6Im5ta1kvb0hxTzJtb1laaW43MFlPdjZtbThUTTZReWY1cE1hbWtxSGZCbjg9IiwiZW5kcG9pbnR1cmxMZW5ndGgiOiIxMTIiLCJpc2xvb3BiYWNrIjoiVHJ1ZSIsInZlciI6Imhhc2hlZHByb29mdG9rZW4iLCJzaXRlaWQiOiJOREk0TTJZeU9EVXRORFU0TlMwMFltVmxMV0UyWkRVdFptRXdaVGhrTURBd1pUSTQiLCJzaWduaW5fc3RhdGUiOiJbXCJrbXNpXCJdIiwibmFtZWlkIjoiMCMuZnxtZW1iZXJzaGlwfGJhcm5hdG9AYWRvYmUuY29tIiwibmlpIjoibWljcm9zb2Z0LnNoYXJlcG9pbnQiLCJpc3VzZXIiOiJ0cnVlIiwiY2FjaGVrZXkiOiIwaC5mfG1lbWJlcnNoaXB8MTAwMzIwMDA2ZTgzNmYzZUBsaXZlLmNvbSIsInR0IjoiMCIsInVzZVBlcnNpc3RlbnRDb29raWUiOiIzIn0.U05janNEL1k1L05WcmpaZmlaSUxZSjBweGdIYzNIa2V3cHIwaWF2MTJjUT0&encodeFailures=1&width=728&height=476&srcWidth=728&srcHeight=476)     **** 
1. Flush cache by running `php bin/magento cache:flush` or go to Magento Admin under **System** > **Tools** > **Cache Management** .

>![warning]
>
>Warning: always test in the Staging environment prior to making any changes to the Production environment.

>![warning]
>
>Related reading

<ul><li title="Best practice Magento order placement performance "><a href="https://support.magento.com/hc/en-us/articles/360048170772">Best practice Magento order placement performance</a></li><li title="Best practice Magento order placement performance "><a href="https://devdocs.magento.com/guides/v2.4/config-guide/prod/config-reference-most.html">Configuration paths reference in Magento Developer Documentation</a></li></ul>