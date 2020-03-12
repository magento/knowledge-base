__"CSV files must use UTF-8 encoding."__ This error message means that the file you're trying to upload contains illegal characters, or characters that aren't allowed. While UTF-8 &nbsp;encoding allows for [the majority of characters](http://www.fileformat.info/info/charset/UTF-8/list.htm), some aren't&nbsp;compatible with Magento BI.

To fix the problem, you'll need to change the encoding of the file. Re-saving the file with the proper encoding typically resolves the issue, but be aware that you may lose some information (for example, the illegal characters may be dropped) when doing this.

We recommend using [Sublime Text](http://www.sublimetext.com/2) to save and encode the file.

1.   Open your file in Microsoft Excel, Google Docs, Apple Numbers, or your program of choice.
2.   Click ​​__File &gt; Save as__​​ and choose the ​​__Comma separated values (.csv)__ format to save the file.
3.   Open the CSV file&nbsp;in Sublime Text.
4.   In Sublime Text, navigate to ​​__File &gt; Save with Encoding &gt; UTF-8\*​__. This will save the CSV file with UTF-8 encoding.
5.   [Upload the data](https://support.magento.com/hc/en-us/articles/360016730951-Upload-additional-data-to-RJMetrics-with-File-Uploads-CSV) to a new table in Magento BI.