---
title: Changes to categories are not being saved
link: https://support.magento.com/hc/en-us/articles/115004383453-Changes-to-categories-are-not-being-saved
labels: Magento Commerce Cloud,Magento Commerce,category,catalog,troubleshooting
---

This article provides a fix for when updating product categories via Magento Admin, the changes are not displayed on Magento Admin and storefront. The problem is caused by the corrupted data in the catalog\_category\_entity table. To solve the issue, fix or remove the problematic category update records in the table. After that, you should be able to update product categories using Magento Admin.

 Issue
-----

 After making changes to a product category in Magento Admin and saving, the new updates are neither saved nor displayed in Magento Admin and storefront.

 ### Steps to reproduce

 
 2. Go to **Catalog** > **Categories**.
 4. Select a category.
 6. Make changes, then click **Save**.
 8. The message is displayed: *You saved the category*.
 10. Notice that the change you've made has not been saved.
 
 Possible cause: corrupted data in the catalog\_category\_entity table
---------------------------------------------------------------------

 The issue is caused by the same values in the created\_in column of the affected category records in the database (DB).

 ![Corrupted data in the catalog_category_entity table](https://support.magento.com/hc/article_attachments/115005488234/catalog_category_entity.png)

 Details:

 
 * the catalog\_category\_entity DB table has two or more records for the affected category (these records have the same entity\_id value)
 * these category records have **the same values in the created\_in column** 
 
 ### How does the second DB entry (and all the next ones) appear in DB for one and the same category?

 The second DB record (and, possibly, the next ones) for the affected category means there have been category updates scheduled using the Magento\_Staging module. The module makes an additional record for a category in the catalog\_category\_entity and that is the expected application behavior; the problem is that the records have the same values for the created\_in column.

 ### How do the same values appear?

 We cannot state the reasons for data corruption with certainty. The possible reasons may include:

 
 * customizations (code, themes, etc.)
 * incorrect data migration
 * incorrect data restore from backup
 
 To the best of our knowledge, such data corruption is not typical for the "clean" (out-of-the-box) Magento instance and cannot be reproduced on a Magento installation with no customizations.

 ### How to verify this is your issue

 The catalog\_category\_entity table should have multiple records for the affected category (records should have the same entity\_id value) and at least two of those records should have the same created\_in values. With this, the Staging-scheduled updates would not be displayed in Magento Admin; you would only see the empty Scheduled Changes block.

 #### Steps to verify

 
 2. Access the catalog\_category\_entity table in your database.
 4. Filter entities by entity\_id, with entity\_id identifying the affected category.
 6. If the values in the created\_in column are the same for different entries with the same entity\_id, that's our case. Normally, the created\_in values are different for every record.
 
 ![Corrupted data in the catalog_category_entity table](https://support.magento.com/hc/article_attachments/115005488234/catalog_category_entity.png)

 Solution
--------

 You may choose one of the following solutions:

 
 2.  **Delete** the problematic category update records
 4.  **Repair** the problematic category update records
 
 ### Delete the problematic category update records

 In this solution, you will need to set the correct updated\_in value for the initial category record and delete all other records for this category. This removes all scheduled category updates.

 Follow these steps:

 
 2. Find the DB records with the entity\_id of the affected category.
 4. Select the record with the biggest integer in the updated\_in column.
 6. Copy the updated\_in value from the selected record.
 8. Select the record with row\_id = entity\_id (initial category record) and paste the copied value to the updated\_in column of this record.
 10. Delete row(s) with row\_id not equal to entity\_id.
 
 ### Repair the problematic category update records

 
 2. Find the category records with the same entity\_id and the same created\_in value.
 4. Select the record where row\_id = entity\_id and copy the updated\_in value.
 6. Select the record where row\_id is not equal to entity\_id and paste the copied updated\_in value as the created\_in value. See the screenshot below as an illustration.  
  
![Copying the created_in value.png](https://support.magento.com/hc/article_attachments/115005444433/copy_created-in_value.png)  
  
 
 8. Verify that the category update record, the created\_in value of which you have updated (in step 3), exists in the staging\_update table.  
*For example:* IF the copied created\_in value is 1509281953, THEN the entity with row\_id = 1509281953 must exist in the staging\_update table
 
  

