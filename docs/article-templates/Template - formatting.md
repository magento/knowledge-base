{::options parse_block_html="true" /}
---
title: TEMPLATE - formatting
labels: template,formatting
---
# Heading H1

--don't use H1, heading is our H1

## Heading H2

### Heading H3

#### Heading H4

##### Heading H5

###### Heading H6



## Icons and messages

<div class="panel panel-success">
**Do's**
{: .panel-heading}
<div class="panel-body">

THINGS TO DO note

</div>
</div>

<div class="panel panel-success">
**Success**
{: .panel-heading}
<div class="panel-body">

Success note

</div>
</div>

<div class="panel panel-danger">
**Don'tDo's**
{: .panel-heading}
<div class="panel-body">

Don't Do note

</div>
</div>

<div class="panel panel-danger">
**Danger**
{: .panel-heading}
<div class="panel-body">

DANGER DESCRIPTION note

</div>
</div>

<div class="panel panel-danger">
**Error**
{: .panel-heading}
<div class="panel-body">

Error note

</div>
</div>

<div class="panel panel-gitlab-orange">
**Warning**
{: .panel-heading}
<div class="panel-body">

Warning note

</div>
</div>

<div class="panel panel-gitlab-purple">
**PurpleNote**
{: .panel-heading}
<div class="panel-body">

Purple note

</div>
</div>

<div class="panel panel-warning">
**Warning**
{: .panel-heading}
<div class="panel-body">

Warning note

</div>
</div>

<div class="panel panel-info">
**Note**
{: .panel-heading}
<div class="panel-body">

Info note

</div>
</div>

Do's note
{: .alert .alert-success}

Success note
{: .alert .alert-success}

Don't Do's note
{: .alert .alert-danger}

Warning note
{: .alert .alert-danger}

Error note
{: .alert .alert-danger}

Purple note
{: .alert .alert-gitlab-purple}

Warning note
{: .alert .alert-warning}

Info note
{: .alert .alert-info}

Error messages:  _Text of verbatim Error messages are always denoted in italics._


## Code Examples

### Inline code

Example (use the backtick mark ``(`)`` on each side): `php bin/magento magento-cloud:scd-dump`

### Code block
```java
elasticsearch:
    type: elasticsearch:1.7
    disk: 1024
```


## Table


| Heading 1 | Heading 2 | Heading 3 |
|---|---|---|
| Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  | Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  | Lorem ipsumdolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  |

| Log | Integration | Staging | Production |
|---|---|---|---|
|**Exception log** | `var/log/exception.log`  | `var/log/exception.log`  | `var/log/exception.log`  |
|**Debug log** | `var/log/debug.log`  | `var/log/debug.log`  | `var/log/debug.log`  |


## Writing style examples
Start every article with an introductory sentence explaining the issue.

This article talks about the issue where a patch you just applied takes your site down. To resolve it, you can remove the patch.

Use **bold** for UI element names (buttons, tabs, options etc.,) and _italics_ for option values.

   Example: Set **Use Flat Catalog Category** to _No_.

Use the backtick mark ``(`)`` for file names.

   Example: `app/etc/config.php`

Use ``<ins>`` to underline text.

   Example: <ins>Steps to reproduce</ins>:


## Depersonalizing text and images
If you need to have a placeholder for a company name use "Acme Inc".

If you need to have a placeholder for a user use "John Doe".


## Decision tree articles
This is a placeholder because this functionality is being researched for within a Markdown file.


## Links
To create a link to a section in a knowledge base article (known in html as an "anchor") go into the source code of KB article, this is a placeholder because this functionality is being researched for within a Markdown file.


## Versions

When describing a product or feature that is supported on all Magento versions, say:

2.3.0-2.3.6-p1, 2.4.0-2.4.2 (these are the currently supported versions as of 6 April 2021, however, it is good to confirm these with release calendar).
