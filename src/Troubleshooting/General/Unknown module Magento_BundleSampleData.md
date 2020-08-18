<h2 id="details">Details</h2>

During the installation, a message similar to the following displays:

<pre><code class="language-text">[ERROR] exception 'LogicException' with message 'Unknown module in the requested list: 'Magento_BundleSampleData''</code></pre>

<h2 id="solution">Solution</h2>

Try each of the following one at a time, then try your installation again.

1.   
    
    Run the [Web Setup Wizard](https://devdocs.magento.com/guides/v2.3/install-gde/install/web/install-web.html).
    
    
    
    On Step 4: Customize Your Store, expand __Advanced Modules Configurations__ and clear the __Magento\_BundleSampleData__ checkbox as the following figure shows.
    
    
    
    ![tshoot_bundlesampledata.png](https://support.magento.com/hc/article_attachments/360039762491/tshoot_bundlesampledata.png)
    
    
2.   Clear all browser history and data from your web browser.
3.   
    
    If you have Chrome, clear all browser data related to your site.
    
    
    
    Go to __Settings__ &gt; __Advanced options__ &gt; __Privacy__ &gt; __Content Settings__ &gt; __All cookies and site data__. In the Site column, click the address of your Magento server and click __Remove All__.
    
    