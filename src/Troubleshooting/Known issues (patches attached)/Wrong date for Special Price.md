---
title: Wrong date for Special Price
link: https://support.magento.com/hc/en-us/articles/360026174032-Wrong-date-for-Special-Price
labels: Magento Commerce,patch,troubleshooting,special price,known issues,2.2.2
---

This article provides a patch for the known Magento Commerce 2.2.2 issue related to the product special price "from" date being incorrect if its value is changed by the admin whose interface locale is different.

 Issue
-----

 When you set/change the special price for a product, the current date and time is saved in the database as a value for the special\_from\_date attribute (not visible when editing a product). If you edit the special price and your admin user account is set to different interface locale, a wrong value might be set to special\_from\_date, because of the issues in parsing date format for different locales.

 Steps to reproduce:

 Prerequisites: the admin user locale is English (United States).

 
 2. Log in to Magento Admin.
 4. Go to the admin user account settings.
 6. Set Interface Locale to Ukrainian.
 8. Click **Save Account**.
 10. Go to **Catalog** > **Product**.
 12. Select any product.
 14. On the product page, click **Advanced Pricing**.
 16. Add a special price.
 18. Save the product.
 20. Repeat steps 7-9.
 22. Go to **System** > **Action Logs**.
 24. Check the log for product update.
 
 Expected result:  
 Start date for the special price should be the current date.

 Actual result:  
 Start date for the special price is for a date a few years in the future, preventing the special price for being active.

 Solution
--------

 Applying the patch will prevent the issue from happening again. To correct the data for the products where date was set incorrectly, re-set the special price after applying the patch.

 Patch
-----

 The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

 [Download MDVA-11605\_EE\_2.2.2\_COMPOSER\_v1.patch](https://support.magento.com/hc/article_attachments/360025650852/MDVA-11605_EE_2.2.2_COMPOSER_v1.patch)

 ### Compatible Magento versions:

 The patch was created for:

 
 * Magento Commerce 2.2.2
 
 The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

 
 * Magento Commerce 2.1.0-2.1.18, 2.2.0-2.2.5
 * Magento Commerce Cloud 2.1.11-2.1.18, 2.2.0-2.2.5
 
 How to apply the patch
----------------------

 See [How to apply a composer patch provided by Magento](https://support.magento.com/hc/en-us/articles/360028367731) for instructions.

 Attached Files
--------------

