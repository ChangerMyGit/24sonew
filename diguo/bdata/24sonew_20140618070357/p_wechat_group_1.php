<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wechat_group`;");
E_C("CREATE TABLE `p_wechat_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `wechatgroupid` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(60) NOT NULL DEFAULT '',
  `intro` varchar(200) NOT NULL DEFAULT '',
  `token` varchar(30) NOT NULL DEFAULT '',
  `fanscount` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wechatgroupid` (`wechatgroupid`,`token`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_wechat_group` values('1','0','默认组','','a0bbb64eef61a16','406');");
E_D("replace into `p_wechat_group` values('2','1','屏蔽组','','a0bbb64eef61a16','5');");
E_D("replace into `p_wechat_group` values('3','2','星标组','','a0bbb64eef61a16','0');");
E_D("replace into `p_wechat_group` values('4','','1组','1组','tvjxcc1402290548','0');");

require("../../inc/footer.php");
?>