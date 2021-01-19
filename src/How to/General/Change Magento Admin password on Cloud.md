---
title: Change Magento Admin password on Cloud
link: https://support.magento.com/hc/en-us/articles/115005021914-Change-Magento-Admin-password-on-Cloud
labels: Magento Commerce Cloud,user,ADMIN_PASSWORD,admin password,how to
---

## Method 1: Forgot Your Password (reset via email)

![login_panel_s.png](https://support.magento.com/hc/article_attachments/115005807073/login_panel_s.png)

Read the steps in the [Reset your password section of Admin Sign In](https://docs.magento.com/m2/ee/user_guide/stores/admin-signin.html#reset-your-password) in the Magento User Guide.

Below are the critical usage notes.

### Enable outgoing emails

Before using the **Forgot your password** form, [enable outgoing emails](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#email) using your [Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html).

### Check your Junk Email folder

If you cannot find the message with a Reset Password link, check your *Junk Email* folder. The name of the email is *Password Reset Confirmation for Admin Username*.

## Method 2: Add a New Admin User

If you cannot restore or reset the password for the existing user, you can create a new Admin user and set a password for this user. To do so, take the following steps:

1. [SSH to your environment.](https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh)

1. Run the following command:   
bin/magento admin:user:create --admin-user=%user\_name% --admin-password=%your\_password% --admin-email=%your\_email% --admin-firstname=%admin\_user\_first\_name% --admin-lastname=%admin\_user\_last\_name%

