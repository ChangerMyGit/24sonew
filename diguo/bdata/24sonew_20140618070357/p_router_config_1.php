<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_router_config`;");
E_C("CREATE TABLE `p_router_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `info` varchar(300) NOT NULL DEFAULT '',
  `contact_qq` varchar(12) NOT NULL DEFAULT '',
  `welcome_img` varchar(200) NOT NULL DEFAULT '',
  `other_img` varchar(200) NOT NULL DEFAULT '',
  `token` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_router_config` values('1','我要上网','青岛鄂尔多斯大酒店欢迎您','https://mmbiz.qlogo.cn/mmbiz/iaec3KibdibIRNw6SuLfjQdEaq1tzqHMXgJvpjgmN2HylhtlDfPN4TPGdgxAdzMo5zDRKNGbcHiabJVHBD0WiatkUibQ/0','青岛鄂尔多斯大酒店，一家欧陆式建筑风格的庭院式五星级酒店,位于青岛市最优美的东海中路,与大海仅一路之隔,周边有雕塑园、海水浴场、奥帆中心、五四广场等著名景点。','1067036492','https://mmbiz.qlogo.cn/mmbiz/iaec3KibdibIRNw6SuLfjQdEaq1tzqHMXgJvpjgmN2HylhtlDfPN4TPGdgxAdzMo5zDRKNGbcHiabJVHBD0WiatkUibQ/0','https://mmbiz.qlogo.cn/mmbiz/iaec3KibdibIRNw6SuLfjQdEaq1tzqHMXgJvpjgmN2HylhtlDfPN4TPGdgxAdzMo5zDRKNGbcHiabJVHBD0WiatkUibQ/0','879c2f933017228');");
E_D("replace into `p_router_config` values('2','微路由','微路由','http://v.24so.com/tpl/static/attachment/icon/lovely/rocket.png','微路由','657446465','http://v.24so.com/tpl/static/attachment/icon/lovely/candy.png','http://v.24so.com/tpl/static/attachment/icon/lovely/paper-plane.png','1fee0922b0a40db');");

require("../../inc/footer.php");
?>