<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wall`;");
E_C("CREATE TABLE `p_wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(20) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  `logo` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(100) NOT NULL DEFAULT '',
  `startbackground` varchar(100) NOT NULL DEFAULT '',
  `background` varchar(100) NOT NULL DEFAULT '',
  `endbackground` varchar(100) NOT NULL DEFAULT '',
  `isopen` tinyint(1) NOT NULL DEFAULT '1',
  `firstprizename` varchar(50) NOT NULL DEFAULT '',
  `firstprizepic` varchar(100) NOT NULL DEFAULT '',
  `firstprizecount` mediumint(5) NOT NULL DEFAULT '0',
  `secondprizename` varchar(50) NOT NULL DEFAULT '',
  `secondprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `secondprizepic` varchar(50) NOT NULL DEFAULT '',
  `thirdprizename` varchar(50) NOT NULL DEFAULT '',
  `thirdprizepic` varchar(100) NOT NULL DEFAULT '',
  `thirdprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `fourthprizename` varchar(50) NOT NULL DEFAULT '',
  `fourthprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `fourthprizepic` varchar(100) NOT NULL DEFAULT '',
  `fifthprizename` varchar(50) NOT NULL DEFAULT '',
  `fifthprizecount` mediumint(5) NOT NULL DEFAULT '0',
  `fifthprizepic` varchar(100) NOT NULL DEFAULT '',
  `sixthprizename` varchar(50) NOT NULL DEFAULT '',
  `sixthprizecount` mediumint(4) NOT NULL DEFAULT '0',
  `sixthprizepic` varchar(100) NOT NULL DEFAULT '',
  `keyword` varchar(60) NOT NULL DEFAULT '',
  `qrcode` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_wall` values('1','1fee0922b0a40db','1401956210','','微信墙','http://v.24so.com/tpl/static/attachment/background/view/6.jpg','http://v.24so.com/tpl/static/attachment/background/view/2.jpg','http://v.24so.com/tpl/static/attachment/background/view/7.jpg','1','微信商企平台','','1','','0','','','','0','','0','','','0','','','0','','微信墙','');");
E_D("replace into `p_wall` values('2','879c2f933017228','1402107875','','24so青岛网商大会','','','','1','熊抱','http://v.24so.com/tpl/static/attachment/icon/colorful/11.png','3','微笑','4','http://v.24so.com/tpl/static/attachment/','微笑','http://v.24so.com/tpl/static/attachment/icon/colorful/11.png','5','','0','','','0','','','0','','微信上墙','http://v.24so.com/uploads/8/879c2f933017228/f/3/4/7/thumb_53918cae60aa6.jpg');");

require("../../inc/footer.php");
?>