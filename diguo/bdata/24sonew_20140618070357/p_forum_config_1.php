<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_forum_config`;");
E_C("CREATE TABLE `p_forum_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgurl` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `comcheck` varchar(4) NOT NULL DEFAULT '',
  `intro` varchar(600) NOT NULL DEFAULT '',
  `ischeck` tinyint(4) NOT NULL DEFAULT '0',
  `pv` float NOT NULL DEFAULT '0',
  `forumname` char(60) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `isopen` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `p_forum_config` values('1','http://v.24so.com/uploads/1/1fee0922b0a40db/c/3/f/b/thumb_53901ba7c5aa5.jpg','http://v.24so.com/tpl/static/attachment/icon/lovely/open-letter.png','1','欢迎进入24SO论团','1','3','24SO官方粉丝社区','http://v.24so.com/uploads/1/1fee0922b0a40db/7/4/1/0/thumb_538fe9210a3f5.jpg','1fee0922b0a40db','1');");
E_D("replace into `p_forum_config` values('2','http://v.24so.com/uploads/1/1d36324a811c583/f/1/3/8/thumb_539083c533fc4.jpg','http://v.24so.com/uploads/1/1d36324a811c583/1/4/d/e/thumb_5390837b2578a.jpg','0','欢迎关注24搜长沙','0','1','24搜长沙官方粉丝社区','/tpl/Wap/default/common/images/forum/face.png','1d36324a811c583','1');");
E_D("replace into `p_forum_config` values('3','http://v.24so.com/uploads/8/879c2f933017228/8/a/f/8/thumb_53912cbe0b76a.png','http://v.24so.com/uploads/8/879c2f933017228/7/0/3/f/thumb_539129042def5.png','0','北京二十四搜科技有限公司（以下简称24so）是一家专业化微信电商运营体系开发运营商，于2013年微信宣布用户突破六亿当天成立，致力于帮助5000万商家、企业在微信上搭建专业化的移动电商体系，直接面对8亿微信消费者，实现活动宣传、产品展示及在线销售。\r\n','0','2','24搜技术支持官方粉丝社区','http://v.24so.com/uploads/8/879c2f933017228/5/3/1/8/thumb_5391293bb2e50.png','879c2f933017228','1');");

require("../../inc/footer.php");
?>