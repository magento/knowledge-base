---
title: Checking deployment log if Cloud UI has "log snipped" error
labels: troubleshooting,deployment log,error,Magento Commerce Cloud,Adobe Commerce,cloud infrastructure,log snipped,UI,manage log
---

This article provides a solution for the issue where the Adobe Commerce on cloud infrastructure UI shows the *log snipped because it was too long* error message when trying to view deployment log.

## Affected products
Adobe Commerce on cloud infrastructure (all supported versions)

## Issue

When trying to view deployment log, Adobe Commerce on cloud infrastructure UI shows the following error message: *log snipped because it was too long*.

## Steps to reproduce

1. Go to the Project URL and click on the **Status** of the deployment in question.  
1. If the log is too long to be displayed in the UI, it will show the error message: *log snipped because it was too long*.

## Cause

Note that the log shown in the UI should not be treated as the source of truth, especially if you find that the site is not responding or working properly after the deployment was listed with a status of Success. You should also verify with the logs on the server. Refer to [View and manage logs](https://devdocs.magento.com/cloud/project/log-locations.html) in our developer documentation.

## Solution

1. Make sure that you have [Magento Cloud CLI](https://devdocs.magento.com/cloud/reference/cli-ref-topic.html) installed in your local environment.
1. Run the following command:
    ```bash
    magento-cloud activity -p <project id> -e <environment>
    ```
1. It will return an output similar to the following:
    ```bash
    Activities on the project <project name> (project id), environment <environment>:
    +---------------+---------------------------+-------------------------------------+----------+----------+---------+
    | ID            | Created                   | Description                         | Progress | State    | Result  |
    +---------------+---------------------------+-------------------------------------+----------+----------+---------+
    | l5wgwmzwrsskg | 2021-06-01T08:18:02-07:00 | ABC merged Integration into Staging | 100%     | complete | success |
    | raah5xrhqz3wg | 2021-06-01T08:07:18-07:00 | XYZ pushed to Integration           | 100%     | complete | failure |
    ```
1. Copy the activity ID of the affected deployment and then run the command:
    ```bash
    magento-cloud activity:log <activity ID> -p <project id> -e <environment>
    ```  
    Example to examine the log of the failed deployment:
    ```bash
    magento-cloud activity:log raah5xrhqz3wg -p <project id> -e <environment>
    ```

## Related readings in our developer documentation:

* [Adobe Commerce on cloud infrastructure > Build and deploy](https://devdocs.magento.com/cloud/project/magento-env-yaml.html)
* [Adobe Commerce on cloud infrastructure > View and manage logs](https://devdocs.magento.com/cloud/project/log-locations.html)
