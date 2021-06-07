## Author in Markdown
Generally, we use [GitHub flavored Markdown](https://github.github.com/gfm/), but in some circumstances HTML is allowed or even required.

The following are examples of the Markdown formatting that is most commonly used in our repo.

## Basic formatting

To format text as bold, inclose it in two asterisks:

`This will be **bold** text`

To format text as italics, use a single asterisk:

`This text will be *italics*`

## Headers

Use the following formatting for headers from H2 to H5. H1 is never used since the article title in considered H1.

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

According to our linting rules, you always need to specify a language for a code block.

For the list of supported languages check https://github.com/github/linguist/blob/master/lib/linguist/languages.yml.

If the highlighting doesn't work for a certain language in markdown (that is, language is not supported), to make it at least highlighted when published to https://support.magento.com/hc/en-us/, use the following HTML:

```html
<pre><code class="language-%language-code%"
your code here
</pre></code>
```

Where ``%language-code%`` are the codes defined by [Prism.js supported languages](https://prismjs.com/#supported-languages).

## Lists

Always separate lists from the rest of content by blank lines.

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
To add content between list items, add 4 spaces in the begining of the line:

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

### Links to images

To insert an image, place the image to *assets* sub-folder in the same section folder as the article, and use the following syntax to insert the image to your article:

```markdown
![alt text](assets/image.png)
```

### Links to attached files
You can upload *.pdf* and *.zip* files and add links to them in article, so that users can download the files.

To do so, place the files in the *assets* sub-folder in the same section folder as the article, and use the following syntax to insert the link to the file in your article:

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

## Tables

Use [HTML formatting for tables](https://www.w3schools.com/html/html_tables.asp).


## Warnings and info blocks

Success note block:
```
>![SUCCESS]
>
>This is a success note
```
Warning block:
```
>![WARNING]
>
>This is a warning
```

Info note block:
```
>![INFO]
>
>This is a block with additional info
```

Error note block:
```
>![ERROR]
>
>This is a block with additional info
```
