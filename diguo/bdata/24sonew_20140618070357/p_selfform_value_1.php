<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_selfform_value`;");
E_C("CREATE TABLE `p_selfform_value` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `formid` int(10) NOT NULL DEFAULT '0',
  `wecha_id` varchar(50) NOT NULL DEFAULT '',
  `values` varchar(2000) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `formid` (`formid`,`wecha_id`,`time`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_selfform_value` values('1','2','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','a:2:{s:2:\"xm\";s:3:\"Βπ\";s:7:\"dianhua\";s:11:\"18660203060\";}','1402366958');");
E_D("replace into `p_selfform_value` values('2','10','null','a:0:{}','1402462825');");
E_D("replace into `p_selfform_value` values('4','11','oiA8DuE0iHcML_nsAwRD7b5c5AxQ','a:1:{s:5:\"qeqwe\";s:11:\"18766212905\";}','1402483740');");
E_D("replace into `p_selfform_value` values('5','13','o5GVDt3_zknPHzquqqF-aa2Xudxo','a:1:{s:7:\"huiyuan\";s:5:\"Αυ\r\n\";}','1402484500');");

require("../../inc/footer.php");
?>