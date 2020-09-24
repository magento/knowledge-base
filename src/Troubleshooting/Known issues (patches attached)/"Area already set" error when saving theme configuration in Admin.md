This article provides a patch for the known Magento Commerce (Cloud) 2.2.4 issue related to getting the _"Area is already set"_ error message when trying to set a theme for the Default Store View in the Magento Admin.

## Issue

You get the "_Something went wrong while saving this configuration: Area is already set_" error message when trying to set a theme for the Default Store View.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   Log in to Magento Admin.
2.   Navigate to __Content__&gt;__Design__&gt;__Configuration__.
3.   Set the configuration scope to _Default Store View_.
4.   Change the theme in the __Applied Theme__ drop-down. For example, from _Magento Luma_ to _Magento Blank._
5.   Click __Save Configuration__.

<span class="wysiwyg-underline">Expected result</span>:  
 The selected theme is applied for the default store view.

<span class="wysiwyg-underline">Actual result</span>:  
 Theme is not applied, the&nbsp;_"Something went wrong while saving this configuration: Area is already set"_ error message is displayed.

## Patch

The patch is attached to this article. To download it, click the following link or scroll down to the end of the article and click the attached file:

<a href="https://support.magento.com/hc/en-us/article_attachments/360023313871/MDVA-11106_EE_2.2.4_v1.composer.patch" target="_self">Download MDVA-11106\_EE\_2.2.4\_v1.composer.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce (Cloud)&nbsp;2.2.4

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce (Cloud) 2.0.X
*   Magento Commerce (Cloud)&nbsp;2.1.X
*   Magento Commerce (Cloud) from 2.2.0 to&nbsp;2.2.5
*   Magento Commerce 2.0.X
*   Magento Commerce 2.1.X
*   Magento Commerce from 2.2.0 to&nbsp;2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files