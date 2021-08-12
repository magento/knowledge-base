# Metadata validation

To ensure correct formatting of metadata in MD files, we have put in place a metadata validation test. This document provides guidelines to help contributors avoid some of the most common metadata validation errors.

**Example of metadata:**

```markdown
---
title: This is a title
labels: article, labels, tags
---

Article content...
```

## Common validation errors and how to avoid them:


### Colon error

A validation error will occur if the title or labels include a colon.

**Example:**

```markdown
---
Title: MDVA-38799: Downloadable products not saved
Labels: label, more labels
---
```



### Missing Fields
