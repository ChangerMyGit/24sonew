<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dish_sort`;");
E_C("CREATE TABLE `p_dish_sort` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `num` smallint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk");
E_D("replace into `p_dish_sort` values('5','10','过桥米线','泰式肥牛过桥米线','http://www.24so.com/up_pic/uploads/image/20140414/20140414072953_21271.jpg','5');");
E_D("replace into `p_dish_sort` values('6','10','过桥饭','过桥饭','http://v.24so.com/uploads/m/mhsqxc1401953951/e/8/f/2/thumb_5395f1f7122e8.png','4');");
E_D("replace into `p_dish_sort` values('7','10','拉面','拉面','','5');");
E_D("replace into `p_dish_sort` values('8','10','特色小吃','特色小吃','','4');");
E_D("replace into `p_dish_sort` values('9','10','套餐','套餐','','2');");
E_D("replace into `p_dish_sort` values('11','15','凉菜','','http://v.24so.com/uploads/y/yosjzs1402383816/a/0/a/e/thumb_5396bb2548722.png','1');");
E_D("replace into `p_dish_sort` values('12','3','TUDOUSI','','','1');");
E_D("replace into `p_dish_sort` values('13','26','凉菜','','','2');");
E_D("replace into `p_dish_sort` values('14','9','咖啡','咖啡咖啡咖啡','http://v.24so.com/uploads/a/a0bbb64eef61a16/d/7/d/8/thumb_539fb0eac4fb6.jpg','1');");
E_D("replace into `p_dish_sort` values('15','9','汤','11111111111111111','http://v.24so.com/uploads/a/a0bbb64eef61a16/e/f/4/e/thumb_539fb5d10f3b4.jpg','1');");
E_D("replace into `p_dish_sort` values('16','30','小吃','小吃小吃小吃','http://v.24so.com/uploads/a/a0bbb64eef61a16/2/7/9/e/thumb_539ff72446d64.jpg','1');");
E_D("replace into `p_dish_sort` values('17','31','凉菜','','http://v.24so.com/uploads/o/oucryx1402886291/9/e/3/6/thumb_539ffe7ae405b.jpg','1');");
E_D("replace into `p_dish_sort` values('18','31','热菜','','http://v.24so.com/uploads/o/oucryx1402886291/5/2/f/e/thumb_539fff24e3aaa.jpg','1');");

require("../../inc/footer.php");
?>