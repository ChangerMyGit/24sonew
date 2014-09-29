<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_shake_rt`;");
E_C("CREATE TABLE `p_shake_rt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `token` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(12) NOT NULL DEFAULT '',
  `count` int(10) NOT NULL DEFAULT '0',
  `shakeid` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `shakeid` (`shakeid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_shake_rt` values('1','oUQrDuFbKCygUl9J_3jqs75T8hLE','diwxqe1402738986','15603934343','3','3');");

require("../../inc/footer.php");
?>