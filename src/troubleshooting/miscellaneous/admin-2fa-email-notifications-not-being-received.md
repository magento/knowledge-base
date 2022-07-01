---
title: Admin 2FA email notifications not being received
labels: troubleshooting,SendGrid,email,Adobe Commerce,cloud infrastructure,2FA,Admin,notifications,Magento
---
This article provides troubleshooting when you aren't receiving the email with the setup completion instructions after you have set up Two-Factor Authentication (2FA) in order to enhance Admin access security in Adobe Commerce on cloud infrastructure.

## Affected products and versions

* Adobe Commerce on cloud infrastructure, all versions

## Issue

You have set up Two-Factor Authentication in order to enhance Admin access security, but aren't receiving the email with the instructions on completing the setup.

## Cause

If you have not configured the Sender email properly, or your domain has not been white-labeled in SendGrid, then the email would likely have ended up in the Spam folder.

## Troubleshooting

### Step 1: Check your Spam folder

1. If the email didn't appear in your Spam folder, run this Mysql query to verify the email addresses have been configured:

    ```sql
    select * from core_config_data where path like '%trans_email%';
    ```

    * If it doesn't return any results, it means that the Sender address has not been configured.
    * If it returns a result, proceed to **Step 2**.

1. If the email appeared in your Spam folder, click on the link in the email. If the link has since expired, try logging in again to repeat the process.
1. Once you have gained access, go to **Stores** > **Configuration** > **General** > **Store Email Addresses** and configure the email addresses.

### Step 2: If/once the email addresses have been properly configured, SSH into the environment and run this command:

```php
php -r "mail(<your email address>,<subject>,<content>,'To: <sender email>');"
```

Check your Spam folder for the email. If the email appeared there, [submit a support ticket](https://support.magento.com/hc/en-us/articles/360000913794#login) to request the domain to be white-labeled in SendGrid.

## Related reading

* [SendGrid](https://devdocs.magento.com/cloud/project/sendgrid.html) in our developer documentation.
