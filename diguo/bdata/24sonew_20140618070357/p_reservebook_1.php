<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_reservebook`;");
E_C("CREATE TABLE `p_reservebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `truename` varchar(50) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `housetype` varchar(50) NOT NULL,
  `dateline` varchar(50) NOT NULL,
  `timepart` varchar(50) NOT NULL,
  `info` varchar(100) NOT NULL,
  `type` char(15) NOT NULL,
  `booktime` int(11) NOT NULL,
  `remate` tinyint(3) NOT NULL DEFAULT '0' COMMENT '客服标志',
  `kfinfo` varchar(100) NOT NULL,
  `sex` int(11) DEFAULT '0',
  `age` int(11) NOT NULL DEFAULT '0',
  `address` varchar(50) NOT NULL DEFAULT '',
  `choose` varchar(50) NOT NULL DEFAULT '',
  `number` int(11) NOT NULL DEFAULT '0',
  `paid` int(1) DEFAULT '0',
  `orderid` char(32) NOT NULL DEFAULT '',
  `payprice` decimal(10,2) DEFAULT NULL,
  `shiporder` char(32) NOT NULL DEFAULT '',
  `productName` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `wecha_id` (`wecha_id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `p_reservebook` values('1','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482079','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('2','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482081','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('3','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482084','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('4','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482085','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('5','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482086','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('6','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482092','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('7','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482098','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('8','3','85fa9a93c81ad7e','o5GVDt7ISJPXyzMMUe-0asJhTN3U','刘骞','18766212905','菁界预约','2014-6-12 18:07:18','','Y被大家介绍','course','1402482099','0','','0','0','青岛市','菁界预约','0','0','',NULL,'','');");
E_D("replace into `p_reservebook` values('9','4','c6a3b2d7590ae01','oiA8DuE0iHcML_nsAwRD7b5c5AxQ','都是','18766212222','755','2014-6-24 18:29:49','','http://v.24so.com/index.php?g=Wap&amp;amp;m=School&amp;amp;a=readview&amp;amp;token=c6a3b2','course','1402482958','0','http://v.24so.com/index.php?g=Wap&amp;amp;m=School&amp;amp;a=readview&amp;amp;token=c6a3b2','0','0','725','2752','0','0','',NULL,'','');");

require("../../inc/footer.php");
?>