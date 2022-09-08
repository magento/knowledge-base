---
title: Adobe Commerce on cloud Best Practices to Help Prevent and Respond to a Security Incident
labels: 2.3,2.3.x,2.4,2.4.x,Magento Commerce Cloud,best practices,security,Adobe Commerce,cloud infrastructure
promoted: True
---

## Affected products and versions

* Adobe Commerce on cloud infrastructure, [all supported versions](https://magento.com/sites/default/files/magento-software-lifecycle-policy.pdf).


Adobe Commerce security operates under a [Shared Responsibility](https://www.adobe.com/content/dam/cc/en/trust-center/ungated/whitepapers/experience-cloud/adobe-commerce-shared-responsibility-guide.pdf) model, and it is key to understand what Adobe and your technical teams are responsible for. Below we summarize [Security Best Practices](https://www.adobe.com/content/dam/cc/en/security/pdfs/Adobe-Magento-Commerce-Best-Practices-Guide.pdf) for ensuring your project has the best security controls in place and how best to respond to a security incident.

## Respond to an incident

There are many considerations as you respond to a security incident. If you suspect that you have encountered a recent security incident for your Adobe Commerce Cloud project, it is important to audit all admin user account access, enable advanced multi-factor authentication (MFA) controls, preserve critical logs, and review security upgrades for your release of Commerce.

These recommendations are detailed below, and will also help to prevent unauthorized access and begin the process for further incident analysis.

## Prevention recommendations

* [Enable 2FA for admin access](https://docs.magento.com/user-guide/stores/security-two-factor-authentication.html).
    Two-factor authentication is widely used, and it is common to generate access codes for different websites on the same app. This ensures that only you can log in to your user account. If you lose your password or a bot guesses it, two-factor authentication adds a layer of protection.
* [Enable MFA for SSH access](https://devdocs.magento.com/cloud/project/project-enable-mfa-enforcement.html).
    When MFA is enabled on a project, all Adobe Commerce on cloud infrastructure accounts with SSH access must follow an authentication workflow that requires either a two-factor authentication (2FA) code, or API token and a SSH certificate to access the environment.
* Upgrade to the latest release of Adobe Commerce.
    Adobe releases security and functional patches for each supported release line of Adobe Commerce.
* Setup and use a [non-default admin URL](https://docs.magento.com/user-guide/stores/store-urls-custom-admin.html).
    Adobe recommends that you use a unique, custom Admin URL instead of the default `admin` or a common term such as *backend*. Although it will not directly protect your site from a determined bad actor, it can reduce exposure to scripts that try to gain unauthorized access.
* [Implement the `lock env` environment variable](https://experienceleague.adobe.com/docs/commerce-operations/configuration-guide/cli/configuration-management/set-configuration-values.html#set-configuration-values-that-cannot-be-edited-in-the-admin).
    The `lock env` variable either locks the configuration values so it cannot be edited in the Admin or prevents changes to a setting that is already locked in the Admin. The command writes the value to the `<Commerce base dir>/app/etc/env.php` file.
* Setup and run the [Adobe Commerce Security Scan Tool](https://docs.magento.com/user-guide/magento/security-scan.html).
    The enhanced security scan allows you to monitor each of your Adobe Commerce sites, including PWA, for known security risks and malware, and to receive patch updates and security notifications.
* [Review and update Admin user access](https://docs.magento.com/user-guide/system/permissions-users-all.html) and [security settings](https://docs.magento.com/user-guide/stores/security-admin.html).
    * We recommend removing any old, unused, or suspicious accounts and rotate passwords for all Admin users.
    * Review and update the <ins>Advance Security Settings</ins> for your project. The Admin security configuration gives you the ability to add a secret key to URLs, require passwords to be case-sensitive, and to limit the length of Admin sessions, including the lifetime of passwords, and the number of login attempts that can be made before the Admin user account is <ins>locked</ins>. For increased security, you can configure the length of keyboard inactivity before the current session expires, and require the username and password to be case-sensitive.
* Audit Adobe Commerce on [cloud project users](https://devdocs.magento.com/cloud/project/user-admin.html).
    We recommend removing any old, unused, or suspicious accounts and requesting users to change their passwords.
* Audit [SSH keys](https://devdocs.magento.com/cloud/before/before-workspace-ssh.html) for Adobe Commerce on cloud infrastructure.
    We recommend reviewing, deleting, and rotating SSH keys.
* Implement Access Control List (ACL) for Admin.
    You can use a Fastly Edge ACL list in combination with a custom [VCL code snippet](https://devdocs.magento.com/cloud/cdn/fastly-vcl-allowlist.html#vcl) to filter incoming requests and allow access by IP address to Admin.

## Analyze an incident

The first step of incident analysis is to gather as many facts as you can, as quickly as you can. Gathering information surrounding the incident may help you determine the potential cause of the incident. Adobe Commerce provides the tools below to assist with your incident analysis.

* [Audit Admin Action Logs](https://docs.magento.com/user-guide/system/action-log-report.html).
    The Action Logs Report displays a detailed record of all admin actions that are enabled for logging. Each record is time stamped and registers the IP address and name of the user. The log detail includes admin user data and related changes that were made during the action.
* Analyze events with the [Observation for Adobe Commerce tool](https://experienceleague.adobe.com/docs/commerce-operations/tools/observation-for-adobe-commerce/intro.html?lang=en).
    The Observation for Adobe Commerce tool allows you to analyze complex problems to help identify root causes. Instead of tracking disparate data, you can spend your time correlating events and errors to gain deeper insights into the causes of performance bottlenecks.  
    The tool is intended to give a clear view of some of the potential site issues to help you identify the root cause and keep sites performing optimally. Click the link to the Observation for Adobe Commerce tool documentation above to access the tool documentation. There is a section in the documentation that details all the information that can be found on the **Security** tab.
* Analyze logs with [New Relic Logs](https://devdocs.magento.com/cloud/project/new-relic.html#new-relic-logs).
    Adobe Commerce on cloud infrastructure Pro projects include the [New Relic Logs](https://docs.newrelic.com/docs/logs/new-relic-logs/get-started/introduction-new-relic-logs) service. The service is pre-configured to aggregate all log data from your Staging and Production environments to display it in a centralized log management dashboard.  
    You can use the New Relic Logs service to complete the following tasks:
    * Use [New Relic queries](https://docs.newrelic.com/docs/logs/new-relic-logs/ui-data/query-syntax-logs) to search aggregated log data.
    * Visualize log data through the New Relic Logs application.

    Refer to Sansec [Root Cause Analysis Framework](https://sansec.io/kb/incident-response/magento-root-cause-analysis).
