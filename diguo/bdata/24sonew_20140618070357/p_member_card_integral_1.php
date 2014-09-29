<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_integral`;");
E_C("CREATE TABLE `p_member_card_integral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `integral` int(8) NOT NULL,
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `info` text NOT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_member_card_integral` values('1','1','mhsqxc1401953951','积分兑奖','20','1402340921','1403204921','积分满100元可兑换小礼品','0','1402340992');");

require("../../inc/footer.php");
?>