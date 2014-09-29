<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_adma`;");
E_C("CREATE TABLE `p_adma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `url` varchar(100) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `info` varchar(120) NOT NULL,
  `title` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_adma` values('1','1','pigcms','http://demo.pigcms.cn/tpl/Home/new/common/images/ewm2.jpg','? 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','PigCms多用户微信营销系统');");
E_D("replace into `p_adma` values('2','2','879c2f933017228','http://v.24so.com/image/hgyj-ewm.jpg','? 2001-2013 24SO版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','24SO');");
E_D("replace into `p_adma` values('3','15','ainbtq1402292243','/tpl/Home/new/common/images/ewm2.jpg','? 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信微官网、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','微商企');");
E_D("replace into `p_adma` values('4','36','kcmjgr1402792677','http://v.24so.com/uploads/k/kcmjgr1402792677/5/4/7/d/thumb_539d0fd4ab14d.jpg','? 2001-2013 某某微信版权所有','微信营销管理平台为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信微官网、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。','易联商贸');");

require("../../inc/footer.php");
?>