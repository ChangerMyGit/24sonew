<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dish_order`;");
E_C("CREATE TABLE `p_dish_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `price` float NOT NULL,
  `nums` smallint(3) unsigned NOT NULL,
  `info` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tableid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `reservetime` int(11) NOT NULL,
  `isuse` tinyint(1) NOT NULL,
  `paid` tinyint(1) unsigned NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `printed` tinyint(1) unsigned NOT NULL,
  `des` varchar(500) NOT NULL,
  `takeaway` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`,`wecha_id`),
  KEY `token` (`token`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `p_dish_order` values('1','10','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1','35','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"35\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"鸳鸯\";s:3:\"des\";s:0:\"\";}}}','','1','','','1','1402039227','1402039801','0','0','820140606152027','0','','2');");
E_D("replace into `p_dish_order` values('2','10','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1','35','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"35\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"鸳鸯\";s:3:\"des\";s:0:\"\";}}}','','1','','','0','1402039699','1402040276','0','0','820140606152819','0','','2');");
E_D("replace into `p_dish_order` values('3','10','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1','35','4','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"35\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"鸳鸯\";s:3:\"des\";s:0:\"\";}}}','杨杨','0','13387509543','','0','1402039908','1402047000','0','0','820140606153148','0','到店消费','0');");
E_D("replace into `p_dish_order` values('4','10','ozbL_jm1MwOXNEWfR0PgGUSznT8E','mhsqxc1401953951','1','35','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:2:\"35\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"鸳鸯\";s:3:\"des\";s:0:\"\";}}}','','1','','','1','1402047097','1402047637','0','0','E20140606173137','0','','2');");
E_D("replace into `p_dish_order` values('5','10','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','2','113','10','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:2:{i:3;a:4:{s:5:\"price\";s:2:\"15\";s:3:\"num\";i:1;s:4:\"name\";s:21:\"新秀才过桥米线\";s:3:\"des\";s:0:\"\";}i:21;a:4:{s:5:\"price\";s:2:\"98\";s:3:\"num\";i:1;s:4:\"name\";s:12:\"三人套餐\";s:3:\"des\";s:0:\"\";}}}','杨杨','0','13387509543','','2','1402337432','1402460100','0','0','820140610021032','0','到了付款','0');");
E_D("replace into `p_dish_order` values('6','10','ozbL_jrpaE62v7dpwWnW_kV0lZa4','mhsqxc1401953951','2','48','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:2:{i:8;a:4:{s:5:\"price\";s:2:\"22\";s:3:\"num\";i:1;s:4:\"name\";s:24:\"风味小炒肉过桥饭\";s:3:\"des\";s:0:\"\";}i:9;a:4:{s:5:\"price\";s:2:\"26\";s:3:\"num\";i:1;s:4:\"name\";s:24:\"川香辣菜鱼过桥饭\";s:3:\"des\";s:0:\"\";}}}','','1','','','3','1402391770','1402392346','0','0','420140610171610','0','','2');");
E_D("replace into `p_dish_order` values('7','10','ozbL_jm1MwOXNEWfR0PgGUSznT8E','mhsqxc1401953951','1','28','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:2;a:4:{s:5:\"price\";s:2:\"28\";s:3:\"num\";i:1;s:4:\"name\";s:24:\"泰式肥牛过桥米线\";s:3:\"des\";s:0:\"\";}}}','','1','','','3','1402451124','1402451710','0','0','E20140611094524','0','','2');");
E_D("replace into `p_dish_order` values('8','10','ozbL_jrpaE62v7dpwWnW_kV0lZa4','mhsqxc1401953951','2','43','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:2:{i:2;a:4:{s:5:\"price\";s:2:\"28\";s:3:\"num\";i:1;s:4:\"name\";s:24:\"泰式肥牛过桥米线\";s:3:\"des\";s:0:\"\";}i:3;a:4:{s:5:\"price\";s:2:\"15\";s:3:\"num\";i:1;s:4:\"name\";s:21:\"新秀才过桥米线\";s:3:\"des\";s:0:\"\";}}}','','1','','','0','1402453310','1402453891','0','0','420140611102150','0','','2');");
E_D("replace into `p_dish_order` values('9','3','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','1','112','1','a:2:{s:13:\"takeAwayPrice\";s:3:\"111\";s:4:\"list\";a:1:{i:23;a:4:{s:5:\"price\";s:1:\"1\";s:3:\"num\";i:1;s:4:\"name\";s:9:\"土豆丝\";s:3:\"des\";s:0:\"\";}}}','陶荣','0','13792812605','阿斯顿飞','0','1402556778','1403280000','0','0','o20140612150618','0','','1');");
E_D("replace into `p_dish_order` values('10','3','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','1','1','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:23;a:4:{s:5:\"price\";s:1:\"1\";s:3:\"num\";i:1;s:4:\"name\";s:9:\"土豆丝\";s:3:\"des\";s:0:\"\";}}}','陶荣','0','13792812605','','5','1402556825','1403280000','0','0','o20140612150705','0','','0');");
E_D("replace into `p_dish_order` values('11','26','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','1','111','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:24;a:4:{s:5:\"price\";s:3:\"111\";s:3:\"num\";i:1;s:4:\"name\";s:3:\"123\";s:3:\"des\";s:0:\"\";}}}','周','0','15839367019','','0','1402800360','1402830660','0','0','g20140615104600','0','请留着','0');");
E_D("replace into `p_dish_order` values('12','9','oteyLjjIwHqMWckbwgL_fY0-dQmE','a0bbb64eef61a16','1','12','1','a:2:{s:13:\"takeAwayPrice\";s:1:\"1\";s:4:\"list\";a:1:{i:26;a:4:{s:5:\"price\";s:2:\"11\";s:3:\"num\";i:1;s:4:\"name\";s:2:\"11\";s:3:\"des\";s:0:\"\";}}}','11','0','15083381305','去求','0','1402989414','1403020800','1','1','E20140617151654','0','','1');");
E_D("replace into `p_dish_order` values('13','9','oteyLjjIwHqMWckbwgL_fY0-dQmE','a0bbb64eef61a16','1','23','1','a:2:{s:13:\"takeAwayPrice\";s:1:\"1\";s:4:\"list\";a:1:{i:27;a:4:{s:5:\"price\";s:2:\"22\";s:3:\"num\";i:1;s:4:\"name\";s:2:\"22\";s:3:\"des\";s:0:\"\";}}}','11','0','11111111111','杜康','0','1402993084','1403020800','0','0','E20140617161804','0','','1');");
E_D("replace into `p_dish_order` values('14','30','oteyLjjIwHqMWckbwgL_fY0-dQmE','a0bbb64eef61a16','1','2','1','a:2:{s:13:\"takeAwayPrice\";s:1:\"1\";s:4:\"list\";a:1:{i:28;a:4:{s:5:\"price\";s:1:\"1\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"蛋挞\";s:3:\"des\";s:0:\"\";}}}','111','0','11222222222','渡口','0','1402993196','1403193600','0','0','E20140617161956','0','','1');");
E_D("replace into `p_dish_order` values('15','31','oYdkquDNf8szXClnqPfxHgxt2XQo','oucryx1402886291','1','10','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:29;a:4:{s:5:\"price\";s:2:\"10\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"黄瓜\";s:3:\"des\";s:0:\"\";}}}','周','0','15839367019','','8','1402994702','1403020800','0','0','o20140617164502','0','留下','0');");

require("../../inc/footer.php");
?>