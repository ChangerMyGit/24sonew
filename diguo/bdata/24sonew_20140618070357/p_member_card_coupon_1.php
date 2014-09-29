<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_coupon`;");
E_C("CREATE TABLE `p_member_card_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `people` int(3) NOT NULL,
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `info` text NOT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_member_card_coupon` values('1','2','1fee0922b0a40db','20�Ż�ȯ','1','0','20','1','1401897600','1434297600','������100Ԫ����ʹ���Ż�ȯ','0','1401957335');");
E_D("replace into `p_member_card_coupon` values('2','4','a3a7daf71176d5b','�Ż�ȯ','1','0','1','1','1403107200','1404144000','�Ż݄�������ȡ��','0','1402297851');");
E_D("replace into `p_member_card_coupon` values('3','1','mhsqxc1401953951','����Դ�Ż݄�','1','0','10','1','1402329600','1403193600','��������20Ԫ�Ϳ���ȡ','0','1402340812');");
E_D("replace into `p_member_card_coupon` values('4','13','glkpuw1402307164','���ʳ����ʳ�Ż݄�','1','0','1','100','1401552000','1404144000','�Ż݄����ֽ�ʹ�ò��ܶһ��ֽ�','0','1402545359');");

require("../../inc/footer.php");
?>