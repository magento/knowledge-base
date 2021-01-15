---
title: Security Incidents for On-Premise Merchants (Internal Article)
link: https://support.magento.com/hc/en-us/articles/360032920652-Security-Incidents-for-On-Premise-Merchants-Internal-Article-
labels: security,incident,on-premise
---

***INTERNAL ARTICLE***

 This internal article provides a solution for the Magento Commerce (on-premise) issue, where a merchant experiences a security issue. 

 Affected versions
-----------------

 
 * Magento Commerce (on-premise), all versions
 
 Issue
-----

 Merchant experiences a security issue and contacts Magento support.

 Cause
-----

 Security incident - Magento will provide direction to merchants regarding responsibilities and next steps ([Wiki link for Security Breach Protocol](https://wiki.corp.magento.com/pages/viewpage.action?spaceKey=SUP&title=Security+Breach+Protocol)) and L1s will collect specific information detailed in Solution below.

 Solution
--------

 To resolve the security incident, please collect this specific information:

 
 * Affected URL(s)
 * 100 days of https (apache/nginx) logs
 * SO ticket number
 * How the problem was detected
 * Proof of concepts/examples of problem snapshots of the affected environment
 * Current output of dmesg command
 * Standard Code backup, which should contain:
 

 2.  composer.lock file
 4. mage/root/app/etc/config.php
 6. Manual gzip of var/log directory
 
 - Two database snapshots (manual db dumps): mysqldump --routines --single-transaction -h <host> -p<password> -u <user> <database> | gzip > var/support/database.sql.gz 
 
 2. Snapshot containing the skimmer
 4. Most recent backup of the database without skimmer (list of backups to determine which ones to pull)
 
 - Last 100 days of:
 
 * service/CDN logs (Cloudflare/Incapsula/Akamai, etc.)
 * Messages
 * Syslog
 * Kern log
 *  dmesg command (if logged and rotated)
 
 Related reading
---------------

 
 * [Wiki link for Security Breach Protocol](https://wiki.corp.magento.com/pages/viewpage.action?spaceKey=SUP&title=Security+Breach+Protocol)
 
