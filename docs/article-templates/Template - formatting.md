---
title: TEMPLATE - formatting
labels: template,formatting
---
<h1>Heading H1</h1>
<p>- don't use H1, title is our H1</p>
<h2>Heading H2</h2>
<h3>Heading H3</h3>
<h4>Heading H4</h4>
<h5>Heading H5</h5>
<h6>Heading H6</h6>
<h2>Icons and messages</h2>
<p class="success">Success note.</p>
<p class="warning">Warning note.</p>
<p class="info">Info note.</p>
<p class="error">Error note.</p>
<p>
  Error messages:&nbsp;
  <em>Text of verbatim Error messages are always denoted in italics.</em>
</p>
<h2>Code examples</h2>
<h3>Inline code</h3>
<p>
  Example (use the &lt;code&gt; tag):&nbsp;<code>php bin/magento magento-cloud:scd-dump</code>
</p>
<h3>Code block</h3>
<pre class="line-numbers"><code class="language-clike">elasticsearch:
    type: elasticsearch:1.7
    disk: 1024<br></code></pre>
<h2>Table</h2>
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
<h2>Writing style examples</h2>
<p>
  Start every article with an introductory sentence explaining the issue.
</p>
<p class="wysiwyg-indent3">
  This article talks about the issue where a patch you just applied takes your
  site down. To resolve it, you can remove the patch.
</p>
<p>
  Use<strong> bold</strong> for UI element names (buttons, tabs, options etc.,)
  and <em>italics</em> for option values.<br>
  <br>
  &nbsp; &nbsp; &nbsp; &nbsp;Example: Set
  <strong>Use Flat Catalog Category</strong> to <em>No</em><strong>.</strong>
</p>
<p>Use the &lt;code&gt; tag for file names.</p>
<p>
  &nbsp; &nbsp; &nbsp; &nbsp;Example:&nbsp;<code>app/etc/config.php</code>
</p>
<h2>Depersonalizing text and images</h2>
<p>
  If you need to have a placeholder for a company name use "Acme Inc". If you need
  to have a placeholder for a user use "John Doe".
</p>
<h2>Decision tree articles</h2>
<p>
  The majority of articles on the Magento Help Center focus on one symptom. However,
  there are also Decision tree articles that cover multiple symptons and guide
  the user to a solution through a series of Yes and No questions. Depending on
  the answer, a new symptom and potential solution displays. An example is the&nbsp;<a href="https://support.magento.com/hc/en-us/articles/360029351531" target="_blank" rel="noopener">Site Down Troubleshooter</a>.
  Here is a link to the
  <a href="https://support.magento.com/hc/en-us/articles/360035461472" target="_self">Decision Tree Troubleshooting</a>
  template.<br>
  <br>
  Example:
</p>
<h5>Step 1</h5>
<div class="zd-accordion-panel">
  <div class="zd-accordion-section">
    Do you have [<em>error type J</em>]?
  </div>
  <p id="zd-accordion-1" class="zd-accordion-text">
    a. YES – Proceed with checking the [<em>error/issue</em>] in this [<em>link to KB or DevDocs article]<em>.</em><br></em>b.
    NO – Proceed to
    <a class="accordion-anchor" href="#zd-accordion-2">Step 2</a>.
  </p>
</div>
<h5>Step 2</h5>
<div class="zd-accordion-panel">
  <div class="zd-accordion-section">
    Do you have [<em>error type K</em>] or an [<em>error type L</em>]?
  </div>
  <p id="zd-accordion-2" class="zd-accordion-text">
    a. YES – Proceed with checking for [<em>issue/problem</em>] in this [<em>Link to KB or DevDocs article</em>].<br>
    b. NO – Open a
    <a href="https://support.magento.com/hc/en-us/articles/360019088251-Submit-a-support-ticket" target="_blank" rel="noopener">Support Ticket</a>
    for further investigation.
  </p>
</div>
<h2>Links</h2>
<p>
  To create a link to a section in a knowledge base article (known in html as an
  "anchor") go into the source code of KB article, go to the header you want to
  link to, go to the source code &lt;&gt; and add this code to the header you want
  the link to point to&lt;h2 id ="issue"&gt;Issue&lt;/h2&gt;
</p>
<p>
  https://support.magento.com/hc/en-us/articles/115001851814#issue
</p>
<h2>Versions</h2>
<p>
  When describing a product or feature that is supported on all Magento versions
  say:<br>
  <br>
  2.3.0-2.3.6-p1, 2.4.0-2.4.2 (these are the currently supported versions as of
  6 April 2021, however, it is good to confirm these with release calendar).
</p>
