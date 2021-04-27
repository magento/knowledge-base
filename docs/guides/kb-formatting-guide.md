## Author in Markdown
Generally, we use [GitHub flavored markdown](https://github.github.com/gfm/). But in some circumstances HTML is allowed.

## Exceptions where HTML is required

In certain cases HTML is required, to make sure formatting is correct once articles are published to [support.magento.com](https://support.magento.com/hc/en-us).

### Warning, Info, and similar notes

Please use the following HTML classes for special paragraphs like info, warning etc.

```html
<p class="success">Success note.</p>
<p class="warning">Warning note.</p>
<p class="info">Info note.</p>
<p class="error">Error note.</p>
```


### Code blocks

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