<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_notice`;");
E_C("CREATE TABLE `p_member_card_notice` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `endtime` int(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_member_card_notice` values('1','1','会员通知','领取会员卡时间截止到6月15号','1402847999','1402362029');");
E_D("replace into `p_member_card_notice` values('2','9','会员通知','','1417363199','1402389767');");

require("../../inc/footer.php");
?>