---
title: Why restoring Cloud backups (EBS snapshots by Platform.sh) takes so long? [Internal]
link: https://support.magento.com/hc/en-us/articles/360001952433-Why-restoring-Cloud-backups-EBS-snapshots-by-Platform-sh-takes-so-long-Internal-
labels: 
---

EBS snapshots are block-level snapshots. This means that it has no knowledge of the file system being used. So, it is not possible to access individual files in your EBS snapshot. 

 To restore data, you must create a fresh EBS volume from your EBS snapshot. That new EBS volume will contain all the data stored in the EBS snapshot. It will be an exact duplicate of the original EBS volume, at the time the EBS snapshot was started.

 For details, see Amazon Elastic Compute Cloud docs: [Restoring an Amazon EBS Volume from a Snapshot.](https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ebs-restoring-volume.html) 

 So, we have to create a new volume, restore it and then move the restored files or DB to the original cluster.

 About this article
------------------

 This article quotes Doug Goldberg's internal comment related to a support ticket ([74493](https://support.magento.com/agent/tickets/74493)) in which the Customer complained that backup restore had taken too long.

