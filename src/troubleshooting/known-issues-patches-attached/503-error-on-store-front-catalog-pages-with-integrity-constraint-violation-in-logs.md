---
title: 503 error on store front catalog pages with "Integrity constraint violation" in logs
labels: 2.2.0,2.2.4,503,Magento Commerce Cloud,integrity constraint violation,known issues,patch,troubleshooting,Magento,Adobe Commerce,cloud infrastructure,on-premises
---

>![info]
>
>This article provides a patch as a workaround, but the issue was permanently fixed in Adobe Commerce on cloud infrastructure v2.3.3 release, and it is recommended that you upgrade to v2.3.3. Follow the steps in [Upgrade Adobe Commerce version](https://devdocs.magento.com/cloud/project/project-upgrade.html) in our developer documentation.

This article provides a patch for the known Adobe Commerce on cloud infrastructure 2.2.0 issue related to store front catalog pages being inaccessible, with the error message similar to the following in log: *Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO \`search\_tmp\_%number%*.

## Issue

Store front catalog pages become inaccessible unexpectedly. The error log has an error description similar to the following: *Integrity constraint violation: 1062 Duplicate entry '%entry%' for key 'PRIMARY', query was: INSERT INTO \`search\_tmp\_%number%*.

The issue is related to searching and caused by the existence of the outdated index along with the new one after reindex.

## Solution

To fix the problem, you need to remove outdated indexes from ElasticSearch and apply the patch to prevent them from appearing.

To list all the indexes, use the following command:

<pre>curl -X GET %elasticsearch_domain%:%elasticsearch_port%/_cat/indices</pre>

To remove the outdated indexes, find the them in the database and then use the following command:

```bash
curl -X DELETE %elasticsearch_domain%:%elasticsearch_port%/%product_id%_v%outdated_version%
```

Example:

```bash
curl -X DELETE 127.0.0.1:9200/magento2_product_8_v332
```

## Patch

The patches are attached to this article. To download a patch, scroll down to the end of the article and click the required file name, or click one the following links:

 [Download MDVA-9590\_EE\_2.2.0\_COMPOSER\_v2.patch](assets/MDVA-9590_EE_2.2.0_COMPOSER_v2.patch.zip)

 [Download MDVA-13203\_EE\_2.2.4\_V1\_COMPOSER.patch](assets/MDVA-13203_EE_2.2.4_V1_COMPOSER.patch.zip)

## Compatible Adobe Commerce versions

The patches were created for the following editions and versions:

* Adobe Commerce on cloud infrastructure 2.2.0 (`MDVA-9590_EE_2.2.0_COMPOSER_v2.patch`)
* Adobe Commerce on cloud infrastructure 2.2.4 (`MDVA-13203_EE_2.2.4_V1_COMPOSER.patch`)

The `MDVA-9590_EE_2.2.0_COMPOSER_v2` patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure 2.0.X, 2.1.X, 2.2.X, and 2.3.0 - 2.3.3
* Adobe Commerce on-premises 2.0.X, 2.1.X, 2.2.X, and 2.3.0 - 2.3.3

The `MDVA-13203_EE_2.2.4_V1_COMPOSER` patch is also compatible (but might not solve the issue) with the following Adobe Commerce versions and editions:

* Adobe Commerce on cloud infrastructure 2.0.X, 2.1.X, 2.2.X, and 2.3.0 - 2.3.3
* Adobe Commerce on-premises 2.0.X, 2.1.X, 2.2.X, and 2.3.0 - 2.3.3

## How to apply the patch

For instructions, see [How to apply a composer patch provided by Adobe](https://support.magento.com/hc/en-us/articles/360028367731) in our support knowledge base.

## Useful links

* [Log files location for Adobe Commerce on cloud infrastructure Starter plan architecture](https://support.magento.com/hc/en-us/articles/360020127552) in our support knowledge base.
* [Log files location for Adobe Commerce on cloud infrastructure Pro plan architecture](https://support.magento.com/hc/en-us/articles/360000318834) in our support knowledge base.
* [Log files location for Adobe Commerce](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html) in our developer documentation.

## Attached Files
