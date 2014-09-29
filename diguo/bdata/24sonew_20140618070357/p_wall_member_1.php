<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wall_member`;");
E_C("CREATE TABLE `p_wall_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(20) NOT NULL DEFAULT '',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `portrait` varchar(150) NOT NULL DEFAULT '',
  `nickname` varchar(60) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  `wallid` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`wallid`),
  KEY `wecha_id` (`wecha_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_wall_member` values('1','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','http://v.24so.com/tpl/static/portrait/5.jpg','п║╟вЖХ','15629059525','1401956305','1','1','0');");
E_D("replace into `p_wall_member` values('2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','http://v.24so.com/tpl/static/portrait/5.jpg','лухы','13792812605','1402110957','2','1','0');");

require("../../inc/footer.php");
?>