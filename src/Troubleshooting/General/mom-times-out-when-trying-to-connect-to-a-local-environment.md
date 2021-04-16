---
title: MOM times out when trying to connect to a local environment
labels: Magento Order Management,timeout,troubleshooting
---

This article provides a solution for the Magento Order Management (MOM) issue where you cannot register the locally installed micro-service with MOM using ngrok, because MOM times out when trying to callback.

### Affected products and versions

* Magento Commerce 2.3.1
* Magento Order Management
* ngrok

<p class="warning">Disclaimer: Magento does not recommend or endorse any particular tool for establishing tunnels. The preceding are suggestions only. For more information, consult the <a href="https://ngrok.com/docs">ngrok documentation</a>.</p>

## Issue

Steps to reproduce

1. Install Magento Commerce on your local environment. 
1. Setup ngrok to create a tunnel to expose your local server.
1. Try [connecting to MOM](https://omsdocs.magento.com/en/integration/connector/setup-tutorial/).

Expected result

Connection established successfully.

Actual result

MCOM seems to timeout when trying to callback to the ngrok URL.

## Cause

One of the possible reasons for the timeout is that servers are located geographically too far away, and connection takes too much time. 

## Solution

Add a parameter specifying your region when starting ngrok. Like the following:

<code class="language-bash">
./ngrok http 80 -region eu</code>

The default region is US. See [all possible values](https://ngrok.com/docs#config_region).