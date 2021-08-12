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

## Common validation errors and how to avoid them

There are various types of metadata validation errors that can occur. Here are some examples and how to fix them.

### Colon

A validation error will occur if the title or labels has colon(s).

**Example:**

```markdown
---
title: Patch: Unable to validate VAT number - Magento Commerce Cloud
labels: patch: 2041.1, article, labels, tags
---
```
This is fixed by wrapping the title or labels (or both if both have colons) in single quotation marks.

**Example:**

```markdown
---
title: 'Patch: Unable to validate VAT number - Magento Commerce Cloud'
labels: 'patch: 2041.1, article, labels, tags'
---
```

### Colon and single quotation or apostrophe mark

The previous solution will not work if there are colons, single quotation marks or apostrophes in the title or labels.

**Example:**

```markdown
---
title: Patch: Can't validate 'VAT' number - Magento Commerce Cloud
labels: patch: 2041.1, 'article', labels, tags
---
```

To avoid/fix this error, wrap the title or labels (or both) in double quotation marks.

**Example:**

```markdown
---
title: "Patch: Can't validate 'VAT' number - Magento Commerce Cloud"
labels: "patch: 2041.1, 'article', labels, tags"
---
```

### Colon, double quotation marks, and single quotes or apostrophes all together

**Example:**

```markdown
---
title: Patch: Can't validate 'VAT' number - Magento "Commerce" Cloud
labels: patch: 2041.1, 'article', "labels", can't, tags
---
```

When this happens, wrap the title or labels (or both) in double quotation marks and use a backslash to escape all double quotation marks in the title or labels.

**Example:**

```markdown
---
title: "Patch: Can't validate 'VAT' number - Magento \"Commerce\" Cloud"
labels: "patch: 2041.1, 'article', \"labels\", can't, tags"
---
```

### Missing Fields

Validation errors will occur if either the title or label fields are missing.

**Example:**

```markdown
---
title: This is a title
---
```

or

```markdown
---
labels: article, labels, tags
---

Article content...
```

To avoid these errors, include both fields. The labels field can be empty and it will not be considered an error, but the title field cannot be empty.

**Example:**

```markdown
---
title: This is a title
labels:
---

Article content...
```
