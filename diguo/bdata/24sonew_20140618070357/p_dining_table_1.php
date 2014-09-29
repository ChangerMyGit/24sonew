<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dining_table`;");
E_C("CREATE TABLE `p_dining_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `image` varchar(200) NOT NULL,
  `isbox` tinyint(1) unsigned NOT NULL,
  `isorder` tinyint(1) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `isbox` (`isbox`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `p_dining_table` values('2','10','1','10','http://v.24so.com/uploads/m/mhsqxc1401953951/a/5/8/2/thumb_5395ecf40e202.jpg','0','0','0');");
E_D("replace into `p_dining_table` values('4','15','1ºÅ×À','4','','0','0','0');");
E_D("replace into `p_dining_table` values('3','10','ËÄ¼¾Èç´º','10','http://v.24so.com/uploads/m/mhsqxc1401953951/e/4/4/d/thumb_5395ed829820b.jpg','1','0','0');");
E_D("replace into `p_dining_table` values('5','3','1','12','','0','0','0');");
E_D("replace into `p_dining_table` values('8','31','101','10','http://v.24so.com/uploads/o/oucryx1402886291/f/5/5/5/thumb_539ffdac1b92c.jpg','1','0','0');");

require("../../inc/footer.php");
?>