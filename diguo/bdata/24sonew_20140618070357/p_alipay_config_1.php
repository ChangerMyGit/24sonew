<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_alipay_config`;");
E_C("CREATE TABLE `p_alipay_config` (
  `token` varchar(60) NOT NULL,
  `paytype` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(40) NOT NULL DEFAULT '',
  `pid` varchar(40) NOT NULL DEFAULT '',
  `key` varchar(200) NOT NULL DEFAULT '',
  `partnerkey` varchar(100) NOT NULL DEFAULT '',
  `appsecret` varchar(200) NOT NULL DEFAULT '',
  `appid` varchar(60) NOT NULL DEFAULT '',
  `paysignkey` varchar(200) NOT NULL DEFAULT '',
  `partnerid` varchar(200) NOT NULL DEFAULT '',
  `open` tinyint(1) NOT NULL DEFAULT '0',
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `p_alipay_config` values('cnjpqo1401935820','weixin','','','','','','','','','0');");
E_D("replace into `p_alipay_config` values('mhsqxc1401953951','alipay','','','','','','','','','0');");
E_D("replace into `p_alipay_config` values('oucryx1402886291','weixin','','','','','71db6e4549bd61eae5cd47351fa174f5','wx5e6beedfbd15c0b4','','','1');");

require("../../inc/footer.php");
?>