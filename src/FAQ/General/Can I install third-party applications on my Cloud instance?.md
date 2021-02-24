---
title: Can I install third-party applications on my Cloud instance?
link: https://support.magento.com/hc/en-us/articles/360002172293-Can-I-install-third-party-applications-on-my-Cloud-instance-
labels: Magento Commerce Cloud,security,PCI,third-party_applications,data,FAQ
---

<p>No. Installing third-party apps (like WordPress or Drupal) on the Magento Commerce (Cloud) servers is not allowed. You must host such applications on external servers.</p>
<h2>Reasons</h2>
<h3>Terms of service agreement</h3>
<p>The Magento Enterprise Cloud Edition <a href="https://magento.com/legal/terms/cloud-terms">Terms of Service Agreement</a> states the following in its Article 18:</p>
<blockquote>Customer agrees that Magento and the Service will not be used to host other third-party software applications that are not directly dependent on the Software.</blockquote>
<p>Being a Cloud solution, Magento takes full responsibility for the security of your server. To guarantee high security, we only allow hosting the Magento Commerce application on the dedicated Cloud server.</p>
<h3>PCI compliance</h3>
<p>As a PCI-certified Level 1 Solution Provider, Magento Commerce (Cloud) must follow the PCI Data Security Standard and make sure to:</p>
<blockquote>... Develop and maintain secure systems and applications</blockquote>
<blockquote>(<a href="https://magento.com/pci-compliance">Magento Approach to PCI Compliance</a><br/>Requirement 6, Maintain a Vulnerability Management Program)</blockquote>
<p>Since Magento cannot guarantee the PCI compliance of third-party applications, installing such apps on the Cloud servers is not allowed.</p>
<h2>Hint: Use Magento Marketplace extensions for better integrations</h2>
<p>To improve integration of your Magento Commerce (Cloud) application with the third-party solutions hosted on external servers, we encourage you to use the <a href="https://marketplace.magento.com">Magento Marketplace</a> extensions that might suit your purpose.</p>