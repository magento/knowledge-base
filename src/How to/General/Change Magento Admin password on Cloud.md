---
title: Change Magento Admin password on Cloud
link: https://support.magento.com/hc/en-us/articles/115005021914-Change-Magento-Admin-password-on-Cloud
labels: Magento Commerce Cloud,user,ADMIN_PASSWORD,admin password,how to
---

<h2>Method 1: Forgot Your Password (reset via email)</h2>
<p><img alt="login_panel_s.png" src="https://support.magento.com/hc/article_attachments/115005807073/login_panel_s.png"/></p>
<p>Read the steps in the <a href="https://docs.magento.com/m2/ee/user_guide/stores/admin-signin.html#reset-your-password">Reset your password section of Admin Sign In</a> in the Magento User Guide.</p>
<p>Below are the critical usage notes.</p>
<h3>Enable outgoing emails</h3>
<p>Before using the Forgot your password form, <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#email">enable outgoing emails</a> using your <a href="http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html">Project Web Interface</a>.</p>
<h3>Check your Junk Email folder</h3>
<p>If you cannot find the message with a Reset Password link, check your <em>Junk Email</em> folder. The name of the email is <em>Password Reset Confirmation for Admin Username</em>.</p>
<h2>Method 2: Add a New Admin User</h2>
<p>If you cannot restore or reset the password for the existing user, you can create a new Admin user and set a password for this user. To do so, take the following steps:</p>
<ol>
<li><a href="https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh">SSH to your environment.</a></li>
<li>Run the following command: <br/><code>bin/magento admin:user:create   --admin-user=%user_name% --admin-password=%your_password% --admin-email=%your_email% --admin-firstname=%admin_user_first_name% --admin-lastname=%admin_user_last_name%</code>
</li>
</ol>