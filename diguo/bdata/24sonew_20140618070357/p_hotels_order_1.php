<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_hotels_order`;");
E_C("CREATE TABLE `p_hotels_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `nums` smallint(3) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `time` int(11) NOT NULL,
  `startdate` int(8) unsigned NOT NULL,
  `enddate` int(8) unsigned NOT NULL,
  `paid` tinyint(1) unsigned NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `printed` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`,`wecha_id`),
  KEY `token` (`token`),
  KEY `orderid` (`orderid`),
  KEY `enddate` (`enddate`),
  KEY `sid` (`sid`),
  KEY `stardate` (`startdate`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `p_hotels_order` values('1','3','1','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','121','1','лухы','12356800866','0','20140606','20140607','0','o20140606185850','0','0');");
E_D("replace into `p_hotels_order` values('2','26','2','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','98','1','жэцн╣о','15839367019','0','20140615','20140616','0','g20140615110113','0','0');");
E_D("replace into `p_hotels_order` values('3','31','6','oYdkquDNf8szXClnqPfxHgxt2XQo','oucryx1402886291','168','1','жэ','15839367019','0','20140617','20140618','0','o20140617170623','0','0');");

require("../../inc/footer.php");
?>