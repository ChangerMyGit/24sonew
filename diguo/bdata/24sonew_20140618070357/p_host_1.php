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
  `keyword` varchar(50) NOT NULL COMMENT '关键词',
  `title` varchar(50) NOT NULL COMMENT '商家名称',
  `address` varchar(50) NOT NULL COMMENT '商家地',
  `tel` varchar(13) NOT NULL COMMENT '商家电话',
  `tel2` varchar(13) NOT NULL COMMENT '手机号',
  `ppicurl` varchar(250) NOT NULL COMMENT '订房封面图片',
  `headpic` varchar(250) NOT NULL COMMENT '订单页头部图片',
  `name` varchar(50) NOT NULL COMMENT '文字描述',
  `sort` int(11) NOT NULL COMMENT '排序',
  `picurl` varchar(100) NOT NULL COMMENT '图片地址',
  `url` varchar(50) NOT NULL COMMENT '图片跳转地址以http',
  `info` text NOT NULL COMMENT '商家介绍：',
  `info2` text NOT NULL COMMENT '订房说明u',
  `creattime` int(11) NOT NULL COMMENT '创建日期',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_host` values('1','kcmjgr1402792677','KTV','童话KTV','','8805811','13333937359','http://v.24so.com/uploads/k/kcmjgr1402792677/6/f/b/d/thumb_539d0d434a40e.jpg','http://v.24so.com/uploads/k/kcmjgr1402792677/e/6/f/2/thumb_539d0d613222e.jpg','','0','http://v.24so.com/uploads/k/kcmjgr1402792677/3/1/a/3/thumb_539d0d7928a07.jpg','','123466789','157964854524524','1402801545');");

require("../../inc/footer.php");
?>