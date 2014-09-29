<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dish_table`;");
E_C("CREATE TABLE `p_dish_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `tableid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `reservetime` int(10) unsigned NOT NULL,
  `creattime` int(10) unsigned NOT NULL,
  `orderid` int(10) unsigned NOT NULL,
  `isuse` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `wecha_id` (`wecha_id`,`reservetime`),
  KEY `tableid` (`tableid`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `p_dish_table` values('1','10','1','ozbL_jtmluwL8s_9uoDabH9ZO5d8','1402039801','1402039227','1','0');");
E_D("replace into `p_dish_table` values('2','10','1','ozbL_jm1MwOXNEWfR0PgGUSznT8E','1402047637','1402047097','4','0');");
E_D("replace into `p_dish_table` values('3','10','2','ozbL_jtmluwL8s_9uoDabH9ZO5d8','1402460100','1402337432','5','0');");
E_D("replace into `p_dish_table` values('4','10','3','ozbL_jrpaE62v7dpwWnW_kV0lZa4','1402392346','1402391770','6','0');");
E_D("replace into `p_dish_table` values('5','10','3','ozbL_jm1MwOXNEWfR0PgGUSznT8E','1402451710','1402451124','7','0');");
E_D("replace into `p_dish_table` values('6','3','5','o0Ojijr_-uCytIA9cMgc8U9hJw9o','1403280000','1402556825','10','0');");
E_D("replace into `p_dish_table` values('7','31','8','oYdkquDNf8szXClnqPfxHgxt2XQo','1403020800','1402994702','15','0');");

require("../../inc/footer.php");
?>