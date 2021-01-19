---
title: Cron job is stuck in "running" status
link: https://support.magento.com/hc/en-us/articles/360033099451-Cron-job-is-stuck-in-running-status
labels: Magento Commerce Cloud,troubleshooting,stuck cron
---

This article provides a solution for when Magento cron jobs do not finish executing and persist in a running status, which prevents other cron jobs from running. This can happen for a number of reasons, such as network issues, application crashes, redeployment issues.

### Affected products and versions

Magento Commerce Cloud, all versions

## Symptom

Symptoms of cron jobs that must be reset include:

* Large quantity of jobs appear in the cron\_schedule queue

* Site performance starts to degrade

* Jobs fail to execute on schedule

## Solution

Running this command without the --job-code option resets *all* cron jobs, including those currently running, so we recommend using it only in exceptional cases, such as after you have verified that all cron jobs must be reset. Re-deployment runs this command by default to reset cron jobs, so they recover appropriately after the environment is back up. Avoid using this solution when indexers are running.

To resolve this issue, you must reset the cron job(s) using the cron:unlock command. This command changes the status of the cron job in the database, ending the job forcefully to allow other scheduled jobs to continue.

1. 
Open a terminal and use your [SSH keys](https://devdocs.magento.com/guides/v2.3/cloud/env/environments-ssh.html#ssh) to connect to the affected environment.

1. 
Get the MySQL database credentials:

echo $MAGENTO\_CLOUD\_RELATIONSHIPS | base64 -d | json\_pp

1. 
Connect to the database using mysql:

mysql -hdatabase.internal -uuser -ppassword main

1. 
Select the main database:

use main

10. 
Find all running cron jobs:

SELECT * FROM cron\_schedule WHERE status = 'running';

12. 
Copy the schedule\_id of any job running longer than usual.

14. 
Use the schedule IDs from the previous step to unlock specific cron jobs:

./vendor/bin/ece-tools cron:unlock --job-code=<schedule\_id> --job-code=<schedule\_id>

