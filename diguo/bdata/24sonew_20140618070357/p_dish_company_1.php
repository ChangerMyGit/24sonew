<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dish_company`;");
E_C("CREATE TABLE `p_dish_company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `istakeaway` tinyint(1) unsigned NOT NULL,
  `price` float NOT NULL,
  `payonline` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_dish_company` values('1','10','1','2','0');");
E_D("replace into `p_dish_company` values('2','15','1','0','0');");
E_D("replace into `p_dish_company` values('3','3','1','111','0');");
E_D("replace into `p_dish_company` values('4','9','1','1','1');");
E_D("replace into `p_dish_company` values('5','30','1','1','1');");

require("../../inc/footer.php");
?>