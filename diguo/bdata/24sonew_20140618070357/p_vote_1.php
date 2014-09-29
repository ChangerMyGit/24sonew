<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_vote`;");
E_C("CREATE TABLE `p_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `token` varchar(50) NOT NULL,
  `type` char(5) NOT NULL COMMENT 'text/img �ı�/ͼƬ',
  `picurl` varchar(500) NOT NULL,
  `showpic` tinyint(4) NOT NULL COMMENT '�Ƿ���ʾͼƬ',
  `info` varchar(500) NOT NULL COMMENT 'ͶƱ˵��',
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `display` tinyint(4) NOT NULL COMMENT '1ͶƱǰ0ͶƱ��2ͶƱ����',
  `cknums` tinyint(3) NOT NULL DEFAULT '1' COMMENT '����ѡ��Ĭ��1',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `keyword` (`keyword`),
  FULLTEXT KEY `token` (`token`),
  FULLTEXT KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_vote` values('1','24SO����õĻ','΢ͶƱ','1fee0922b0a40db','img','http://v.24so.com/tpl/static/attachment/icon/lovely/hand.png','1','ѡ������ϲ����24SO�����','1401897600','1433433600','0','2','1');");
E_D("replace into `p_vote` values('2','�й���һ��ΰ��Ĺ�����','ͶƱ','879c2f933017228','text','http://v.24so.com/uploads/8/879c2f933017228/f/3/8/c/thumb_539190719e30e.png','1','�й���һ��ΰ��Ĺ���������ô��������⣬���������̬�ȡ�','1405094400','1436544000','0','1','0');");
E_D("replace into `p_vote` values('3','�����ԭ�������Ϲ��ﻹ��ʵ�幺�','ͶƱ','tvjxcc1402290548','text','','1','����','1402329600','1433865600','0','1','0');");
E_D("replace into `p_vote` values('4','�����Ը�������Ϲ��ﻹ��Ը��ʵ�幺�','ͶƱ','tvjxcc1402290548','img','http://v.24so.com/uploads/t/tvjxcc1402290548/d/e/6/5/thumb_5396918e31ebd.jpg','0','ʵ���ĺô����ڣ����ü��������ţ�����ֱ�ۡ�����ĺô����ڣ����㣬ѡ���࣬�۸���ˡ�&amp;lt;br /&amp;gt;','1402329600','1433865600','0','1','0');");

require("../../inc/footer.php");
?>