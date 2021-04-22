## Author in Markdown
Generally, we use [GitHub flavored markdown](https://github.github.com/gfm/). But in some circumstances HTML is allowed.

## Exceptions where HTML is required

In certain cases HTML is required, to make sure formatting is correct once articles are published to [support.magento.com](https://support.magento.com/hc/en-us).

### Warning, Info, and similar notes

Please use the following HTML classes for special paragraphs like info, warning etc.

&lt;p class="success"&gt; Success note.&lt;/p&gt;
&lt;p class="warning"&gt;Warning note.&lt;/p&gt;
&lt;p class="info"&gt;Info note.&lt;/p&gt;
&lt;p class="error"&gt;Error note.&lt;/p&gt;


### Code blocks

On support.magento.com we use Prism.js to highlight code samples.
Please use the following formatting:

* for inline code and code blocks: &lt;code class="language-%language-code%"&gt;%your code here%&lt;/code&gt;
* for code blocks:
  &lt;pre&gt;&lt;code class="language-%language-code"&gt;%your
    code
    block
    here &lt;/code&gt;&lt;/pre&gt;


Supported languages and codes are listed on https://prismjs.com/#supported-languages.

*Examples:*

Inline code: &lt;code class="language-bash"&gt;./bin/magento config:show catalog/search/engine&lt;/code&gt;

Code block:

&lt;pre&gt;&lt;code class="language-yaml"&gt;

"http://{default}/":

&nbsp;&nbsp;&nbsp;&nbsp;type: upstream

&nbsp;&nbsp;&nbsp;&nbsp;upstream: "mymagento:http"

"http://{all}/":

&nbsp;&nbsp;&nbsp;&nbsp;type: upstream

&nbsp;&nbsp;&nbsp;&nbsp;upstream: "mymagento:http"

  &lt;/code&gt;&lt;/pre&gt;
