<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_product_cart`;");
E_C("CREATE TABLE `p_product_cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `transactionid` varchar(100) NOT NULL DEFAULT '',
  `paytype` varchar(30) NOT NULL DEFAULT '',
  `productid` int(10) NOT NULL DEFAULT '0',
  `code` varchar(50) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `diningtype` mediumint(2) NOT NULL DEFAULT '0',
  `info` text NOT NULL,
  `total` mediumint(4) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `tel` varchar(14) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `ordertype` mediumint(2) NOT NULL DEFAULT '0',
  `tableid` mediumint(4) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  `buytime` varchar(100) NOT NULL DEFAULT '',
  `groupon` tinyint(1) NOT NULL DEFAULT '0',
  `dining` tinyint(1) NOT NULL DEFAULT '0',
  `year` mediumint(4) NOT NULL DEFAULT '0',
  `month` mediumint(4) NOT NULL DEFAULT '0',
  `day` mediumint(4) NOT NULL DEFAULT '0',
  `hour` smallint(4) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `orderid` varchar(40) NOT NULL DEFAULT '',
  `sent` tinyint(1) NOT NULL DEFAULT '0',
  `logistics` varchar(70) NOT NULL DEFAULT '',
  `logisticsid` varchar(50) NOT NULL DEFAULT '',
  `printed` tinyint(1) NOT NULL DEFAULT '0',
  `handled` tinyint(1) NOT NULL DEFAULT '0',
  `handledtime` int(10) NOT NULL DEFAULT '0',
  `handleduid` int(10) NOT NULL DEFAULT '0',
  `score` int(10) unsigned NOT NULL,
  `paymode` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`time`),
  KEY `groupon` (`groupon`),
  KEY `dining` (`dining`),
  KEY `printed` (`printed`),
  KEY `year` (`year`,`month`,`day`,`hour`),
  KEY `diningtype` (`diningtype`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `p_product_cart` values('1','','','61','o0Ojij1402048089','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','0','a:1:{i:61;a:2:{s:5:\"count\";i:1;s:5:\"price\";i:1;}}','1','1','陶荣','13792812605','山东省青岛市生正路','0','0','1402048089','','1','0','0','0','0','0','0','nynq1402048089','0','','','0','0','0','0','0','0');");
E_D("replace into `p_product_cart` values('2','','','0','','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','0','a:1:{i:57;i:2;}','2','2502','陶荣','13792812605','阿斯顿飞','0','0','1402305956','','0','0','0','0','0','0','0','o20140609172556','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('3','','','0','','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:22;i:2;}','2','5960','杨杨','13387509543','山西临汾五一西路北京二十四搜科技有限公司','0','0','1402311237','','0','0','0','0','0','0','0','820140609185357','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('4','','','0','','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:2:{i:24;i:1;i:21;i:2;}','3','9410','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402311507','','0','0','0','0','0','0','0','820140609185827','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('5','','','0','','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:23;i:5;}','5','17250','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402312113','','0','0','0','0','0','0','0','820140609190833','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('6','','','0','','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:24;i:1;}','1','3450','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402312235','','0','0','0','0','0','0','0','820140609191035','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('8','','','92','ozbL_j1402338374','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:92;a:2:{s:5:\"count\";i:1;s:5:\"price\";i:8;}}','1','8','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402338374','','1','0','0','0','0','0','0','yzee1402338374','0','','','0','0','0','0','0','0');");
E_D("replace into `p_product_cart` values('9','','','92','ozbL_j1402338744','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:92;a:2:{s:5:\"count\";i:1;s:5:\"price\";i:8;}}','1','8','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402338744','','1','0','0','0','0','0','0','grnt1402338744','0','','','0','0','0','0','0','0');");
E_D("replace into `p_product_cart` values('10','','','93','ozbL_j1402339143','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:93;a:2:{s:5:\"count\";i:1;s:5:\"price\";i:48;}}','1','48','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402339143','','1','0','0','0','0','0','0','nxej1402339143','0','','','0','0','0','0','0','0');");
E_D("replace into `p_product_cart` values('11','','','0','','879c2f933017228','o0OjijsgZD5e7dkrJxKY89cwNUFc','0','a:1:{i:56;i:1;}','1','1257','小马','18660203060','青岛','0','0','1402366848','','0','0','0','0','0','0','0','c20140610102048','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('13','','','93','ozbL_j1402377583','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','a:1:{i:93;a:2:{s:5:\"count\";i:1;s:5:\"price\";i:48;}}','1','48','杨杨','13387509543','山西临汾五一西路北京二十思搜科技有限公司','0','0','1402377583','','1','0','0','0','0','0','0','natp1402377583','0','','','0','0','0','0','0','0');");
E_D("replace into `p_product_cart` values('14','','','0','','tvjxcc1402290548','ocTK_jmka_1p7d4qvC9XMjuojOhA','0','a:1:{i:83;i:1;}','1','40','张洪涛','13324299991','葫芦岛市龙港区','0','0','1402396216','','0','0','0','0','0','0','0','A20140610183016','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('16','','','0','','tvjxcc1402290548','ocTK_jlU0XGUD870bAisXx8VexA0','0','a:2:{i:87;i:1;i:83;i:2;}','3','112','常博','15271819800','武汉','0','0','1402401061','','0','0','0','0','0','0','0','020140610195101','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('17','','','61','o0Ojij1402461516','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','0','a:1:{i:61;a:2:{s:5:\"count\";i:1;s:5:\"price\";i:1;}}','1','1','陶荣','13792812605','阿斯顿飞','0','0','1402461516','','1','0','0','0','0','0','0','vakv1402461516','0','','','0','0','0','0','0','0');");
E_D("replace into `p_product_cart` values('18','','','0','','tvjxcc1402290548','ocTK_jn_WxxBjzMKtTl1wV4Mx8V4','0','a:1:{i:83;i:1;}','1','40','律师为','13084195401','大连沙河口区','0','0','1402547728','','0','0','0','0','0','0','0','420140612123528','0','','','0','0','0','0','0','1');");
E_D("replace into `p_product_cart` values('19','','','0','','oucryx1402886291','oYdkquDNf8szXClnqPfxHgxt2XQo','0','a:1:{i:110;i:1;}','1','120','周梦迪','15839367019','濮阳市中原路','0','0','1402996875','','0','0','0','0','0','0','0','o20140617172115','0','','','0','0','0','0','0','1');");

require("../../inc/footer.php");
?>