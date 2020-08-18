This article talks about the issue where the&nbsp;popup window for uploading Fastly VCL snippets does not show up. The issue might be caused by the Fastly\_Cdn module output being disabled.

### Affected products and versions

*   Magento Commerce Cloud
*   2.1.X or earlier

## Issue

<span class="wysiwyg-underline">Steps to reproduce</span>

1.   In the Magento Admin, navigate to&nbsp;__Stores__ &gt; __Settings__&gt; __Configuration__ &gt; __Advanced__ &gt; __System__ &gt; __Fastly Configuration__.
2.   Click __Upload VCL to Fastly__.

<span class="wysiwyg-underline">Expected result</span>

The popup window opens for uploading the file.

<span class="wysiwyg-underline">Actual result</span>

Nothing happens, the window does not pop up.

## Cause

The issue might be caused by the Fastly\_Cdn module output being disabled.

## Solution

Take the following steps to enable the module output and clear cache:

1.   Log in to the Magento Admin.
2.   Navigate to&nbsp;__Stores__ &gt; __Settings__ &gt; __Configuration__ &gt;&nbsp;ADVANCED &gt; __Advanced__.
3.   For the Fastly\_Cdn module, select _Disable_.
4.   Click __Save Config__.
5.   Navigate to __System__ &gt; Tools &gt; __Cache Management__.
6.   Click __Flush Magento Cache__.&nbsp;
7.   On the same page, under Additional Cache configuration, click __Flush Static Files Cache__ and __Flush JavaScript/CSS Cache__.