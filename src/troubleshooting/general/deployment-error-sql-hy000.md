---
title: "Deployment error: SQLSTATE[HY000]"
labels: Magento Commerce Cloud,command line,troubleshooting,deployment error,Adobe Commerce,on-premise,cloud infrastructure,SQLSTATE
---

This article provides a solution for the issue where deployment fails because of the SQLSTATE[HY000] error.

## Affected products and versions

* Adobe Commerce, [all deployment methods](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf)

## Issue

An SQLSTATE error occurs during deployment.

```sql
Updating modules:
SQLSTATE[HY000]: General error: 23 Out of resources when opening file '/tmp/#sql_565c_0.MAD' (Errcode: 24 "Too many open files"),
```

## Cause

Cron running during deployment.

## Solution

To resolve the issue, stop cron from running by opening the command line and running the following command:
`./vendor/bin/ece-tools cron:disable`.
