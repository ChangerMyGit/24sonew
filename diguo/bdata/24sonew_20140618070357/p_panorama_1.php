<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_panorama`;");
E_C("CREATE TABLE `p_panorama` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `intro` varchar(300) NOT NULL DEFAULT '',
  `music` varchar(100) NOT NULL DEFAULT '',
  `frontpic` varchar(100) NOT NULL DEFAULT '',
  `rightpic` varchar(100) NOT NULL DEFAULT '',
  `backpic` varchar(100) NOT NULL DEFAULT '',
  `leftpic` varchar(100) NOT NULL DEFAULT '',
  `toppic` varchar(100) NOT NULL DEFAULT '',
  `bottompic` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(60) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `p_panorama` values('1','1fee0922b0a40db','360全景','360全景','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','360全景','0','1');");
E_D("replace into `p_panorama` values('2','879c2f933017228','全景','','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','全景','0','123456');");
E_D("replace into `p_panorama` values('3','tvjxcc1402290548','','','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','','0','0');");
E_D("replace into `p_panorama` values('4','kcmjgr1402792677','全景','','','http://v.24so.com/uploads/k/kcmjgr1402792677/9/e/0/2/thumb_539d094e61c56.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','全景','0','0');");
E_D("replace into `p_panorama` values('5','gdfrep1402472524','房间展示','房间展示','','/tpl/User/default/common/images/panorama/0.jpg','/tpl/User/default/common/images/panorama/1.jpg','/tpl/User/default/common/images/panorama/2.jpg','/tpl/User/default/common/images/panorama/3.jpg','/tpl/User/default/common/images/panorama/4.jpg','/tpl/User/default/common/images/panorama/5.jpg','全景','0','0');");
E_D("replace into `p_panorama` values('6','oucryx1402886291','公司全景','','','http://v.24so.com/uploads/o/oucryx1402886291/9/d/b/d/thumb_53a00086cbac7.jpg','http://v.24so.com/uploads/o/oucryx1402886291/c/4/7/f/thumb_53a0008f5c4f6.jpg','http://v.24so.com/uploads/o/oucryx1402886291/9/4/5/5/thumb_53a000975c9f2.jpg','http://v.24so.com/uploads/o/oucryx1402886291/0/a/e/9/thumb_53a000a3b7f08.jpg','http://v.24so.com/uploads/o/oucryx1402886291/a/4/3/3/thumb_53a000b060369.jpg','http://v.24so.com/uploads/o/oucryx1402886291/9/a/e/d/thumb_53a000b7f3c11.jpg','公司全景','0','0');");

require("../../inc/footer.php");
?>