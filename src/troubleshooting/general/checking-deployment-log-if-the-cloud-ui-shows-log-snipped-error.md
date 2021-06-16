---
title: Checking deployment log if the Cloud UI shows log snipped error
labels: deployment log,error,Magento Commerce Cloud,log snipped,Cloud UI,manage log,
---

This article provides a solution for the issue where the Cloud UI shows *"log snipped because it was too long"* error when trying to view deployment log.

### Affected products
Magento Commerce Cloud

## Issue
When trying to view the deployment log, Cloud UI shows "*log snipped because it was too long"* message.

Steps to reproduce:  

1. Go to the Project URL and click on the Status of the deployment in question.  

1. If the log is too long to be displayed in the UI, it will show the message: *log snipped because it was too long.*

## Cause
Note that the log shown in the Cloud UI shouldn't be treated as the source of truth, especially if you find that the site isn't responding or working properly after the deployment was listed with a status of Success. You should also verify with the logs on the server - refer to [View and manage logs](https://devdocs.magento.com/cloud/project/log-locations.html).

## Solution  

1. Make sure that you have the [Magento Cloud CLI](https://devdocs.magento.com/cloud/reference/cli-ref-topic.html) installed in your local environment.

1. Run the following command:  
 `magento-cloud activity -p <project id> -e <environment>`

1. It will return an output similar to the following:  
`Activities on the project <project name> (project id), environment <environment>:
+---------------+---------------------------+---------------------------------------------+----------+----------+---------+
| ID            | Created                   | Description                                 | Progress | State    | Result  |
+---------------+---------------------------+---------------------------------------------+----------+----------+---------+
| l5wgwmzwrsskg | 2021-06-01T08:18:02-07:00 | ABC merged Integration into Staging | 100%     | complete | success |
| raah5xrhqz3wg | 2021-06-01T08:07:18-07:00 | XYZ pushed to Integration           | 100%     | complete | failure |`

1. Copy the activity ID and then run the command:  
`magento-cloud activity:log <activity ID> -p <project id> -e <environment>`  
Example to examine the log of the failed deployment:  
`magento-cloud activity:log raah5xrhqz3wg -p <project id> -e <environment>`

## Related reading

* [Magento Commerce Cloud > Build and deploy](https://devdocs.magento.com/cloud/project/magento-env-yaml.html)
* [View and Manage Logs](https://devdocs.magento.com/cloud/project/log-locations.html)
