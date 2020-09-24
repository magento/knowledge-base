This article provides a patch for the known Magento Commerce 2.2.4 issue related to Google Analytics not tracking the conversion data.

<p class="info">The issue was fixed in Magento Commerce 2.2.6.</p>

## Issue

The conversion data was not tracked by Google Analytics due to an error in the Google Analytics component code.

<span class="wysiwyg-underline">Steps to reproduce</span>:

1.   Enable and configure the Google Analytics functionality in Magento Admin under __Stores__ &gt; __Settings__ &gt; __Configuration__ &gt; __Sales__ &gt; __Google API__ &gt; __Google Analytics__
2.   Click __Save Config__.
3.   Place an order on the storefront.&nbsp;
4.   Go to Google Analytics dashboard &gt; Conversions &gt; Overview.
5.   Set the date range to the current date.

<span class="wysiwyg-underline">Expected result</span>:

The order appears in the conversions data.

<span class="wysiwyg-underline">Actual result</span>:

The order does not appear in the conversion data.

## Solution

The patch fixes the error in the Google Analytics component code. After applying the patch conversion data will be tracked by Google Analytics.

## Patch

The patch is attached to this article. To download it, scroll down to the end of the article and click the file name, or click the following link:

<a href="https://support.magento.com/hc/en-us/article_attachments/360025558831/MDVA-11263_EE_2.2.4_v1.composer.patch" rel="noopener" target="_blank">Download MDVA-11263\_EE\_2.2.4\_v1.composer.patch</a>

### Compatible Magento versions:

The patch was created for:

*   Magento Commerce 2.2.4

The patch is also compatible (but might not solve the issue) with the following Magento versions and editions:

*   Magento Commerce 2.2.5
*   Magento Commerce Cloud 2.2.4, 2.2.5

## How to apply the patch

See <a href="https://support.magento.com/hc/en-us/articles/360028367731" target="_self">How to apply a composer patch provided by Magento</a> for instructions.

## Attached Files