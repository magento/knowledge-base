<h2 id="details">Details</h2>

One of the steps to updating the Magento 2 software is to update your local repository by running:

<pre><code class="language-bash">$ git pull origin develop</code></pre>

The following error might display:

<pre><code class="language-terminal">error: Your local changes to the following files would be overwritten by merge:
&lt;list of files&gt;
``

To find which files are subject to being overwritten, either read the message or enter:

```bash
git status</code></pre>

The next section discusses suggested solutions.

<h3 id="suggested-solutions">Suggested solutions</h3>

Your solution depends on whether or not you intentionally modified files in the Magento 2 file system. See one of the following sections for more information.

<h4 id="you-intentionally-modified-files">You intentionally modified files</h4>

Manually resolve the conflicts in the usual way. If you're not sure what to do, consult [GitHub help](https://help.github.com/).

<h4 id="you-didn-t-intentionally-modify-any-files">You didn't intentionally modify any files</h4>

Try any of the following:

<ul><li>
<p>If you're certain you didn't modify any files, and you don't mind removing or overwriting the changes in the Magento file system, enter:</p>
<pre><code class="language-bash">$ git reset --hard HEAD &amp;&amp; git pull origin develop</code></pre>
<p>After that, continue where you left off with your Magento 2 update.</p>
</li><li>
<p>It's possible that a GitHub configuration setting can prevent these errors in the future. By default, GitHub stores content using the operating system-default line ending characters. If you're using Linux but another collaborator committed a change using Windows, GitHub converts the Windows line endings to Linux when you clone or pull. This gives the appearance of a change to files when in fact, no change was made.</p>
<p>To configure GitHub to ignore line endings, enter the following command in your Git client:</p>
<pre><code class="language-bash">$ git config --system core.autocrlf false</code></pre>
<p>If you use Windows, enter:</p>
<pre><code class="language-bash">$ git config --system core.eol LF</code></pre>
<p class="info">Magento does <em>not</em> recommend or endorse any particular GitHub configuration settings. The preceding are suggestions only. For more information, consult the <a href="https://help.github.com/">GitHub help</a>.</p>
<p>Continue where you left off with your Magento 2 update.</p>
</li></ul>