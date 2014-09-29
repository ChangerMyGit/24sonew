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
E_D("replace into `p_member_card_exchange` values('1','2','1fee0922b0a40db','1','0','1','消费兑积分，积分换好礼','&lt;span&gt;消费兑积分，积分换好礼。特定数额的积分可以兑换成实物礼品&lt;/span&gt;','1401957139');");
E_D("replace into `p_member_card_exchange` values('2','1','mhsqxc1401953951','10','0','0','&lt;p&gt;\r\n	积累100分可兑换礼品\r\n&lt;/p&gt;','&lt;p&gt;\r\n	积累100分可兑换礼品\r\n&lt;/p&gt;','1402361978');");
E_D("replace into `p_member_card_exchange` values('3','9','ainbtq1402292243','1','0','1','&lt;p&gt;\r\n	1本会员卡仅在广州市内使用。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	2.本会员卡仅限本人使用，其他人无使用权。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	3.本卡的最终解释权归广州嘉颢特种玻璃有限公司\r\n&lt;/p&gt;','&lt;p&gt;\r\n	1.连续签到，积分进行累计，第一次1分，第二次2分，如未连续登陆，从第一天重新记起。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	2.消费1元奖励1元，会员生日当天消费，积分奖励2分。\r\n&lt;/p&gt;','1402475279');");
E_D("replace into `p_member_card_exchange` values('4','10','junxtg1402455483','2','0','10','积分可以当现金使用','&lt;span&gt;积分可以当现金使用&lt;/span&gt;','1402467590');");
E_D("replace into `p_member_card_exchange` values('5','13','glkpuw1402307164','1','0','1','电子会员卡领取中','消费满10元积1分','1402545162');");

require("../../inc/footer.php");
?>