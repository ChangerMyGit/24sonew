<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_hotels_house`;");
E_C("CREATE TABLE `p_hotels_house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `token` varchar(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `note` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `sid` (`sid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `p_hotels_house` values('1','3','879c2f933017228','C158','http://v.24so.com/uploads/8/879c2f933017228/b/1/8/4/thumb_5391993638857.png','1','微酒店');");
E_D("replace into `p_hotels_house` values('2','26','kcmjgr1402792677','豪华VIP','http://v.24so.com/uploads/k/kcmjgr1402792677/b/9/a/7/thumb_539d0b4cbcd96.jpg','4','豪华VIP豪华VIP豪华VIP豪华VIP豪华VIP豪华VIP豪华VIP豪华VIP');");
E_D("replace into `p_hotels_house` values('3','26','kcmjgr1402792677','普通间','http://v.24so.com/uploads/k/kcmjgr1402792677/8/a/5/3/thumb_539d0b7a95fd1.jpg','2','普通间普通间普通间普通间普通间普通间普通间普通间');");
E_D("replace into `p_hotels_house` values('4','31','oucryx1402886291','101','','5','');");
E_D("replace into `p_hotels_house` values('5','31','oucryx1402886291','201','','6','');");
E_D("replace into `p_hotels_house` values('6','23','junxtg1402455483','单人间','http://v.24so.com/uploads/j/junxtg1402455483/a/a/f/b/thumb_53a13083690dc.JPG','8','11111');");
E_D("replace into `p_hotels_house` values('7','23','junxtg1402455483','标准间','http://v.24so.com/uploads/j/junxtg1402455483/e/4/a/7/thumb_53a1309a76a5e.JPG','7','2222');");
E_D("replace into `p_hotels_house` values('8','23','junxtg1402455483','商务房','http://v.24so.com/uploads/j/junxtg1402455483/3/a/8/4/thumb_53a130b94687a.JPG','9','3333');");
E_D("replace into `p_hotels_house` values('9','23','junxtg1402455483','商务大床房','http://v.24so.com/uploads/j/junxtg1402455483/c/6/4/2/thumb_53a130d06f78c.JPG','10','33333');");

require("../../inc/footer.php");
?>