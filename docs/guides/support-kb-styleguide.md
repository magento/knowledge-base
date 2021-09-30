Please follow these style and formatting recommendations, when contributing to the Adobe Commerce Help Center.

## Titles

* Titles are in sentence-style capitalization.
* Plural for titles; singular for procedure headings. Example: Title - Writing books. Header - Write a book.
* Keep titles short, with important words at the beginning. For SEO reasons, it is highly recommended titles are not longer than 70 characters (there is an exception for when a title reduction prevents the true meaning being communicated). 

## Headers

* The top-level header is H2. (H1 is by default article title, even if the title is not visibly formatted with H1).
* Use infinitive verbs for task headings. For example "How to identify high traffic events".
* Use the singular form for task headings. For example, "Module structure".
* Avoid double headings (there should be at least one sentence between headers).
* Sentence-style capitalization for all headings.
* Task titles are in imperative (“Create x”, not “Creating x” or “To create x”).

## Lists

* Steps in a task: maximum 9

* Bulleted lists make scanning easy.

    * Use bulleted lists for methods, approaches, options, and nonconsecutive task steps.
    * Keep text in bullets short, preferably not more than two sentences.
    * Minimize the number of bullets; seven or fewer is ideal.
    * Avoid placing a tip or note between bulleted items.
    * Use parallel grammar structure in lists but break this rule if it results in excess verbiage or stilted language.
    * Capitalize the first word of each item in a bulleted list, even if it is a fragment.

* Make your lists parallel. For example, each item should be a noun or a phrase that starts with a verb.

## Notes and tips

Keep notes and tips to one paragraph only. The need for more than one paragraph signals the need to restructure the content and include it in the body of the article.

## Capitalization

When in doubt, don't capitalize. In headings, use sentence-style capitalization. Capitalize proper nouns and the first word after a colon.

## UI elements

* Everything that the user clicks put in **bold**. For example, "Click **Continue**." Option values and error messages are formatted with _italics_.
* Wherever possible, avoid mentioning the UI element type in instructions. (Click **Next**. vs Click the **Next** button.)
* Use "Choose" and ">"" in command sequences. (Choose **Edit** > **Preferences**. vs Click Edit | Preferences.)
* Preposition: "in" for dialog box, window, are a, panel, view, wizard, list, folder, node.
* Preposition: "on" for screen, page, toolbar, menu bar, tab, pane, ribbon.
* Preposition: Click (Click **Next** vs Click on **Next**).

## File names

File names and folders are formatted as code. Example: The `/var/log` system directory contains logs for all environments.


## Numbers

Above all, consistency rules when approaching the written-out numbers vs. numerals issue.

Spell out a number, like "five" or "nine" when the number is under 10 (numbers one through nine).

Write a number as a numeral, like "42" or "11" when:

* The number is over 9 (numbers ten and above).
* You're specifying the number:
    * Within a line of code or code snippet.
    * Within a file path or directory name.
    * When communicating a range, like "between 5 and 25" or "review numbers 8 through 21".
    * The numbers have been measured or calculated like "62 picas" or "830 MHz".

Use a mix of numbers and numerals when noting a quantity of numbered things, like "a collection of fifteen 1000-trial runs".

Write both numbers in words or both in numerals, if you have two numbers in a sentence, one under 10 (like 4) and one over 10 (like 14). For example, you'd stick with numerals here: "14 minutes for every 4 litres of fluid".


## Particular cases of wording

<table class="relative-table" style="width: 100.0%;"><colgroup><col style="width: 12.003596%;"> <col style="width: 16.444849%;"> <col style="width: 71.55351%;"></colgroup>

<tbody>

<tr>

<th>Incorrect</th>

<th>Correct</th>

<th> Reasoning
</th>

</tr>

<tr>

<td>Log in to Magento.com Account page </td>

<td>Log in to your Adobe Commerce account</td>

<td colspan="1">
</td>

</tr>

<tr>

<td>3rd party extensions (modules)</td>

<td>third-party extensions (modules)</td>

<td colspan="1">
</td>

</tr>

<tr>

<td>SQL code snippets</td>

<td>Statements are uppercase (SELECT vs select)</td>

<td colspan="1">Better readability</td>

</tr>

<tr>

<td colspan="1">

References to other resources.

Example: See xyz on our developer documentation


</td>

<td colspan="1">See xyz in our developer documentation</td>

<td colspan="1">

Accessibility requirement:  All links describe the destination of the link.


</td>

</tr>

<tr>

<td colspan="1">

Adobe Commerce v2.4.0

 Adobe Commerce 2.4.0

Adobe Commerce version 2.4.0

</td>

<td colspan="1">Adobe Commerce 2.4.0 (no v. or version)</td>

<td colspan="1"></td>

</tr>

<tr>

<td colspan="1">

2.4.x

2.4.X

</td>

<td colspan="1">

2.4.0

2.4.x

</td>

<td colspan="1">

No reason for uppercase.

</td>

</tr>

<tr>

<td colspan="1">

Error message: _"Something went wrong."_

Error message: __Something went wrong.__

</td>

<td colspan="1"> Error message:  <i>Something went wrong.</i> </td>

<td colspan="1">
</td>

</tr>

</tbody>

</table>

## Accessibility

* All non-text or graphical elements have textual equivalents or Alt Text. Example: ![example_image](/url "alt_text_for_this_image").

* All links describe the destination of the link. Example [link](/uri "destination_of_the_link").


<!--
## Accessible tables

Use tables for information that is best presented along two axes (rows and columns). Do not use tables when a list or definition list serves the purpose. If using tables, follow these recommendations:

*   Headers for rows and columns; row headers easier for screen readers.

*   Simple linear construction.

*   Content within cells consistently structured.  -->


## Abusive language

* Avoid abusive language. 
* Avoid racist or "might feel like racist" language.
* Avoid language with strong negative connotations or strong emotional coloring, like "kill", "terminate".


## Links 

Most links appear in link lists inside the article. Avoid unnecessary inline links.

Best practice is to isolate inline links in a link list with a configurable title.

 A specialized link list, called a see-also list, appears at the end of an article only.    Use link lists strategically, no more than necessary. As a rule of thumb, no more than six links in a link list.

### Links to external websites

 Use ordinary URLs rather than goURLs to link to pages outside  [Adobe.com](http://Adobe.com).


## Commas

In general, follow The Chicago Manual of Style recommendations for open style punctuation, punctuating only where necessary to prevent misreading. For example, you can omit the comma before a conjunction in a compound sentence if there is little or no risk of misreading. Use the comma where needed for clarification.

* Always use the serial comma (a comma preceding _and_ or _or_ in a list of three or more items): x, y, and z

* Place a comma before a conjunction introducing an independent clause: “Specify a location, and type a name for the file list.”

* Don’t separate platform differences with a comma: “… Ctrl (Windows) or Command (Mac OS)”

* Always use a comma after an introductory phrase or clause: “In Photoshop, import the Illustrator file.”

## Versions

* We use "version" for all releases (major/minor/patch). For example "Supported versions: Adobe Commerce 2.3.x"

* We use low case "x" when writing about all patch releases within minor release, and all minor with major. For example, Adobe Commerce 2.x.x.

## Branding

* Magento Commerce is now Adobe Commerce. Please refer to the [Rebrand terms](https://github.com/magento/knowledge-base/wiki) wiki for more information on how to use up to date branding language.
