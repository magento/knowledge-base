---
title: Checking for DDoS attack from CLI
labels: DDOS,Magento Commerce,Magento Commerce Cloud,attack,grep,netstat,troubleshooting,Adobe Commerce,Magento Open Source,cloud infrastructure
---

This article talks about the issue of how to try to check for Distributed Denial of Service (DDoS) attacks from your server's Command Line Interface (CLI).

## Affected products and versions

* Adobe Commerce, all versions
* Magento Open Source, all versions

## Issue

Your website is slow, and you do not have access to any other analysis application tools, other than your CLI, to check for a potential DDoS attack. The symptoms of a DDoS attack can vary widely depending on your network configuration, software used, etc.

However, it is recommended that you utilize analysis software products that are specifically designed to help identify DDoS attacks.

## Cause

There are multiple possible causes for a slow website, including a slowly performing server, high CPU usage, or misconfiguration in scripts, code, or cheap hardware. Sometimes it could be due to a DDoS attack. Two of the basic tools you have to check for a DDoS attack is your Adobe Commerce logs and your CLI.

Again it is important to note that using software specifically designed to identify DDoS attacks would be very useful in your investigation.

## Solution steps

1. Check your Adobe Commerce logs to see if something else besides a DDoS attack is occurring. For more information, refer to the following articles in our developer documentation:
    * [Adobe Commerce and Magento Open Source logs locations](https://devdocs.magento.com/guides/v2.3/config-guide/cli/logging.html)
    * [Adobe Commerce on cloud infrastructure logs locations](https://devdocs.magento.com/guides/v2.3/cloud/trouble/environments-logs.html)
1. Start using your CLI to check your all your current Internet connections using the `netstat` command: `netstat -na`. This displays all active established connections to the server. Here you might be able to notice too many connections coming from the same IP address.
1. To further narrow your established connections results to only those connecting on port 80 (the http port for your website), so that you can sort and recognize too many connections from one IP address or group of IP addresses, use this command: `netstat -an | grep :80 | sort`. You may repeat the same command for https on port 443: `netstat -an | grep :443 | sort`. Another option is to extend the original command to both ports 80 and 443: `netstat -an | egrep ":80|:443" | sort`.     
1. To see if many active `SYNC_REC` are occurring on the server, use the command:     `netstat -n -p|grep SYN_REC | wc -l`     This is usually less than 5, but it could be much higher for a DDoS attack, though for some servers a higher number could be a normal condition.
1. To list out all the IP addresses sending `SYNC_REC` statuses, use the command: `netstat -n -p | grep SYN_REC | sort -u`.     
1. To further list all the unique IP addresses sending `SYNC_REC` statuses, use the command: `netstat -n -p | grep SYN_REC | awk ‘{print $5}’ | awk -F: ‘{print $1}’`.
1. You can also use the `netstat` command to count and calculate the number of connections that each IP address makes to your server: `netstat -ntu | awk ‘{print $5}’ | cut -d: -f1 | sort | uniq -c | sort -n`.
1. For listing the count of UDP or TCP protocol connections connected to your server, use the command: `netstat -anp |grep ‘tcp|udp’ | awk ‘{print $5}’ | cut -d: -f1 | sort | uniq -c | sort -n`.   
1. To check established connections, instead of just all connections, and display the connection count for each IP address, use the command: `netstat -ntu | grep ESTAB | awk ‘{print $5}’ | cut -d: -f1 | sort | uniq -c | sort -nr`.
1. To show connection counts listed by IP address to port 80, use the command: `netstat -plan|grep :80|awk {‘print $5’}|cut -d: -f 1|sort|uniq -c|sort -nk 1`.

Make sure you have someone to give proper analysis to the data you find to determine if you are in fact having a DDoS attack. Using the `netstat` commands from your server CLI in these steps above will help you analyze if you are experiencing a DDoS attack, but using software analysis products that are specifically designed to help identify DDoS attacks, along with proper analysis, are your best tools to identify DDoS threats.

If you find that you are under DDoS attack, the steps you can take depend on your network configuration and how the DDoS attack is occurring, but general advice is to contact your ISP,  get a new IP address for your server, and/or consult IT professionals skilled in handling DDoS issues to analyze and advise on your particular situation.

## Related readings in our developer documentation:

* [DDoS protection](https://devdocs.magento.com/guides/v2.3/cloud/cdn/cloud-fastly.html#ddos-protection)
* [Using CLI commands](https://devdocs.magento.com/guides/v2.3/config-guide/deployment/pipeline/example/cli.html)
* [Cloud CLI for Commerce](https://devdocs.magento.com/guides/v2.3/cloud/reference/cli-ref-topic.html)
