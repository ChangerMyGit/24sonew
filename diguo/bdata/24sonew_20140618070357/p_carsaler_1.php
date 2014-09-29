<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_carsaler`;");
E_C("CREATE TABLE `p_carsaler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `mobile` char(13) NOT NULL,
  `sort` tinyint(4) NOT NULL,
  `salestype` tinyint(4) NOT NULL,
  `info` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>