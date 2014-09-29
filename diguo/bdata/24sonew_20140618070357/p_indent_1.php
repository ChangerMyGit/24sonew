<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_indent`;");
E_C("CREATE TABLE `p_indent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `gid` tinyint(2) NOT NULL,
  `month` mediumint(5) NOT NULL DEFAULT '0',
  `uname` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `info` int(11) NOT NULL,
  `indent_id` char(20) NOT NULL,
  `widtrade_no` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `p_indent` values('1','2','0','0','test','充值','0','2_1401939064','','200','1401939064','0');");
E_D("replace into `p_indent` values('2','5','0','0','s262984149','充值','0','5_1401940866','','200','1401940866','0');");
E_D("replace into `p_indent` values('3','2','0','0','test','充值','0','2_1401966604','','200','1401966604','0');");
E_D("replace into `p_indent` values('4','9','0','0','ggdr520','充值','0','9_1401974159','','200','1401974159','0');");
E_D("replace into `p_indent` values('5','16','0','0','1792545122','充值','0','16_1402306618','','200','1402306618','0');");
E_D("replace into `p_indent` values('6','4','0','0','china24so','充值','0','4_1402805696','','2000','1402805696','0');");

require("../../inc/footer.php");
?>