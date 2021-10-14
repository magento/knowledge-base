---
title: Decrease 
labels: FAQ,Magento,catalog,content,price,shared,staging,shared catalog,content staging,  
---

Cloud storage is broking up into 2 partitions: database (or MySQL) and media (or export). Other names you may hear for partitions are “file path” or “mount”.
Per above, support can grow a partition (/mysql or /exports) but cannot shrink a partition. This is due to fact data now resides in the allocated space and now must be moved elsewhere. Although it is technically possible to shrink a partition, there is risk in doing so. So much that it requires a manual process and can’t be automated. Also, you run the risk of corrupting the database should something go wrong. For this reason, it’s been Adobe’s stance that decreasing storage to a partition isn’t available
