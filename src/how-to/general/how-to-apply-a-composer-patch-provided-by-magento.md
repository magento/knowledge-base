---
title: How to apply a composer patch provided by Adobe
labels: Magento Commerce,Magento Commerce Cloud,apply patch,composer,git,how to,patch,Adobe Commerce,cloud infrastructure,on-premises
---

This article instructs how to apply a composer patch for Adobe Commerce on-premises, Adobe Commerce on cloud infrastructure, and Magento Open Source.

>![warning]
>
>We strongly recommend applying and testing the patch on the Staging/Integration environment before applying it to Production. We also recommend you have a recent backup before any manipulations.

<h3 id="cloud">How to apply a composer patch for Adobe Commerce on cloud infrastructure</h3>

1. If you do not have a directory named `m2-hotfixes` in the project root, please create one.
1. Copy the `%patch_name%.composer.patch` file(s) to the `m2-hotfixes` directory.
1. Add, commit, and push your code changes:
    ```git    
    git add -A
    ```
    ```git
    git commit -m "Apply %patch_name%.composer.patch patch"     
    ```
    ```git
    git push origin    
    ```    

For additional information about applying patches to Cloud projects, see [Apply patches](https://devdocs.magento.com/cloud/project/project-patch.html) in our developer documentation.

<h3 id="commerce">How to apply a composer patch for Adobe Commerce on-premises and Magento Open Source</h3>

1. Upload the patch to your Adobe Commerce on-premises or Magento Open Source root directory.
1. Run the following SSH command:
    ```bash
    patch -p1 < %patch_name%.composer.patch
    ```
   (If the above command does not work, try using `-p2` instead of `-p1` )
1. For the changes to be reflected, refresh the cache in the Admin under **System** > **Cache Management**.
