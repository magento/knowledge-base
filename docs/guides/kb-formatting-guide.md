## Author in Markdown

Generally, we use [Adobe Experience League Markdown Syntax Style Guide](https://experienceleague.adobe.com/docs/authoring-guide-exl/using/markdown/syntax-style-guide.html?lang=en), but there are some differences and exceptions. Also, certain HTML tags are required in certain cases.

The following are examples of the Markdown formatting that is most commonly used in our repo.

## Basic formatting

To format text as bold, enclose it in two asterisks:

`This will be **bold** text`

To format text as italics, use a single asterisk:

`This text will be *italics*`

To format text as underlined, use the `<ins>` tag:

`<ins>This text will be underlined</ins>`

To add a line break, use the `<br>` HTML tag.


## Headers

Use the following formatting for headers from H2 to H5. H1 is never used since the article title is considered H1.

`## Header 2 `

`### Header 3 `

`#### Header 4`

`##### Header 5`

## Code inline and blocks

Use single backticks to enclose the code element you would like to highlight:

This is \`inline code\` within a paragraph of text.

### Code blocks

To insert a code block, enclose the code block in triple backticks and specify the language after opening triple backticks:

\`\`\` sql

SELECT TABLE_NAME AS `Table`,
  ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) AS `Size (MB)`
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "%project_id%"
ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;

\`\`\`

This will render as:

```sql
SELECT TABLE_NAME AS `Table`,
  ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) AS `Size (MB)`
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "%project_id%"
ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;
```

According to our linting rules, you always need to specify a language for the code block.

For the list of supported languages check https://github.com/github/linguist/blob/master/lib/linguist/languages.yml.

If the highlighting doesn't work for a certain language in markdown (that is, language is not supported), to make it at least highlighted when published to https://support.magento.com/hc/en-us/, use the following HTML:

```html
<pre><code class="language-%language-code%"
your code here
</pre></code>
```

Where ``%language-code%`` are the codes defined by [Prism.js supported languages](https://prismjs.com/#supported-languages).

## Lists

Always separate lists from the rest of content by blank lines. Lists should be preceded and followed by a blank line.

Use the following formatting for ordered lists:

```markdown
1. First numbered list item.
1. Second numbered list item.
...
1. Last numbered list item.
```

To create unordered bulleted list, begin a line with *, or +, or -. But select one method and use it consistently throughout the article.

Example:

```markdown
* Unordered list item.
* Unordered list item.
...
* Last unordered list item.
```
To add content between list items, add 4 spaces in the beginning of the line:

```markdown
* List item.
* List item.
    Here's some content between list items.
* Here we continue the list
```

You can embed lists this way as well.

## Links

External links are straightforward:

```markdown
[Adobe](https://www.adobe.com)
```

### Links to attachments

Any kind of attachment should be in .png, .jpg, and .jpeg formats. For security purpose, we only accept attachments that are in one of the three formats.

To insert an image, place the image to *assets* sub-folder in the same section folder as the article, and use the following syntax to insert the image to your article:

```markdown
![alt text](assets/image.png)
```

If you want to customize the size of your image, you will need to do that using the following HTML tag:
```html
<img src = "assets/image.png" alt = "your alt text" width="custom width, ex: 250px">
```

```markdown
[asset_title](assets/%file_name%).
```

### Links to a specific sections in the article

If you need to reference a section inside your article, you don't need to create a separate anchor. They’re automatically generated at publishing time for all H2-H6 headings. The anchors are generated from header by making all words lowercase and using "-" for separating words.

Example:

```markdown
## This is header
```

This is a link to this header:

```markdown
[this is link to the anchor in the same article](#this-is-header)
```

If you need to reference an element other than header, use HTML to define the element to add use the [id attribute](https://www.w3schools.com/html/html_id.asp). You can then use Markdown or HTML to reference this ID.

### Relative links and links to other articles

Do not use relative links to reference our support knowledge base articles. Those links will not work when your article gets published in the [Adobe Commerce Help Center](https://support.magento.com/hc/en-us).
Please use complete hyperlinks from the [Adobe Commerce Help Center](https://support.magento.com/hc/en-us).


## Tables

Use [HTML formatting for tables](https://www.w3schools.com/html/html_tables.asp).


## Warnings and info blocks

Success note block:
```
>![success]
>
>This is a success note
```
Warning block:
```
>![warning]
>
>This is a warning
```

Info note block:
```
>![info]
>
>This is a block with additional info
```
