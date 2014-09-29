<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dish_like`;");
E_C("CREATE TABLE `p_dish_like` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `did` int(10) unsigned NOT NULL,
  `cid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `wecha_id` (`wecha_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk");
E_D("replace into `p_dish_like` values('2','1','10','ozbL_jtmluwL8s_9uoDabH9ZO5d8');");
E_D("replace into `p_dish_like` values('5','4','10','ozbL_jsLcAezME8OrkP7SMmFgb6g');");
E_D("replace into `p_dish_like` values('9','2','10','ozbL_jrpaE62v7dpwWnW_kV0lZa4');");
E_D("replace into `p_dish_like` values('10','6','10','ozbL_jm1MwOXNEWfR0PgGUSznT8E');");
E_D("replace into `p_dish_like` values('11','23','3','o0Ojijr_-uCytIA9cMgc8U9hJw9o');");
E_D("replace into `p_dish_like` values('14','29','31','oYdkquDNf8szXClnqPfxHgxt2XQo');");

require("../../inc/footer.php");
?>