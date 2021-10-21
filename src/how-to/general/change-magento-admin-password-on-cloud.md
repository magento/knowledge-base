---
title: Change Admin password on Adobe Commerce on cloud infrastructure
labels: ADMIN_PASSWORD,Magento Commerce Cloud,admin password,how to,user,Adobe Commerce,cloud infrastructure
---

## Method 1: Forgot Your Password (reset via email)

![login_panel_s.png](assets/login_panel_s.png)

Read the steps in the [Reset your password section of Admin Sign In](https://docs.magento.com/m2/ee/user_guide/stores/admin-signin.html#reset-your-password) in our user guide.

Below are the critical usage notes.

### Enable outgoing emails

Before using the **Forgot your password** form, [enable outgoing emails](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html#email) using your [Project Web Interface](http://devdocs.magento.com/guides/v2.2/cloud/project/project-webint-basic.html).

### Check your Junk Email folder

If you cannot find the message with a Reset Password link, check your *Junk Email* folder. The name of the email is *Password Reset Confirmation for Admin Username*.

## Method 2: Add a New Admin User

If you cannot restore or reset the password for the existing user, you can create a new Admin user and set a password for this user. To do so, take the following steps:

1. [SSH to your environment.](https://devdocs.magento.com/guides/v2.2/cloud/env/environments-ssh.html#ssh)
1. Run the following command: `bin/magento admin:user:create   --admin-user=%user_name% --admin-password=%your_password% --admin-email=%your_email% --admin-firstname=%admin_user_first_name% --admin-lastname=%admin_user_last_name%`
