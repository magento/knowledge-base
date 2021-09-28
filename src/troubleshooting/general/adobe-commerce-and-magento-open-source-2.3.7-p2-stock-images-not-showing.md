---
title: Stock images not displayed, Adobe Commerce and Magento Open Source 2.3.7-p2
labels: troubleshooting,Adobe Commerce,Magento,Magento Open Source,media gallery,2.37-p2,images not displayed,on-premises,cloud infrastructure
---

This article provides a solution for the issue where Adobe stock images uploaded into the file system directories `pub/media` or `pub/media/catalog` do not display in the Media Gallery UI. This is because the images are outside of the allowed media gallery directories. For these images to display merchants need to delete the images on the file system and re-upload into an allowed Media Gallery directory.

## Affected products and versions

* Adobe Commerce and Magento Open Source 2.3.7-p2


## Issue

Merchants can upload Adobe Stock images to Storage Root in the Media Gallery but these images do not appear in the UI & will appear as though they were not uploaded. This is because the system notices that the image is already uploaded to the file system although it is not available in the Media Gallery UI. This means that once a merchant uploads an image to `pub/media` or `pub/media/catalog`, they cannot use that image until it is deleted in the file system directly.

<ins>Steps to reproduce</ins>

1. Enable Adobe Stock with valid API keys.
1. Open media gallery (**Catalog** > **Categories** > **Content** section > click **Select from Gallery**). 
1. Click **Search Adobe Stock**.
1. Select an image. The click **Save Preview**. Note that you may have to reset the Adobe Stock grid to get images to appear.

<ins>Expected result</ins>:

The image displays.

<ins>Actual result</ins>:

An error message displays: *The image cannot be located. We cannot find this image in the media gallery.*

## Cause

Images can be uploaded to the Media Gallery Storage Root via Adobe Stock.

## Solution

Select any subdirectory of the Media Gallery Storage Root (excluding **Storage Root** > **Catalog**) before uploading an Adobe Stock image.
Delete uploaded Adobe Stock images from the `pub/media` and `pub/media/catalog` folders on the Adobe Commerce file system and upload images into any allowed Media Gallery Storage Root subdirectories instead (excluding **Storage Root** > **Catalog**).

## Related reading

* [Media Storage](https://docs.magento.com/user-guide/v2.3/cms/media-storage.html) in our user guide.
