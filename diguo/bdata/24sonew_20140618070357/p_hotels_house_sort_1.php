<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_hotels_house_sort`;");
E_C("CREATE TABLE `p_hotels_house_sort` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `token` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `vprice` float NOT NULL,
  `note` varchar(500) NOT NULL,
  `num` tinyint(1) unsigned NOT NULL,
  `houses` smallint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=gbk");
E_D("replace into `p_hotels_house_sort` values('1','3','879c2f933017228','��׼��','','121','111','��׼��','1','1');");
E_D("replace into `p_hotels_house_sort` values('2','26','kcmjgr1402792677','��ͨ��','','98','88','�пյ�������','2','1');");
E_D("replace into `p_hotels_house_sort` values('3','26','kcmjgr1402792677','������','','168','148','�пյ����绰������','3','0');");
E_D("replace into `p_hotels_house_sort` values('4','26','kcmjgr1402792677','VIP','','268','199','VIPVIPVIPVIPVIPVIPVIP','3','1');");
E_D("replace into `p_hotels_house_sort` values('5','31','oucryx1402886291','VIP�׷�','','218','198','�յ������ԡ�����','2','1');");
E_D("replace into `p_hotels_house_sort` values('6','31','oucryx1402886291','��ͨ�׷�','','168','148','�յ�','2','1');");
E_D("replace into `p_hotels_house_sort` values('7','23','junxtg1402455483','��׼��','','199','158','','2','1');");
E_D("replace into `p_hotels_house_sort` values('8','23','junxtg1402455483','���˼�','','199','110','','1','1');");
E_D("replace into `p_hotels_house_sort` values('9','23','junxtg1402455483','����','','398','350','','2','1');");
E_D("replace into `p_hotels_house_sort` values('10','23','junxtg1402455483','����󴲷�','','369','290','','2','1');");

require("../../inc/footer.php");
?>