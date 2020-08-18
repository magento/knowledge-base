__\*INTERNAL ARTICLE\*__

This internal article provides a solution for the Magento Commerce (on-premise) issue, where a merchant experiences a security issue.&nbsp;

## Affected versions

*   Magento Commerce (on-premise), all versions

## Issue

Merchant experiences a security issue and contacts Magento support.

## Cause

Security incident - Magento will provide direction to merchants regarding responsibilities and next steps (<a href="https://wiki.corp.magento.com/pages/viewpage.action?spaceKey=SUP&amp;title=Security+Breach+Protocol" target="_self">Wiki link for Security Breach Protocol</a>) and L1s will collect specific information detailed in Solution below.

## Solution

To resolve the security incident, please collect this specific information:

*   Affected URL(s)
*   100 days of https (apache/nginx) logs
*   SO ticket number
*   How the problem was detected
*   Proof of concepts/examples of problem snapshots of the affected environment
*   Current output of `` dmesg `` command
*   Standard Code backup, which should contain:

1.   `` composer.lock `` file
2.   `` mage/root/app/etc/config.php ``
3.   Manual gzip of `` var/log `` directory

<li>Two database snapshots (manual db dumps):<pre><code>mysqldump --routines --single-transaction -h &lt;host&gt; -p&lt;password&gt; -u &lt;user&gt; &lt;database&gt; | gzip &gt; var/support/database.sql.gz</code></pre></li>

1.   Snapshot containing the skimmer
2.   Most recent backup of the database without skimmer (list of backups to determine which ones to pull)

<li>Last 100 days of:</li>

*   service/CDN logs (Cloudflare/Incapsula/Akamai, etc.)
*   Messages
*   Syslog
*   Kern log
*   `` dmesg `` command (if logged and rotated)

## Related reading

*   <a href="https://wiki.corp.magento.com/pages/viewpage.action?spaceKey=SUP&amp;title=Security+Breach+Protocol" target="_self">Wiki link for Security Breach Protocol</a>