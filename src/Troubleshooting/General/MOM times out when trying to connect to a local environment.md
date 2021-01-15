---
title: MOM times out when trying to connect to a local environment
link: https://support.magento.com/hc/en-us/articles/360032279432-MOM-times-out-when-trying-to-connect-to-a-local-environment
labels: troubleshooting,timeout,Magento Order Management
---

This article provides a solution for the Magento Order Management (MOM) issue where you cannot register the locally installed micro-service with MOM using ngrok, because MOM times out when trying to callback.

 ### Affected products and versions

 
 * Magento Commerce 2.3.1
 * Magento Order Management
 * ngrok
 
 Disclaimer: Magento does not recommend or endorse any particular tool for establishing tunnels. The preceding are suggestions only. For more information, consult the [ngrok documentation](https://ngrok.com/docs "mailto:https://ngrok.com/docs").

 Issue
-----

 Steps to reproduce

 
 2. Install Magento Commerce on your local environment. 
 4. Setup ngrok to create a tunnel to expose your local server.
 6. Try [connecting to MOM](https://omsdocs.magento.com/en/integration/connector/setup-tutorial/).
 
 Expected result

 Connection established successfully.

 Actual result

 MCOM seems to timeout when trying to callback to the ngrok URL.

 Cause
-----

 One of the possible reasons for the timeout is that servers are located geographically too far away, and connection takes too much time. 

 Solution
--------

 Add a parameter specifying your region when starting ngrok. Like the following:

  ./ngrok http 80 -region eu

 The default region is US. See [all possible values](https://ngrok.com/docs#config_region).

