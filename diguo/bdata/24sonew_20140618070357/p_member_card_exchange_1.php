<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_exchange`;");
E_C("CREATE TABLE `p_member_card_exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cardid` mediumint(8) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `everyday` tinyint(4) NOT NULL,
  `continuation` tinyint(4) NOT NULL,
  `reward` tinyint(4) NOT NULL,
  `cardinfo` text NOT NULL,
  `cardinfo2` text NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `cardid` (`cardid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_member_card_exchange` values('1','2','1fee0922b0a40db','1','0','1','���Ѷһ��֣����ֻ�����','&lt;span&gt;���Ѷһ��֣����ֻ������ض�����Ļ��ֿ��Զһ���ʵ����Ʒ&lt;/span&gt;','1401957139');");
E_D("replace into `p_member_card_exchange` values('2','1','mhsqxc1401953951','10','0','0','&lt;p&gt;\r\n	����100�ֿɶһ���Ʒ\r\n&lt;/p&gt;','&lt;p&gt;\r\n	����100�ֿɶһ���Ʒ\r\n&lt;/p&gt;','1402361978');");
E_D("replace into `p_member_card_exchange` values('3','9','ainbtq1402292243','1','0','1','&lt;p&gt;\r\n	1����Ա�����ڹ�������ʹ�á�\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	2.����Ա�����ޱ���ʹ�ã���������ʹ��Ȩ��\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	3.���������ս���Ȩ����ݼ�����ֲ������޹�˾\r\n&lt;/p&gt;','&lt;p&gt;\r\n	1.����ǩ�������ֽ����ۼƣ���һ��1�֣��ڶ���2�֣���δ������½���ӵ�һ�����¼���\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	2.����1Ԫ����1Ԫ����Ա���յ������ѣ����ֽ���2�֡�\r\n&lt;/p&gt;','1402475279');");
E_D("replace into `p_member_card_exchange` values('4','10','junxtg1402455483','2','0','10','���ֿ��Ե��ֽ�ʹ��','&lt;span&gt;���ֿ��Ե��ֽ�ʹ��&lt;/span&gt;','1402467590');");
E_D("replace into `p_member_card_exchange` values('5','13','glkpuw1402307164','1','0','1','���ӻ�Ա����ȡ��','������10Ԫ��1��','1402545162');");

require("../../inc/footer.php");
?>