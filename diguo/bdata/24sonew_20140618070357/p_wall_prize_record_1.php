<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wall_prize_record`;");
E_C("CREATE TABLE `p_wall_prize_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `wallid` int(11) NOT NULL DEFAULT '0',
  `prize` mediumint(4) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wallid` (`wallid`,`prize`,`time`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_wall_prize_record` values('1','1','1','3','1401956556');");
E_D("replace into `p_wall_prize_record` values('2','2','2','3','1402111686');");

require("../../inc/footer.php");
?>