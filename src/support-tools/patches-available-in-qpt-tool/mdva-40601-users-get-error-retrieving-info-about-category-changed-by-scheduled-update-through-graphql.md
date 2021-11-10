---
title: "MDVA-40601: Unable to retrieve data about category changed by scheduled update via GraphQL"
labels: QPT patches,Quality Patches Tool,QPT 1.1.3,Magento Commerce 2.4.4,Adobe Commerce 2.4.4,GraphQL,on-premises,cloud infrastructure,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.5,2.3.4-p2,2.3.5-p1,2.3.5-p2,2.3.6,2.3.6-p1,2.3.7,2.3.7-p1,2.4.0,2.4.0-p1,2.4.1-p1,2.4.2,2.4.2-p1,2.4.2-p2
---

The MDVA-40601 Adobe Commerce quality patch fixes the issue where users get an error when getting information about category changed by scheduled update through GraphQL. This patch is available when the [Quality Patches Tool (QPT)](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching.html#mqp) 1.1.3 is installed. The patch ID is MDVA-40601. Please note that the issue is scheduled to be fixed in Adobe Commerce 2.4.4.

## Affected products and versions

**The patch is created for Adobe Commerce version:**

Adobe Commerce (all deployment methods) 2.3.3 and 2.4.2

**Compatible with Adobe Commerce versions:**

Adobe Commerce (all deployment methods) 2.3.1 - 2.4.2-p2

>![info]
>
>Note: the patch might become applicable to other versions with new Quality Patches Tool releases. To check if the patch is compatible with your Adobe Commerce version, update the `magento/quality-patches` package to the latest version and check the compatibility on the [QPT landing page](https://devdocs.magento.com/quality-patches/tool.html#patch-grid). Use the patch ID as a search keyword to locate the patch.

## Issue

Users get an error when trying to retrieve information about category changed by scheduled update via GraphQL.

<ins>Steps to reproduce</ins>:

1. Set up a category structure with a sub-category as given below:

   <pre>
   <code class="language-graphql">
   - Root
    - Some category
         - Some child category
   </code>
   </pre>

1. Execute GraphQL query with "Some Category" ID 49.

    <pre>
    <code class="language-graphql">
    query {
     category(id: 49) {
      name
      children {
        name
       }
     }
   }
   </code>
   </pre>

    Result:

    <pre>
    <code class="language-graphql">
    {
      "data": {
        "category": {
          "name": "Some category",
          "children": [
            {
              "name": "Some child category"
            }
          ]
        }
      }
    }
    </code>
    </pre>

1. Create a schedule update for "Some Category" with a different category name.
1. Wait for the schedule update to get activated.
1. Execute the same query as given above.

<ins>Expected results</ins>:

You receive the same result but with the updated category name.

<ins>Actual results</ins>:

You get the following error:

<pre>
<code class="language-graphql">
{
  "errors": [
    {
      "debugMessage": "uasort() expects parameter 1 to be array, string given",
      "message": "Internal server error",
      "extensions": {
        "category": "internal"
      },
      "locations": [
        {
          "line": 2,
          "column": 3
        }
      ],
      "path": [
        "category"
      ]
    }
  ],
  "data": {
    "category": null
  }
}
</code>
</pre>

## Apply the patch

To apply individual patches, use the following links depending on your deployment type:

* Adobe Commerce or Magento Open Source on-premises: [Software Update Guide > Apply Patches](https://devdocs.magento.com/guides/v2.4/comp-mgr/patching/mqp.html) in our developer documentation.
* Adobe Commerce on cloud infrastructure: [Upgrades and Patches > Apply Patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation. 

## Related reading

To learn more about quality patches for Adobe Commerce, refer to:

* [Quality Patches Tool released: a new tool to self-serve quality patches](https://support.magento.com/hc/en-us/articles/360047139492).
* [Check if patch is available for your Adobe Commerce issue using Quality Patches Tool](https://support.magento.com/hc/en-us/articles/360047125252).

For info about other patches available in QPT, refer to the [Patches available in QPT](https://support.magento.com/hc/en-us/sections/360010506631-Patches-available-in-QPT-tool-) section.
