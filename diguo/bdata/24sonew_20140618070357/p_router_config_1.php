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
E_D("replace into `p_router_config` values('1','��Ҫ����','�ൺ������˹��Ƶ껶ӭ��','https://mmbiz.qlogo.cn/mmbiz/iaec3KibdibIRNw6SuLfjQdEaq1tzqHMXgJvpjgmN2HylhtlDfPN4TPGdgxAdzMo5zDRKNGbcHiabJVHBD0WiatkUibQ/0','�ൺ������˹��Ƶ꣬һ��ŷ½ʽ��������ͥԺʽ���Ǽ��Ƶ�,λ���ൺ���������Ķ�����·,��󺣽�һ·֮��,�ܱ��е���԰����ˮԡ�����·����ġ����Ĺ㳡���������㡣','1067036492','https://mmbiz.qlogo.cn/mmbiz/iaec3KibdibIRNw6SuLfjQdEaq1tzqHMXgJvpjgmN2HylhtlDfPN4TPGdgxAdzMo5zDRKNGbcHiabJVHBD0WiatkUibQ/0','https://mmbiz.qlogo.cn/mmbiz/iaec3KibdibIRNw6SuLfjQdEaq1tzqHMXgJvpjgmN2HylhtlDfPN4TPGdgxAdzMo5zDRKNGbcHiabJVHBD0WiatkUibQ/0','879c2f933017228');");
E_D("replace into `p_router_config` values('2','΢·��','΢·��','http://v.24so.com/tpl/static/attachment/icon/lovely/rocket.png','΢·��','657446465','http://v.24so.com/tpl/static/attachment/icon/lovely/candy.png','http://v.24so.com/tpl/static/attachment/icon/lovely/paper-plane.png','1fee0922b0a40db');");

require("../../inc/footer.php");
?>