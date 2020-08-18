This article provides patches for the known issue for Magento Commerce Cloud 2.2.x which causes duplication of&nbsp;export files resulting in a large &nbsp;`` TAR `` file in&nbsp;`` /tmp/analytics ``.&nbsp;This leads to a continuous decline in space which can lead to a range of issues. This can include fatal errors or exceptions as files cannot be saved due to a lack of disk space. You may be unable to re-deploy the project or upload images.

## Issue

In the `` /tmp/analytics `` folder a large `` TAR ``&nbsp;(a type of archive) file is generated every 24 hours.&nbsp;This file contains Magento instance data reports for MBI.&nbsp;<span style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif;">  
</span> <span class="wysiwyg-underline">  
Steps to reproduce:  
</span>

1.   Enable advanced reporting.
2.   Wait 24 hours for the&nbsp;`` TAR `` file to be generated in `` /tmp/analytics ``.
3.   This occurs every 24 hours.

<span class="wysiwyg-underline">Expected result:</span>

The `` TAR `` file should probably be approximately 1GB or less.&nbsp;  
   
 <span class="wysiwyg-underline">Actual result:  
  
</span>Large&nbsp;`` TAR `` file generated every 24 hours in&nbsp;`` /tmp/analytics ``.&nbsp;  
 If the size of the `` TAR `` file is &gt; 1Gb check if the patch MDVA-15136 (attached to this article) is applied.

## Patch

Patches were developed for Magento Commerce Cloud and Magento Commerce 2.2.5 and 2.2.6.&nbsp;The patches are attached to this article. To download them, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360046535412/MDVA-15136_EE_2.2.5_COMPOSER_v1.patch" rel="noopener" target="_self">Download MDVA-15136\_EE\_2.2.5\_COMPOSER\_v1.patch</a>

<a href="https://support.magento.com/hc/en-us/article_attachments/360046647691/MDVA-15136_EE_2.2.6_COMPOSER_v1.patch" rel="noopener" target="_self">Download MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch</a>

### COMPATIBLE MAGENTO VERSIONS:

*   MDVA-15136\_EE\_2.2.5\_COMPOSER\_v1.patch&nbsp;was created for&nbsp;Magento Commerce (Cloud) 2.2.5
*   MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch&nbsp;was created for&nbsp;Magento Commerce (Cloud) 2.2.6

MDVA-15136\_EE\_2.2.5\_COMPOSER\_v1.patch&nbsp;is compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) and Magento Commerce 2.3.0
*   Magento Commerce (Cloud) and Magento Commerce 2.2.7
*   Magento Commerce (Cloud) and Magento Commerce 2.2.6
*   Magento Commerce (Cloud) and Magento Commerce 2.2.5
*   Magento Commerce (Cloud) and Magento Commerce 2.2.4
*   Magento Commerce (Cloud) and Magento Commerce 2.2.3
*   Magento Commerce (Cloud) and Magento Commerce 2.2.2
*   Magento Commerce (Cloud) and Magento Commerce 2.2.1
*   Magento Commerce (Cloud) and Magento Commerce 2.2.0

MDVA-15136\_EE\_2.2.6\_COMPOSER\_v1.patch is compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) and Magento Commerce 2.3.0
*   Magento Commerce (Cloud) and Magento Commerce 2.2.7
*   Magento Commerce (Cloud) and Magento Commerce 2.2.6

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached files

&nbsp;