<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_info`;");
E_C("CREATE TABLE `p_member_card_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `info` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `description` varchar(12) NOT NULL,
  `class` tinyint(1) NOT NULL,
  `password` varchar(11) NOT NULL,
  `crate_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>