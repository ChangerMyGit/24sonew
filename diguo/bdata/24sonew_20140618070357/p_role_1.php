<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_role`;");
E_C("CREATE TABLE `p_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '��̨����',
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '��ID',
  `status` tinyint(1) unsigned DEFAULT '0' COMMENT '�Ƿ񼤻� 1���� 0����',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '����Ȩ��',
  `remark` varchar(255) DEFAULT NULL COMMENT '��ע˵��',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `p_role` values('5','��������Ա','0','1','0','');");
E_D("replace into `p_role` values('6','��ʾ��','0','1','0','');");
E_D("replace into `p_role` values('9','��ͨ��Ա','0','1','0','');");

require("../../inc/footer.php");
?>