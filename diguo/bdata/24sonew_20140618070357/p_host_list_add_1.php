<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_host_list_add`;");
E_C("CREATE TABLE `p_host_list_add` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hid` int(11) NOT NULL COMMENT '�̼�id',
  `token` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT '��������',
  `typeinfo` varchar(100) NOT NULL COMMENT '��Ҫ˵��',
  `price` decimal(10,2) NOT NULL COMMENT 'ԭ�ۣ�',
  `yhprice` decimal(10,2) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '��������',
  `picurl` varchar(110) NOT NULL COMMENT 'ͼƬ��ַ',
  `url` varchar(100) NOT NULL COMMENT 'ͼƬ��ת��ַ��http',
  `info` text NOT NULL COMMENT '������ʩ',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>