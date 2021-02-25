---
title: Can I install third-party applications on my Cloud instance?
link: https://support.magento.com/hc/en-us/articles/360002172293-Can-I-install-third-party-applications-on-my-Cloud-instance-
labels: Magento Commerce Cloud,security,PCI,third-party_applications,data,FAQ
---

No. Installing third-party apps (like WordPress or Drupal) on the Magento Commerce (Cloud) servers is not allowed. You must host such applications on external servers.

## Reasons

### Terms of service agreement

The Magento Enterprise Cloud Edition [Terms of Service Agreement](https://magento.com/legal/terms/cloud-terms) states the following in its Article 18:

>  Customer agrees that Magento and the Service will not be used to host other third-party software applications that are not directly dependent on the Software.

Being a Cloud solution, Magento takes full responsibility for the security of your server. To guarantee high security, we only allow hosting the Magento Commerce application on the dedicated Cloud server.

### PCI compliance

As a PCI-certified Level 1 Solution Provider, Magento Commerce (Cloud) must follow the PCI Data Security Standard and make sure to:

>  ... Develop and maintain secure systems and applications
>  ([Magento Approach to PCI Compliance](https://magento.com/pci-compliance)  
> Requirement 6, Maintain a Vulnerability Management Program)

Since Magento cannot guarantee the PCI compliance of third-party applications, installing such apps on the Cloud servers is not allowed.

## Hint: Use Magento Marketplace extensions for better integrations

To improve integration of your Magento Commerce (Cloud) application with the third-party solutions hosted on external servers, we encourage you to use the [Magento Marketplace](https://marketplace.magento.com) extensions that might suit your purpose.