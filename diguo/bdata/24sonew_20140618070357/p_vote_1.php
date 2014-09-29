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
  `type` char(5) NOT NULL COMMENT 'text/img 文本/图片',
  `picurl` varchar(500) NOT NULL,
  `showpic` tinyint(4) NOT NULL COMMENT '是否显示图片',
  `info` varchar(500) NOT NULL COMMENT '投票说明',
  `statdate` int(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `display` tinyint(4) NOT NULL COMMENT '1投票前0投票后2投票结束',
  `cknums` tinyint(3) NOT NULL DEFAULT '1' COMMENT '最多可选择，默认1',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `keyword` (`keyword`),
  FULLTEXT KEY `token` (`token`),
  FULLTEXT KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_vote` values('1','24SO最好用的活动','微投票','1fee0922b0a40db','img','http://v.24so.com/tpl/static/attachment/icon/lovely/hand.png','1','选出您最喜欢的24SO活动工具','1401897600','1433433600','0','2','1');");
E_D("replace into `p_vote` values('2','中国是一个伟大的国家吗','投票','879c2f933017228','text','http://v.24so.com/uploads/8/879c2f933017228/f/3/8/c/thumb_539190719e30e.png','1','中国是一个伟大的国家吗，你怎么看这个问题，请标明您的态度。','1405094400','1436544000','0','1','0');");
E_D("replace into `p_vote` values('3','如今您原意在网上购物还是实体购物？','投票','tvjxcc1402290548','text','','1','调查','1402329600','1433865600','0','1','0');");
E_D("replace into `p_vote` values('4','如今您愿意在网上购物还是愿意实体购物？','投票','tvjxcc1402290548','img','http://v.24so.com/uploads/t/tvjxcc1402290548/d/e/6/5/thumb_5396918e31ebd.jpg','0','实体店的好处在于：看得见，摸得着，更加直观。网店的好处在于：方便，选择多多，价格便宜。&amp;lt;br /&amp;gt;','1402329600','1433865600','0','1','0');");

require("../../inc/footer.php");
?>