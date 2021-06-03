---
title: TEMPLATE - formatting
labels: template,formatting
---

## Metadata

```markdown
---
title: article title
lables: article, lables
---
```

# Heading H1 

## Heading H2

### Heading H3

#### Heading H4

##### Heading H5

###### Heading H6

### Heading IDs

Heading IDs (also called anchor IDs) are required for deep linking to sections within articles. To specify a heading ID, use this format: [Link to Header](#heading-ids)

## Basic Text formatting

This text is **bold**
This text is *italic*
This text is ***bold and italic***

### Blockquote Quotiation

>This is a blockquote quotation. Blockquotes cannot be consecutive. They must have a different type of text between them to be recognized as separate blockquotes. 

### Escape Characters

&lt;
&gt;
&amp;
&Hat;
&mdash;
&ndash;

## Assets

### Patches

[Download demo.zip patch](assets/demo.zip)

### PDFs

[Demo PDF](assets/demo.pdf)

### Powerpoint

[Demo PPTX](assets/demo.pptx)


### Images

Use the `![ ]( )` syntax for images. The brackets [ ] include alt text, and the parentheses ( ) include the image location. The exclamation mark distinguishes an image from a link. We don’t support hover text at this time. Format: ![alt text](assets/table_results2.png)

#### Images with height and width

*Images with height and width attributes must be formatted using HTML tags*

<img src="https://experienceleague.adobe.com/docs/authoring-guide-exl/assets/logo.png?lang=en" alt="Adobe Image" style="width:50px;height:50px;">

## Links and Cross-Refrences

**Hyperlink:** [Adobe](https://www.adobe.com)
**URL as Link:** <https://www.adobe.com>
**Image Link:**
[![image](https://experienceleague.adobe.com/docs/authoring-guide-exl/assets/logo.png?lang=en)](https://www.adobe.com)
**Standard Relative Link(NOT SUPPORTED):** [Overview example article](collaborative-doc-instructions/overview.md)
**Root Relative Link(NOT SUPPORTED):** [Introduction example article](/help/using/docile-rules/introduction.md)
**Deep Linking:** [Go to Heading H1](#heading-h1)

## Lists

### Embedded Lists

1. Coffee
1. Tea
    * Black tea
    * Green team
1. Milk

### Content between list Items

1. Set up your table and code blocks.
1. Perform this step.

   ![screen](src/troubleshooting/general/assets/authorize-net_test-mode_setting.png)
   
1. Make sure that your table looks like this: 


   
1. This is the fourth step.

   >![NOTE]
   >
   >This is note text.
   
1. Do another step.

   This is an indented line.

### Ordered Lists

1. List item 1
1. List item 2
1. List item 3

### Unordered Lists

* Bullet point 1
* Bullet point 2
* Bullet point 3

## Icons and Messages

*Please Note: Unlike the Adobe Experience League, we use ![classname] rather than [!classname]*

>![SUCCESS]
>
>Sucess note.

Block quotes cannot be placed consecutively. They need another item between them. 

>![WARNING]
>
>Warning note.

Block quotes cannot be placed consecutively. They need another item between them. 

>![INFO]
>
>Info note.

Block quotes cannot be placed consecutively. They need another item between them. 

>![ERROR]
>
>Error note.


Error messages: *Text of verbatim Error messages are always denoted in italics.*

## Code Blocks

### Code Block(In Line)

Example (use the &lt;code&gt; tag): `php bin/magento magento-cloud:scd-dump`

### Code Block (Fenced)

```clike
elasticsearch:
        type: elasticsearch:1.7
        disk: 1024 
```
#### Code Block Yaml

```yaml
integer: 25
string: "25"
float: 25.0
boolean: Yes
```

#### Code Block JSON

```json
{"name":"John", "age":30, "car":null}
```

#### Code Block Bash

```bash
#!/bin/bash
for (( counter=10; counter>0; counter-- ))
do
echo -n "$counter "
done
printf "\n"
```

#### Code Block PHP

```php
<?php
echo "Hello World!";
?> 
```

## Table

### HTML Syntax
<table>
  <tbody>
    <tr>
      <th>Heading 1</th>
      <th>Heading 2</th>
      <th>Heading 3</th>
    </tr>
    <tr>
      <td>
        Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </td>
      <td>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </td>
      <td>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
        mollit anim id est laborum.
      </td>
    </tr>
  </tbody>
</table>
<table>
  <tbody>
    <tr>
      <th>Log</th>
      <th>Integration</th>
      <th>Staging</th>
      <th>Production</th>
    </tr>
    <tr>
      <th>Exception log</th>
      <td>
        <code>var/log/exception.log</code>
      </td>
      <td>
        <code>var/log/exception.log</code>
      </td>
      <td>
        <code>var/log/exception.log</code>
      </td>
    </tr>
    <tr>
      <th>Debug log</th>
      <td>
        <code>var/log/debug.log</code>
      </td>
      <td>
        <code>var/log/debug.log</code>
      </td>
      <td>
        <code>var/log/debug.log</code>
      </td>
    </tr>
  </tbody>
</table>

## Blank Space

<br>&nbsp;

## Troubleshooters

<div class="zd-accordion-panel">
<div class="zd-accordion-section">Do you have [<em>error type J</em>]?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking the [<em>error/issue</em>] in this [<em>link to KB or DevDocs article]<em>.</em></em></p>
<p>b. NO – Proceed to<a class="accordion-anchor" href="#step-2"> Step 2</a>.</p>
</div>

## Video (NOT SUPPORTED)

>[!VIDEO](https://video.tv.adobe.com/v/29770/?quality=12)

## Comments and Remarks (NOT SUPPORTED)

There is a comment here.
<!-- Standard Comment -->

## HTML Syntax Allowed in MD 

### Tables

Tables should be formatted using HTML. Currently MD tables are unsupported. 

<table>
<tbody>
  <colgroup>
    <col span="2" style="background-color:red">
  </colgroup>
<tr>
<th>Dummy Data</th>
</tr>
<tr>
<td>January</td>
</tr>
</tbody>
</table>

### Line Break

<br>

### Paragraph

<p>Paragraph</p>

### Unordered List

<ul><li>Unordered List</li></ul> 

### Ordered List

<ol><li>Ordered List</li></ol> 

### Bold

<b>Bold</b>

### Caption 

<caption>Caption</caption>

### Italic

<i>Italic</i>

### Strong

<strong>Strong</strong>

### Underline

<u>(underline using u tag)</u>
<ins>(underline using ins tag)</ins>

### Strikethrough

<s>(strikethrough)</s>

### Span

<span class="class">Span</span>

### Subscript

<sub>(subscript)</sub>

### Superscript

<sup>(superscript)</sup>

### Non-Relative Anchor

<a href="https://www.adobe.com">Link</a>

###  Image

See [Images](##images)

### Div
<div class="class1">Div</div>

### Italics
<em>(emphasis, italics)</em>

### Code
<pre><code class="language-graphql">Codeblock</code></pre>

## Test Syntax

### Tables

#### Markdown Table (NOT SUPPORTED)

| Header | Another header | Yet another header |
|--- |--- |--- |
| row 1 | row 1 column 2 | row 1 column 3 |
| row 2 | row 2 column 2 | row 2 column 3 |

| Heading 1 | Heading 2 | Heading 3 |
|--- |--- |--- |
| Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.| Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. | Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.|

| Log | Integration | Staging | Production |
|--- |--- |--- |--- |
| **Exception log** | `var/log/exception.log` | `var/log/exception.log`  | `var/log/exception.log` |
| **Debug log** | `var/log/debug.log` | `var/log/debug.log` | `var/log/debug.log` |

#### Markdown Table with line breaks and lists (NOT SUPPORTED)

| Header | Another header | Yet another header |
|------------|----------|----------------|
| row 1 | first line in cell<br>second line in cell | row 1 column 3 |
| row 2 | bullet list<ul><li>item 1</li><li>item 2</li><li>item 3</li></ul> | row 2 column 3 |

#### Markdown table with line breaks and fake lists (NOT SUPPORTED)

| Color | Things to Do |
|--- |--- |
| Red | * Read <br> * Write <br> * Study |
| Blue | * Swim <br> * Run <br> * Lift <br> **Note**: Remember to train smart.|

### Troubleshooter

#### Step 1

**HTML SYNTAX**

<div class="zd-accordion-panel">
<div class="zd-accordion-section">Do you have [<em>error type J</em>]?</div>
<p class="zd-accordion-text">a. YES – Proceed with checking the [<em>error/issue</em>] in this [<em>link to KB or DevDocs article]<em>.</em></em></p>
<p>b. NO – Proceed to<a class="accordion-anchor" href="#zd-accordion-2"> Step 2</a>.</p>
</div>

**MARKDOWN ATTRIBUTE SYTAX**

Do you have [*error type J*]
{: class="accordion-section"}

a. YES - Proceed with checking the [*error/issue*] in this [*link to KB or DevDocs article*]
{: class="accordion-text" }

b. No - Proceed to [Step 2](#step-2){: class="accordion-anchor" }

## Definition lists

For definition lists, we do not yet support standard Markdown syntax. Instead, use manual formatting like this:
**Frog** - An amphibious green creature. Likes flies.

