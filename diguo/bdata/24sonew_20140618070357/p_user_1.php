<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_user`;");
E_C("CREATE TABLE `p_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `role` smallint(6) unsigned NOT NULL COMMENT '��ID',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '״̬ 1:���� 0:��ֹ',
  `remark` varchar(255) DEFAULT NULL COMMENT '��ע˵��',
  `last_login_time` int(11) unsigned NOT NULL COMMENT '����¼ʱ��',
  `last_login_ip` varchar(15) DEFAULT NULL COMMENT '����¼IP',
  `last_location` varchar(100) DEFAULT NULL COMMENT '����¼λ��',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_user` values('1','admin','dd0f7baf437e0ee2083dab42f8708e88','5','1','','1403073941','182.40.142.41','');");

require("../../inc/footer.php");
?>