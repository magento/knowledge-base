---
title: Admin passwords saved as plain text to actions log 
link: https://support.magento.com/hc/en-us/articles/115002406394-Admin-passwords-saved-as-plain-text-to-actions-log-
labels: Magento Commerce Cloud,Magento Commerce,security,troubleshooting,admin password
---

<p>This article provides a fix for when a Magento Administrator creates a new user with the Administrator privileges and the password is saved as plain text in the <code>magento_logging_event_changes</code> database table.</p>
<p>To fix this security issue, install the Magento 2.0.16 and 2.1.9 Security Update. After applying the Security Update, the passwords are encrypted and do not appear as plain text.</p>
<h2>Affected versions</h2>
<ul>
<li>Magento Commerce 2.X.X</li>
<li>Magento Commerce (Cloud) 2.X.X</li>
</ul>
<h2>Issue</h2>
<p>When an existing Magento Administrator creates a new user with the Administrator privileges via System &gt; Permissions &gt; All Users &gt; Add new user, the password (entered as a confirmation) is saved as plain text in the <code>magento_logging_event_changes</code> database table.</p>
<h3>Steps to reproduce:</h3>
<p>1. Log in as Administrator and create a new user by navigating to this path: System &gt; Permissions &gt; All Users.<br/><br/><img alt="add_user_magento_2.4.1.png" src="https://support.magento.com/hc/article_attachments/360086186492/add_user_magento_2.4.1.png"/><br/>2. Then click the Add new user page. Provide your current Administrator's password when prompted.<br/>3. Go to the System &gt; Action Log &gt; Report page and find the last log entry.<br/>4. You can see the current password, neither encrypted nor hashed.</p>
<h2>Solution</h2>
<p>Install the <a href="https://magento.com/security/patches/magento-2016-and-219-security-update">Magento 2.0.16 and 2.1.9 Security Update</a> which fixes the issue.</p>
<p>After installing the Security Update, the password gets encrypted and does not show up in plain text in the <code>magento_logging_event_changes</code> table.</p>
<h2>More information</h2>
<p><a href="https://magento.com/security/patches/magento-2016-and-219-security-update">Magento 2.0.16 and 2.1.9 Security Update page</a></p>
<p><a href="http://devdocs.magento.com/guides/v2.1/comp-mgr/bk-compman-upgrade-guide.html">Upgrade the Magento application and components</a> (DevDocs article)</p>