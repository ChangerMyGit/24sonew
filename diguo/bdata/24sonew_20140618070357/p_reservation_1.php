<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_reservation`;");
E_C("CREATE TABLE `p_reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `addtype` varchar(20) NOT NULL DEFAULT 'house_book',
  `address` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `lng` varchar(13) NOT NULL,
  `lat` varchar(13) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `headpic` varchar(200) NOT NULL,
  `info` text,
  `typename` varchar(50) NOT NULL,
  `typename2` varchar(50) NOT NULL,
  `typename3` varchar(50) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `date` varchar(50) NOT NULL,
  `allnums` varchar(50) NOT NULL,
  `name_show` tinyint(4) NOT NULL DEFAULT '1',
  `time_show` tinyint(4) NOT NULL DEFAULT '1',
  `txt1` varchar(50) NOT NULL,
  `value1` varchar(50) NOT NULL,
  `txt2` varchar(50) NOT NULL,
  `value2` varchar(50) NOT NULL,
  `txt3` varchar(50) NOT NULL,
  `value3` varchar(50) NOT NULL,
  `txt4` varchar(50) NOT NULL,
  `value4` varchar(50) NOT NULL,
  `txt5` varchar(50) NOT NULL,
  `value5` varchar(50) NOT NULL,
  `select1` varchar(50) NOT NULL,
  `svalue1` varchar(100) NOT NULL,
  `select2` varchar(50) NOT NULL,
  `svalue2` varchar(100) NOT NULL,
  `select3` varchar(50) NOT NULL,
  `svalue3` varchar(100) NOT NULL,
  `select4` varchar(50) NOT NULL,
  `svalue4` varchar(100) NOT NULL,
  `select5` varchar(50) NOT NULL,
  `svalue5` varchar(100) NOT NULL,
  `datename` varchar(100) NOT NULL,
  `take` int(11) NOT NULL DEFAULT '1',
  `email` varchar(30) NOT NULL,
  `open_email` tinyint(4) NOT NULL DEFAULT '0',
  `sms` varchar(13) NOT NULL,
  `open_sms` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_reservation` values('1','85fa9a93c81ad7e','菁界预约','菁界预约','tpl/User/default/common/car/yuyue.jpg','drive','山东省青岛市','','120°22′22.39″','36°05′55.28″','0551-62696666','tpl/User/default/common/car/yuyue.jpg','2431534','','','','1','','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `p_reservation` values('3','85fa9a93c81ad7e','菁界预约','菁界','http://v.24so.com/uploads/8/85fa9a93c81ad7e/7/6/1/f/thumb_53982a6f826c0.jpg','course','青岛市','','124','12412','0551-62696666','http://v.24so.com/uploads/8/85fa9a93c81ad7e/2/8/7/2/thumb_53982a86d8546.jpg','&lt;span style=&quot;color:#444444;font-family:&apos;Microsoft YaHei&apos;, Helvitica, Verdana, Arial, san-serif;background-color:#FCFCFC;&quot;&gt;0551-62696666爱的&lt;/span&gt;','菁界预约','50','2014-6-12 18:07:18','0','2014-6-30 18:07:20','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");
E_D("replace into `p_reservation` values('4','c6a3b2d7590ae01','755','12','http://v.24so.com/uploads/c/c6a3b2d7590ae01/7/2/3/b/thumb_53982fdbdfe25.jpg','course','725','','752','725','7527257527','http://v.24so.com/uploads/c/c6a3b2d7590ae01/b/a/9/9/thumb_53982fe42d9f8.jpg','14','2752','727','2014-6-24 18:29:49','0','2014-7-24 18:29:51','','1','1','','','','','','','','','','','','','','','','','','','','','','1','','0','','0');");

require("../../inc/footer.php");
?>