<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_carset`;");
E_C("CREATE TABLE `p_carset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `head_url` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL,
  `title1` varchar(50) NOT NULL DEFAULT '',
  `title2` varchar(50) NOT NULL DEFAULT '',
  `title3` varchar(50) NOT NULL DEFAULT '',
  `title4` varchar(50) NOT NULL DEFAULT '',
  `title5` varchar(50) NOT NULL DEFAULT '',
  `title6` varchar(50) NOT NULL DEFAULT '',
  `head_url_1` varchar(200) NOT NULL DEFAULT '',
  `head_url_2` varchar(200) NOT NULL DEFAULT '',
  `head_url_3` varchar(200) NOT NULL DEFAULT '',
  `head_url_4` varchar(200) NOT NULL DEFAULT '',
  `head_url_5` varchar(200) NOT NULL DEFAULT '',
  `head_url_6` varchar(200) NOT NULL DEFAULT '',
  `url1` varchar(200) NOT NULL DEFAULT '',
  `url2` varchar(200) NOT NULL DEFAULT '',
  `url3` varchar(200) NOT NULL DEFAULT '',
  `url4` varchar(200) NOT NULL DEFAULT '',
  `url5` varchar(200) NOT NULL DEFAULT '',
  `url6` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_carset` values('1','1fee0922b0a40db','微汽车','微汽车','tpl/User/default/common/car/car_title.jpg','','经销车型','销售顾问','在线预约','车主关怀','实用工具','车型欣赏','tpl/User/default/common/car/car_jx.jpg','tpl/User/default/common/car/car_yuyue.jpg','tpl/User/default/common/car/car_yuyue.jpg','tpl/User/default/common/car/carowner.png','tpl/User/default/common/car/tool-box-preferences.png','tpl/User/default/common/car/lanbo14.jpg','','','','','','');");

require("../../inc/footer.php");
?>