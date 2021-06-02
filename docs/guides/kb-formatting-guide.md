## Author in Markdown
Generally, we use [GitHub flavored markdown](https://github.github.com/gfm/), but in some circumstances HTML is allowed or even required.

Following are the examples of most common used markdown formatting.

## Basic formatting

To format text as bold, inclose it in two asterisks:

`This will be **bold** text`

To format text as italics, use a single asterisk:

`This text will be *italics*`

## Headers

Use the following formatting for headers from H2 to H5. H1 is never used since article title in considered H1.

` ## Header 2 `

`### Header 3 `

`#### Header 4`

`##### Header 5`

## Code inline and blocks

Use single backticks to enclose the code element you would like to highlight:

This \` inline code \` within a paragraph of text.

### Code blocks

To insert a code block without highlighting, enclose the code block in triple backticks.

\`\`\`

code block here

\`\`\`

To add highlighting to the code block, specify the language after opening triple backticks:

\`\`\` sql

SELECT TABLE_NAME AS `Table`,
  ROUND((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024) AS `Size (MB)`
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "%project_id%"
ORDER BY (DATA_LENGTH + INDEX_LENGTH) DESC;
\`\`\`

For the list of supported languages check https://github.com/github/linguist/blob/master/lib/linguist/languages.yml.

If the highlighting doesn't work for a certain language in markdown, to make it at least highlighted when published to https://support.magento.com/hc/en-us/, use the following HTML:

```
<pre><code class="language-%language-code%"
your code here
</pre></code>
```

Where %language-code% are the codes defined by [Prism.js supported languages](https://prismjs.com/#supported-languages).

## Lists

Use the following formatting for ordered lists:

```
1. First numbered list item.
1. Second numbered list item.
```

Use the following for unordered  lists:



## Links

### Anchor Links

## Tables

## Warnings and info blocks

Success note block:
```
>[!SUCCESS]
>
>This is a success note
```
Warning block:
```
>[!WARNING]
>
>This is a warning
```

Info note block:
```
>[!INFO]
>
>This is a block with additional info
```

Error note block:
```
>[!ERROR]
>
>This is a block with additional info
```


## Exceptions where HTML is required

In certain cases HTML is required, to make sure formatting is correct once articles are published to [support.magento.com](https://support.magento.com/hc/en-us).


### Code blocks

For those languages, which are

On support.magento.com we use Prism.js to highlight code samples.
Please use the following formatting:

- for inline code and code blocks:  
  ```html
  <code class="language-%language-code%">%your code here%</code>
  ```
- for code blocks:
  ```html
    <pre>
        <code class="language-%language-code">
            %your code block here
        </code>
    </pre>
  ```

Supported languages and codes are listed on https://prismjs.com/#supported-languages.

*Examples:*

Inline code:
```html
<code class="language-bash">./bin/magento config:show catalog/search/engine</code>
```

Code block:
```html
<pre>
    <code class="language-yaml">
        "http://{default}/":
            type: upstream
            upstream: "mymagento:http"

        "http://{all}/":
            type: upstream
            upstream: "mymagento:http"
     </code>
 </pre>
```
