This document provides guidelines for adding labels to articles in the Adobe Commerce Support Knowledge Base.
Labels (also called tags) improve searching experience in the [Adobe Commerce Support Knowledge Base](https://support.magento.com/hc/en-us).
Labels are added in the "labels" field in metadata section of an article file, separated by commas, no space between a comma and the next label.
See [../../.github/CONTRIBUTING.md#metadata] for details.

## General provisions

For each article add the following label types:

* Label(s) for product(s). (required)
* Label(s) for versions affected. (required, except general support related articles)
* Label for content type. (required)
* Labels for major tech component.(if applicable)
* Labels for process/functionality being troubleshooted/described. (if applicable)
* Labels for the issue being fixed/described. (if applicable)

See the sections below for detailed recommendations on how to define labels for each of these labels types.

## Labels for products

<table>
<tbody>
  <tr>
    <th>Product name</th>
    <th>Label</th>
  </tr>
  <tr>
    <td>Adobe Commerce (all deployment methods) </td>
    <td>
    "Adobe Commerce,cloud infrastructure,on-premises"
    </td>
  </tr>
  <tr>
    <td>Adobe Commerce on cloud infrastructure</td>
    <td>
      "Adobe Commerce,cloud infrastructure"
    </td>
  </tr>
  <tr>
    <td>Adobe Commerce on-premises</td>
    <td>"Adobe Commerce,on-premises"</td>
  </tr>
  <tr>
    <td>Magento Business Intelligence (MBI)</td>
    <td>
        "Magento Business Intelligence,MBI"
    </td>
  </tr>
   <tr>
    <td>Magento Open Source</td>
    <td>
        "Magento Open Source"
    </td>
  </tr>
  <tr>
    <td>B2B for Adobe Commerce</td>
    <td>"B2B"</td>
  </tr>
  <tr>
    <td>PWA for Adobe Commerce</td>
    <td>"PWA"</td>
  </tr>
  <tr>
    <td>Venia storefront project</td>
    <td>"Venia"</td>
  </tr>
  <tr>
    <td>Quality Patches Tool, QPT</td>
    <td>"Quality Patches Tool,QPT patches"</td>
  </tr>
  </tbody>
</table>

## Labels for products versions

* Add a separate label for each version of Adobe Commerce. Example: "2.3.7"
* Don't add labels for intervals.
    That is, if 2.3.0-2.3.5 if affected, add: "2.3.0,2.3.1,2.3.2,2.3.2-p2,2.3.3,2.3.3-p1,2.3.4,2.3.4-p2,2.3.5-p1,2.3.5-p2"
    NOT "2.3.0-2.3.5"
* Don't add labels with .x. Example: "2.3.x"

## Labels for content type (based on category)
<table>
  <tbody>
    <tr>
      <th>Category</th>
      <th>Label</th>
    </tr>
    <tr>
      <td>Best Practices</td>
      <td>"best practices" (not "Best Practice" nor "best practice")</td>
    </tr>
    <tr>
      <td>
        Troubleshooting
      </td>
      <td>
      "troubleshooting"
      </td>
    </tr>
    <tr>
      <td>How to</td>
      <td>"how to"</td>
    </tr>
    <tr>
      <td>FAQ</td>
      <td >"FAQ"</td>
    </tr>
  </tbody>
</table>

## Labels for major technical components

* Use capitalization according to the component official naming.
* Do not use synonyms, one label for one component.
* One word labels are preferable, but if component name contains several words - use several words. Do not add issue descriptions. That is, put "Elasticsearch" instead of "Elasticsearch problems".
* If the content is relevant for a particular version of the component only - add a label containing name + version.         
    Example: "Elasticsearch 5". If it is relevant for several particular versions - add several labels of this type. Example: "Elasticsearch 5", "Elasticsearch 6". When relevant, use "x" for multiple versions. Example: "Elasticsearch 2.x"

Examples:

* "Elasticsearch"
* "New Relic"
* "Web Setup Wizard"

## Labels for process/functionality being troubleshooted/described

* Use low case, with exception of proper nouns.
* Do not use synonyms, one label for one entity.
* One word labels are preferable. Do not add issue description. That is, put "database" instead of "database crashes".

Examples: 

* "database"
* "cron"
* "deployment"
* "mass update".

## Labels for the issue being fixed/described

* Use low case, with the exception of proper nouns.
* Do not use synonyms, one label for one entity.
* One word labels are preferable. Do not convert an error message to a label.

Examples:

* "site down"
* "500 error"
* "stuck cron".
