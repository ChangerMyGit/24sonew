<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_vip`;");
E_C("CREATE TABLE `p_member_card_vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `info` varchar(200) NOT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_member_card_vip` values('1','2','1fee0922b0a40db','��Ա��Ȩ','0','1','0','0','���л�Ա��������99���Ż�','0','1401957277');");
E_D("replace into `p_member_card_vip` values('2','1','mhsqxc1401953951','��ͨ��Ա','0','1','0','0','��ͨ��Ա','0','1402362006');");
E_D("replace into `p_member_card_vip` values('3','1','mhsqxc1401953951','����','0','1','0','0','������20�ֿ���ȡ����','0','1402124256');");
E_D("replace into `p_member_card_vip` values('4','9','ainbtq1402292243','����','0','1','0','0','','0','1402390298');");

require("../../inc/footer.php");
?>