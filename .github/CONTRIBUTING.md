
## Contribute to Magento Support Knowledge base

Share your troubleshooting tips and best practices with the community by contributing to Magento Support Knowledge Base (Support KB)!
You can contribute by creating an issue or pull request (PR) on our [Support KB](https://github.com/magento/knowledge-base) GitHub repository.
We welcome all types of contributions; from minor typo fixes to new topics.

Support KB staff members review issues and pull requests on a regular basis. We do our best to address all issues as soon as possible, but working through the backlog takes time. We appreciate your patience.

## Rewards for contributions

Support KB works with Magento Community Engineering teams and projects.
As you contribute PRs, you gain [Contribution Points](link to Contribution points desc lives here).!!!!!


## Get started


![Get started workflow](https://github.com/magento-kb/knowledge-base/wiki/contributor-start.png) !!!!

1. Make sure you have a [GitHub account](https://github.com/signup/free).

    **Note for partners:** Add [2FA](https://devdocs.magento.com/contributor-guide/contributing.html#two-factor) protection when contributing to Magento repositories.

1. [Fork](https://help.github.com/articles/fork-a-repo/) the [Support KB repository](https://github.com/magento/knowledge-base). Remember to [sync your fork](https://help.github.com/articles/syncing-a-fork/) and update branches as needed.
1. Review the [Support KB guidelines below](#contribution-guidelines).


## Contribute documentation

The following diagram shows the contribution workflow:

![Contributing workflow](https://devdocs.magento.com/common/images/contribute-write-submit-pr.png) !!!!!

**Tip!** If you are not sure where to start contributing, search for issues with the [`help wanted`] !!!!!(https://github.com/magento/devdocs/issues?q=is%3Aissue+is%3Aopen+label%3A%22help+wanted%22), [`good first issue`](https://github.com/magento/devdocs/issues?q=is%3Aissue+is%3Aopen+label%3A%22good+first+issue%22), and [`groomed`](https://github.com/magento/devdocs/issues?q=is:issue+is:open+label:%22groomed%22) labels. These issues receive higher priority for processing.

### Create a branch

1. Create a new branch from your fork using a name that best describes the work or references a GitHub issue number.
1. Edit or create markdown (`.md`) files in your branch.
1. Push your branch to your fork.

### Create a pull request

1. Create a pull request to the [magento/knowledge-base](https://github.com/magento/knowledge-base) repository. Use `main` as the base branch when creating a PR. 

1. Complete the pull request template. Review the [Pull Request Process page](https://github.com/magento/devdocs/wiki/Pull-Request-Process) to learn how to complete a PR (with info about completing the template, adding a `whatsnew`, and more.) !!!!

    **We will close your pull request if you do not complete the template.**

1. After creating a pull request, a Support KB staff member will review it and may ask you to make revisions.

    **We will close your pull request if you do not respond to feedback in two weeks.**

**Note:** If you have not signed the [Adobe Contributor License Agreement](https://opensource.adobe.com/cla.html), the pull request provides a link. You must sign the CLA before we can accept your contribution.

## General contribution guidelines
-  Review existing [pull requests](https://github.com/magento/knowledge-base/pulls) and [issues](https://github.com/magento/knowledge-base/issues) to avoid duplicating work.
-  For large contributions, or changes that include multiple files, [open an issue](#report-an-issue) and discuss it with us first. This helps prevent duplicate or unnecessary work.
-  Do not make global find-and-replace changes without first [creating an issue](https://github.com/magento/knowledge-base/issues/new/choose) and discussing it with us. Global changes can have unintended consequences.
-  Combine multiple small changes (such as minor editorial and technical changes) into a single pull request. This helps us efficiently and effectively facilitate your contribution.
-  Review your work for basic typos, formatting errors, or ambiguous sentences before opening a pull request.

## Specific contribution guidelines

The following guidelines may answer most of your questions and help you get started:

### Dos:

-  Write content using Markdown. See the [Templates](#templates) section for examples. !!!!!!
-  Some HTML leaves in our .md files for a reason. Please do not remove/change the HTML listed in this document of exceptions.!!!!!!
- Please follow the style recommendations described in ...link to Styleguide here!!!!
- Image files related to an article are stored in the /assets folder in the section folder, where the article belongs.
- Follow the image naming convention for screenshots. (see next section for details)
- Naming convention for articles?...
- For a new article, always add a introduction sentence or two, describing what is it about.

### Don'ts
- Do not make changes to content in the Announcements and Support Tools folders. 
- Do not contribute Open Source-only content???

#### Image files naming 

If you add images to your articles, please follow this convention to name your image files:

* Relay what is being captured by the image, for example a screenshot of Magento Commerce Price Rule configuration would be cart-price-rule-new-231.png, cart-price-rule-saved-231.png etc. Check for existing images to follow the naming patterns.
* Low case.
* Words should separated by hyphen "-", not underscore "_".
* Specify version of the product which is represented on the screenshot. If it is not Magento Commerce, add name of the product to the file name.
* We want image file names to be unique repo-wide.
* Use existing naming patterns. Check the /assets folders for existing file names.

### Templates !!!!

We provide templates to help you get started writing new content and understanding Markdown formatting:

links to templates here!!!


### Edit metadata

The Markdown (.md) file's metadata is a set of YAML key-value pairs. The metadata section is located at the top of each file. For more info, see the [Basic Template](https://devdocs.magento.com/contributor-guide/templates/basic_template.html). !!!

```yaml
---
title:
labels:
---
```

> Key-value pair reference:

| Property  | Description |
| ------------- | ---------- |
| `title`       | Sets the title of the page in the HTML metadata and the main title on the page.  |
| `labels` | Contains labels that will be added to the article in Magento Help Center. Read the Guide to learn our labeling approach. If in doubt, don't add labels. |

## Report an issue

If you find a typo or errors in Magento Support Knowledge Base article, you can either fix it with a pull request (as described above) or you can report it by creating an issue in the Support KB repository.

You must complete the issue template. We will close your issue if you fail to complete the template. Enter as much information as you can, including content corrections, steps to reproduce, command or code updates, or questions for clarifications.

**Note:** Check the existing [issues](https://github.com/magento/knowledge-base/issues) on GitHub to see if someone has already reported the issue.


Thank you for contributing your brilliance to Magento Support Knowledge Base!!
