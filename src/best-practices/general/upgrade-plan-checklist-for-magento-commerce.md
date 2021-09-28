---
title: Upgrade plan checklist for Adobe Commerce
labels: Certification program,Magento Commerce,Magento Commerce Cloud,Site-Wide Analysis Tool,Upgrade Compatibility Tool,best practices,deployment,extensions,security,third-party extensions,update,upgrade,Adobe Commerce
---

Use this checklist during your annual and quarterly conversations with your ecommerce team. Many companies work from annual budgets and roadmaps. It is imperative, during these annual discussions, that you talk about your platform’s health, direction, and upgrade strategy for the year, along with how it fits into the overall goals and KPIs of the business. During quarterly conversations, make sure the annual plan you created is still aligned with your current situation or pivot if not. The goal of this Upgrade Plan Checklist is to help you plan and schedule Adobe Commerce upgrades, to ensure a successful upgrade process during the year. This checklist is meant to be used on annual planning and reviewed quarterly. This checklist is intended for:

* Director / Manager IT
* eCommerce Manager
* Solution Partner / Consultant

>![info]
>
>Note: For a detailed description of the technical steps to upgrade successfully refer to [Update and upgrade checklist](https://devdocs.magento.com/guides/v2.4/comp-mgr/prereq/prereq_compman-checklist.html) in our developer documentation.

 **Goals**

 **▢** Review current KPIs and adjust as needed.

 **Extensions & Customizations**

▢    Review all current extensions and customizations and ensure they are still needed based on business requirements.

▢    Consider replacing any extensions that don’t have a good track record of keeping up-to-date with Adobe Commerce versions.

 **Team**

▢    Ensure, you have the right team in place, with the proper Adobe Commerce certifications and skillset.

 **Budget & Timing**

 **▢** Use the Adobe Commerce [release calendar](https://devdocs.magento.com/release/) to plan your next upgrade and prepare ahead of time.

 **▢** Discuss which version you think you’ll adopt (full or security-only) based on anticipated needs.

 **▢** Set aside budget and team capacity for the upgrade.

 **3rd Party Integrations**

 **▢** Review current Adobe Commerce 3rd party integrations you have and their maintenance windows for the year, you may want to align your upgrades together.

 **Scope & Deployment Planning**

▢    Early access activities

* Partner participates in [Beta](https://github.com/magento/magento2/wiki/Magento-Beta-Program)  
* Review Beta release notes.

▢    Agree on budget, timeline, scope.

▢    Run the [Upgrade Compatibility Tool](https://devdocs.magento.com/upgrade-compatibility-tool/introduction.html) to identify potential issues prior to upgrading.

▢    Consider using the upgrade to address issues identified by the [Site Wide Analysis Tool](https://docs.magento.com/user-guide/reports/site-wide-analysis-tool.html).

▢    Document dependencies and any technical stack changes required such as PHP or Elastic Search versions.

▢    Gather project team w/ Adobe Commerce certifications.

▢    Create stakeholder communication plan.

▢    Plan maintenance window if downtime is anticipated.

▢    Review and approve the testing strategy; consider using the Adobe Commerce [test framework](https://devdocs.magento.com/mftf/v2/docs/introduction.html) or a 3rd party automation suite.

▢    Confirm all extensions / customizations are compatible.

▢    Review and update post launch playbook, to use if issues are discovered during or after upgrade.

 **Post Deployment**

▢    Monitor site for issues – performance, order processing, analytics, and others.

▢    Perform Adobe Commerce [security scan](https://account.magento.com/scanner/dashboard/) or other 3rd party scan and review potential security vulnerabilities.

▢    Perform a retrospective with all stakeholders and document what went well and what didn’t and how to improve.

▢    Modify your plan for the next upgrade with lessons learned.
