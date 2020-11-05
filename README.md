# Open Source Starter Repo

This repository contains templates for project documentation, ensuring necessary
legal and contributor documentation is explicit. All sections below in this `README.md`
should be considered a template for a typical project `README.md`.

## PROJECT NAME

A short description of what this project does.

## Goals

It is a good idea to provide a mission statement for your project, enshrining
what the project wants to accomplish so that as more people join your project
everyone can work in alignment.

## Non-Goals

It is also a good idea to declare what are _not_ goals of the project to prevent
potential feature creep.

### Installation

Instructions for how to download/install the code onto your machine.

Example:
```
npm install myProject --save
```

### Usage

Usage instructions for your code.

Example:

```
var myMod = require('mymodule');

myMod.foo('hi');
```

### Contributing

Contributions are welcomed! Read the [Contributing Guide](./.github/CONTRIBUTING.md) for more information.

Community

1. Fork repo
2. Make edits on forked repo
3. Submit PR
4. PR Approvals Flow
    1. KB writers to review PR
    2. Approve/Deny
    3. Test Suite
        1. Adobe CLA
        2. Markdown Linting
    4. KB writer imports to magento-commerce repo
        1. PR imports as new branch in format: imported-magento-knowledge-base-{{pull request #}}
    5. KB writer submits PR to merge import branch and main branch
    6. magento-commerce repo and magento repos syncronize in 20 minutes
5. PR closed once repos sync'd

### Licensing

This project is licensed under the Apache V2 License. See [LICENSE](LICENSE) for more information.