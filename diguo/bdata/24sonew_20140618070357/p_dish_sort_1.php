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
E_D("replace into `p_dish_sort` values('5','10','��������','̩ʽ��ţ��������','http://www.24so.com/up_pic/uploads/image/20140414/20140414072953_21271.jpg','5');");
E_D("replace into `p_dish_sort` values('6','10','���ŷ�','���ŷ�','http://v.24so.com/uploads/m/mhsqxc1401953951/e/8/f/2/thumb_5395f1f7122e8.png','4');");
E_D("replace into `p_dish_sort` values('7','10','����','����','','5');");
E_D("replace into `p_dish_sort` values('8','10','��ɫС��','��ɫС��','','4');");
E_D("replace into `p_dish_sort` values('9','10','�ײ�','�ײ�','','2');");
E_D("replace into `p_dish_sort` values('11','15','����','','http://v.24so.com/uploads/y/yosjzs1402383816/a/0/a/e/thumb_5396bb2548722.png','1');");
E_D("replace into `p_dish_sort` values('12','3','TUDOUSI','','','1');");
E_D("replace into `p_dish_sort` values('13','26','����','','','2');");
E_D("replace into `p_dish_sort` values('14','9','����','���ȿ��ȿ���','http://v.24so.com/uploads/a/a0bbb64eef61a16/d/7/d/8/thumb_539fb0eac4fb6.jpg','1');");
E_D("replace into `p_dish_sort` values('15','9','��','11111111111111111','http://v.24so.com/uploads/a/a0bbb64eef61a16/e/f/4/e/thumb_539fb5d10f3b4.jpg','1');");
E_D("replace into `p_dish_sort` values('16','30','С��','С��С��С��','http://v.24so.com/uploads/a/a0bbb64eef61a16/2/7/9/e/thumb_539ff72446d64.jpg','1');");
E_D("replace into `p_dish_sort` values('17','31','����','','http://v.24so.com/uploads/o/oucryx1402886291/9/e/3/6/thumb_539ffe7ae405b.jpg','1');");
E_D("replace into `p_dish_sort` values('18','31','�Ȳ�','','http://v.24so.com/uploads/o/oucryx1402886291/5/2/f/e/thumb_539fff24e3aaa.jpg','1');");

require("../../inc/footer.php");
?>