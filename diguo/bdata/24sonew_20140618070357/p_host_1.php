<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_host`;");
E_C("CREATE TABLE `p_host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL COMMENT '�ؼ���',
  `title` varchar(50) NOT NULL COMMENT '�̼�����',
  `address` varchar(50) NOT NULL COMMENT '�̼ҵ�',
  `tel` varchar(13) NOT NULL COMMENT '�̼ҵ绰',
  `tel2` varchar(13) NOT NULL COMMENT '�ֻ���',
  `ppicurl` varchar(250) NOT NULL COMMENT '��������ͼƬ',
  `headpic` varchar(250) NOT NULL COMMENT '����ҳͷ��ͼƬ',
  `name` varchar(50) NOT NULL COMMENT '��������',
  `sort` int(11) NOT NULL COMMENT '����',
  `picurl` varchar(100) NOT NULL COMMENT 'ͼƬ��ַ',
  `url` varchar(50) NOT NULL COMMENT 'ͼƬ��ת��ַ��http',
  `info` text NOT NULL COMMENT '�̼ҽ��ܣ�',
  `info2` text NOT NULL COMMENT '����˵��u',
  `creattime` int(11) NOT NULL COMMENT '��������',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_host` values('1','kcmjgr1402792677','KTV','ͯ��KTV','','8805811','13333937359','http://v.24so.com/uploads/k/kcmjgr1402792677/6/f/b/d/thumb_539d0d434a40e.jpg','http://v.24so.com/uploads/k/kcmjgr1402792677/e/6/f/2/thumb_539d0d613222e.jpg','','0','http://v.24so.com/uploads/k/kcmjgr1402792677/3/1/a/3/thumb_539d0d7928a07.jpg','','123466789','157964854524524','1402801545');");

require("../../inc/footer.php");
?>