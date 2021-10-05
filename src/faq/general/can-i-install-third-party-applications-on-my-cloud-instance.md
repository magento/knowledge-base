---
title: Can I install third-party applications on my cloud instance?
labels: FAQ,Magento Commerce Cloud,PCI,data,security,third-party_applications,Adobe Commerce,cloud infrastructure
---

 No. Installing third-party apps (like WordPress or Drupal) on the Adobe Commerce on cloud infrastructure servers is not allowed. You must host such applications on external servers.

## Reasons

### Terms of service agreement

The Adobe Commerce on cloud infrastructure Edition [Terms of Service Agreement](https://magento.com/legal/terms/cloud-terms) states the following in its Article 18:

>Customer agrees that Adobe Commerce and the Service will not be used to host other third-party software applications that are not directly dependent on the Software.

Being a cloud solution, Adobe takes full responsibility for the security of your server. To guarantee high security, we only allow hosting the Adobe Commerce application on the dedicated cloud server.

### PCI compliance

As a PCI-certified Level 1 Solution Provider, Adobe Commerce on cloud infrastructure must follow the PCI Data Security Standard and make sure to:

>... Develop and maintain secure systems and applications

>( [Adobe Approach to PCI Compliance](https://magento.com/pci-compliance) Requirement 6, Maintain a Vulnerability Management Program)

Since Adobe cannot guarantee the PCI compliance of third-party applications, installing such apps on cloud servers is not allowed.

## Hint: Use Commerce Marketplace extensions for better integrations

To improve the integration of your Adobe Commerce on cloud infrastructure application with the third-party solutions hosted on external servers, we encourage you to use the [Commerce Marketplace](https://marketplace.magento.com) extensions that might suit your purpose.
