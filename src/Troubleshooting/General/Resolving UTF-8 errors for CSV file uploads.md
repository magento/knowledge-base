---
title: Resolving UTF-8 errors for CSV file uploads
link: https://support.magento.com/hc/en-us/articles/360016730591-Resolving-UTF-8-errors-for-CSV-file-uploads
labels: troubleshooting,Magento Business Intelligence,UTF-8 errors
---

<p>This article provides a fix for when you receive the error message "CSV files must use UTF-8 encoding." This error message means that the file you're trying to upload contains illegal characters, or characters that aren't allowed. While UTF-8  encoding allows for <a href="http://www.fileformat.info/info/charset/UTF-8/list.htm">the majority of characters</a>, some aren't compatible with Magento BI.</p>
<p>To fix the problem, you'll need to change the encoding of the file. Re-saving the file with the proper encoding typically resolves the issue, but be aware that you may lose some information (for example, the illegal characters may be dropped) when doing this.</p>
<p>We recommend using <a href="http://www.sublimetext.com/2">Sublime Text</a> to save and encode the file.</p>
<ol>
<li>Open your file in Microsoft Excel, Google Docs, Apple Numbers, or your program of choice.</li>
<li>Click ​​File &gt; Save as​​ and choose the ​​Comma separated values (.csv) format to save the file.</li>
<li>Open the CSV file in Sublime Text.</li>
<li>In Sublime Text, navigate to ​​File &gt; Save with Encoding &gt; UTF-8*​. This will save the CSV file with UTF-8 encoding.<br/><br/><img alt="csv_file_UTF-8_sublime_3.2.2_magento_BI.png" src="https://support.magento.com/hc/article_attachments/360086187532/csv_file_UTF-8_sublime_3.2.2_magento_BI.png"/><br/><br/>
</li>
<li>
<a href="https://support.magento.com/hc/en-us/articles/360016730951-Upload-additional-data-to-RJMetrics-with-File-Uploads-CSV">Upload the data</a> to a new table in Magento BI.</li>
</ol>