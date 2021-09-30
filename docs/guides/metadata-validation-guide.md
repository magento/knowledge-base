# Metadata validation guide

To ensure correct formatting of metadata in MD files, we have put in place a metadata validation test. This document provides guidelines to help contributors avoid some of the most common metadata validation errors.

**Example of metadata:**

```markdown
---
title: This is a title
labels: article,labels,tags
---

Article content...
```

## Common validation errors and how to avoid/fix them

The following are some of the most common scenarios where metadata validation errors occur.

### Colon in metadata

A validation error will occur if either the title or labels or both have colon(s).

**Example:**

```markdown
---
title: Patch: Unable to validate VAT number - Adobe Commerce on cloud infrastructure
labels: patch: 2041.1,article,labels,tags
---
```
To avoid this error, wrap the title or labels (or both if both have colons) in **single quotation marks**.

**Example:**

```markdown
---
title: 'Patch: Unable to validate VAT number - Adobe Commerce on cloud infrastructure'
labels: 'patch: 2041.1,article,labels,tags'
---
```

### Colon and single quotation mark or apostrophe in metadata

The previous solution will not work if there are colons, single quotation marks or apostrophes in the title or labels.

**Example:**

```markdown
---
title: Patch: Can't validate 'VAT' number - Adobe Commerce on cloud infrastructure
labels: patch: 2041.1,'article',labels,tags
---
```

This error is fixed by wrapping the title or labels (or both) in **double quotation marks**.

**Example:**

```markdown
---
title: "Patch: Can't validate 'VAT' number - Adobe Commerce on cloud infrastructure"
labels: "patch: 2041.1,'article',labels,tags"
---
```

### Colon, double quotation mark, and single quotation mark or apostrophe in metadata

**Example:**

```markdown
---
title: Patch: Can't validate 'VAT' number - Adobe "Commerce" on cloud infrastructure
labels: patch: 2041.1,'article',"labels",can't,tags
---
```

When this happens, wrap the title or labels (or both) in **double quotation marks** and use a **backslash** to escape all the double quotation marks in the title and labels.

**Example:**

```markdown
---
title: "Patch: Can't validate 'VAT' number - Adobe \"Commerce\" on cloud infrastructure"
labels: "patch: 2041.1,'article',\"labels\",can't,tags"
---
```

### Missing fields in metadata

A validation error will occur if either the title field or labels field is missing from the metadata.

**Example:**

```markdown
---
title: This is a title
---
```

OR

```markdown
---
labels: article,labels,tags
---
```

To avoid this error, include both fields in the metadata.

The labels field can be left empty and it will not result in an error, but the title field must be filled.

**Example:**

```markdown
---
title: Unlike labels the title field must be filled
labels:
---
```
